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

public partial class chk_prices : System.Web.UI.Page
{
    DataSet ds = new DataSet();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["uid"] != null)
        {

        }
        else
        {
            Response.Redirect("Admin_Login.aspx");
        }
    }

    protected void ddlpanchang_language_SelectedIndexChanged1(object sender, EventArgs e)
    {
        if (ddlpanchang_language.SelectedItem.Text != "---Select Language---")
        {
            string selected_language = ddlpanchang_language.SelectedItem.Text;

            switch (selected_language)
            {
                case "Gujarati":
                    ds = getrecord("SELECT * FROM tbgujrati");
                    break;
                case "Hindi":
                    ds = getrecord("SELECT * FROM tbhindi");
                    break;
                case "English":
                    ds = getrecord("SELECT * FROM tbenglish");
                    break;
                case "Gujarati English Mix":
                    ds = getrecord("SELECT * FROM tbguj_eng_mix");
                    break;
                default:
                    break;
            }
            GridView1.DataSource = ds;
            GridView1.DataBind();
        }
        else
        {
            GridView1.DataSource = null;
            GridView1.DataBind();
        }
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
