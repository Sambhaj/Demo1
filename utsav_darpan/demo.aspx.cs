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
using MySql.Data.MySqlClient;
using System.IO;
using System.Collections.Generic;
using System.Web.Mail;
public partial class demo : System.Web.UI.Page
{
    public static MySqlConnection con;
    DataSet ds = new DataSet();
    int finaltotal;
    string order_id;

    string panchanglanguage;
    string extrapage;
    string envelope;
    string deliveryopt;
    string withenvlopevalue;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            ds = getrecord("SELECT Max(	order_no)As maxnum FROM tbregister");
            foreach (DataRow row in ds.Tables[0].Rows)
            {
                object value = row["maxnum"];
                if (value == DBNull.Value)
                {
                    txtorderno.Text = "1";
                    txtorderno.ReadOnly = true;
                    txtorderno.Focus();
                }
                else
                {
                    string s = ds.Tables[0].Rows[0][0].ToString();
                    int regidd = ((Convert.ToInt32(s)) + 1);
                    txtorderno.Text = regidd.ToString();
                    txtorderno.ReadOnly = true;
                    txtorderno.Focus();
                }
            }
            btnconform.Visible = false;
            lblb_envelopemsg.Visible = false;
            lblb_envelope.Visible = false;

            order_id = (txtorderno.Text).ToString();
            lblb_quantity.Text = "0";
            lblb_unitprice.Text = "0";
            lblb_extrapg.Text = "0";
            lblb_envelope.Text = "0";
            lblb_totalamt.Text = "0";

