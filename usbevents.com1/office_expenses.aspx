<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="office_expenses.aspx.cs" Inherits="office_expenses" Title="Office Expenses" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

<script type="text/javascript">
 function checkdate()    // function for validation in checking calender dates....
{
   if(document.getElementById('<%= ddldate.ClientID%>').value == "Date")
   {
        document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT DATE";
   }
   else
   {
      if(document.getElementById('<%= ddlmonth.ClientID%>').value == "Month")
        {
        document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT MONTH";
        }
        else
        {   
        document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT MONTH";
        document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT MONTH";
            if( document.getElementById('<%= ddlyear.ClientID%>').value == "Year")
            {
        document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT MONTH";
            document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT YEAR";
            }      
            else
            {
                var date1=document.getElementById('<%= ddldate.ClientID%>');
                var month=document.getElementById('<%= ddlmonth.ClientID%>');
                var yer=document.getElementById('<%= ddlyear.ClientID%>').value;
                var lbl=document.getElementById('<%= lblmsg.ClientID%>');
                var x;
                var y;
                var z;
                var lep1;
                var dt1=date1.value;
                var mon=month.value;
                if(mon == "Feb")
                {
                    if (dt1 < 29)
                    {
                    lbl.innerHTML = dt1.concat(mon,yer);
                    }
                    else
                    {
                        if(dt1 > 29)
                        {
                        lbl.innerHTML = "February month has 28 days";
                        date1.value="Date";
                        }
                        else
                        {
                            x=yer%4;
                            y=yer%400;
                            z=yer%100;
                            if (x == 0 && ( y == 0 || z != 0))
                            {            
                            lbl.innerHTML = dt1.concat(mon,yer);
                            
                            }
                            else
                            {
                            date1.value="Date"; 
                            //lbl.innerHTML =yer +" Only leap year can have 29 days";   
                            lbl.innerHTML =yer +" does not have 29 days in Feb Month";  
                              
                            }
                        }        
                    }                        
                }
                else if (mon == "Apr" && dt1 > 30)
                {
                     lbl.innerHTML = "April month has 30 days";  
                       date1.value="Date";  
                }
                else if (mon == "Jun" && dt1 > 30)
                {
                     lbl.innerHTML = "Jun month has 30 days";    
                       date1.value="Date";
                }
                else if (mon == "Sep" && dt1 > 30)
                {
                     lbl.innerHTML = "September month has 30 days";    
                       date1.value="Date";
                }
                else if (mon == "Nov" && dt1 > 30)
                {
                     lbl.innerHTML = "November month has 30 days";    
                       date1.value="Date";
                }
                else
                {
                // lbl.innerHTML=dt1.concat(mon,yer);
                }
            }    
      }
   }
}
 function chkempty()    //check all fields are fill or not
{
    var txt1=document.getElementById('<%= txt_voucher_no.ClientID%>');
    var txt2=document.getElementById('<%= txt_name.ClientID%>');
    var txt3=document.getElementById('<%= txt_amt.ClientID%>');
    var txt4=document.getElementById('<%= txt_detail.ClientID%>');
    var txt5=document.getElementById('<%= txt_paydetail.ClientID%>');
    var txt6=document.getElementById('<%= txt_writtenby.ClientID%>');
    var lbl=document.getElementById('<%= lblmsg.ClientID%>');
       var txt11=document.getElementById('<%= ddldate.ClientID%>');
    var txt12=document.getElementById('<%= ddlmonth.ClientID%>');
    var txt13=document.getElementById('<%= ddlyear.ClientID%>');
    if(txt1.value == "" || txt2.value == "" || txt3.value == "" || txt4.value == "" || txt5.value == ""  || txt6.value == "" )
    {
        lbl.innerHTML="Please fill the required fields";
           return false;     
    }
    else if(txt11.value == "Date")
    {
        lbl.innerHTML="Please Select Date";
           return false;     
    }
    else if(txt12.value == "Month")
    {
        lbl.innerHTML="Please Select Month";
           return false;     
    }
     else if(txt13.value == "Year")
    {
        lbl.innerHTML="Please Select Year";
         return false;     
    }
    else
    {
        lbl.innerHTML="";
        return true;
    }
}

