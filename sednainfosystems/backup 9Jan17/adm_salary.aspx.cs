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

public partial class salary_fill_grid : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        string a = Request.QueryString["value"];
        if (a == "1")
        {
            lblmsg.Text = "Salary Data Submitted Successfully";
        }
        if (!IsPostBack)
        {
            getclient_name();
        }
    }
    functions fobj = new functions();
    public void getclient_name()
    {
        fobj.connect();
        string qr = "select emp_name from empregi order by emp_name asc";
        DataSet ds = new DataSet();
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
        da.Fill(ds);
        DataTable dt = new DataTable();
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            //ds.Tables[0].Columns.Add("gros", typeof(int));
            //ds.Tables[0].Columns.Add("prt", typeof(int));
            //ds.Tables[0].Columns.Add("tot", typeof(int));

            Gridview1.DataSource = ds;
            Gridview1.DataBind();

        }
        fobj.disconnect();
    }
    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        if (ddlmonth.Text != "Month" || ddlyear.Text != "Year")
        {
            int netpt = 0;
            int totnet_sal = 0;
            string dtmnth = ddlmonth.Text + "-" + ddlyear.Text;
            string ok = chkmonth();
            if (ok == "ok")
            {
                fobj.connect();
                foreach (GridViewRow row in Gridview1.Rows)
                {
                    string empname = row.Cells[0].Text;
                    string basic = ((row.Cells[1].FindControl("txt_basic")) as TextBox).Text;
                    string ta = (((row.Cells[2].FindControl("txt_ta")) as TextBox).Text);
                    string da = (((row.Cells[3].FindControl("txt_da")) as TextBox).Text);
                    string incentive = (((row.Cells[4].FindControl("txt_incentive")) as TextBox).Text);
                    string leave = (((row.Cells[5].FindControl("txt_leave")) as TextBox).Text);
                    string gross = (((row.Cells[6].FindControl("txt_gross")) as TextBox).Text);
                    string prof_tax = (((row.Cells[7].FindControl("txt_prof")) as TextBox).Text);
                    string net_sal = (((row.Cells[8].FindControl("txt_net")) as TextBox).Text);
                   
                    string qr = "insert into salary_tbl values('" + empname + "','" + dtmnth + "'," + basic + "," + ta + "," + da + "," + incentive + "," + leave + "," + gross + "," + prof_tax + "," + net_sal + ")";
                    OleDbCommand com = new OleDbCommand(qr, functions.con);
                    com.ExecuteNonQuery();
                    netpt = netpt + Convert.ToInt32(prof_tax);
                    totnet_sal = totnet_sal + Convert.ToInt32(net_sal);
                }

                string qr1 = "insert into sal_tot values('" + dtmnth + "'," + netpt + "," + totnet_sal + ")";
                OleDbCommand com1 = new OleDbCommand(qr1, functions.con);
                com1.ExecuteNonQuery();
                fobj.disconnect();

                ddlmonth.Text = "Select";
                ddlyear.Text = "Select";
                lblmsg.Text = "Salary Data Submitted Successfully";
                Response.Redirect("adm_salary.aspx?value=1");
                
            }
            else
            { 
                // string dtmnth = ddlmonth.Text + "-" + ddlyear.Text;
                 lblmsg.Text = "Salary sheet for month " + dtmnth + " is already submitted";
            }
        }
        else
        {
            lblmsg.Text = "Please Select Month and year";
        }
    }

    protected void Gridview1_RowDataBound(object sender, GridViewRowEventArgs e)
    {
        if (e.Row.RowType == DataControlRowType.DataRow)
        {
            TextBox txt1 = e.Row.FindControl("txt_leave") as TextBox;
            TextBox txt2 = e.Row.FindControl("txt_incentive") as TextBox;
            TextBox txt3 = e.Row.FindControl("txt_da") as TextBox;
            TextBox txt4 = e.Row.FindControl("txt_ta") as TextBox;
            TextBox txt5 = e.Row.FindControl("txt_basic") as TextBox;
            TextBox txt6 = e.Row.FindControl("txt_gross") as TextBox;
            TextBox txt7 = e.Row.FindControl("txt_prof") as TextBox;
            TextBox txt8 = e.Row.FindControl("txt_net") as TextBox;
            string leave = txt1.Text;
            txt1.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt2.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt3.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt4.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt5.Attributes.Add("onkeydown", "return isNumeric(event.keyCode);");
            txt1.Attributes.Add("onblur", "calc(" + e.Row.RowIndex + ")");

            //txt1.Attributes.Add("onblur", "chkno(5," + e.Row.RowIndex + ")");
            txt2.Attributes.Add("onblur", "chkno(4," + e.Row.RowIndex + ")");
            txt3.Attributes.Add("onblur", "chkno(3," + e.Row.RowIndex + ")");
            txt4.Attributes.Add("onblur", "chkno(2," + e.Row.RowIndex + ")");
            txt5.Attributes.Add("onblur", "chkno(1," + e.Row.RowIndex + ")");
            txt6.Attributes.Add("onblur", "chkno(6," + e.Row.RowIndex + ")");
            txt7.Attributes.Add("onblur", "chkno(7," + e.Row.RowIndex + ")");
            txt8.Attributes.Add("onblur", "chkno(8," + e.Row.RowIndex + ")");
        }
   }
    string yes;
    public string chkmonth()
    {
        fobj.connect();
        string dtmnth = ddlmonth.Text + "-" + ddlyear.Text;
        string qr = "select sal_month from salary_tbl where sal_month='" + dtmnth + "'";
        DataSet ds = new DataSet();
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
        da.Fill(ds);
        DataTable dt = new DataTable();
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            yes = "yes";
        }
        else
        {
            yes = "ok";
        }
        fobj.disconnect();
        return yes;
    }
}