            lblfupload.Text = "0";
            lblfupload5.Text = "0";
            lblfupload8.Text = "0";
        }
    }
    private void UpLoadAndDisplay()
    {
        order_id = (txtorderno.Text).ToString();
        string filename1 = FileUpload1.FileName;
        lblfupload.Text = filename1;
        string imgName = "order_" + order_id + "_extra_" + filename1;
        string imgPath = "order_photos/" + imgName;
        int imgSize = FileUpload1.PostedFile.ContentLength;
        if (FileUpload1.PostedFile != null && FileUpload1.PostedFile.FileName != "")
        {
            FileUpload1.SaveAs(Server.MapPath(imgPath));
        }

    }
    private void UpLoadAndDisplay5()
    {
        order_id = (txtorderno.Text).ToString();
        string filename5 = FileUpload5.FileName;
        lblfupload5.Text = filename5;
        string imgName = "order_" + order_id + "_page_4_" + filename5;
        string imgPath = "order_photos/" + imgName;
        int imgSize = FileUpload5.PostedFile.ContentLength;
        if (FileUpload5.PostedFile != null && FileUpload5.PostedFile.FileName != "")
        {
            FileUpload5.SaveAs(Server.MapPath(imgPath));
        }
    }
    private void UpLoadAndDisplay8()
    {
        order_id = (txtorderno.Text).ToString();
        string filename8 = FileUpload8.FileName;
        lblfupload8.Text = filename8;
        string imgName = "order_" + order_id + "_page_8_" + filename8;
        string imgPath = "order_photos/" + imgName;
        int imgSize = FileUpload8.PostedFile.ContentLength;
        if (FileUpload8.PostedFile != null && FileUpload8.PostedFile.FileName != "")
        {
            FileUpload8.SaveAs(Server.MapPath(imgPath));
        }
    }

    protected void btnsubmit_Click(object sender, EventArgs e)
    {
        //Validation Code Start Here.
        string fString = txtfirstname.Text;
        if (fString.Trim() == "") return;
        for (int i = 0; i < fString.Length; i++)
        {
            if (char.IsNumber(fString[i]))
            {
                txtfirstname.Text = "";
                txtfirstname.Focus();
                return;
            }
        }
        string mString = txtmiddlename.Text;
        if (mString.Trim() == "")
        {
        }
        else
        {
            for (int i = 0; i < mString.Length; i++)
            {
                if (char.IsNumber(mString[i]))
                {
                    txtmiddlename.Text = "";
                    txtmiddlename.Focus();
                    return;
                }
            }
        }
        string lString = txtlastname.Text;
        if (lString.Trim() == "")
        {
        }
        else
        {
            for (int i = 0; i < lString.Length; i++)
            {
                if (char.IsNumber(lString[i]))
                {
                    txtlastname.Text = "";
                    txtlastname.Focus();
                    return;
                }
            }
        }
        string cityString = txtcity.Text;
        if (cityString.Trim() == "")
        {
        }
        else
        {
            for (int i = 0; i < cityString.Length; i++)
            {
                if (char.IsNumber(cityString[i]))
                {
                    txtcity.Text = "";
                    txtcity.Focus();
                    return;
                }
            }
        }

        if (txtmobileno.Text == "")
        {
        }
        else
        {
            long parsedValue;
            if (!long.TryParse(txtmobileno.Text, out parsedValue))
            {
                //Label1.Text = "This is a number only field";
                txtmobileno.Text = "";
                txtmobileno.Focus();
                return;
            }
        }
        if (txtwhatsappno.Text == "")
        {
        }
        else
        {
            long parsedValue1;
            if (!long.TryParse(txtwhatsappno.Text, out parsedValue1))
            {
                //Label1.Text = "Please Only Digit Are Entered";
                txtwhatsappno.Text = "";
                txtwhatsappno.Focus();
                return;
            }
        }

        if (txthomecontact.Text == "")
        {
        }
        else
        {
            long parsedValue2;
            if (!long.TryParse(txthomecontact.Text, out parsedValue2))
            {
                //Label1.Text = "Please Only Digit Are Entered";
                txthomecontact.Text = "";
                txthomecontact.Focus();
                return;
            }
        }

        if (txtofficecontact.Text == "")
        {
        }
        else
        {
            long parsedValue3;
            if (!long.TryParse(txtofficecontact.Text, out parsedValue3))
            {
                //Label1.Text = "Please Only Digit Are Entered";
                txtofficecontact.Text = "";
                txtofficecontact.Focus();
                return;
            }
        }

        long parsedValue4;
        if (!long.TryParse(txtprintcopies.Text, out parsedValue4))
        {
            //Label1.Text = "Please Only Digit Are Entered";
            txtprintcopies.Text = "";
            txtprintcopies.Focus();
            return;
        }

        if (txtpostalcode.Text == "")
        {
        }
        else
        {
            long parsedValue5;
            if (!long.TryParse(txtpostalcode.Text, out parsedValue5))
            {
                //Label1.Text = "Please Only Digit Are Entered";
                txtpostalcode.Text = "";
                txtpostalcode.Focus();
                return;
            }
        }

        if (txtfirstname.Text == "" || txtprintcopies.Text == "")
        {
            return;
        }
        //Validation Code End Here.

        if (chkcondition.Checked)
        {
            int txtprintcopiesval = Convert.ToInt32(txtprintcopies.Text);
            if ((txtprintcopiesval % 100) == 0)
            {
                //Insert Code Start
                lblb_quantity.Text = (txtprintcopies.Text).ToString();

                //Code to fetch selected panchang language Option.
                panchanglanguage = "";
                if (rdogujrati.Checked)
                {
                    panchanglanguage = "Gujarati";
                }
                else if (rdohindi.Checked)
                {
                    panchanglanguage = "Hindi";
                }
                else if (rdoenglish.Checked)
                {
                    panchanglanguage = "English";
                }
                else if (rdogujeng.Checked)
                {
                    panchanglanguage = "Gujarati English Mix";
                }


                // Actual Code start here.
                DataSet Rate_record = new DataSet();
                switch (panchanglanguage)
                {
                    case "Gujarati":
                        ds = getrecord("SELECT * FROM tbgujrati Where quantity = '" + txtprintcopies.Text + "'");
                        Rate_record = ds.Copy();
                        break;
                    case "Hindi":
                        ds = getrecord("SELECT * FROM tbhindi Where quantity = '" + txtprintcopies.Text + "'");
                        Rate_record = ds.Copy();
                        break;
                    case "English":
                        ds = getrecord("SELECT * FROM tbenglish Where quantity = '" + txtprintcopies.Text + "'");
                        Rate_record = ds.Copy();
                        break;
                    case "Gujarati English Mix":
                        ds = getrecord("SELECT * FROM tbguj_eng_mix Where quantity = '" + txtprintcopies.Text + "'");
                        Rate_record = ds.Copy();
                        break;
                    default:
                        break;
                }

                int total = Convert.ToInt32(Rate_record.Tables[0].Rows[0][2].ToString());
                int fpageExtra = Convert.ToInt32(Rate_record.Tables[0].Rows[0][3].ToString());
                int env_blank = Convert.ToInt32(Rate_record.Tables[0].Rows[0][4].ToString());
                int env_print = Convert.ToInt32(Rate_record.Tables[0].Rows[0][5].ToString());

                string unit_price = (Rate_record.Tables[0].Rows[0][1].ToString());
                lblb_unitprice.Text = unit_price.ToString();
                //Code to fetch selected Envelope Option.
                finaltotal = 0;
                lblb_envelopemsg.Visible = false;
                lblb_envelope.Visible = false;
                if (rdowithoutenvo.Checked)
                {
                    finaltotal = total;
                }
                else if (rdowithenvo.Checked)
                {
                    if (rdoblank.Checked)
                    {
                        lblb_envelopemsg.Visible = true;
                        lblb_envelope.Visible = true;
                        finaltotal = total + env_blank;
                        lblb_envelope.Text = env_blank.ToString();
                    }
                    else if (rdoprint.Checked)
                    {
                        lblb_envelopemsg.Visible = true;
                        lblb_envelope.Visible = true;
                        finaltotal = total + env_print;
                        lblb_envelope.Text = env_print.ToString();
                    }
                }

                //Code to fetch selected 4-Pages extra Option Also Contain Insert Code.
                if (rdoyes.Checked)
                {
                    finaltotal = finaltotal + fpageExtra;
                    lblb_extrapg.Text = fpageExtra.ToString();
                }

                lblfupload.Text = "0";
                lblfupload5.Text = "0";
                lblfupload8.Text = "0";
                if (FileUpload1.PostedFile != null && FileUpload1.PostedFile.ContentLength > 0)
                {
                    UpLoadAndDisplay();
                }
                if (FileUpload5.PostedFile != null && FileUpload5.PostedFile.ContentLength > 0)
                {
                    UpLoadAndDisplay5();
                }
                if (FileUpload8.PostedFile != null && FileUpload8.PostedFile.ContentLength > 0)
                {
                    UpLoadAndDisplay8();
                }
                //ScriptManager.RegisterStartupScript(this, GetType(), "Show2", "Show2();", true);
                Response.Write("<script>alert('Please Check Bill Amount & Confirm Order.')</script>");
                btnconform.Visible = true;
                string totalamtpayable = finaltotal.ToString();
                totalamtpayable = totalamtpayable + " /-";
                lblb_totalamt.Text = totalamtpayable;
            }
            else
            {
                Response.Write("<script>alert('Sorry!! Print Copies Should Be In Multiples Of 100 !!')</script>");
            }
        }
        else
        {
            Response.Write("<script>alert('Please Agree Terms and Conditions for Inquiry Confirmation !!')</script>");
        }
    }





    protected void btnconform_Click(object sender, EventArgs e)
    {
        order_id = (txtorderno.Text).ToString();

        string fullname = txtfirstname.Text + ' ' + txtmiddlename.Text + ' ' + txtlastname.Text;

        string faddress = "NULL";
        if (txtpostalcode.Text == "")
        {
            faddress = txtaddress.Text + ' ' + txtcity.Text;
        }
        else
        {
            faddress = txtaddress.Text + ' ' + txtcity.Text + '-' + txtpostalcode.Text;
        }

        panchanglanguage = "";
        if (rdogujrati.Checked)
        {
            panchanglanguage = "Gujarati";
        }
        else if (rdohindi.Checked)
        {
            panchanglanguage = "Hindi";
        }
        else if (rdoenglish.Checked)
        {
            panchanglanguage = "English";
        }
        else if (rdogujeng.Checked)
        {
            panchanglanguage = "Gujarati English Mix";
        }

        //Code to fetch selected Print Type Option.
        envelope = "";
        withenvlopevalue = "NULL";
        if (rdowithoutenvo.Checked)
        {
            envelope = "Without Envelope";
        }
        else if (rdowithenvo.Checked)
        {
            envelope = "With Envelope";
            if (rdoblank.Checked)
            {
                withenvlopevalue = "Blank";
            }
            else if (rdoprint.Checked)
            {
                withenvlopevalue = "Print";
            }
        }

        //Code to fetch selected 4-Pages extra Option.
        extrapage = "";
        if (rdoyes.Checked)
        {
            extrapage = "Yes";
        }
        else if (rdono.Checked)
        {
            extrapage = "No";
        }

        //Code to fetch selected Delivery Option.
        deliveryopt = "NULL";
        if (rdohand.Checked)
        {
            deliveryopt = "Hand Delivery";
        }
        else if (rdohome.Checked)
        {
            deliveryopt = "Home Delivery";
        }


        //**********************************************************************************************
        DataSet Rate_record = new DataSet();
        switch (panchanglanguage)
        {
            case "Gujarati":
                ds = getrecord("SELECT * FROM tbgujrati Where quantity = '" + txtprintcopies.Text + "'");
                Rate_record = ds.Copy();
                break;
            case "Hindi":
                ds = getrecord("SELECT * FROM tbhindi Where quantity = '" + txtprintcopies.Text + "'");
                Rate_record = ds.Copy();
                break;
            case "English":
                ds = getrecord("SELECT * FROM tbenglish Where quantity = '" + txtprintcopies.Text + "'");
                Rate_record = ds.Copy();
                break;
            case "Gujarati English Mix":
                ds = getrecord("SELECT * FROM tbguj_eng_mix Where quantity = '" + txtprintcopies.Text + "'");
                Rate_record = ds.Copy();
                break;
            default:
                break;
        }

        int total = Convert.ToInt32(Rate_record.Tables[0].Rows[0][2].ToString());
        int fpageExtra = Convert.ToInt32(Rate_record.Tables[0].Rows[0][3].ToString());
        int env_blank = Convert.ToInt32(Rate_record.Tables[0].Rows[0][4].ToString());
        int env_print = Convert.ToInt32(Rate_record.Tables[0].Rows[0][5].ToString());

        string unit_price = (Rate_record.Tables[0].Rows[0][1].ToString());
        //Code to fetch selected Envelope Option.
        finaltotal = 0;
        if (rdowithoutenvo.Checked)
        {
            finaltotal = total;
        }
        else if (rdowithenvo.Checked)
        {
            if (rdoblank.Checked)
            {
                finaltotal = total + env_blank;
            }
            else if (rdoprint.Checked)
            {
                finaltotal = total + env_print;
            }
        }

        //Code to fetch selected 4-Pages extra Option Also Contain Insert Code.
        if (rdoyes.Checked)
        {
            finaltotal = finaltotal + fpageExtra;
        }
        //**********************************************************************************************

        string fuploadimg;
        string fuploadimg5;
        string fuploadimg8;

        fuploadimg = "NULL";
        if (lblfupload.Text != "0")
        {
            order_id = (txtorderno.Text).ToString();
            string filename1 = (lblfupload.Text).ToString();
            string idd = "order_" + order_id + "_extra_" + filename1;
            fuploadimg = "~/order_photos/" + idd;
        }
        fuploadimg5 = "NULL";
        if (lblfupload5.Text != "0")
        {
            order_id = (txtorderno.Text).ToString();
            string filename5 = (lblfupload5.Text).ToString();
            string idd5 = "order_" + order_id + "_page_4_" + filename5;
            fuploadimg5 = "~/order_photos/" + idd5;
        }
        fuploadimg8 = "NULL";
        if (lblfupload8.Text != "0")
        {
            order_id = (txtorderno.Text).ToString();
            string filename8 = (lblfupload8.Text).ToString();
            string idd8 = "order_" + order_id + "_page_8_" + filename8;
            fuploadimg8 = "~/order_photos/" + idd8;
        }

        ins_record("insert into tbregister values('" + txtorderno.Text + "','" + fullname + "','" + faddress + "','" + txthomecontact.Text + "','" + txtofficecontact.Text + "','" + txtmobileno.Text + "','" + txtemail.Text + "','" + txtwhatsappno.Text + "','" + panchanglanguage + "','" + txtprintcopies.Text + "','" + envelope + "','" + withenvlopevalue + "','" + deliveryopt + "','" + extrapage + "','" + fuploadimg + "','" + txtremark.Text + "','" + txtpage2.Text + "','" + txtpage3.Text + "','" + txtpage5.Text + "','" + txtpage6.Text + "','" + txtpage7.Text + "','" + txtpage8.Text + "','" + fuploadimg5 + "','" + txtremark1.Text + "','" + fuploadimg8 + "','" + txtremark4.Text + "','" + finaltotal + "')");
        Response.Write("<script>alert('Order Placed Successfully.')</script>");


        //**************************************Send Email Code Start***************************
        string sIPAddress = null;
        sIPAddress = Request.ServerVariables["HTTP_X_FORWARDED_FOR"];
        if (string.IsNullOrEmpty(sIPAddress))
            sIPAddress = Request.ServerVariables["REMOTE_ADDR"];
        string str = "Inquiry Conformation mail:" + System.Environment.NewLine + "  Date: " + "" + System.DateTime.Today.ToString() + "" + System.Environment.NewLine + System.Environment.NewLine + " Message: " + System.Environment.NewLine + " Thank you for generating inquiry is confirmed with www.utsavaestore.com " + System.Environment.NewLine + "  We will get back to you shortly. " + System.Environment.NewLine + "Utsav-Darpan";
        string from = "noreply@utsavaestore.com";
        string to = "ccgnik@gmail.com;info@utsavaestore.com";
        string subject = "Inquiry Order: www.utsavaestore.com";
        string body = "Inquiry has been generated on www.utsavaestore.com. Please check it.";
        SmtpMail.SmtpServer = "relay-hosting.secureserver.net";
        SmtpMail.Send(from, to, subject, body);

        if (txtemail.Text != "")
        {
            string sIPAddress1 = null;
            sIPAddress1 = Request.ServerVariables["HTTP_X_FORWARDED_FOR"];
            if (string.IsNullOrEmpty(sIPAddress1))
                sIPAddress1 = Request.ServerVariables["REMOTE_ADDR"];
            string str1 = "Inquiry Conformation mail:" + System.Environment.NewLine + "  Date: " + "" + System.DateTime.Today.ToString() + "" + System.Environment.NewLine + System.Environment.NewLine + " Message: " + System.Environment.NewLine + " Thank you for generating inquiry is confirmed with www.utsavaestore.com " + System.Environment.NewLine + "  We will get back to you shortly. " + System.Environment.NewLine + "Utsav-Darpan";
            string from1 = "noreply@utsavaestore.com";
            string to1 = (txtemail.Text).ToString();
            string subject1 = "Inquriy Order: www.utsavaestore.com";
            string body1 = "Hello Sir," + System.Environment.NewLine + "Thank you for submitting inquiry on www.utsavaestore.com regarding Panchang Order. We will get back to you shortly." + System.Environment.NewLine + "Thanking You," + System.Environment.NewLine + "Web Team" + System.Environment.NewLine + "Utsavaestore.com";
            SmtpMail.SmtpServer = "relay-hosting.secureserver.net";
            SmtpMail.Send(from1, to1, subject1, body1);
            Response.Write("<script>alert('Thank You! We will contact you soon.')</script>");
        }
        //**************************************Send Email Code End********************************************************


        finaltotal = 0;

        lblfupload.Text = "0";
        lblfupload5.Text = "0";
        lblfupload8.Text = "0";

        int curid = Convert.ToInt32(txtorderno.Text);
        curid = curid + 1;
        txtorderno.Text = "";
        txtorderno.Text = curid.ToString();

        order_id = curid.ToString();
        chkcondition.Checked = false;

        txtfirstname.Text = "";
        txtmiddlename.Text = "";
        txtlastname.Text = "";
        txtaddress.Text = "";
        txtcity.Text = "";
        txtpostalcode.Text = "";
        txthomecontact.Text = "";
        txtofficecontact.Text = "";
        txtmobileno.Text = "";
        txtemail.Text = "";
        txtwhatsappno.Text = "";
        txtprintcopies.Text = "";
        txtremark.Text = "";

        txtpage5.Text = "";
        txtpage8.Text = "";
        txtremark1.Text = "";
        txtremark4.Text = "";
        FileUpload1.Dispose();
        FileUpload5.Dispose();
        FileUpload8.Dispose();
        lblb_quantity.Text = "0";
        lblb_unitprice.Text = "0";
        lblb_extrapg.Text = "0";
        lblb_envelope.Text = "0";
        lblb_totalamt.Text = "0";


        fullname = "";
        faddress = "";
        panchanglanguage = "";
        extrapage = "";
        envelope = "";
        deliveryopt = "";
        withenvlopevalue = "";

        btnconform.Visible = false;
        lblb_envelopemsg.Visible = false;
        lblb_envelope.Visible = false;

    }

    public void connect()
    {
        con = new MySqlConnection("server=localhost;user id=root;database=prpote;");

        con.Open();
    }
    public void disconnect()
    {
        con.Close();
    }
    public DataSet getrecord(string qr)
    {
        connect();
        DataSet ds = new DataSet();
        MySqlDataAdapter da = new MySqlDataAdapter(qr, con);
        da.Fill(ds);
        disconnect();
        return ds;
    }
    public string ins_record(string qr)
    {
        connect();
        MySqlCommand com = new MySqlCommand(qr, con);
        com.ExecuteNonQuery();
        save_msg();
        return ("Record saved successfully");
    }
    public string save_msg()
    {
        return ("Record Successfully Saved.");
    }
}