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

public partial class Co_ordinator_manage : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            //ddldate.Attributes.Add("onblur", "checkdate()");
            //ddlyear.Attributes.Add("onblur", "checkdate()");
            //ddlmonth.Attributes.Add("onblur", "checkdate()");
            txt_advance.Attributes.Add("onblur", "calc()");
            txt_cost_final.Attributes.Add("onblur", "calc()");
            txt_advance.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt_cost_final.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt_balance.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            
            getco_list();
            getevnm();
        }
    }
    protected void ddl_evnm_click(object sender, EventArgs e)
    {
        lbldt.Text = fobj.getevdate(ddl_evnm.Text);
    }
    public void getevnm()
    {
        string qr = "select event_name from customer";
        DataSet ds = fobj.getevnm1(qr);
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            for (int i = 0; i < a; i++)
            { 
            string ab=ds.Tables[0].Rows[i][0].ToString();
            ddl_evnm.Items.Add(ab);
            }
        }     
    }
    public void getco_list()
    {
        string qr = "select co_name from co_ordinator";
        DataSet ds = fobj.getevnm1(qr);
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            for (int i = 0; i < a; i++)
            {
                string ab = ds.Tables[0].Rows[i][0].ToString();
                co_ordinator_name.Items.Add(ab);
            }
        }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        fobj.connect();
        //string ev_date = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;
        string qr = "insert into co_ordinator_manage values('" + txt_date.Text + "','" + ddl_evnm.Text + "','" + txt_desc.Text + "','" + txt_cost_final.Text + "','" + txt_advance.Text + "','" + txt_balance.Text + "','" + co_ordinator_name.Text + "')";
        OleDbCommand com = new OleDbCommand(qr, functions.con);
        com.ExecuteNonQuery();
        fobj.disconnect();
        txt_advance.Text = "";
        txt_balance.Text = "";
        txt_cost_final.Text = "";
        txt_desc.Text = "";
        txt_date.Text = "";
        ddl_evnm.Text = "Select";
        co_ordinator_name.Text = "Select";
        lbldt.Text = "";
        //ddldate.Text = "Date";
        //ddlmonth.Text = "Month";
        //ddlyear.Text = "Year";
        lblmsg.Text = "Submitted Successfully";
    }
   
}
