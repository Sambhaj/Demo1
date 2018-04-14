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
using System.IO;
using System.Data.OleDb;


public partial class daily_report : System.Web.UI.Page
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
                txt_si_time.Attributes.Add("onfocus", "rem_sit1()");
                txt_si_time.Attributes.Add("onblur", "rem_sit2()");
                txt_si_min.Attributes.Add("onfocus", "rem_sim1()");
                txt_si_min.Attributes.Add("onblur", "rem_sim2()");
                txt_so_time.Attributes.Add("onfocus", "rem_sot1()");
                txt_so_time.Attributes.Add("onblur", "rem_sot2()");
                txt_so_min.Attributes.Add("onfocus", "rem_som1()");
                txt_so_min.Attributes.Add("onblur", "rem_som2()");
                lbldt.Text = System.DateTime.Now.ToShortDateString();
               DateTime b = DateTime.Now.AddHours(12);
               
                string a = b.ToString();
                int c = a.Length;
                if (c == 22)
                {
                    lbltime.Text = a.Substring(11, 11);
                }
                else if (c == 21)
                {
                    lbltime.Text = a.Substring(10, 11);
                }
                else if (c == 20)
                {
                    lbltime.Text = a.Substring(9, 11);
                }
                //lblmsg.Text = lbltime.Text;
                
            }
        }
    }
    string rdate;
    string qr;
    string yes = "";
    protected void btnsubmit_click(object sender, EventArgs e)
    {      
        try
        {
            if (ddldate.Text != "Date" && ddlmonth.Text != "Month" && ddlyear.Text != "Year")
            {                
                rdate = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;
                yes = fobj.checkdate(ddldate.Text, ddlmonth.Text, ddlyear.Text);
                if (yes == "yes")
                {
                    checkentry();
                    if (reported != "yes")
                    {
                        checkleave();
                        if (tleave != "yes")
                        {                                                            
                            string si_time = txt_si_time.Text.Trim() + ":" + txt_si_min.Text.Trim() + "" + ddlsi.Text;
                            string so_time = txt_so_time.Text.Trim() + ":" + txt_so_min.Text.Trim() + "" + ddlso.Text; ;

                            //TimeZoneInfo INDIAN_ZONE = TimeZoneInfo.FindSystemTimeZoneById("India Standard Time");
                            //DateTime report_time = TimeZoneInfo.ConvertTimeFromUtc(DateTime.UtcNow, INDIAN_ZONE);
                          string report_time = System.DateTime.Now.ToString("hh:mm tt");
                            string reporting_date = System.DateTime.Now.ToString("dd-MM-yyyy");
                            if (FileUpload1.HasFile)                        //code to check file upload if save in folder
                            {
                                string filename = Path.GetFileName(FileUpload1.PostedFile.FileName);
                                string ext = Path.GetExtension(FileUpload1.PostedFile.FileName);
                                filename = "report_" + rdate + "_" + lblid.Text + ext;
                                string path = "report_file/" + filename;
                                //Save file into Images folder
                                FileUpload1.SaveAs(Server.MapPath("~/report_file/" + filename));
                                qr = "insert into daily_report values('" + lblid.Text + "','" + rdate + "','" + si_time + "','" + so_time + "','" + txt_11_am.Text + "','" + txt_12_am.Text + "','" + txt_13_am.Text + "','" + txt_14_am.Text + "','" + txt_15_am.Text + "','" + txt_16_am.Text + "','" + txt_17_am.Text + "','" + txt_18_am.Text + "','" + txt_19_am.Text + "','" + txt_20_pm.Text + "','" + filename + "','" + lbltime.Text + "','" + lbldt.Text + "')";
                            }
                            else
                            {
                                qr = "insert into daily_report(empid,work_date,signin_time,signout_time,11am,12pm,13pm,14pm,15pm,16pm,17pm,18pm,19pm,20pm,reporting_time,reporting_date) values('" + lblid.Text + "','" + rdate + "','" + si_time + "','" + so_time + "','" + txt_11_am.Text + "','" + txt_12_am.Text + "','" + txt_13_am.Text + "','" + txt_14_am.Text + "','" + txt_15_am.Text + "','" + txt_16_am.Text + "','" + txt_17_am.Text + "','" + txt_18_am.Text + "','" + txt_19_am.Text + "','" + txt_20_pm.Text + "','" + lbltime.Text + "','" + lbldt.Text + "')";
                            }
                            fobj.connect();
                            OleDbCommand com = new OleDbCommand(qr, functions.con);
                            com.ExecuteNonQuery();
                            fobj.disconnect();
                            lblmsg.Text = "Daily report submitted successfully";
                            Response.Write("<script LANGUAGE='JavaScript' >alert('Report submitted successfully');</script>");
                            yes = "";
                            clear();
                        }
                        else
                        {
                            lblmsg.Text = "You have applied for leave on date " + rdate;
                            tleave = "";
                            ddldate.SelectedValue = "Date";
                        }
                    }
                    else
                    {
                        lblmsg.Text = "You have already reported on date " + rdate;
                    }
                }
                else
                {
                    lblmsg.Text = "Sorry you can report only before 3 days data";
                    ddldate.SelectedValue = "Date";
                }
            }
            else 
            {
                lblmsg.Text = "Select Date";
            }
         
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }

    }
    string tleave = "";
    public void checkleave()           //function to check employe having leave on given date or not
    {
        fobj.connect();        
        OleDbDataReader reader;
        string qr = "Select leave_date from tbleave where empid='" + lblid.Text + "' and leave_date='" + rdate + "'";
        OleDbCommand com = new OleDbCommand(qr,functions.con);
        reader = com.ExecuteReader();
        if (reader.HasRows)
        {
            while (reader.Read())
            {
                tleave = "yes";
            }
        }
        fobj.disconnect();
    }


    public void clear()
    {
        txt_11_am.Text = "";
        txt_12_am.Text = "";
        txt_13_am.Text = "";
        txt_14_am.Text = "";
        txt_15_am.Text = "";
        txt_16_am.Text = "";
        txt_17_am.Text = "";
        txt_18_am.Text = "";
        txt_19_am.Text = "";
        txt_20_pm.Text = "";
        txt_si_min.Text = "00";
        txt_si_time.Text = "00";
        txt_so_min.Text = "00";
        txt_so_time.Text = "00";
        ddldate.Text = "Date";
        ddlmonth.Text = "Month";
        ddlyear.Text = "Year";
    }
    string reported = "";
    public void checkentry()                  //function to check already reported on given date or not
    {
        fobj.connect();        
        OleDbDataReader reader;
        string qr = "Select work_date from daily_report where empid='" + lblid.Text + "' and work_date='" + rdate + "'";
        OleDbCommand com = new OleDbCommand(qr,functions.con);
        reader = com.ExecuteReader();
        if (reader.HasRows)
        {
            while (reader.Read())
            {
                reported = "yes";
            }
        }
    }
}
