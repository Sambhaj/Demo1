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

public partial class Employee_home : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["EmpId"] != null && Session["empname"] != null)
        {
            string id, name;
            id = Session["EmpId"].ToString();
            name = Session["empname"].ToString();
            if (id == "2")
            {
                a1.Visible = true;
                a2.Visible = true;
                a3.Visible = true;
            }
        }

    }
}
