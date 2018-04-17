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

public partial class cal_log : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            lbl_tdate.Text =DateTime.Now.ToString("dd-MMM-yyyy");
            //lbltemp.Text= System.DateTime.Now.ToShortDateString();
            ddldate.Attributes.Add("onblur", "checkdate()");
            ddlyear.Attributes.Add("onblur", "checkdate()");
            ddlmonth.Attributes.Add("onblur", "checkdate()");
            txtmob.Attributes.Add("onblur", "mobval()");
            getclient_name();
        }
    }
    string c_time;
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        try
          {
            lblmsg.Text = "";
            if (ddl_client_name.Text != "Select" && txt_remark.Text != "" && txtmob.Text != "")
            {
                string date;
                DateTime b = DateTime.Now.AddHours(12);
               
                string a = b.ToString();
                int c = a.Length;
                if (c == 22)
                {
                    c_time = a.Substring(11, 11);
                }
                else if (c == 21)
                {
                    c_time = a.Substring(10, 11);
                }
                else if (c == 20)
                {
                    c_time = a.Substring(9, 11);
                }
              
                
                
                string qr;
                if (ddldate.Text == "Date" || ddlmonth.Text == "Month" || ddlyear.Text == "Year")
                {
                    date = "01/jan/2000";
                   // qr = "insert into call_log(Call_Date,Client_Name,Contact_No,Remark,Call_Time) values('" + lbl_tdate.Text + "','" + txt_client_name.Text + "','" + txtmob.Text + "','" + txt_remark.Text + "','" + c_time + "')";
                }
                else
                {
                   date = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;                   
                }
                qr = "insert into call_log values('" + lbl_tdate.Text + "','" + ddl_client_name.Text + "','" + txtmob.Text + "','" + txt_remark.Text + "','" + date + "','" + c_time + "')";
                fobj.connect();
                OleDbCommand com = new OleDbCommand(qr, functions.con);
                com.ExecuteNonQuery();
                fobj.disconnect();
                ddldate.Text = "Date";
                ddlmonth.Text = "Month";
                ddlyear.Text = "Year";
                ddl_client_name.Text = "Select";
                txt_remark.Text = "";
                txtmob.Text = "";
            }
            else
            {
                lblmsg.Text = "Please enter all fields";
            }
        }
        catch(Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }
    public void getclient_name()
    {
        fobj.connect();
        string qr = "select client_name from client_reg order by client_name asc";
        DataSet ds=new DataSet();
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
        da.Fill(ds);
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            for (int i = 0; i < a; i++)
            {
                string value = ds.Tables[0].Rows[i][0].ToString();
                ddl_client_name.Items.Add(value);
            }
        }
        fobj.disconnect();
    }

    protected void ddl_client_name_click(object sender, EventArgs e)
    {
        if (ddl_client_name.Text != "Select")
        {
            fobj.connect();
            string qr = "select mob_no from client_reg where client_name='" + ddl_client_name.Text + "' ";
            DataSet ds = new DataSet();
            OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
            da.Fill(ds);
            int a = ds.Tables[0].Rows.Count;
            if (a != 0)
            {
             txtmob.Text = ds.Tables[0].Rows[0][0].ToString();
            }
            fobj.disconnect();
        }
    }
}
