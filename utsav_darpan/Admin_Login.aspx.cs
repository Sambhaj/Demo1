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

public partial class Admin_Login : System.Web.UI.Page
{

    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            txtusername.Text = "";
            txtpassword.Text = "";
            lblmsg.Visible = false;
        }

    }
    protected void btnlogin_Click(object sender, EventArgs e)
    {
        if (txtusername.Text != "" && txtpassword.Text != "")
        {
            DataSet ds = new DataSet();
            connect();
            string cmdText = "SELECT * FROM utsav_admin where binary username = '" + txtusername.Text + "'and binary password = '" + txtpassword.Text + "'";
            MySqlCommand cmd = new MySqlCommand(cmdText, con);
            MySqlDataAdapter da = new MySqlDataAdapter(cmd);
            da.Fill(ds);
            if (ds.Tables[0].Rows.Count > 0)
            {
                int result = cmd.ExecuteNonQuery();
                Session["uid"] = txtusername.Text;
                disconnect();
                Response.Redirect("Dashboard.aspx");
            }
            else
            {
                lblmsg.Visible = true;
                lblmsg.Text = "Username & Password Not Match !!";
                lblmsg.ForeColor = System.Drawing.Color.Red;
            }

            disconnect();
        }
        else
        {
            lblmsg.Visible = true;
            lblmsg.Text = "Please Enter Username & Password !!";
            lblmsg.ForeColor = System.Drawing.Color.Red;
        }
    }

    protected void btncancel_Click(object sender, EventArgs e)
    {
        txtusername.Text = "";
        txtpassword.Text = "";
        lblmsg.Visible = false;
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
}
