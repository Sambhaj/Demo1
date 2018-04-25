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

public partial class adm_emp_drprt : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["usernm"] != null && Session["password"] != null)
        {
            if (!IsPostBack)
            {
                getempregdt();
                // getdailyrptdt();
                string username, password;
                username = Session["usernm"].ToString();
                password = Session["password"].ToString();

                lblnm.Text = username;
            }
        }
        else
        {
            Response.Redirect("Default.aspx");
        }
    }
    public void getempregdt()
    {
        DataSet ds = new DataSet();
        fobj.connect();
        string qr = "Select emp_id,emp_id,emp_name from empregi";
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
        da.Fill(ds);
        grid1.DataSource = ds;
        grid1.DataBind();
        fobj.disconnect();

    }

    public void getdailyrptdt()
    {
        DataSet ds = new DataSet();
        fobj.connect();
        //lblheight.Text = "237";
        //lblwidth.Text = "162";
        lblheight.Text = "237";
        lblwidth.Text = "390";
        string sdt = ddlmonth.Text + "-" + ddlyear.Text;
        string qr = "Select empid as [Employee Id],work_date as [Working Date],signin_time as [SignIn Time],signout_time as [SignOut Time],[11am] as [11 Am],[12pm] as [12 Pm],[13pm] as [13 Pm],[14pm] as [14 Pm],[15pm] as [15 Pm],[16pm] as [16 Pm],[17pm] as [17 Pm],[18pm] as [18 Pm],[19pm] as [19 Pm],[20pm] as [20 Pm],report_file as [Reportin File],reporting_time as [REporting Time],reporting_date as [Reporting Date] from daily_report where work_date like '%" + sdt + "'";
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
        da.Fill(ds);
        grid2.DataSource = ds;
        grid2.DataBind();
        fobj.disconnect();
    }
    protected void grid1_RowDataBound(object sender, GridViewRowEventArgs e)       //this is event binding javascript to button in grid view finding control and selcted row in gridview
    {
        if (e.Row.RowType == DataControlRowType.DataRow)
        {
            Button btn1 = (Button)e.Row.FindControl("btnselect");
           btn1.Attributes.Add("onmouseout()", "pnvistru() ");
            Button btn = (Button)e.Row.FindControl("lnkid");
           //btn.Attributes.Add("onmouseout()", "pnvistru()");
          // btn.Attributes["onmouseover"] = "javascript:return copydata('" + e.Row.RowIndex + "')";       //adding js event to selected row button           
           btn1.Attributes["onclick"] = "javascript:return copydata('" + e.Row.RowIndex + "')";       //adding js event to selected row button           
        }
    }
    protected void btn_logout_Click1(object sender, EventArgs e)
    {
        Session.RemoveAll();
        Session.Abandon();
        Response.Redirect("Default.aspx");
    }
    protected void btnsearch_click(object sender, EventArgs e)
    {
        getdailyrptdt();
    }
}
