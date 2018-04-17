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

public partial class client_reg : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["EmpId"] != null && Session["empname"] != null)
        {
            string id, name;
            id = Session["EmpId"].ToString();
            name = Session["empname"].ToString();
            if (!IsPostBack)
            {
                txt_email.Attributes.Add("onblur", "emailval()");       //event for validation of email to call javascript function
                txt_pmobno.Attributes.Add("onblur", "mobval()");         //event for validation of mobile no to call javascript function      
            }
        }
        else
        {
            Response.Redirect("Default.aspx");
        }
    }
    OleDbConnection con = new OleDbConnection();
    public void connect()
    {
        con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source=|DataDirectory|sednadb.mdb");
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        try
        {
            if (txt_remark.Text != "" ||txt_email.Text != "" || txtclient_nm.Text != "" || txt_pmobno.Text != "")
            {
                string qr = "insert into client_reg values('" +txtclient_nm.Text + "','" + txt_pmobno.Text + "','" + txt_email.Text + "','" + txt_remark.Text + "')";
                connect();
                con.Open();
                OleDbCommand com = new OleDbCommand(qr, con);
                com.ExecuteNonQuery();
                con.Close();
                txt_email.Text = "";
                txt_pmobno.Text = "";
                txt_remark.Text = "";
                txtclient_nm.Text = "";
                lblmsg.Text = "Stored Successfully";
            }
            else
            {
                lblmsg.Text = "Enter User Id and Password";
            }
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }
}
