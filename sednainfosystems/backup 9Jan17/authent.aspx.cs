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
using MySql.Data.MySqlClient;

public partial class authent : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        if (txtmobno.Text.Length == 10)
        {
            Response.Redirect("chatwindow.aspx?value=" + txtmobno.Text + "&nm=" + txtnm.Text);
        }
        else
        {
            lblmsg.Text = "Mobile no should 10 digit";
        }
    }
}
