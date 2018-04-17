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

public partial class empleave : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            if (Session["EmpId"] != null)
            {
                string yr = System.DateTime.Now.ToString("yyyy");
                ddlyear.Items.Add(yr);
                string u_name = Session["EmpId"].ToString();
                lblid.Text = u_name;
                ddldate.Attributes.Add("onblur", "checkdate()");
                ddlyear.Attributes.Add("onblur", "checkdate()");
                ddlmonth.Attributes.Add("onblur", "checkdate()");
            }
        }
    }
    string rdate;
    string yes = "";
    protected void btnsubmit_click(object sender, EventArgs e)
    {
        rdate = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;
        reported = "";
        if (txt_reason.Text != "")
        {           
            checkdate();
            if (yes == "yes")
            {
                checkentry();
                if (tleave != "yes")
                {
                    chekreport();
                    if (reported != "yes")
                    {
                        string qr = "Insert into tbleave values('" + lblid.Text + "','" + rdate + "','" + txt_reason.Text + "')";
                        fobj.connect();
                        OleDbCommand com = new OleDbCommand(qr, functions.con);
                        com.ExecuteNonQuery();
                        fobj.disconnect();
                        lblmsg.Text = "Leave form submited successfully";
                        ddldate.Text = "Date";
                        ddlmonth.Text = "Month";
                        ddlyear.Text = "Year";
                        txt_reason.Text = "";
                    }
                    else
                    {
                        lblmsg.Text = "You have already reported to attendance report";
                    }
                }
                else
                {
                    lblmsg.Text = "You have already applied for leave on date " + rdate;
                    tleave = "";
                    ddldate.SelectedValue = "Date";
                }
            }
            else
            {
                lblmsg.Text = "Sorry you can submit leave form for before 15 days and last 3 days reporting ";
                ddldate.SelectedValue = "Date";
            }
        }
    }
    string tleave = "";
    public void checkentry()
    {
        fobj.connect(); ;
        OleDbDataReader reader;
        string qr = "Select leave_date from tbleave where empid='" + lblid.Text + "' and leave_date='" + rdate + "'";
        OleDbCommand com = new OleDbCommand(qr, functions.con);
        reader = com.ExecuteReader();
        if (reader.HasRows)
        {
            while (reader.Read())
            {
                tleave = "yes";
            }
        }
        fobj.disconnect();
        reader.Close();
    }

    string reported = "";
    public void chekreport()
    {
        fobj.connect();
        OleDbDataReader reader;
        string qr = "Select work_date from daily_report where empid='" + lblid.Text + "' and work_date='" + rdate + "'";
        OleDbCommand com = new OleDbCommand(qr, functions.con);
        reader = com.ExecuteReader();
        if (reader.HasRows)
        {
            while (reader.Read())
            {
                reported = "yes";
            }
        }
        fobj.disconnect();
        reader.Close();
    }

    public string checkdate()
    {
        string todays_date = System.DateTime.Now.ToString("dd-MMM-yyyy");
        string tdate = System.DateTime.Now.ToString("dd");
        string tmonth = System.DateTime.Now.ToString("MMM");
        string tyear = System.DateTime.Now.ToString("yyyy");
        int tdt = int.Parse(tdate);
        int rptdate = int.Parse(ddldate.Text);
        if (tyear == ddlyear.Text)
        {
            if (tmonth == ddlmonth.Text)
            {
                if (rptdate <= tdt + 15 && rptdate >= tdt - 3)
                {
                    yes = "yes";
                }
            }
            else
            {
                int dys;
                int tmonth1 = int.Parse(fobj.getmonthno(tmonth));
                int umonth1 = int.Parse(fobj.getmonthno(ddlmonth.Text));
                if (umonth1 < tmonth1)
                {
                    dys = int.Parse(fobj.getdays(ddlmonth.Text));
                    tdt = tdt + dys;
                    if (rptdate >= tdt - 3)
                    {
                        yes = "yes";
                    }
                }
                else if (umonth1 > tmonth1)
                {
                    int a;
                    dys = int.Parse(fobj.getdays(tmonth));
                    a = (dys - int.Parse(tdate)) + int.Parse(ddldate.Text);
                    if (a <= 15)
                    {
                        yes = "yes";
                    }
                }
            }
        }
        return yes;
    }
}
