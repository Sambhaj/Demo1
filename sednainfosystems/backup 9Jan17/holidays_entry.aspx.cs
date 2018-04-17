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
public partial class holidays_entry : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["usernm"] != null && Session["password"] != null)
        {
            if (!IsPostBack)
            {         
                databind();
                ddldate.Attributes.Add("onblur", "checkdate()");
                ddlyear.Attributes.Add("onblur", "checkdate()");
                ddlmonth.Attributes.Add("onblur", "checkdate()");
            }
        }

    }
    functions fobj = new functions();
    public void databind()
    {
        //string qr = "select hdate as Date,particular as Holiday from holidays";
        string qr = "select * from holidays";
        DataSet ds = new DataSet();
        fobj.connect();
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);               
        da.Fill(ds);
        gv1.DataSource = ds;
        gv1.DataBind();
        fobj.disconnect();
    }

    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        if (ddldate.Text != "Date" && ddlmonth.Text != "Month" && ddlyear.Text != "Year" && txt_particular.Text != "")
        {
            string date = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;
            string qr = "insert into holidays values('" + date + "','" + txt_particular.Text + "')";
            fobj.connect();
            OleDbCommand com = new OleDbCommand(qr, functions.con);
            com.ExecuteNonQuery();
            fobj.disconnect();
            ddldate.Text = "Date";
            ddlmonth.Text = "Month";
            ddlyear.Text = "Year";
            txt_particular.Text = "";
            databind();
        }
        else
        {
            lblmsg.Text = "Please enter all fields";
        }
    }
}
