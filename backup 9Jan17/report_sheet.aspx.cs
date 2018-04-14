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
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["EmpId"] != null && Session["empname"] != null)
        {
            if (!IsPostBack)
            {
                string u_name = "", nm = "";
                u_name = Session["EmpId"].ToString();
                nm = Session["empname"].ToString();
                lblid.Text = u_name;
                lblnm.Text = nm;
            }
        }
        else
        {
            Response.Redirect("Default.aspx");
        }
    }
     OleDbConnection con = new OleDbConnection();
    public void connect()
    {
        //string a = Server.MapPath("sednadb.mdb");
        //con=new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source='" + a + "'");    
        con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source=|DataDirectory|sednadb.mdb");
    }
    protected void btnsearch_click(object sender,EventArgs e)
    {
        lblmsg.Text = "";       
        DataSet ds=new DataSet();             
        string sdt=ddlmonth.Text + "-" + ddlyear.Text;
        //string qr = "Select work_date as Workdate,signin_time as SignInTime,signout_time as SignOutTime,11am as 11Am,12am,13am,14am,15am,16am,17am,18am,19am from daily_report where work_date like '%" + sdt + "' and empid='" + lblid.Text + "'";
        string qr = "Select * from daily_report where work_date like '%" + sdt + "' and empid='" + lblid.Text + "'";
        connect();
        con.Open();
        OleDbDataAdapter da=new OleDbDataAdapter(qr,con);      
        da.Fill(ds);
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            dvreport.Visible = true;
            dvreport.DataSource = ds;
            dvreport.DataBind();
        }
        else
        {
            dvreport.Visible = false;
            lblmsg.Text = "Record not found";
        }
        con.Close();       
    }
    protected void btn_logout_Click1(object sender, EventArgs e)
    {
        Session.RemoveAll();
        Session.Abandon();
        Response.Redirect("Default.aspx");
    }
}