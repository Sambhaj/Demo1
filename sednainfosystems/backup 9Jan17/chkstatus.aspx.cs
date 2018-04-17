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

public partial class chkstatus : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            ddldate.DataSource = fobj.getdata("select distinct(chk_date) from tbsitecheck");
           ddldate.DataTextField=("chk_date");
            ddldate.DataBind();
           
            ddldate.Items.Insert(0, "Select");
        }
    }

    protected void ddldate_SelectedIndexChanged(object sender, EventArgs e)
    {
        DataSet ds = new DataSet();

        if (ddldate.Text != "Select")
        {
            ds = fobj.getdata("select sitename,status from tbsitecheck where chk_date='" + ddldate.Text + "'");
            GridView2.DataSource = ds;
            GridView2.DataBind();
        }
        else
        {
            Response.Redirect("chkstatus.aspx");
        }
    }
}