//function to no only in textbox
function isNumber(evt) {
   // var evt=document.getElementById('<%= txt_amt.ClientID%>').value;
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function chknm()
{
var b=document.getElementById('<%= txt_amt.ClientID%>').value;
if(isNaN(parseFloat(b)))
{
document.getElementById('<%= txt_amt.ClientID%>').value="";
alert("No Only");
}
}
</script>
<center><h2>Office Expenses Form</h2><table>
<tr><td>Voucher No</td><td><asp:TextBox id="txt_voucher_no" runat="server" Width="200px" ReadOnly="true" ></asp:TextBox></td></tr>
<tr><td>Name</td><td><asp:TextBox id="txt_name" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Pay Date</td><td><asp:DropDownList id="ddldate" runat="server"><asp:ListItem>Date</asp:ListItem><asp:ListItem>01</asp:ListItem><asp:ListItem>02</asp:ListItem><asp:ListItem>03</asp:ListItem><asp:ListItem>04</asp:ListItem><asp:ListItem>05</asp:ListItem>
        <asp:ListItem>06</asp:ListItem><asp:ListItem>07</asp:ListItem><asp:ListItem>08</asp:ListItem><asp:ListItem>09</asp:ListItem><asp:ListItem>10</asp:ListItem><asp:ListItem>11</asp:ListItem><asp:ListItem>12</asp:ListItem><asp:ListItem>13</asp:ListItem>
        <asp:ListItem>14</asp:ListItem><asp:ListItem>15</asp:ListItem><asp:ListItem>16</asp:ListItem> <asp:ListItem>17</asp:ListItem><asp:ListItem>18</asp:ListItem><asp:ListItem>19</asp:ListItem><asp:ListItem>20</asp:ListItem><asp:ListItem>21</asp:ListItem>
        <asp:ListItem>22</asp:ListItem><asp:ListItem>23</asp:ListItem><asp:ListItem>24</asp:ListItem><asp:ListItem>25</asp:ListItem> <asp:ListItem>26</asp:ListItem><asp:ListItem>27</asp:ListItem><asp:ListItem>28</asp:ListItem><asp:ListItem>29</asp:ListItem>
        <asp:ListItem>30</asp:ListItem> <asp:ListItem>31</asp:ListItem></asp:DropDownList> 
        <asp:DropDownList id="ddlmonth" runat="server" Width="62px" Height="20px">
         <asp:ListItem>Month</asp:ListItem><asp:ListItem>Jan</asp:ListItem><asp:ListItem>Feb</asp:ListItem>  <asp:ListItem>Mar</asp:ListItem>  <asp:ListItem>Apr</asp:ListItem>  <asp:ListItem>May</asp:ListItem>  <asp:ListItem>Jun</asp:ListItem>  <asp:ListItem>Jul</asp:ListItem>  <asp:ListItem>Aug</asp:ListItem>  <asp:ListItem>Sep</asp:ListItem>  <asp:ListItem>Oct</asp:ListItem>  <asp:ListItem>Nov</asp:ListItem>  <asp:ListItem>Dec</asp:ListItem>                   
                    </asp:DropDownList>
          <asp:DropDownList id="ddlyear" runat="server" Width="57px" Height="20px">
           <asp:ListItem>Year</asp:ListItem> <asp:ListItem>2013</asp:ListItem> <asp:ListItem>2014</asp:ListItem> <asp:ListItem>2015</asp:ListItem>                                                      
           </asp:DropDownList></td></tr>
<tr><td>Amount</td><td><asp:TextBox id="txt_amt" runat="server" Width="200px"  ></asp:TextBox></td></tr>
<tr><td>Detail</td><td><asp:TextBox id="txt_detail" runat="server" Width="200px" TextMode="MultiLine" Height="50px" style="resize:none;"></asp:TextBox></td></tr>
<tr><td>Pay Detail</td><td><asp:TextBox id="txt_paydetail" runat="server" Width="200px"  Height="50px" style="resize:none;" ></asp:TextBox></td></tr>
<tr><td>Written By</td><td><asp:TextBox id="txt_writtenby" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Text="Submit" Width="84px" Height="30px" OnClientClick=" if(!chkempty())  return false;" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table></center>
</asp:Content>

