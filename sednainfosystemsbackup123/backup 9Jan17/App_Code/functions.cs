using System;
using System.Data;
using System.Configuration;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Data.OleDb;

public class functions
{
    public static OleDbConnection con;
	public functions()
	{
	}
    public DataSet getdata(string qr)
    {
        DataSet ds = new DataSet();
        connect();
        OleDbDataAdapter da = new OleDbDataAdapter(qr, con);
        da.Fill(ds);
        disconnect();
        return ds;
    }
    public string getid(string qr)
    {
        int uid;
        connect();
        DataSet ds = new DataSet();
        OleDbDataAdapter da = new OleDbDataAdapter(qr, con);

        da.Fill(ds);
        string a = ds.Tables[0].Rows[0][0].ToString();
        if (a != "")
        {
            uid = Convert.ToInt32(a);
            uid++;
        }
        else
        {
            uid = 1;
        }
        disconnect();
        return uid.ToString();
    }
    public void connect()
    {
        con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source=|DataDirectory|sednadb.mdb");
        con.Open();
    }
    public void disconnect()
    {
        con.Close();
    }

    string rdate, yes;
    public string checkdate(string ddldate, string ddlmonth, string ddlyear)
    {
        rdate = ddldate + "-" + ddlmonth + "-" + ddlyear;
        string todays_date = System.DateTime.Now.ToString("dd-MMM-yyyy");
        string tdate = System.DateTime.Now.ToString("dd");
        string tmonth = System.DateTime.Now.ToString("MMM");
        string tyear = System.DateTime.Now.ToString("yyyy");
        int tdt = int.Parse(tdate);
        int rptdate = int.Parse(ddldate);
        if (tyear == ddlyear)
        {
            if (tmonth == ddlmonth)
            {
                if (rptdate <= tdt && rptdate >= tdt - 3)
                {
                    yes = "yes";
                }
            }
            else
            {
                int dys;
                int tmonth1 = int.Parse(getmonthno(tmonth));
                int umonth1 = int.Parse(getmonthno(ddlmonth));
                if (umonth1 < tmonth1)
                {
                    dys = int.Parse(getdays(ddlmonth));
                    tdt = tdt + dys;

                    if (rptdate <= tdt && rptdate >= tdt - 3)
                    {
                        yes = "yes";
                    }
                }
            }
        }
        return yes;
    }
    string dys;
    public string getdays(string mnth)
    {
        if (mnth == "Jan")
        {
            dys = "31";
        }
        else if (mnth == "Feb")
        {
            dys = "28";
        }
        else if (mnth == "Mar")
        {
            dys = "31";
        }
        else if (mnth == "Apr")
        {
            dys = "30";
        }
        else if (mnth == "May")
        {
            dys = "31";
        }
        else if (mnth == "Jun")
        {
            dys = "30";
        }
        else if (mnth == "Jul")
        {
            dys = "31";
        }
        else if (mnth == "Aug")
        {
            dys = "31";
        }
        else if (mnth == "Sep")
        {
            dys = "30";
        }
        else if (mnth == "Oct")
        {
            dys = "31";
        }
        else if (mnth == "Nov")
        {
            dys = "30";
        }
        else if (mnth == "Dec")
        {
            dys = "31";
        }
        return dys;
    }


    string m;
    public string getmonthno(string month1)
    {
        if (month1 == "Jan")
        {
            m = "1";
        }
        else if (month1 == "Feb")
        {
            m = "2";
        }
        else if (month1 == "Mar")
        {
            m = "3";

        }
        else if (month1 == "Apr")
        {
            m = "4";

        }
        else if (month1 == "May")
        {
            m = "5";

        }
        else if (month1 == "Jun")
        {
            m = "6";

        }
        else if (month1 == "Jul")
        {
            m = "7";

        }
        else if (month1 == "Aug")
        {
            m = "8";

        }
        else if (month1 == "Sep")
        {
            m = "9";

        }
        else if (month1 == "Oct")
        {
            m = "10";

        }
        else if (month1 == "Nov")
        {
            m = "11";

        }
        else if (month1 == "Dec")
        {
            m = "12";

        }
        return m;
    }

}
