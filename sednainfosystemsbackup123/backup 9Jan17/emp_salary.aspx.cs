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

public partial class emp_salary : System.Web.UI.Page
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
    functions fobj = new functions();
    protected void btnchk_click(object sender, EventArgs e)
    {
        if (ddlmonth.Text != "Month" || ddlyear.Text != "Year")
        {
            lblmsg.Text = "";
            DataSet ds = new DataSet();
            string sdt = ddlmonth.Text + "-" + ddlyear.Text;
            string qr = "Select basic,ta,da,incentive,leave,gross_sal,prof_tax,net_sal from salary_tbl where sal_month like '%" + sdt + "' and emp_name='" + lblnm.Text + "'";
            fobj.connect();
            OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
            da.Fill(ds);
            int a = ds.Tables[0].Rows.Count;
            if (a != 0)
            {
                gv.Visible = true;
                gv.DataSource = ds;
                gv.DataBind();
            }
            else
            {
                lblmsg.Text = "Record not found";
                gv.Visible = false;
            }
            fobj.disconnect();
        }
        else
        {
            lblmsg.Text = "Please select date";
        }
    }
}
