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

public partial class sitecheck : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            bindgrid();
        }
    }
    functions fobj = new functions();
    public void bindgrid()
    {          //code to bind data with gridview
        try
        {
            fobj.connect();
            string query = "select * from tbsiteinformation";
            OleDbDataAdapter ad = new OleDbDataAdapter(query,functions.con);
            DataSet ds = new DataSet();
            ad.Fill(ds);
            GridView1.DataSource = ds;
            GridView1.DataBind();
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
        finally
        {
            fobj.disconnect();
        }
    } 
    
    protected void GridView1_PageIndexChanging(object sender, GridViewPageEventArgs e)         //code to change index
    {
        GridView1.PageIndex = e.NewPageIndex;
        bindgrid();
    }

    protected void btnsave_Click(object sender, EventArgs e)         //delete selected record
    {
        try
        {
            if (txt_date.Text != "")
            {
                chkdt();
                if (dbdt != txt_date.Text)
                { fobj.connect();
                    foreach (GridViewRow row in GridView1.Rows)
                    {
                        CheckBox cb = (CheckBox)row.FindControl("CheckBox1") as CheckBox;
                        if (cb != null)
                        {
                            if (cb.Checked)
                            {
                                int prid = Convert.ToInt32(GridView1.DataKeys[row.RowIndex].Value.ToString());
                               
                                string sitename = GridView1.Rows[row.RowIndex].Cells[2].Text.ToString();
                                string qr = "insert into tbsitecheck values(" + prid + ",'" + txt_date.Text + "','" + sitename + "',Yes)";
                                OleDbCommand cmd = new OleDbCommand(qr, functions.con);
                                cmd.ExecuteNonQuery();
                               
                            }
                            else
                            {
                                int prid = Convert.ToInt32(GridView1.DataKeys[row.RowIndex].Value.ToString());
                                
                                string sitename = GridView1.Rows[row.RowIndex].Cells[2].Text.ToString();
                                string qr = "insert into tbsitecheck values(" + prid + ",'" + txt_date.Text + "','" + sitename + "',No)";
                                OleDbCommand cmd = new OleDbCommand(qr, functions.con);
                                cmd.ExecuteNonQuery();
                              
                            }
                        }
                    }
                    fobj.disconnect();
                    Response.Redirect("sitecheck.aspx");
                }
                else
                {
                    Response.Write("<script>alert('You already maintained status form date " + txt_date.Text + "')</script>");
                    lblmsg.Text = "You already maintained status form date " + txt_date.Text;
                }
            }
            else
            {
                Response.Write("<script>alert('Please select Date')</script>");    
            }
        }
        catch (Exception ex)
        {
            lblmsg.Text = ex.Message;
        }
    }


    protected void btndelete_Click(object sender, EventArgs e)
    {
            foreach (GridViewRow row in GridView1.Rows)
            {
                CheckBox cb = (CheckBox)row.FindControl("CheckBox1") as CheckBox;
                if (cb != null)
                {
                    if (cb.Checked)
                    {
                        int prid = Convert.ToInt32(GridView1.DataKeys[row.RowIndex].Value.ToString());
                        fobj.connect();
                        OleDbCommand cmd = new OleDbCommand("delete * FROM tbsiteinformation where site_id=" + prid + "", functions.con);
                        cmd.ExecuteNonQuery();
                        fobj.disconnect();
                        
                    }
                }
            }
            bindgrid();
    }

    string dbdt; 
    public void chkdt()
    {        
        fobj.connect();
        OleDbDataReader reader;
        string qr="select distinct(chk_date) from tbsitecheck where chk_date='" + txt_date.Text + "'";
        OleDbCommand com = new OleDbCommand(qr,functions.con);
        reader = com.ExecuteReader();
        if (reader.HasRows)
        {
            while (reader.Read())
            {
                dbdt = reader[0].ToString();
            }
        }
        fobj.disconnect();        
    }
}
