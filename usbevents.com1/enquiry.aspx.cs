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

public partial class enquiry : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        txtmobno.Attributes.Add("onblur", "mobval()");
        txtemail.Attributes.Add("onblur", "emailvalidate()");
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
        if (txtemail.Text != "" && txtmobno.Text != "" && txtmsg.Text != "" && txtname.Text != "" && txtstate.Text != "")
        {
            string str = "Enquiry mail:" + System.Environment.NewLine + "  Date: " + "" + System.DateTime.Today.ToString() + "" + System.Environment.NewLine + "  Name: " + "" + txtname.Text + "" + System.Environment.NewLine + "  Mobile: " + "" + txtmobno.Text + "" + System.Environment.NewLine + "  Email: " + "" + txtemail.Text + "" + System.Environment.NewLine + " Message: " + "" + txtmsg.Text + "" + System.Environment.NewLine + "  State: " + "" + txtstate.Text + "" + System.Environment.NewLine + "Thanks," + System.Environment.NewLine + "WebAdmin-SEDNA";

            string from = "info@usbevents.co.in";
            string to = "shakti@usbevents.co.in";//txtemail.Text;
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
}
