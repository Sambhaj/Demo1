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

public partial class emp_dailyreport : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["usernm"] != null && Session["password"] != null)
        {
            if (!IsPostBack)
            {
                ddlemplist.Attributes.Add("onblur", "copydata()");
                string username, password;
                username = Session["usernm"].ToString();
                password = Session["password"].ToString();
                lblnm.Text = username;
                getempid();
                ddlemplist.Attributes.Add("onblur", "SetupFilter(ddlemplist, dvreport, empid)");
            }
        }
        else
        {
            Response.Redirect("Default.aspx");
        }
    }
    public void getempid()             //function year list
    {
        try
        {
            OleDbDataReader reader;
            fobj.connect();
            string sqlquery = "select emp_id from empregi";
            OleDbCommand com = new OleDbCommand(sqlquery, functions.con);
            reader = com.ExecuteReader();
            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    ddlemplist.Items.Add(reader[0].ToString());
                }
            }
            fobj.disconnect();
            reader.Close();
        }
        catch (Exception ex)
        {
        }
    }
    
    protected void btnsearch_click(object sender, EventArgs e)
    {
        lblmsg.Text = "";
        DataSet ds = new DataSet();
        string sdt = ddlmonth.Text + "-" + ddlyear.Text;
        string qr = "Select * from daily_report where work_date like '%" + sdt + "' order by empid"; // and empid='" + ddlemplist.Text + "'";
        fobj.connect();
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
        da.Fill(ds,"report");
        DataTable dt = ds.Tables["report"];
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            dvreport.Visible = true;
            dvreport.DataSource = ds.Tables["report"];
            dvreport.DataBind();
            Session["report"] = dt;
            ddlemplist.Visible = true;
            btncheck.Visible = true;
        }
        else
        {
            dvreport.Visible = false;
            lblmsg.Text = "Record not found";
            ddlemplist.Visible = false;
            btncheck.Visible = false;
        }
        fobj.disconnect();
    }
    protected void btn_logout_Click1(object sender, EventArgs e)
    {
        Session.RemoveAll();
        Session.Abandon();
        Response.Redirect("Default.aspx");
    }
    protected void ddlemplist_SelectedIndexChanged(object sender, EventArgs e)
    {        
   //    DataTable dt = Session["report"] as DataTable;
   //     DataTable dt1=dt.Clone();
   //     //DataTable dt1 = dt.Copy();
   ////dt =(Session["report"] as DataTable).Select("empid = " + ddlemplist.Text + "").c;
   //     foreach (DataRow dr in dt.Rows)
   //     {
   //         if (dr["empid"].ToString() == ddlemplist.Text)
   //         {
   //             dt1.Rows.Add(dr.ItemArray);
   //         }
   //     }

   //         dvreport.DataSource = dt1;
   //         dvreport.DataBind();
      
    }
}
