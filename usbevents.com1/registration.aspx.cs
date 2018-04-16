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

public partial class registration : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            txt_email.Attributes.Add("onblur", "emailval()");
            txt_mobno.Attributes.Add("onblur", "mobval()");
            txtconfirmpass.Attributes.Add("onblur", "chk()");
        }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        string sqlquery = "select username from login where username='" + txt_username.Text + "'";
        string a = fobj.chkusernm(sqlquery);
        if (a == "yes")
        {
            lblunm.Text = "Not Available";
            txt_username.Text = "";
        }
        else
        {
        fobj.connect();
        string qr = "insert into login values('" + txt_name.Text + "','" + txt_username.Text + "','" + txt_password.Text + "','" + txt_mobno.Text + "','" + txt_email.Text + "','" + ddl_utype.Text + "')";
        OleDbCommand com = new System.Data.OleDb.OleDbCommand(qr, functions.con);
        com.ExecuteNonQuery();
        fobj.disconnect();
        txt_email.Text = "";
        txt_mobno.Text = "";
        txt_name.Text = "";
        txt_password.Text = "";
        txt_username.Text = "";
        ddl_utype.Text = "Select";
        lblmsg.Text = "Registered Successfully";
        lblunm.Text = "";
        }
       
    }
    protected void lnkchk_Click(object sender, EventArgs e)
    {
        if (txt_username.Text != "")
        {
            string sqlquery = "select username from login where username='" + txt_username.Text + "'";
            string a = fobj.chkusernm(sqlquery);
            if (a == "yes")
            {
                lblunm.Text = "Not Available";
                txt_username.Text = "";
                MsgBox("Not available please enter new username");
            }
            else
            {
                lblunm.Text = "Available";
            }
        }
        else
        {
            MsgBox("Please enter username");
        }
    }
    private void MsgBox(string msg)
    {
        string str1 = "<script language='javascript'>";
        str1 = str1 + "alert('" + msg + "' )";
        str1 = str1 + "</script>";
        RegisterStartupScript("ds", str1);
    }
}
