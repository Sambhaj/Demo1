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

public partial class customer_expenses_account : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            txt_mobno.Attributes.Add("onblur", "mobval()");
            txt_balance.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt_amt.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt_tot_amt.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt_amt.Attributes.Add("onblur", "calc()");
            txt_tot_amt.Attributes.Add("onblur", "calc()");
            getevnm();
            getempnm();
            getcordinator();
        }
    }
    protected void ddl_evnm_click(object sender, EventArgs e)
    {
        lbldt.Text = fobj.getevdate(ddl_evnm.Text);
    }
    protected void lnkco_click(object sender, EventArgs e)
    {
        pn1.Visible = true;
    }
    public void getevnm()
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
    public void getempnm()
    {
        string qr = "select emp_name from employee_detail";
        DataSet ds = fobj.getevnm1(qr);
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            for (int i = 0; i < a; i++)
            {
                string ab = ds.Tables[0].Rows[i][0].ToString();
               ddl_madeby.Items.Add(ab);
            }
        }
    }
    public void getcordinator()
    {
        string qr = "select co_name from co_ordinator";
        DataSet ds = fobj.getevnm1(qr);
        ddl_conm.DataSource = ds;
        ddl_conm.DataTextField = "co_name";
        ddl_conm.DataBind();
        int a = ds.Tables[0].Rows.Count;
        //if (a != 0)
        //{
        //    for (int i = 0; i < a; i++)
        //    {
        //        string ab = ds.Tables[0].Rows[i][0].ToString();
        //        ddl_conm.Items.Add(ab);
        //    }
        //}
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        fobj.connect();
        string qr = "insert into customer_expenses_account values('" + ddl_evnm.Text + "','" + txt_date.Text + "','" + txt_expense_desc.Text + "','" + ddl_madeby.Text + "','" + txt_amt.Text + "','" + txt_tot_amt.Text + "','" + txt_balance.Text + "','" + ddl_conm.Text + "')";
        OleDbCommand com = new OleDbCommand(qr, functions.con);
        com.ExecuteNonQuery();
        fobj.disconnect();
        txt_balance.Text = "";
        txt_tot_amt.Text = "";
        txt_amt.Text = "";
        txt_date.Text = "";
        ddl_evnm.Text = "Select";
        txt_expense_desc.Text = "";
        ddl_madeby.Text = "Select";
        ddl_conm.Text = "Select";
        lblmsg.Text = "Registered Successfully";
    }
    protected void btnsubmit_Click1(object sender, EventArgs e)
    {
        fobj.connect();
        string qr = "insert into co_ordinator values('" + txt_nm.Text + "','" + txt_address.Text + "','" + txt_specilities.Text + "','" + txt_costdesc.Text + "','" + txt_mobno.Text + "')";
        OleDbCommand com = new OleDbCommand(qr, functions.con);
        com.ExecuteNonQuery();
        fobj.disconnect();
        txt_address.Text = "";
        txt_costdesc.Text = "";
        txt_nm.Text = "";
        txt_specilities.Text = "";
        txt_mobno.Text = "";
        lblmsg1.Text = "Submitted Successfully";
        pn1.Visible = false;
        getcordinator();
    }
}
