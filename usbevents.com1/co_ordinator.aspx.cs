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

public partial class co_ordinator : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            txt_mobno.Attributes.Add("onblur", "mobval()");
            txt_mobno.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            
        }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        fobj.connect();
        string qr = "insert into co_ordinator values('" + txt_nm.Text + "','" + txt_address.Text + "','" + txt_specilities.Text + "','" + txt_costdesc.Text + "','" + txt_mobno.Text + "')";
        OleDbCommand com = new OleDbCommand(qr, functions.con);
        com.ExecuteNonQuery();
        fobj.disconnect();
        txt_address.Text = "";
        txt_costdesc.Text = "";
        txt_nm.Text = "";
        txt_specilities.Text = "";
        txt_mobno.Text = "";
        lblmsg.Text = "Submitted Successfully";
    }
}
