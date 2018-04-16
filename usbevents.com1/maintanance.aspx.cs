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
public partial class office_expenses : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            sqlquery = "select max(voucher_no) from maintanance_acc";
            txt_voucher_no.Text = Convert.ToString(fobj.getno(sqlquery));
            txt_amt.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            getempnm();
        }
    }
    string sqlquery;
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        try
        {
            if (txt_paydetail.Text != "Select")
            {
                fobj.connect();
                sqlquery = "select max(voucher_no) from office_expenses";
                txt_voucher_no.Text = Convert.ToString(fobj.getno(sqlquery));
                string qr = "insert into maintanance_acc values('" + txt_voucher_no.Text + "','" + txt_name.Text + "','" + txt_date.Text + "','" + txt_amt.Text + "','" + txt_paydetail.Text + "','" + ddl_paidby.Text + "','" + txt_takenby.Text + "')";
                OleDbCommand com = new OleDbCommand(qr, functions.con);
                com.ExecuteNonQuery();
                fobj.disconnect();
                ddl_paidby.Text = "Select";
                txt_voucher_no.Text = "";
                txt_paydetail.Text = "";
                txt_name.Text = "";
                txt_amt.Text = "";
                txt_takenby.Text = "";
                txt_date.Text = "";
                lblmsg.Text = "Submitted Successfully";
                Response.Redirect("usb_profile.aspx");

            }
            else
            {
                lblmsg.Text = "Please Select paid by";
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
                ddl_paidby.Items.Add(ab);
            }
        }
    }
    catch (Exception ex)
    {
        lblmsg.Text = ex.Message;
    }
    }
}
