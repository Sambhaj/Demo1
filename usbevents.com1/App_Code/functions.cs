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

    public void connect()
    {
        con = new OleDbConnection("PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source=|DataDirectory|usb.mdb");
        con.Open();
    }
    public void disconnect()
    {
        con.Close();
    }
    int id;
    public int getno(string sqlquery)    //function get id
    {
        try
        {
            OleDbDataReader reader;
            connect();
           
            OleDbCommand com = new OleDbCommand(sqlquery, con);
            reader = com.ExecuteReader();

            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    id = int.Parse(reader[0].ToString());
                    id++;
                }
            }
            else
            {
                id = 1;

            }

            con.Close();
            reader.Close();
            return id;
        }
        catch (Exception ex)
        {
            return 1;
        }
    }
    string evdate;
    public string getevdate(string evnm)
    {
        OleDbDataReader reader;
        connect();
        string qr = "Select Format(event_date,'Medium Date') from customer where event_name='" + evnm + "'";
        OleDbCommand com = new OleDbCommand(qr, con);
        reader = com.ExecuteReader();

        if (reader.HasRows)
        {
            while (reader.Read())
            {
                evdate = reader[0].ToString();
            }
        }
        con.Close();
        reader.Close();
        return evdate;
    }
    public string chkusername(string qr, string unm)
    {
        OleDbDataReader reader;
        connect();

        OleDbCommand com = new OleDbCommand(qr, con);
        reader = com.ExecuteReader();

        if (reader.HasRows)
        {
            while (reader.Read())
            {
                usrnm = reader[0].ToString();
                if (usrnm == unm)
                {
                    avail = "no";
                }
                else
                {
                    avail = "yes";
                }
            }
        }
        else
        {
            avail = "yes";
        }
        con.Close();
        reader.Close();
        return avail;
    }

    public string insdta(string qr)
    {
        connect();
        OleDbCommand com = new OleDbCommand(qr, con);
        com.ExecuteNonQuery();
        disconnect();
        return "Stored successfully";
    }
    string usrnm,avail;
    public string chkusernm(string qr)
    {
        OleDbDataReader reader;
        connect();
        
        OleDbCommand com = new OleDbCommand(qr, con);
        reader = com.ExecuteReader();

        if (reader.HasRows)
        {
            while (reader.Read())
            {
                usrnm = reader[0].ToString();
                if (usrnm == qr)
                {
                    avail = "no";
                }
                else
                {
                    avail = "yes";
                }
            }
        }
        con.Close();
        reader.Close();
        return avail;
    }

    public DataSet getevnm1(string qr)
    {
        connect();
        DataSet ds = new DataSet();       
        OleDbDataAdapter da = new OleDbDataAdapter(qr, functions.con);
        da.Fill(ds);
        disconnect();
        return ds;

    }
    string value;
    public string getvalue(string qr)
    {
        OleDbDataReader reader;
        connect();
        OleDbCommand com = new OleDbCommand(qr, con);
        reader = com.ExecuteReader();

        if (reader.HasRows)
        {
            while (reader.Read())
            {
                 value= reader[0].ToString();
            }
        }
        con.Close();
        reader.Close();
        return value;
    }

}
