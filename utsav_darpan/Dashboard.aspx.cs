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

public partial class Dashboard : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["uid"] != null)
        {

        }
        else
        {
            Response.Redirect("Admin_Login.aspx");
        }
        
    }
    protected void btnchangepwd_Click(object sender, ImageClickEventArgs e)
    {
        Response.Redirect("change_password.aspx");
    }
    protected void btnreguser_Click(object sender, ImageClickEventArgs e)
    {
        Response.Redirect("chk_reg_user.aspx");
    }
    protected void btncheckprices_Click(object sender, ImageClickEventArgs e)
    {
        Response.Redirect("chk_prices.aspx");
    }
    protected void btnlogout_Click1(object sender, ImageClickEventArgs e)
    {
        Session["uid"] = null;
        Session.Clear();
        Session.Abandon();
        Response.Redirect("Admin_Login.aspx");
    }
}
