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

public partial class chk_reg_user : System.Web.UI.Page
{
    DataSet ds = new DataSet();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            if (Session["uid"] != null)
            {
                ds = getrecord("SELECT * From tbregister ORDER BY(order_no)DESC");
                GridView1.DataSource = ds;
                GridView1.DataBind();
            }
            else
            {
                Response.Redirect("Admin_Login.aspx");
            }
        }
    }

    protected void DownloadFile(object sender, EventArgs e)
    {
        string filePath = (sender as ImageButton).CommandArgument;
        Response.ContentType = ContentType;
        Response.AppendHeader("Content-Disposition", "attachment; filename=" + Path.GetFileName(filePath));
        Response.WriteFile(filePath);
        Response.End();
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
    protected void btnback_Click(object sender, ImageClickEventArgs e)
    {
        Response.Redirect("Dashboard.aspx");
    }
    protected void btnlogout_Click(object sender, ImageClickEventArgs e)
    {
        Session["uid"] = null;
        Session.Clear();
        Session.Abandon();
        Response.Redirect("Admin_Login.aspx");
    }
}
