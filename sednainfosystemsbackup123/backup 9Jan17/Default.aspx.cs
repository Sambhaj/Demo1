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
using System.Globalization;
using System.Collections.Generic;
using System.Web.Mail;


public partial class _Default : System.Web.UI.Page 
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    private void MsgBox(string msg)
    {
        DataSet ds1 = new DataSet();
        string str1 = "<script language='javascript'>";
        str1 = str1 + "alert('" + msg + "' )";
        str1 = str1 + "</script>";
        RegisterStartupScript("ds1", str1);
    }
    protected void submit_Click(object sender, EventArgs e)
    {
        //START: code to send email
        if (txtemail.Text != "" && txtmobno.Text != "" && txtmsg.Text != "" && txtname.Text != "" && txtstate.Text != "" && txtemail.Text != "E-mail Id:" && txtmobno.Text != "Contact No:" && txtmsg.Text != "Your Message" && txtname.Text != "Name" && txtstate.Text != "City/State:")
        {
            string sIPAddress = null;
            sIPAddress = Request.ServerVariables["HTTP_X_FORWARDED_FOR"];
            if (string.IsNullOrEmpty(sIPAddress))
                sIPAddress = Request.ServerVariables["REMOTE_ADDR"];

            string str = "Enquiry mail:" + System.Environment.NewLine + "  Date: " + "" + System.DateTime.Today.ToString() + "" + System.Environment.NewLine + "  Name: " + "" + txtname.Text + "" + System.Environment.NewLine + "  Mobile: " + "" + txtmobno.Text + "" + System.Environment.NewLine + "  Email: " + "" + txtemail.Text + "" + System.Environment.NewLine + " Message: " + "" + txtmsg.Text + "" + System.Environment.NewLine + "  State: " + "" + txtstate.Text + "" +  System.Environment.NewLine + "Client IP Address : " +  sIPAddress +  System.Environment.NewLine + "Thanks," + System.Environment.NewLine + "WebAdmin-SEDNA";

            string from = "info@sednainfosystems.com";
            string to = "asksedna@gmail.com";//txtemail.Text;
            string subject = "Inquiry Counter - Website";
            string body = str;
            SmtpMail.SmtpServer = "relay-hosting.secureserver.net";
            SmtpMail.Send(from, to, subject, body);
            //END: code to send email
            txtname.Text = "";
            txtmobno.Text = "";
            txtemail.Text = "";
            txtmsg.Text = "";
            txtstate.Text = "";
            MsgBox("Thank You! We will contact you soon.");
        }
        else
        {
            MsgBox("All fields are mandatory");
        }
    }
    protected void lnkforgotpass_Click(object sender, EventArgs e)
    {
        Response.Redirect("Forgotpass.aspx");
    }
    OleDbConnection con = new OleDbConnection();
    public void connect()
    {
        //String db_path = Server.MapPath("sednadb.mdb");
        //con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source='" + db_path + "'");
        con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source=|DataDirectory|sednadb.mdb");
    }
    string empid, empname;
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
                    Session["EmpId"] = empid;
                    Session["empname"] = empname;
                    Response.Redirect("Employee_home.aspx");
                }
            }
            lblmsg.Text = "The username or password is incorrect.";
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
