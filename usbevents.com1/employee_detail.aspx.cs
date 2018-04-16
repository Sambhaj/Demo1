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

public partial class employee_detail : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            txt_mobno.Attributes.Add("onblur", "mobval()");
        }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        try
        {
            fobj.connect();
            string qr = "insert into employee_detail values('" + txt_name.Text + "','" + txt_mobno.Text + "','" + txt_add.Text + "','" + txt_date.Text + "','" + txt_ref.Text + "')";
            OleDbCommand com = new System.Data.OleDb.OleDbCommand(qr, functions.con);
            com.ExecuteNonQuery();
            fobj.disconnect();
            txt_ref.Text = "";
            txt_name.Text = "";
            txt_mobno.Text = "";
            txt_add.Text = "";
            txt_date.Text = "";
            lblmsg.Text = "Registered Successfully";
            Response.Redirect("usb_profile.aspx");
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }
}
