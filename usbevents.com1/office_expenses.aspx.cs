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
            sqlquery = "select max(voucher_no) from office_expenses";
            txt_voucher_no.Text = Convert.ToString(fobj.getno(sqlquery));
            txt_amt.Attributes.Add("onblur", "chknm()");
            ddldate.Attributes.Add("onblur", "checkdate()");
            ddlyear.Attributes.Add("onblur", "checkdate()");
            ddlmonth.Attributes.Add("onblur", "checkdate()");
        }
    }
    string sqlquery;
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        fobj.connect();
        sqlquery = "select max(voucher_no) from office_expenses";
        txt_voucher_no.Text = Convert.ToString(fobj.getno(sqlquery));
        string ev_date = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;
        string qr = "insert into office_expenses values('" + txt_voucher_no.Text + "','" + txt_name.Text + "','" + ev_date + "','" + txt_amt.Text + "','" + txt_detail.Text + "','" + txt_paydetail.Text + "','" + txt_writtenby.Text + "')";
        OleDbCommand com = new OleDbCommand(qr, functions.con);
        com.ExecuteNonQuery();
        fobj.disconnect();
        txt_writtenby.Text = "";
        txt_voucher_no.Text = "";
        txt_paydetail.Text = "";
        txt_name.Text = "";
        txt_detail.Text = "";
        txt_amt.Text = "";
        ddldate.Text = "Date";
        ddlmonth.Text = "Month";
        ddlyear.Text = "Year";
        lblmsg.Text = "Registered Successfully";
    }
}
