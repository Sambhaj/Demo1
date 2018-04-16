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

public partial class profit_loss : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    string tdatefrom, tdate;
    protected void btnsubmit_Click(object sender, EventArgs e)
    {  
        try
        {
            if (txt_dt_frm.Text != "" && txt_dt_to.Text != "")
            {
                txt_credit.Text = "";
                txt_debit.Text = "";
                txt_maintanance.Text = "";
                txt_profit.Text = "";
                lblmsg.Text = "";
                tdatefrom = txt_dt_frm.Text;
                tdate = txt_dt_to.Text;
                databind_credit();
                databind_debit();
                databind_maintance();
                fobj.disconnect();

                int tot = int.Parse(txt_credit.Text) - (int.Parse(txt_debit.Text) + int.Parse(txt_maintanance.Text));
                txt_profit.Text = tot.ToString();
            }
            else
            {
                lblmsg.Text = "Please select Date";
            }

    }
    catch (Exception ex)
    {
        lblmsg.Text = ex.Message;
    }
    }
    public void databind_debit ()
    {      
        string adv = fobj.getvalue("select sum(advance) from co_ordinator_manage where vm_date between #" + tdatefrom + "# and #" + tdate + "#");
        string amtpaid = fobj.getvalue("select sum(pay_amount) from vendor_expenses_account where expenses_date between #" + tdatefrom + "# and #" + tdate + "#");
        if (adv == "")
        {
            adv = "0";
        }
        if (amtpaid == "")
        {
            amtpaid = "0";
        }
        int tot = Convert.ToInt32(adv) + Convert.ToInt32(amtpaid);
        txt_debit.Text = tot.ToString();
    }

    public void databind_credit()
    {
        string adv=fobj.getvalue("select sum(advance) from customer where t_date between #" + tdatefrom + "# and #" + tdate + "#");
        string amtpaid = fobj.getvalue("select sum(pay_amount) from customer_pay_account where pay_date between #" + tdatefrom + "# and #" + tdate + "#");
        if (adv == "")
        {
            adv = "0";
        }
        if (amtpaid == "")
        {
            amtpaid = "0";
        }
        int tot = Convert.ToInt32(adv) + Convert.ToInt32(amtpaid);
        txt_credit.Text = tot.ToString();      
    }


    public void databind_maintance()
    {
        string qr = "select sum(amount) from maintanance_acc where pay_date between #" + tdatefrom + "# and #" + tdate + "#";
        DataSet ds2 = new DataSet();
        fobj.connect();
        OleDbDataAdapter da2 = new OleDbDataAdapter(qr, functions.con);
        da2.Fill(ds2);
        int a = ds2.Tables[0].Rows.Count;
        if (a != 0)
        {
            txt_maintanance.Text = ds2.Tables[0].Rows[0][0].ToString();
        }
        if (txt_maintanance.Text == "")
        {
            txt_maintanance.Text = "0";
        }
    }

}
