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

public partial class daily_debit_acc : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        { }
        //databind();
    }
    public void databind()
    {        
        lblmsg.Text = "";
        DataSet ds = fobj.getevnm1("select ce.evnm as [evnm],Format(c.event_date,'Medium Date') as [evnt_date],Format(ce.pay_date,'Medium Date') as [paydate],CStr(ce.pay_amount) as [payamt],ce.paid_by as [paidby],ce.taken_by as [takenby] from customer_pay_account as ce inner join customer as c on c.event_name=ce.evnm where ce.pay_date between #" + txt_dt_frm.Text + "# and #" + txt_dt_to.Text + "#");
        DataSet ds1 = fobj.getevnm1("select event_name as [evnm],Format(event_date,'Medium Date') as [evnt_date],Format(t_date,'Medium Date') as [paydate],CStr(advance) as [payamt],booked_by as [paidby],created_by as [takenby] from customer where t_date between #" + txt_dt_frm.Text + "# and #" + txt_dt_to.Text + "#");
        ds.Tables[0].Merge(ds1.Tables[0]); 
        int a = ds.Tables[0].Rows.Count;
        DataView dv = new DataView();
        dv = ds.Tables[0].DefaultView;
        dv.Sort = "paydate ASC";
        if (a != 0)
        {
            gv_debit.DataSource = dv;
            gv_debit.DataBind();
            gv_debit.Visible = true;
        }
        else
        {
            gv_debit.Visible = false;
            lblmsg.Text = "No record found";
        }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        try
        {
            if (txt_dt_frm.Text != "" && txt_dt_to.Text != "")
            {
                databind();
            }
            else
            {
                lblmsg.Text = "Please select dates";
            }
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }
}
