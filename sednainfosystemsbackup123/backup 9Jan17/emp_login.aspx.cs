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

public partial class emp_login : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void lnkforgotpass_Click(object sender, EventArgs e)
    {
        Response.Redirect("Forgotpass.aspx?value=1");
    }
    OleDbConnection con = new OleDbConnection();
    public void connect()
    {
        //String db_path = Server.MapPath("sednadb.mdb");
        //con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source='" + db_path + "'");
        con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source=|DataDirectory|sednadb.mdb");
    }
    string empid,empname;
    protected void brnsubmit_Click(object sender, EventArgs e)         //code to check username and password of user
    {
        try
        {
            OleDbDataReader reader;
            connect();
            con.Open();
            string sqlquery = "select emp_name,emp_id,usernm,password from empregi where usernm='" + txtusernm.Text + "' and password ='" + txtpass.Text + "' ";
            OleDbCommand com = new OleDbCommand(sqlquery, con);
            reader = com.ExecuteReader();
            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    empname = reader[0].ToString();
                    empid = reader[1].ToString();
                    Session["EmpId"] =empid ;
                    Session["empname"] = empname;
                    Response.Redirect("Employee_home.aspx");
                }
            }
            lblmsg.Text = "The username or password you entered is incorrect.";
            txtpass.Focus();
            con.Close();
            reader.Close();
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }
}
