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

public partial class changepassword : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        try
        {
            string u_name = Session["EmpId"].ToString();
            lblid.Text = u_name;
            txtconfpas.Attributes.Add("onblur", "chk()");
        }
        catch (Exception ex)
        { }
       
    }
    functions fobj = new functions();
    protected void btnsubmit_Click(object sender, EventArgs e)
    {       
        try
        {
            if (txtpass.Text != "" && txtoldpass.Text != "" && txtconfpas.Text != "")
            {
                if (txtpass.Text == txtconfpas.Text)
                {
                    chkpas();
                    if (i == 1)
                    {
                        fobj.connect();                                                
                        string qr = "UPDATE empregi set [password]= '" + txtpass.Text + "' where [emp_id]= '" + lblid.Text + "'";
                        OleDbCommand com = new OleDbCommand(qr,functions.con);
                        com.ExecuteNonQuery();                        
                        lblmsg.Text = "Password changed successfully";
                        fobj.disconnect();
                    }
                    else
                    {
                        lblmsg.Text = "You entered wrong old password";
                    }
                }
                else
                {
                    lblmsg.Text = "Password should be same";
                }
            }
            else
            {
                lblmsg.Text = "Please enter all the fields";
            }
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }    
    }
    int i;
    public void chkpas()   //code to check user is avalable or not
    {
        i = 0;
        try
        {
            OleDbDataReader reader;
            fobj.connect();            
            string sqlquery = "select password from empregi where emp_id='" + lblid.Text + "' and password ='" + txtoldpass.Text + "' ";
            OleDbCommand com = new OleDbCommand(sqlquery,functions.con);
            reader = com.ExecuteReader();
            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    i = 1;
                }
            }
            fobj.disconnect();
            reader.Close();
        }
        catch (Exception ex)
        {
        }
    }    
}
