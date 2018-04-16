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

public partial class vendor_pay_account : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            ddl_evnm.DataSource = fobj.getevnm1("select event_name,event_date from customer");
            ddl_evnm.DataTextField = "event_name";
            ddl_evnm.DataBind();
            ddl_evnm.Items.Insert(0, "Select");

            ddlpaidby.DataSource = fobj.getevnm1("select emp_name from employee_detail");
            ddlpaidby.DataTextField = "emp_name";
            ddlpaidby.DataBind();
            ddlpaidby.Items.Insert(0, "Select");

            
            txt_balance.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt_amt.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt_tot_amt.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
          

        }
    }
    protected void ddl_evnm_click(object sender, EventArgs e)
    {
        lbldt.Text = fobj.getevdate(ddl_evnm.Text);
        ddl_vendornm.DataSource = fobj.getevnm1("select DISTINCT vendor_name from co_ordinator_manage where event_name='" + ddl_evnm.Text + "'");
        ddl_vendornm.DataTextField = "vendor_name";
        ddl_vendornm.DataBind();
        ddl_vendornm.Items.Insert(0, "Select");

        txt_tot_amt.Text = "";
        txt_remark.Text = "";
        txt_date.Text = "";
        txt_balance.Text = "";
        txt_amt.Text = "";
        ddlpaidby.Text = "Select";
       
        
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        try
        {
            if (ddl_evnm.Text != "Select")
            {
                if (ddl_vendornm.Text != "Select")
                {
                    if (Convert.ToInt32(txt_amt.Text) <= Convert.ToInt32(txt_balance.Text))
                    {
                        fobj.connect();
                        int bal = Convert.ToInt32(txt_balance.Text) - Convert.ToInt32(txt_amt.Text);
                        string qr = "insert into vendor_expenses_account values('" + ddl_evnm.Text + "','" + txt_date.Text + "'," + txt_amt.Text + ",'" + txt_tot_amt.Text + "','" + bal.ToString() + "','" + ddlpaidby.Text + "','" + txt_remark.Text + "','" + ddl_vendornm.Text + "')";
                        OleDbCommand com = new OleDbCommand(qr, functions.con);
                        com.ExecuteNonQuery();
                        fobj.disconnect();
                        lblmsg.Text = "Registered Successfully";
                        Response.Redirect("usb_profile.aspx");
                    }
                    else
                    {
                        lblmsg.Text = "Pay amount should not greater that Total amount";
                        txt_amt.Text = "";
                    }
                }
                else
                {
                    lblmsg.Text = "Please select Vendor Name";
                }
            }
            else
            {
                lblmsg.Text = "Please select Event name";
            }
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }
    int a;
    protected void ddl_vendornm_click(object sender, EventArgs e)
    {
        txt_tot_amt.Text = "";
        txt_remark.Text = "";
        txt_date.Text = "";
        txt_balance.Text = "";
        txt_amt.Text = "";
        ddlpaidby.Text = "Select";
        if (ddl_vendornm.Text != "Select")
        {
            DataSet ds = new DataSet();
            ds = fobj.getevnm1("Select cost_final,advance from co_ordinator_manage where event_name='" + ddl_evnm.Text + "' and vendor_name='" + ddl_vendornm.Text + "'");
            txt_tot_amt.Text = ds.Tables[0].Rows[0][0].ToString();
            int adv = Convert.ToInt32(ds.Tables[0].Rows[0][1].ToString());
            ds = fobj.getevnm1("select sum(pay_amount) from vendor_expenses_account where event_name='" + ddl_evnm.Text + "' and vendor_name='" + ddl_vendornm.Text + "'");
            string val = ds.Tables[0].Rows[0][0].ToString();
            if (val != "")
            {
                a = Convert.ToInt32(val);
            }
            else
            {
                a = 0;
            }
            int bal = Convert.ToInt32(txt_tot_amt.Text) - (adv + a);    
            txt_balance.Text = bal.ToString();
        }
    }
}
