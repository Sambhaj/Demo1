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
using System.IO;
using System.Data.OleDb;
using System.Net.Mail;
using System.Globalization;
using System.Collections.Generic;
using System.Web.Mail;




public partial class career : System.Web.UI.Page
{
    string qr;
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        Label2.Visible = false;
        Label3.Visible = false;
      
        getno();
        txtemail.Attributes.Add("onblur", "emailval()");       //email validation 
        txtcontact.Attributes.Add("onblur", "mobval()");         //mobile no validation
       
    }
   
    int id;
    public void getno()    //function get id
    {
        try
        {
            OleDbDataReader reader;
            connect();
            con.Open();
            string sqlquery = "select uid from tbcareer";
            OleDbCommand com = new OleDbCommand(sqlquery, con);
            reader = com.ExecuteReader();

            if (reader.HasRows)
            {
               

                while (reader.Read())
                {
                   
                    
                        // if(reader[0].ToString()==null)
                        id = int.Parse(reader[0].ToString());
                        id++;
                }
            }
            else
            {
                id = 1;

            }

            con.Close();
            reader.Close();
            lblid.Text = id.ToString();
        }
        catch (Exception ex)
        {
            lblid.Text = "1";
        }
    }
    OleDbConnection con = new OleDbConnection();
    public void connect()
    {
        con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source=|DataDirectory|sednadb.mdb");
    }
    #region Code to Check Refresh postback
    #region Private Variable
    private int SessionValue
    {
        get
        {
            int value = default(int);
            if (int.TryParse(Convert.ToString(this.Session["__REFRESH"]), out value))
                return value;

            return 0;
        }
        set
        {
            this.Session["__REFRESH"] = value;
        }
    }

    private int ViewStateValue
    {
        get
        {
            int value = default(int);
            if (int.TryParse(Convert.ToString(this.ViewState["__REFRESH"]), out value))
                return value;

            return 0;
        }
        set
        {
            this.ViewState["__REFRESH"] = value;
        }
    }
    #endregion

    #region Public Property
    public bool IsPageRefreshed
    {
        get
        {
            return this.SessionValue != this.ViewStateValue;
        }
    }
    #endregion

    protected override object SaveViewState()
    {
        //Increment both the session and view state value at the same time.
        this.SessionValue = this.SessionValue == int.MaxValue ? 0 : this.SessionValue + 1;
        this.ViewStateValue = this.SessionValue == int.MaxValue ? 0 : this.SessionValue + 1;
        return base.SaveViewState();
    }
    #endregion

    protected void btnsubmit_click(object sender, EventArgs e)
    {

        Label2.Text = "Career Enquiry Mail:";
        Label3.Text = "Hi,Please check this mail which is from Careers of www.sednainfosystems.com";
         try
         {
             if (txtusername.Text != "" && txtcontact.Text != "" && txtemail.Text != "" && txtapplying.Text != "")
             {
                 if (FileUpload1.HasFile)                        //code to check file upload if save in folder
                 {
                     string filename = Path.GetFileName(FileUpload1.PostedFile.FileName);
                     string ext = Path.GetExtension(FileUpload1.PostedFile.FileName);
                     filename = "Resume_" + lblid.Text + ext;
                     string path = "resume/" + filename;
                     string address = txtaddress.Text + System.Environment.NewLine + System.DateTime.Today.ToString("dd/MM/yyyy");
                     //Save file into resume folder
                     FileUpload1.SaveAs(Server.MapPath("~/resume/" + filename));
                     qr = "insert into tbcareer values('" + lblid.Text + "','" + txtusername.Text + "','" + txtcontact.Text + "','" + txtemail.Text + "','" + txtapplying.Text + "','" + address + "','" + filename + "','" + path + "')";
                     //code for sending the email

                     string sIPAddress = null;
                     sIPAddress = Request.ServerVariables["HTTP_X_FORWARDED_FOR"];
                     if (string.IsNullOrEmpty(sIPAddress))
                         sIPAddress = Request.ServerVariables["REMOTE_ADDR"];
                     string str = Label2.Text +
                                  System.Environment.NewLine +
                                  System.Environment.NewLine + Label3.Text +
                                  System.Environment.NewLine + "  Date: " + "" + System.DateTime.Today.ToString() + "" +
                                  System.Environment.NewLine + "  Name: " + "" + txtusername.Text + "" +
                                  System.Environment.NewLine + "  Mobile: " + "" + txtcontact.Text + "" +
                                  System.Environment.NewLine + "  Email: " + "" + txtemail.Text + "" +
                                  System.Environment.NewLine + "  Apply for: " + "" + txtapplying.Text + "" +
                                  System.Environment.NewLine + "  User IP Address : " + sIPAddress +
                                  System.Environment.NewLine + "  Thanks," +
                                  System.Environment.NewLine + "  WebAdmin-SEDNA";
                     string from = "info@sednainfosystems.com";
                     string to = "asksedna@gmail.com";//txtemail.Text;
                     string subject = "Inquiry Counter - Website";
                     string body = str;
                     SmtpMail.SmtpServer = "relay-hosting.secureserver.net";
                     SmtpMail.Send(from, to, subject, body);


                     //end of mail sending code
                 }
                 else
                 {
                     MsgBox("Please select your resume");
                     //qr = "insert into tbcareer(uid,username,contact_no,email,applying_for,address) values('" + lblid.Text + "','" + txtusername.Text + "','" + txtcontact.Text + "','" + txtemail.Text + "','" + txtapplying.Text + "','" + txtaddress.Text + "')";
                 }
                 fobj.connect();
                 OleDbCommand com = new OleDbCommand(qr, functions.con);
                 com.ExecuteNonQuery();
                 clear();
                 fobj.disconnect();
                 lblmsg.Text = "Resume Submitted Successfully";
                 
                 ScriptManager.RegisterStartupScript(this, this.GetType(), "popup", "alert('Resume Submitted Successfully... Thank you for your interest in employment opportunities at Sedna.');window.location='career.aspx';", true);
             }
             else
             {
                 MsgBox("Please enter mandatory fields");
             }
         }
         catch (Exception ex)
         {
             lblmsg.Text = ex.Message;
             //lblmsg.Text = "Please select your resume";
         }
        
        //if (IsPageRefreshed)
        //{
        //      try
        //      {
        //          if (txtusername.Text != "" && txtcontact.Text != "" && txtemail.Text != "" && txtapplying.Text != "")
        //          {
        //              if (FileUpload1.HasFile)                        //code to check file upload if save in folder
        //              {
        //                  string filename = Path.GetFileName(FileUpload1.PostedFile.FileName);
        //                  string ext = Path.GetExtension(FileUpload1.PostedFile.FileName);
        //                  filename = "Resume_" + lblid.Text + ext;
        //                  string path = "resume/" + filename;
        //                  string address = txtaddress.Text + System.Environment.NewLine + System.DateTime.Today.ToString("dd/MM/yyyy");
        //                  //Save file into resume folder
        //                  FileUpload1.SaveAs(Server.MapPath("~/resume/" + filename));
        //                  qr = "insert into tbcareer values('" + lblid.Text + "','" + txtusername.Text + "','" + txtcontact.Text + "','" + txtemail.Text + "','" + txtapplying.Text + "','" + address + "','" + filename + "','" + path + "')";
        //                  //code for sending the email

        //                  //string sIPAddress = null;
        //                  //sIPAddress = Request.ServerVariables["HTTP_X_FORWARDED_FOR"];
        //                  //if (string.IsNullOrEmpty(sIPAddress))
        //                  //    sIPAddress = Request.ServerVariables["REMOTE_ADDR"];
        //                  //string str = "Career Enquiry Mail:" + System.Environment.NewLine + "Hi sir,Please check this mail which is from Careers of www.sednainfosystems.com" + System.Environment.NewLine + "  Date: " + "" + System.DateTime.Today.ToString() + "" + System.Environment.NewLine + "  Name: " + "" + txtusername.Text + "" + System.Environment.NewLine + "  Mobile: " + "" + txtcontact.Text + "" + System.Environment.NewLine + "  Email: " + "" + txtemail.Text + "" + System.Environment.NewLine + " Apply for: " + "" + txtapplying.Text + "" + System.Environment.NewLine + "User IP Address : " + sIPAddress + System.Environment.NewLine + "Thanks," + System.Environment.NewLine + "WebAdmin-SEDNA";
        //                  //string from = "info@sednainfosystems.com";
        //                  //string to = "asksedna@gmail.com";//txtemail.Text;
        //                  //string subject = "Inquiry Counter - Website";
        //                  //string body = str;
        //                  //SmtpMail.SmtpServer = "relay-hosting.secureserver.net";
        //                  //SmtpMail.Send(from, to, subject, body);


        //                  //end of mail sending code
        //              }
        //              else
        //              {
        //                  MsgBox("Please select your resume");
        //                  //qr = "insert into tbcareer(uid,username,contact_no,email,applying_for,address) values('" + lblid.Text + "','" + txtusername.Text + "','" + txtcontact.Text + "','" + txtemail.Text + "','" + txtapplying.Text + "','" + txtaddress.Text + "')";
        //              }
        //              fobj.connect();
        //              OleDbCommand com = new OleDbCommand(qr, functions.con);
        //              com.ExecuteNonQuery();
        //              fobj.disconnect();
        //              lblmsg.Text = "Resume Submitted Successfully";
        //              Response.Write("<script LANGUAGE='JavaScript'> alert('Resume Submitted Successfully... Thank you for your interest in employment opportunities at Sedna');</script>");
        //              clear();
        //              // Response .Redirect ("career.aspx");
        //              Session["insert"] = "1";
        //              clear();
        //          }
        //          else
        //          {
        //              MsgBox("Please enter mandatory fields");
        //          }
        //      }
        //      catch (Exception ex)
        //      {
        //          lblmsg.Text = ex.Message;
        //          //lblmsg.Text = "Please select your resume";
        //      }
        //}
       
    }
    public void clear()
    {
        txtusername.Text = "";
        txtcontact.Text = "";
        txtemail.Text = "";
        txtapplying.Text = "";
        txtaddress.Text = "";

    }
    private void MsgBox(string msg)
    {
        string str1 = "<script language='javascript'>";
        str1 = str1 + "alert('" + msg + "' )";
        str1 = str1 + "</script>";
        RegisterStartupScript("ds", str1);
    }

   
}
