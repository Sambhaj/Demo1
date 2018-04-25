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
public partial class adm_changpass : System.Web.UI.Page
{
    functions fobj = new functions();
    string username, password;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["usernm"] != null && Session["password"] != null)
        {        
            username = Session["usernm"].ToString();
            password = Session["password"].ToString();
        }        
    }
    protected void btnsubmit_click(object sender, EventArgs e)
    {
        try
        {
            lblmsg.Text = "";
            if (txtconfpass.Text != "" && txtnewpass.Text != "" && txtoldpss.Text != "")
            {
                if (txtnewpass.Text == txtconfpass.Text)
                {
                    username = Session["usernm"].ToString();
                    password = Session["password"].ToString();
                    fobj.connect();
                    string qr = "Update admin set [password]='" + txtnewpass.Text + "' where [password]='" + password + "' and [usernm]='" + username + "'";
                    OleDbCommand com = new OleDbCommand(qr, functions.con);
                    com.ExecuteNonQuery();
                    Session.Remove("password");
                    Session["password"] = txtnewpass.Text;
                    fobj.disconnect();
                }
                else
                {
                    lblmsg.Text = "New password and confirm password should be same";
                }
            }
            else
            {
                lblmsg.Text = "Enter all fields";
            }
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }
}
