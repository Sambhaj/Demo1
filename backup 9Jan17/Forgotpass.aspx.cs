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

public partial class Forgotpass : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            string value;
            value = Request.QueryString["value"];
            if (value == "1")
            {
                btnsubmit2.Visible = true;
                btnsubmit1.Visible = false;
                lbl1.Visible = true;
                txtemail.Visible = true;
            }
            else if (value == "2")
            {
                btnsubmit2.Visible = false;
                btnsubmit1.Visible = true;
                lbl1.Visible = false;
                txtemail.Visible = false;
            }
            Label1.Visible = false;
            txtemail.Attributes.Add("onblur", "emailval()");  //event to cal javascript code
        }
    }
    OleDbConnection con = new OleDbConnection();
    public void connect()
    {
        //String db_path = Server.MapPath("sednadb.mdb");
        //con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source='" + db_path + "'");
        con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source=|DataDirectory|sednadb.mdb");
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        Label1.Visible = false;
        try
        {  //code to check user and retrive password
            if (txtuser.Text != "" )
            {
                OleDbDataReader reader;
                connect();
                con.Open();
                string sqlquery = "select password from admin where usernm='" + txtuser.Text + "'";
                OleDbCommand com = new OleDbCommand(sqlquery, con);
                reader = com.ExecuteReader();
                if (reader.HasRows)
                {
                    while (reader.Read())
                    {
                        lblmsg.Text = reader[0].ToString();
                        lblmsg.Visible = true;
                        Label1.Visible = true;
                    }
                }
                else
                {
                    lblmsg.Text = "Sorry..not found";
                    txtemail.Text = "";
                    txtuser.Text = "";
                }
                con.Close();
                reader.Close();
            }
            else
            {
                lblmsg.Text = "Please enter username";
            }
        }
        catch (Exception ex)
        {
        }

    }
    protected void btnsubmit1_Click(object sender, EventArgs e)
    {
        Label1.Visible = false;
        try 
        {  //code to check user and retrive password
            if (txtuser.Text != "" && txtemail.Text != "")
            {
                OleDbDataReader reader;
                connect();
                con.Open();
                string sqlquery = "select password from empregi where usernm='" + txtuser.Text + " ' and email = '" + txtemail.Text + "' ";
                OleDbCommand com = new OleDbCommand(sqlquery, con);
                reader = com.ExecuteReader();
                if (reader.HasRows)
                {
                    while (reader.Read())
                    {
                        lblmsg.Text = reader[0].ToString();
                        lblmsg.Visible = true;
                        Label1.Visible = true;
                    }
                }
                else
                {
                    lblmsg.Text = "Sorry..not found";
                    txtemail.Text = "";
                    txtuser.Text = "";
                }
                con.Close();
                reader.Close();
            }
            else
            {
                lblmsg.Text = "Please enter all the fields";
            }
        }
        catch (Exception ex)
        {
        }

    }
}
