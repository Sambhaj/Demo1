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
using CrystalDecisions.CrystalReports.Engine;
using System.Data.OleDb;
using CrystalDecisions.Shared;

public partial class report_viewer : System.Web.UI.Page
{
    string path;
    protected void Page_Load(object sender, EventArgs e)
    {

       // path=Request.QueryString["rpt"];
         //getrpt();
         

         //ConnectionInfo con1 = new ConnectionInfo();
         //con1.ServerName = "";
         //con1.DatabaseName = "usb";
         //setDBLOGONforREPORT(con1);
         getblnkrpt();
    }
    functions fobj = new functions();
    public void getrpt()
    {
        DataSet ds = new DataSet(); 
        ReportDocument reportdocument = new ReportDocument();
        reportdocument.Load(Server.MapPath(path));
       fobj.connect();
        OleDbDataAdapter da = new OleDbDataAdapter("select * from customer_expenses_account",functions.con );
        da.Fill(ds);
        reportdocument.SetDataSource(ds);
        reportdocument.SetDatabaseLogon("", "usb");
        //reportdocument.RecordSelectionFormula = "{call_log.Call_Date}=DateTime('" + valu + "')";
        CrystalReportViewer1.ReportSource = reportdocument;
        CrystalReportViewer1.DisplayGroupTree = false;
    }

    public void getblnkrpt()
    {
        ReportDocument doc = new ReportDocument();
        string pth = Server.MapPath("blank.rpt");
        doc.Load(pth);
        fobj.connect();
        OleDbDataAdapter da = new OleDbDataAdapter("select * from customer_expenses_account", functions.con);
        DataSet ds = new DataSet();
        DataTable dt = new DataTable();
        da.Fill(ds,"data");                     
        doc.SetDataSource(ds.Tables["data"]);
        CrystalReportViewer1.ReportSource = doc;
        CrystalReportViewer1.DisplayGroupTree = false;
    }

    private void setDBLOGONforREPORT(ConnectionInfo myconnectioninfo)
    {
        TableLogOnInfos mytableloginfos = new TableLogOnInfos();
        mytableloginfos = CrystalReportViewer1.LogOnInfo;
        foreach (TableLogOnInfo myTableLogOnInfo in mytableloginfos)
        {
            myTableLogOnInfo.ConnectionInfo = myconnectioninfo;
        }
    }
}
