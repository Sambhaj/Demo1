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

public partial class chatwindow : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            lblmobno.Text = Request.QueryString["value"];
            lblnm.Text = Request.QueryString["nm"];
            getdt();
            int a = ds.Tables[0].Rows.Count;
            lblcnt.Text = a.ToString();
           
        }
    }
    public void getno()
    {
        string c = "server=localhost; user id=root; database=chat_db; ";       //database connection string to mysql database
        MySqlConnection con = new MySqlConnection(c);
        DataSet ds1 = new DataSet();
        con.Open();
        string qr = "SELECT DISTINCT  msg_id FROM chat_text order by msg_id desc LIMIT 0,1";
        MySqlDataAdapter da = new MySqlDataAdapter(qr, con);
        da.Fill(ds1);
        int cnt = ds1.Tables[0].Rows.Count;
        if (cnt != 0)
        {
            string a = ds1.Tables[0].Rows[0][0].ToString();
            int b = int.Parse(a);
            int d = b + 1;
            lblmsgid.Text = d.ToString();
        }
        else
        {
            lblmsgid.Text = "1";
        }
        con.Close();
    }
    DataSet ds = new DataSet();
    public void getdt()
    {
        string c = "server=localhost; user id=root; database=chat_db; ";       //database connection string to mysql database
        MySqlConnection con = new MySqlConnection(c);
       
        con.Open();
        string qr = "select msgby,msg from chat_text where mobno='" + lblmobno.Text + "' order by msg_id asc";
        MySqlDataAdapter da = new MySqlDataAdapter(qr, con);
        da.Fill(ds);
        lst1.DataSource = ds;
        lst1.DataBind();
        
        con.Close();
    }

    protected void btnsend_Click(object sender, EventArgs e)
    {
        if (txtmsg.Text != "")
        {
            getno();
            string c = "server=localhost; user id=root; database=chat_db; ";       //database connection string to mysql database
            MySqlConnection con = new MySqlConnection(c);
            con.Open();
            string mnm = lblnm.Text + "  :";
            string qr = "insert into chat_text values('" + lblmobno.Text + "','" + mnm + "','" + txtmsg.Text + "','" + lblmsgid.Text + "')";
            MySqlCommand com = new MySqlCommand(qr, con);
            com.ExecuteNonQuery();
            txtmsg.Text = "";
            getdt();
            getno();
        }
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
       
        getdt();
         int b = ds.Tables[0].Rows.Count;
        if (b == int.Parse(lblcnt.Text))
        {
            Response.Write("<script LANGUAGE='JavaScript' >alert('Please wait for new message');</script>");
        }
        else
        {
            lblcnt.Text = b.ToString();
        }
        
    }
}
