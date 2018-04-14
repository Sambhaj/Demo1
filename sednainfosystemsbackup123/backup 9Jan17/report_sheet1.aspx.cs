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

public partial class report_sheet : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {        
            if (!IsPostBack)
            {
                if (Session["EmpId"] != null)
                {
                    string u_name = Session["EmpId"].ToString();                 
                    lblid.Text = u_name;
                }
            }        
    }
    protected void btnsearch_click(object sender, EventArgs e)
    {
        lblmsg.Text = "";       
        DataSet ds = new DataSet();
        
        string sdt = ddlmonth.Text + "-" + ddlyear.Text;
        //string qr = "Select work_date as Workdate,signin_time as SignInTime,signout_time as SignOutTime,11am as 11Am,12am,13am,14am,15am,16am,17am,18am,19am from daily_report where work_date like '%" + sdt + "' and empid='" + lblid.Text + "'";
        string qr = "Select * from daily_report where work_date like '%" + sdt + "' and empid='" + lblid.Text + "'";
        fobj.connect();
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
        da.Fill(ds);
        int a=ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            dvreport.Visible = true;
            dvreport.DataSource = ds;
            dvreport.DataBind();
        }
        else {
            dvreport.Visible = false;
            lblmsg.Text = "Record not found";
        
        }
        fobj.disconnect();
    }
}
