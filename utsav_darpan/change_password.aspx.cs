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
using MySql.Data.MySqlClient;
using System.IO;
using System.Collections.Generic;

public partial class change_password : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            if (Session["uid"] != null)
            {
                txtcurrpass.Text = "";
                txtpassword1.Text = "";
                txtpassword2.Text = "";
                lblmsg.Visible = false;
            }
            else
            {
                Response.Redirect("Admin_Login.aspx");
            }
        }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        if (txtcurrpass.Text != "" && txtpassword1.Text != "" && txtpassword2.Text != "")
        {
            DataSet ds = new DataSet();
            connect();
            string cmdText = "SELECT * FROM tbadmin where binary password = '" + txtcurrpass.Text + "' ";
            MySqlCommand cmd = new MySqlCommand(cmdText, con);
            MySqlDataAdapter da = new MySqlDataAdapter(cmd);
            da.Fill(ds);
            disconnect();
            if (ds.Tables[0].Rows.Count > 0)
            {
                string user_id = ds.Tables[0].Rows[0][0].ToString();

                string string1 = txtpassword1.Text;
                string string2 = txtpassword2.Text;
                int MyInt = string1.CompareTo(string2);

                if (MyInt == 0)
                {
                    bool fHasSpace = string1.Contains(" ");
                    if (fHasSpace == false)
                    {
                        update_record("UPDATE tbadmin SET password = '" + txtpassword1.Text + "' WHERE username = '" + user_id + "' AND password = '" + txtcurrpass.Text + "'");
                        lblmsg.Visible = true;
                        lblmsg.Text = "Password Changed Successfully.";
                        lblmsg.ForeColor = System.Drawing.Color.Green;
                    }
                    else
                    {
                        lblmsg.Visible = true;
                        lblmsg.Text = "Sorry!! Blank Spaces Not Allowed.";
                        lblmsg.ForeColor = System.Drawing.Color.Red;
                    }
                }
                else
                {
                    lblmsg.Visible = true;
                    lblmsg.Text = "New & Confirm Password Not Matched !!";
                    lblmsg.ForeColor = System.Drawing.Color.Red;
                }
            }
            else
            {
                lblmsg.Visible = true;
                lblmsg.Text = "Invalid Current Password !!";
                lblmsg.ForeColor = System.Drawing.Color.Red;
            }
        }
        else
        {
            lblmsg.Visible = true;
            lblmsg.Text = "All Fields Are Mandatory !!";
            lblmsg.ForeColor = System.Drawing.Color.Red;
        }
    }

    protected void btncancel_Click(object sender, EventArgs e)
    {
        txtpassword1.Text = "";
        txtpassword2.Text = "";
        txtcurrpass.Text = "";
        lblmsg.Visible = false;
    }

    protected void btnlogout_Click(object sender, ImageClickEventArgs e)
    {
        Session["uid"] = null;
        Session.Clear();
        Session.Abandon();
        Response.Redirect("Admin_Login.aspx");
    }
    protected void btnback_Click1(object sender, ImageClickEventArgs e)
    {
        Response.Redirect("Dashboard.aspx");
    }



    public static MySqlConnection con;
    public void connect()
    {
       string c = "server = Prpote.db.8272037.hostedresource.com; user id = Prpote;password=Prpgei!123; database = Prpote;";
        con = new MySqlConnection(c);
        con.Open();
    }
    public void disconnect()
    {
        con.Close();
    }
    public DataSet getrecord(string qr)
    {
        connect();
        DataSet ds = new DataSet();
        MySqlDataAdapter da = new MySqlDataAdapter(qr, con);
        da.Fill(ds);
        disconnect();
        return ds;
    }
    public string update_record(string qr)
    {
        connect();
        MySqlCommand cmd = new MySqlCommand(qr, con);
        cmd.ExecuteNonQuery();
        return ("Record Updated successfully");
        disconnect();
    }
}
