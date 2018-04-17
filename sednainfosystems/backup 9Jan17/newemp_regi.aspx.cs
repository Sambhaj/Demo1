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

public partial class newemp_regi : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["usernm"] != null && Session["password"] != null)
        {
            string unm = Session["usernm"].ToString(); ;
            lblnm.Text = unm;
            if (!IsPostBack)
            {
                getno();
                getyear();
                txtemail.Attributes.Add("onblur", "emailval()");       //event for validation of email to call javascript function
                txtmobno.Attributes.Add("onblur", "mobval()");         //event for validation of mobile no to call javascript function      
                ddldate.Attributes.Add("onblur", "checkdate()");
                ddlyear.Attributes.Add("onblur", "checkdate()");
                ddlmonth.Attributes.Add("onblur", "checkdate()");
                txtcof_psw.Attributes.Add("onblur", "chk()");
            }
        }
        else
        {
            Response.Redirect("Default.aspx");
        }
    }
    public void getyear()             //function year list
    {
        try
        {
            OleDbDataReader reader;
            connect();
            con.Open();
            string sqlquery = "select * from tyear";
            OleDbCommand com = new OleDbCommand(sqlquery, con);
            reader = com.ExecuteReader();
            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    ddlyear.Items.Add(reader[0].ToString());
                }
            }
            con.Close();
            reader.Close();
        }
        catch (Exception ex)
        {
        }
    }
  
    int id;
    public void getno()    //function get id
    {
        try
        {
            OleDbDataReader reader;
            connect();
            con.Open();
            string sqlquery = "select max(emp_id) from empregi";
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
            txtemp_id.Text = id.ToString();
        }
        catch (Exception ex)
        {
            txtemp_id.Text = "1";
        }
    }



    OleDbConnection con = new OleDbConnection();
    public void connect()
    {
        //string a = Server.MapPath("sednadb.mdb");
        //con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source='" + a + "'");
        con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source=|DataDirectory|sednadb.mdb");
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        try
        {
            if (txtemp_nm.Text !="" && txtuser_nm.Text != "" && txtpsw.Text != "" && txtdesig.Text != "")
            {
                string dobdate = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;
                string regdate = System.DateTime.Now.ToString("dd-MMM-yyyy");
                string qr = "insert into empregi values(" + txtemp_id.Text + ",'" + txtemp_nm.Text + "','" + txtuser_nm.Text + "','" + txtpsw.Text + "','" + dobdate + "','" + txtdesig.Text + "','" + txtmobno.Text + "','" + txtemail.Text + "','" + txt_bloodgr.Text + "','" + txtaddr.Text + "','" + regdate + "')";
                connect();
                con.Open();
                OleDbCommand com = new OleDbCommand(qr, con);
                com.ExecuteNonQuery();
                con.Close();
                getno();
                lblmsg.Text = "Employee registered Successfully";
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
    protected void Button1_Click(object sender, EventArgs e)
    {
        lblmsg.Text = System.DateTime.Now.ToString("hh:mm tt");
    }
    protected void btn_logout_Click1(object sender, EventArgs e)
    {
        Session.RemoveAll();
        Session.Abandon();
        Response.Redirect("Default.aspx");
    }
}
