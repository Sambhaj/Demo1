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

public partial class empmaster : System.Web.UI.MasterPage
{
    protected void Page_Load(object sender, EventArgs e)
    {
       
            string u_name = "", psw = "";
            if (Session["EmpId"] != null && Session["empname"] != null)
            {
                u_name = Session["empname"].ToString();
                psw = Session["EmpId"].ToString();
                lblid.Text = u_name;  
             
            }
            else
            {
                Response.Redirect("Default.aspx");
            }
       
    }
    protected void btn_logout_Click1(object sender, EventArgs e)
    {
        Session.RemoveAll();
        Session.Abandon();
        Response.Redirect("Default.aspx");
    }
}
