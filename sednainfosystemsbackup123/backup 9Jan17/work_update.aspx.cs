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

public partial class work_update : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void btnsubmit_click(object sender, EventArgs e)
    {
        try
        {
            if (txt_cperson.Text != "" && txt_desc.Text!="" && txt_materil.Text!="" && txt_worknm.Text!="" && ddldiscby.Text != "Select" && ddldate.Text != "Date" && ddldate_e.Text != "Date" && ddlmonth.Text != "Month" && ddlmonth_e.Text != "Month" && ddlyear.Text != "Year" && ddlyear_e.Text != "Year")
            {
                string dt_in = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;
                string dt_executed = ddldate_e.Text + "-" + ddlmonth_e.Text + "-" + ddlyear_e.Text;
                string qr = "insert into workupdate values('" + txt_worknm.Text + "','" + txt_cperson.Text + "','" + txt_desc.Text + "','" + dt_in + "','" + dt_executed + "','" + ddldiscby.Text + "','" + txt_materil.Text + "')";
                fobj.connect();
                OleDbCommand com = new OleDbCommand(qr, functions.con);
                com.ExecuteNonQuery();
                fobj.disconnect();
                lblmsg.Text = "Daily report submitted successfully";
                clear();
            }
            else
            {
                lblmsg.Text = "All Fields are compulsory";
            }
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }

    }
    public void clear()
    {
        txt_cperson.Text = "";
        txt_desc.Text = "";
        txt_materil.Text = "";
        txt_worknm.Text = "";
        ddldate.Text = "Date";
        ddldate_e.Text = "Date";
        ddldiscby.Text = "Select";
        ddlmonth.Text = "Month";
        ddlmonth_e.Text = "Month";
        ddlyear.Text = "Year";
        ddlyear_e.Text = "Year";
    }
}
