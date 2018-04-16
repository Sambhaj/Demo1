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

public partial class changepassword : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    functions fobj = new functions();
    protected void btnlogin_Click(object sender, EventArgs e)
    {
        if (txtnewpassword.Text != "" || txtoldpassword.Text != "" || txtusername.Text != "" || txtconfirmpassword.Text != "")
        {
            if (txtconfirmpassword.Text == txtnewpassword.Text)
            {
                string yes = fobj.chkusername("select username from login where username='" + txtusername.Text + "' and password='" + txtoldpassword.Text + "'", txtusername.Text);
                if (yes == "no")
                {
                    lblmsg.Text = fobj.insdta("update login set [password]='" + txtnewpassword.Text + "' where [username]='" + txtusername.Text + "' and [password]='" + txtoldpassword.Text + "'");
                    Response.Write("<script LANGUAGE='JavaScript' >alert('Password changed successfully');</script>");
                    // Response.Redirect("frmadminpanel.aspx");
                    Response.Write("<script LANGUAGE='JavaScript' >window.location='usb_profile.aspx';</script>");
                }
                else
                {
                    lblmsg.Text = "User not found please try again";
                    Response.Write("<script LANGUAGE='JavaScript' >alert('" + lblmsg.Text + "');</script>");
                }

            }
            else
            {
                lblmsg.Text = "New password and confirm password should be same";
            }
        }
        else
        {
            lblmsg.Text = "Please enter all the fields";
        }
    }
}
