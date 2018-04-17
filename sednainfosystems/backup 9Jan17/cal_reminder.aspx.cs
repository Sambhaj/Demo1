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

public partial class cal_reminder : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            databind();
       
        }
    }
    public void databind()
    {
        ddldate.Text = System.DateTime.Now.ToString("dd");
        ddlmonth.Text = System.DateTime.Now.ToString("MMM");
        ddlyear.Text = System.DateTime.Now.ToString("yyyy");
        ddldatefrm.Text = System.DateTime.Now.ToString("dd");
        ddlmonthfrm.Text = System.DateTime.Now.ToString("MMM");
        ddlyearfrm.Text = System.DateTime.Now.ToString("yyyy");
        string tdate = System.DateTime.Now.ToString("dd-MMM-yyyy");
        string qr = "select * from call_log where Reminder=#" + tdate + "#";
        DataSet ds = new DataSet();
        fobj.connect();
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
        da.Fill(ds);
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            gv1.DataSource = ds;
            gv1.DataBind();
            gv1.Visible = true;
        }
        else
        {
            gv1.Visible = false;
            lblmsg.Text = "Today no reminder call found";
        }
        fobj.disconnect();
    }
  
    protected void btnchkclrpt_Click(object sender, EventArgs e)
    {
        lblms.Text = "";
        lblmsg.Text = "";
        if (ddldate.Text != "Date" && ddlmonth.Text != "Month" && ddlyear.Text != "Year")
        {
            string tdatefrom = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;
            string tdate  = ddldatefrm.Text + "-" + ddlmonthfrm.Text + "-" + ddlyearfrm.Text;
            //string tdate = "25-Oct-13";
            //string tdatefrom = "10-Oct-13";
            string qr = "select * from call_log where Call_Date between #" + tdatefrom + "# and #" + tdate + "#";
            //string qr = "select * from call_log where Call_Date='" + tdate + "'";
            DataSet ds = new DataSet();
            fobj.connect();
            OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
            da.Fill(ds);
            int a = ds.Tables[0].Rows.Count;
            if (a != 0)
            {
                gv1.DataSource = ds;
                gv1.DataBind();
                gv1.Visible = true;
            }
            else
            {
                gv1.Visible = false;
                lblmsg.Text = "Record not found on date" + tdate;
            }
            fobj.disconnect();
            lblmsg.Text = "Result from Date : " + tdatefrom + "to Date : " + tdate; ;
        }
        else
        {
            lblmsg.Text = "Select Date";
        }
    }
    protected void btncheckremind_Click(object sender, EventArgs e)
    {
        lblms.Text = "";
        lblmsg.Text = "";
        if (ddldate.Text != "Date" && ddlmonth.Text != "Month" && ddlyear.Text != "Year")
        {
            string tdatefrom = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;
            string tdate = ddldatefrm.Text + "-" + ddlmonthfrm.Text + "-" + ddlyearfrm.Text;
            string qr = "select * from call_log where reminder between #" + tdatefrom + "# and #" + tdate + "#";
            DataSet ds = new DataSet();
            fobj.connect();
            OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
            da.Fill(ds);
            int a = ds.Tables[0].Rows.Count;
            if (a != 0)
            {
                gv1.DataSource = ds;
                gv1.DataBind();
                gv1.Visible = true;
            }
            else
            {
                gv1.Visible = false;
                lblmsg.Text = "Record not found on date" + tdate;
            }
            fobj.disconnect();
            lblmsg.Text = "Result from Date : " + tdatefrom + "to Date : " + tdate; ;
        }
        else
        {
            lblmsg.Text = "Select Date";
        }
    }

    protected void btnfrdt_click(object sender,EventArgs e)
    {
        lblms.Text = "";
        lblmsg.Text = "";
        if (ddldate.Text != "Date" && ddlmonth.Text != "Month" && ddlyear.Text != "Year")
        {
            string tdatefrom = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;
            string tdate = ddldatefrm.Text + "-" + ddlmonthfrm.Text + "-" + ddlyearfrm.Text;
            //string tdate = "25-Oct-13";
            //string tdatefrom = "10-Oct-13";
            string qr = "select * from call_log where Call_Date=#" + tdatefrom + "#";
            //string qr = "select * from call_log where Call_Date='" + tdate + "'";
            DataSet ds = new DataSet();
            fobj.connect();
            OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
            da.Fill(ds);
            int a = ds.Tables[0].Rows.Count;
            if (a != 0)
            {
                gv1.DataSource = ds;
                gv1.DataBind();
                gv1.Visible = true;
            }
            else
            {
                gv1.Visible = false;
                lblmsg.Text = "Record not found on date" + tdate;
            }
            fobj.disconnect();
            lblmsg.Text = "Result for Date : " + tdatefrom;
        }
        else
        {
            lblmsg.Text = "Select Date";
        }
    }
}
