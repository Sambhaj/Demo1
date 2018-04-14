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
using System.IO;
public partial class adm_rpd_down : System.Web.UI.Page
{
    functions fobj = new functions();
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            getid();
           // Label1.Text = System.DateTime.UtcNow.ToString();
        }
    }
    public void getid()
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
    protected void ddlemplist_SelectedIndexChanged(object sender, EventArgs e)
    {
        DataSet ds = new DataSet();
        string dt = ddlmonth.Text + "-" + ddlyear.Text;
        string qr = "Select empid,work_date,report_file from daily_report where empid='" + ddlemplist.Text + "' and work_date like '%" + dt + "'";
        fobj.connect();
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
        da.Fill(ds);
        int a = ds.Tables[0].Rows.Count;
        if (a != 0)
        {
            gvdon.Visible = true;
            gvdon.DataSource = ds;
            gvdon.DataBind();
        }
        else
        {
            gvdon.Visible = false;        
        }            
    }
    string rptfilename;
    protected void gvdon_SelectedIndexChanged(object sender, EventArgs e)
    {
        rptfilename = gvdon.SelectedRow.Cells[2].Text;
       // string[] filePaths = Directory.GetFiles(Server.MapPath("~/report_file/"));
       // Response.ContentType = ContentType;
       // Response.AppendHeader("Content-Disposition", "attachment; filename=" + rptfilename);
       //// Response.WriteFile(filePaths);
       // Response.End();
        Response.Redirect("~/report_file/"+ rptfilename);
    }
}
