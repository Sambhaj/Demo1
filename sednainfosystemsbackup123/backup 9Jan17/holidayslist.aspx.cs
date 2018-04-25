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

public partial class holidayslist : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        databind();
    }
    functions fobj = new functions();
    public void databind()
    {
        //string qr = "select hdate as Date,particular as Holiday from holidays";
        string qr = "select * from holidays";
        DataSet ds = new DataSet();
        fobj.connect();
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
        da.Fill(ds);
        gv1.DataSource = ds;
        gv1.DataBind();
        fobj.disconnect();
    }
}
