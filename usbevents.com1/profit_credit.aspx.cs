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

public partial class profit_credit : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            txt_eventcost.Attributes.Add("onblur", "calc()");
            txt_evntexp.Attributes.Add("onblur", "chknm()");            
            getnm();
        }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        fobj.connect();
        string qr = "insert into profit_credit values('" + ddlperson_nm.Text + "','" + txt_evntexp.Text  + "','" + txt_eventcost.Text + "','" + txt_profloss.Text + "')";
        OleDbCommand com = new OleDbCommand(qr, functions.con);
        com.ExecuteNonQuery();
        fobj.disconnect();
        txt_eventcost.Text = "";
        txt_evntexp.Text = "";
        txt_profloss.Text = "";
        ddlperson_nm.Text = "Select";
        lblmsg.Text = "Submitted Successfully";
    }

    string usrnm;
    public void getnm()
    {
        OleDbDataReader reader;
        fobj.connect();
        string sqlquery = "select person_name from customer";
        OleDbCommand com = new OleDbCommand(sqlquery,functions.con);
        reader = com.ExecuteReader();

        if (reader.HasRows)
        {
            while (reader.Read())
            {
                usrnm = reader[0].ToString();
                ddlperson_nm.Items.Add(usrnm);
            }
        }
        fobj.disconnect();
        reader.Close();
    }

}
