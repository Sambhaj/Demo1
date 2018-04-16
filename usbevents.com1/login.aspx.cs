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

public partial class login : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    functions fobj = new functions();
    protected void brnsubmit_Click(object sender, EventArgs e)         //code to check username and password of user
    {
        try
        {
            string usrnm;
            OleDbDataReader reader;
            fobj.connect();
            string sqlquery = "select username,password from login where username='" + txtusernm.Text + "' and password='" + txtpass.Text + "'";
            OleDbCommand com = new OleDbCommand(sqlquery, functions.con);
            reader = com.ExecuteReader();
            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    usrnm = reader[0].ToString();
                    Session["usernm"] = usrnm;
                    Response.Redirect("usb_profile.aspx");
                }
            }
            lblmsg.Text = "The username or password you entered is incorrect.";
            txtpass.Focus();
            fobj.disconnect();
            reader.Close();
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }
}
