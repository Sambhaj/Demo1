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

public partial class customer : System.Web.UI.Page
{
    functions fobj = new functions();
    string sqlquery;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            sqlquery = "select max(customer_id) from customer";
            lblid.Text = Convert.ToString(fobj.getno(sqlquery));
            txt_pmobno.Attributes.Add("onblur", "mobval()");
            txt_bookedby_mobno.Attributes.Add("onblur", "mobval1()");
            txt_advance.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt_tot_amt.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt_balance.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            
            txt_advance.Attributes.Add("onblur", "calc()");
            txt_tot_amt.Attributes.Add("onblur", "calc()");
            txt_facility.Attributes.Add("onfocus", "showpanel()");
            getempnm();

        }
    }
    public void getempnm()
    {
        try
        {
        string qr = "select emp_name from employee_detail";
        DataSet ds = fobj.getevnm1(qr);
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            for (int i = 0; i < a; i++)
            {
                string ab = ds.Tables[0].Rows[i][0].ToString();
                ddl_createdby.Items.Add(ab);
            }
        }
    }
    catch (Exception ex)
    {
        lblmsg.Text = ex.Message;
    }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        try
        {
            if (ddl_createdby.Text != "Select")
            {
                sqlquery = "select max(customer_id) from customer";
                lblid.Text = Convert.ToString(fobj.getno(sqlquery));
                evsname();
                if (a == "yes")
                {
                    // lblunm.Text = "Not Available";
                    txt_evnm.Text = "";
                    lblmsg.Text = "Change event name";
                }
                else
                {
                    // lblunm.Text = "Available";

                    fobj.connect();
                    string t_date = System.DateTime.Now.ToString("dd-MMM-yyyy");
                    string qr = "insert into customer values(" + lblid.Text + ",'" + txt_evnm.Text + "','" + txt_firmname.Text + "','" + txt_pname.Text + "','" + txt_bookedby.Text + "','" + txt_pmobno.Text + "','" + txt_bookedby_mobno.Text + "'," + txt_advance.Text + "," + txt_tot_amt.Text + "," + txt_balance.Text + ",'" + txt_date.Text + "','" + txt_eventadd.Text + "','" + txt_facility.Text + "','" + ddl_createdby.Text + "','" + t_date + "')";
                    OleDbCommand com = new OleDbCommand(qr, functions.con);
                    com.ExecuteNonQuery();

                    fobj.disconnect();
                    lblid.Text = Convert.ToString(fobj.getno(sqlquery));
                    txt_firmname.Text = "";
                    txt_pname.Text = "";
                    txt_bookedby.Text = "";
                    txt_pmobno.Text = "";
                    txt_bookedby_mobno.Text = "";
                    txt_advance.Text = "";
                    txt_tot_amt.Text = "";
                    txt_facility.Text = "";
                    txt_date.Text = "";
                    ddl_createdby.Text = "Select";
                    txt_eventadd.Text = "";
                    txt_evnm.Text = "";
                    txt_balance.Text = "";
                    lblmsg.Text = "Registered Successfully";
                    Response.Redirect("usb_profile.aspx");


                e: ;
                }
            }
            else
            {
                lblmsg.Text = "Please Select Created by";
            }            
    }
    catch (Exception ex)
    {
        lblmsg.Text = ex.Message;
    }
   }
    string b,a;
    public void evsname()
    {
        try
        {
        if (txt_evnm.Text != "")
        {
            string qr = "select event_name from customer where event_name='" + txt_evnm.Text + "'";
            DataSet ds = new DataSet();
            OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
            da.Fill(ds);
            int c = ds.Tables[0].Rows.Count;
            if (c != 0)
            {
                b = ds.Tables[0].Rows[0][0].ToString();

                if (b == txt_evnm.Text)
                {
                    txt_evnm.Text = "";
                   
                    MsgBox("Already registereed...Please enter new event name");
                    txt_evnm.Focus();
                }
                else
                {
                    MsgBox("Event Name is available");
                }
            }
            else
            {
                MsgBox("Event Name is available");
            }
        }
        else
        {
            MsgBox("Please enter Event Name");
        }
    }
    catch (Exception ex)
    {
        lblmsg.Text = ex.Message;
    }
    }
    protected void lnk1_click(object sender, EventArgs e)
    {
        evsname();
    }
    private void MsgBox(string msg)
    {
        string str1 = "<script language='javascript'>";
        str1 = str1 + "alert('" + msg + "' )";
        str1 = str1 + "</script>";
        RegisterStartupScript("ds", str1);
    }
   
}
