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
public partial class customer_pay_account : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            txt_balance.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt_amt.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt_tot_amt.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
          
           // txt_amt.Attributes.Add("onblur", "calc()");
          //  txt_tot_amt.Attributes.Add("onblur", "calc()");
            getevnm();
            getempnm();
           
        }
    }
    int a;
    protected void ddl_evnm_click(object sender, EventArgs e)
    {
        txt_amt.Text = "";
        txt_balance.Text = "";
        txt_date.Text = "";
        txt_paidby.Text = "";
        txt_remark.Text = "";
        txt_tot_amt.Text = "";
        ddl_takenby.Text = "Select";

        if (ddl_evnm.Text != "Select")
        {
            DataSet ds = new DataSet();
            // lbldt.Text = fobj.getevdate(ddl_evnm.Text);
            ds = fobj.getevnm1("Select Format(event_date,'Medium Date'),total_amt,advance from customer where event_name='" + ddl_evnm.Text + "'");
            lbldt.Text = ds.Tables[0].Rows[0][0].ToString();
            txt_tot_amt.Text = ds.Tables[0].Rows[0][1].ToString();
            int adv = Convert.ToInt32(ds.Tables[0].Rows[0][2].ToString());
            ds = fobj.getevnm1("select sum(pay_amount) from customer_pay_account where evnm='" + ddl_evnm.Text + "'");
            string val = ds.Tables[0].Rows[0][0].ToString();
            if (val != "")
            {
                a = Convert.ToInt32(val);
            }
            else
            {
                a = 0;
            }
            int bal = Convert.ToInt32(txt_tot_amt.Text) - (adv + a);
            txt_balance.Text = bal.ToString();
        }
    }
    public void getevnm()
    {
        try
        {
        string qr = "select event_name from customer";
        DataSet ds = fobj.getevnm1(qr);
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            for (int i = 0; i < a; i++)
            {
                string ab = ds.Tables[0].Rows[i][0].ToString();
                ddl_evnm.Items.Add(ab);
            }
        }
    }
    catch (Exception ex)
    {
        lblmsg.Text = ex.Message;
    }
    }
    public void getempnm()
    {
        try
        {
        string qr = "select emp_name from employee_detail";
        DataSet ds = fobj.getevnm1(qr);
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            for (int i = 0; i < a; i++)
            {
                string ab = ds.Tables[0].Rows[i][0].ToString();
                ddl_takenby.Items.Add(ab);
            }
        }
    }
    catch (Exception ex)
    {
        lblmsg.Text = ex.Message;
    }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        try
        {
            if (ddl_evnm.Text != "Select")
            {
                if (ddl_takenby.Text != "Select")
                {
                    if(Convert.ToInt32(txt_amt.Text) <= Convert.ToInt32(txt_balance.Text))
                    {

                    fobj.connect();
                    int bal = Convert.ToInt32(txt_balance.Text) - Convert.ToInt32(txt_amt.Text);
                    string qr = "insert into customer_pay_account values('" + ddl_evnm.Text + "','" + txt_date.Text + "'," + txt_amt.Text + "," + txt_tot_amt.Text + "," + bal.ToString() +",'" + txt_paidby.Text + "','" + txt_remark.Text + "','" + ddl_takenby.Text + "')";
                    OleDbCommand com = new OleDbCommand(qr, functions.con);
                    com.ExecuteNonQuery();
                    fobj.disconnect();
                    lblmsg.Text = "Registered Successfully";
                    Response.Redirect("usb_profile.aspx");
                    }
                    else
                    {
                    lblmsg.Text="Pay amount should not greater than Balance";
                    txt_amt.Text = "";
                    }
                }
                else
                {
                    lblmsg.Text = "Please select Taken By";
                }
            }
            else
            {
                lblmsg.Text = "Please select Event name";
            }
    }
    catch (Exception ex)
    {
        lblmsg.Text = ex.Message;
    }
    }
}
