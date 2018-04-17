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

public partial class emp_profile : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            if (Session["EmpId"] != null)
            {
                getyear();
                string u_name = Session["EmpId"].ToString();
                lblid.Text = u_name;
                getdata();
            }
        }
    }
    public void getyear()             //function year list
    {
        try
        {
            OleDbDataReader reader;
         fobj.connect();
          string sqlquery = "select * from tyear";
            OleDbCommand com = new OleDbCommand(sqlquery, functions.con);
            reader = com.ExecuteReader();
            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    ddlyear.Items.Add(reader[0].ToString());
                }
            }
            
            reader.Close();
        }
        catch (Exception ex)
        {
        }
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
     
        try
        {
            string dobdate = ddldate.Text + "-" + ddlmonth.Text + "-" + ddlyear.Text;
            string regdate = System.DateTime.Now.ToString("dd-MMM-yyyy");
            string qr = "Update empregi set [emp_name]='" + txtemp_nm.Text + "',[dob]='" + dobdate + "',[emp_position]='" + txtdesig.Text + "',[mob_no]='" + txtmobno.Text + "',[email]='" + txtemail.Text + "',[blood_gr]='" + txt_bloodgr.Text + "',[address]='" + txtaddr.Text + "' where [emp_id]='" + lblid.Text + "'";
            fobj.connect();
            OleDbCommand com = new OleDbCommand(qr,functions.con);
            com.ExecuteNonQuery();
            fobj.disconnect();
            lblmsg.Text = "Employee Profile Updated Successfully";
            disable();
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }
    //protected void Button1_Click(object sender, EventArgs e)
    //{
    //    lblmsg.Text = System.DateTime.Now.ToString("hh:mm tt");
    //}

    public void getdata()
    {
        fobj.connect();
        OleDbDataReader reader;
        string qr = "Select * from empregi where emp_id='" + lblid.Text + "'";
        OleDbCommand com = new OleDbCommand(qr, functions.con);
        reader = com.ExecuteReader();
        if (reader.HasRows)
        {
            while (reader.Read())
            {
                string dob=reader[4].ToString();
                ddldate.Text = dob.Substring(0, 2);
                ddlmonth.Text = dob.Substring(3,3);
                ddlyear.Text = dob.Substring(7, 4);
                txtemp_id.Text = reader[0].ToString();
                txtemp_nm.Text = reader[1].ToString();
                txtdesig.Text = reader[5].ToString();
                txtmobno.Text = reader[6].ToString();
                txtemail.Text = reader[7].ToString();
                txt_bloodgr.Text=reader[8].ToString();
                txtaddr.Text = reader[9].ToString();
            }
        }
        reader.Close();
        fobj.disconnect();
    }
    protected void lnkedit_click(object sender, EventArgs e)
    {
        txt_bloodgr.Enabled = true;
        ddldate.Enabled = true;
        ddlmonth.Enabled = true;
        ddlyear.Enabled = true;
        txtaddr.ReadOnly = false;
        txtdesig.ReadOnly = false;
        txtemail.ReadOnly = false;
        txtemp_nm.ReadOnly = false;
        txtmobno.ReadOnly = false;       
    }
    public void disable()
    {
        txt_bloodgr.Enabled = true;
        ddldate.Enabled = false;
        ddlmonth.Enabled = false;
        ddlyear.Enabled = false;       
        txtaddr.ReadOnly = true;
        txtdesig.ReadOnly = true;
        txtemail.ReadOnly = true;
        txtemp_nm.ReadOnly = true;
        txtmobno.ReadOnly = true; 
    }
}
