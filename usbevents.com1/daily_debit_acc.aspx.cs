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

public partial class daily_credit_acc : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
      //  databind();
        if (!IsPostBack)
        { }
    }
    public void databind()
    {
        
       //string qr = "select evnm,Format(expenses_date,'Medium Date'),description,made_by,amount,taken_by from customer_expenses_account where expenses_date between #" + txt_dt_frm.Text + "# and #" + txt_dt_to.Text + "#";
        DataSet ds = new DataSet();
        ds = fobj.getevnm1("select ce.event_name as [evnm],Format(ce.expenses_date,'Medium Date') as [expdate],ce.remark as [remark],ce.paid_by as [paidby],CInt(ce.pay_amount) as [payamt],ce.vendor_name as [vendornm],Format(c.event_date,'Medium Date') as [paydate] from vendor_expenses_account as ce inner join customer as c on ce.event_name=c.event_name where ce.expenses_date between #" + txt_dt_frm.Text + "# and #" + txt_dt_to.Text + "#");
        DataSet ds1 = fobj.getevnm1("select ce.event_name as [evnm],Format(ce.vm_date,'Medium Date') as [expdate],ce.description as [remark],ce.paid_by as [paidby],CInt(ce.advance) as [payamt],ce.vendor_name as [vendornm],Format(c.event_date,'Medium Date') as [paydate] from co_ordinator_manage as ce inner join customer as c on ce.event_name=c.event_name where ce.vm_date between #" + txt_dt_frm.Text + "# and #" + txt_dt_to.Text + "#");
        ds.Tables[0].Merge(ds1.Tables[0]);
        int a = ds.Tables[0].Rows.Count;
        DataView dv = new DataView();
        dv = ds.Tables[0].DefaultView;
        dv.Sort = "paydate ASC";
        if (a != 0)
        {
            gv_credit.DataSource = ds;
            gv_credit.DataBind();
            gv_credit.Visible = true;
        }
        else
        {
            gv_credit.Visible = false;
            lblmsg.Text = "No record found";
        }
        fobj.disconnect();
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        try
        {
            lblmsg.Text = "";
        if (txt_dt_frm.Text != "" && txt_dt_to.Text != "")
        {
            databind();
        }
        else {
            lblmsg.Text = "Please select dates";
        }
    }
    catch (Exception ex)
    {
        lblmsg.Text = ex.Message;
    }
    }
}
