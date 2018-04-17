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

public partial class adm_siteinformation : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {


    }
    functions fobj = new functions();
    string siteid;
    protected void btnsubmit_click(object sender, EventArgs e)
    {
        try
        {
            lblmsg.Text = "";
            if (txtcustname.Text != "" || txtmobno.Text != "" || txtreminddate.Text != "" || txtsitename.Text != "")
            {   siteid = fobj.getid("Select max(site_id) from tbsiteinformation");
                    fobj.connect();
                   
                    string qr = "insert into tbsiteinformation values(" + siteid + ",'" + txtsitename.Text + "','" + txtreminddate.Text + "','" + txttype.Text + "','" + txtcustname.Text + "','" + txtmobno.Text + "','" + txtremark.Text + "')";
                    OleDbCommand com = new OleDbCommand(qr, functions.con);
                    com.ExecuteNonQuery();                   
                    fobj.disconnect();
                    Response.Write("<script LANGUAGE='JavaScript' >alert('Report submitted successfully');</script>");
                    clear();

            }
            else
            {
                lblmsg.Text = "Enter all fields";
            }
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }
    public void clear()
    {
        txtcustname.Text = "";
        txtmobno.Text = "";
        txtremark.Text = "";
        txtreminddate.Text = "";
        txtsitename.Text = "";
        txttype.Text = "";
    }
}
