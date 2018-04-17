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

public partial class onlinechatlist : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        getdt();
    }
    public void getdt()
    {
        string c = "server=localhost; user id=root; database=chat_db; ";       //database connection string to mysql database
        MySqlConnection con = new MySqlConnection(c);
        DataSet ds = new DataSet();
        con.Open();
        string qr = "SELECT DISTINCT  mobno,msgby  FROM chat_text where msgby <> 'Admin :' order by msg_id desc LIMIT 0,10 ";
        MySqlDataAdapter da = new MySqlDataAdapter(qr, con);
        da.Fill(ds);
        lst1.DataSource = ds;
        lst1.DataBind();
        con.Close();
    }
}
