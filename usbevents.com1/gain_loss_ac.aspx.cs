using System;
using System.Data;
using System.Configuration;
using System.Collections;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Data.OleDb;

public partial class profit_credit : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            txt_eventcost.Attributes.Add("onblur", "calc()");
            txt_evntexp.Attributes.Add("onblur", "chknm()");            
            getnm();
        }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        try
        {
        fobj.connect();
        string qr = "insert into profit_credit values('" + ddleventname.Text + "','" + txt_evntexp.Text + "','" + txt_eventcost.Text + "','" + txt_profloss.Text + "')";
        OleDbCommand com = new OleDbCommand(qr, functions.con);
        com.ExecuteNonQuery();
        fobj.disconnect();
        txt_eventcost.Text = "";
        txt_evntexp.Text = "";
        txt_profloss.Text = "";
        ddleventname.Text = "Select";
        lblmsg.Text = "Submitted Successfully";
    }
    catch (Exception ex)
    {
        lblmsg.Text = ex.Message;
    }
    }
    protected void ddlperson_nm_changed(object sender, EventArgs e)
    {
        
        try
        {
            gv_credit.Visible = false;
            lblmsg.Text = "";
            txt_evntexp.Text = "";
            txt_eventcost.Text = "";
            txt_profloss.Text = "";
            lblevdt.Text = "";
            lbltitl.Text = "";

            if (ddleventname.Text != "Select")
            {
               
                DataSet ds = new DataSet();
                ds = fobj.getevnm1("select total_amt,Format(event_date,'Medium Date') from customer where event_name='" + ddleventname.Text + "'");
                txt_eventcost.Text = ds.Tables[0].Rows[0][0].ToString();
                lblevdt.Text = ds.Tables[0].Rows[0][1].ToString();

                string adv = fobj.getvalue("select sum(advance) from co_ordinator_manage where event_name='" + ddleventname.Text + "'");
                string amtpaid = fobj.getvalue("select sum(pay_amount) from vendor_expenses_account where event_name='" + ddleventname.Text + "'");
                if (adv == "")
                {
                    adv = "0";
                }
                if (amtpaid == "")
                {
                    amtpaid = "0";
                }
                int tot = Convert.ToInt32(adv) + Convert.ToInt32(amtpaid);
                txt_evntexp.Text = tot.ToString();
                
                
                
                
                
                if (txt_evntexp.Text != "")
                {
                    int a = Convert.ToInt32(txt_eventcost.Text) - Convert.ToInt32(txt_evntexp.Text);
                    txt_profloss.Text = a.ToString();                   
                }



                DataSet dss = new DataSet();
                dss = fobj.getevnm1("select Format(ce.expenses_date,'Medium Date') as [expdate],ce.remark as [remark],ce.paid_by as [paidby],CInt(ce.pay_amount) as [payamt],ce.vendor_name as [vendornm] from vendor_expenses_account as ce inner join customer as c on ce.event_name=c.event_name where ce.event_name='" + ddleventname.Text + "'");
                DataSet ds1 = fobj.getevnm1("select Format(ce.vm_date,'Medium Date') as [expdate],ce.description as [remark],ce.paid_by as [paidby],CInt(ce.advance) as [payamt],ce.vendor_name as [vendornm] from co_ordinator_manage as ce inner join customer as c on ce.event_name=c.event_name where ce.event_name='" + ddleventname.Text + "'");
                dss.Tables[0].Merge(ds1.Tables[0]);
                int b = dss.Tables[0].Rows.Count;
                DataView dv = new DataView();
                dv = dss.Tables[0].DefaultView;
                dv.Sort = "expdate ASC";
                if (b != 0)
                {
                    gv_credit.DataSource = dv;
                    gv_credit.DataBind();
                    gv_credit.Visible = true;
                    lbltitl.Text = "Expenses for Event " + ddleventname.Text;
                }
                else
                {
                    gv_credit.Visible = false;
                    lblmsg.Text = "No record found";
                    lbltitl.Text = "";
                }
                //gv_credit.DataSource = fobj.getevnm1("select Format(expenses_date,'Medium Date'),pay_amount,paid_by,remark,vendor_name from vendor_expenses_account where event_name='" + ddleventname.Text + "'");
                //gv_credit.DataBind();
                //gv_credit.Visible = true;
            }
    }
    catch (Exception ex)
    {
        lblmsg.Text = ex.Message;
    }


    }
   



    string usrnm;
    public void getnm()
    {
        try
        {
            OleDbDataReader reader;
            fobj.connect();
            string sqlquery = "select event_name from customer";
            OleDbCommand com = new OleDbCommand(sqlquery, functions.con);
            reader = com.ExecuteReader();

            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    usrnm = reader[0].ToString();
                    ddleventname.Items.Add(usrnm);
                }
            }
            fobj.disconnect();
            reader.Close();
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }

}
