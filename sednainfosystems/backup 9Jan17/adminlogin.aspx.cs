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

public partial class adminlogin : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    functions fobj = new functions();
    string usrnm,psw;
    protected void brnsubmit_Click(object sender, EventArgs e)         //code to check username and password of user
    {
        try
        {
            OleDbDataReader reader;
            fobj.connect();
            string sqlquery = "select usernm,password from admin where usernm='" + txtusernm.Text + "' and password ='" + txtpass.Text + "' ";
            OleDbCommand com = new OleDbCommand(sqlquery,functions.con);
            reader = com.ExecuteReader();
            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    usrnm = reader[0].ToString();
                    psw = reader[1].ToString();
                    Session["usernm"] =usrnm;
                    Session["password"] = psw;
                    Response.Redirect("admin_home.aspx");
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
    protected void lnkforgotpass_Click(object sender, EventArgs e)
    {
        Response.Redirect("Forgotpass.aspx?value=2");
    }
}
