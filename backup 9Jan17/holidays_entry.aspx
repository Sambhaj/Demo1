<%@ Page Language="C#" MasterPageFile="~/adminmaster.master" AutoEventWireup="true" CodeFile="holidays_entry.aspx.cs" Inherits="holidays_entry" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<script type="text/javascript">
 function checkdate()    // function for validation in checking calender dates....
{

var a=days();        // call function to check day of the date if day is sunday
if(a == 0)       //here 0 is sunday
{
//alert("Sunday");
document.getElementById('<%= ddldate.ClientID%>').value="Date";
document.getElementById('<%= lblmsg.ClientID%>').innerHTML="Sunday is holiday ";
return false;
}
else
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
                            x=yer%4;                             //here is logic to check year is leap or not
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
}
//=============================================================================
function days()                //function to get day of the given date
{
 var date1=document.getElementById('<%= ddldate.ClientID%>').value;
 var month=document.getElementById('<%= ddlmonth.ClientID%>').value;
 var yer=document.getElementById('<%= ddlyear.ClientID%>').value;
 var mon;
 if(month ==  "Jan")
 {
 mon=0;
 }
 if(month ==  "Feb")
 {
 mon=1;
 }
 if(month ==  "Mar")
 {
 mon=2;
 }
 if(month ==  "Apr")
 {
 mon=3;
 }
 if(month ==  "May")
 {
 mon=4;
 }
 if(month ==  "Jun")
 {
 mon=5;
 }
 if(month ==  "Jul")
 {
 mon=6;
 }
 if(month ==  "Aug")
 {
 mon=7;
 }
 if(month ==  "Sep")
 {
 mon=8;
 }
 if(month ==  "Oct")
 {
 mon=9;
 }
 if(month ==  "Nov")
 {
 mon=10;
 }
 if(month ==  "Dec")
 {
 mon=11;
 }


var then=new Date(yer,mon,date1);
var a=then.getDay();
return a;
//if(a == 0)
//{
//return false
//}
}

</script>
<br /><br />
<table style="text-align:center;"><tr><td></td><td colspan="2">Holidays Entry Yearly</td></tr>
<tr><td style="width:250px;"></td><td>Date</td><td style="text-align:left;"><asp:DropDownList ID="ddldate" runat="server" >
        <asp:ListItem>Date</asp:ListItem>
        <asp:ListItem>1</asp:ListItem>
        <asp:ListItem>2</asp:ListItem>
        <asp:ListItem>3</asp:ListItem>
        <asp:ListItem>4</asp:ListItem>
        <asp:ListItem>5</asp:ListItem>
        <asp:ListItem>6</asp:ListItem>
        <asp:ListItem>7</asp:ListItem>
        <asp:ListItem>8</asp:ListItem>
        <asp:ListItem>9</asp:ListItem>
        <asp:ListItem>10</asp:ListItem>
        <asp:ListItem>11</asp:ListItem>
        <asp:ListItem>12</asp:ListItem>
        <asp:ListItem>13</asp:ListItem>
        <asp:ListItem>14</asp:ListItem>
        <asp:ListItem>15</asp:ListItem>
        <asp:ListItem>16</asp:ListItem>
        <asp:ListItem>17</asp:ListItem>
        <asp:ListItem>18</asp:ListItem>
        <asp:ListItem>19</asp:ListItem>
        <asp:ListItem>20</asp:ListItem>
        <asp:ListItem>21</asp:ListItem>
        <asp:ListItem>22</asp:ListItem>
        <asp:ListItem>23</asp:ListItem>
        <asp:ListItem>24</asp:ListItem>
        <asp:ListItem>25</asp:ListItem>
        <asp:ListItem>26</asp:ListItem>
        <asp:ListItem>27</asp:ListItem>
        <asp:ListItem>28</asp:ListItem>
        <asp:ListItem>29</asp:ListItem>
        <asp:ListItem>30</asp:ListItem>
        <asp:ListItem>31</asp:ListItem>        
    </asp:DropDownList>&nbsp;
           <asp:DropDownList ID="ddlmonth" runat="server" >
           <asp:ListItem>Month</asp:ListItem>
           <asp:ListItem>Jan</asp:ListItem>
           <asp:ListItem>Feb</asp:ListItem>
           <asp:ListItem>Mar</asp:ListItem>
           <asp:ListItem>Apr</asp:ListItem>
           <asp:ListItem>May</asp:ListItem>
           <asp:ListItem>Jun</asp:ListItem>
           <asp:ListItem>Jul</asp:ListItem>
           <asp:ListItem>Aug</asp:ListItem>
           <asp:ListItem>Sep</asp:ListItem>
           <asp:ListItem>Oct</asp:ListItem>
           <asp:ListItem>Nov</asp:ListItem>
           <asp:ListItem>Dec</asp:ListItem>
           </asp:DropDownList> &nbsp;
           <asp:DropDownList ID="ddlyear" runat="server" >
           <asp:ListItem>Year</asp:ListItem><asp:ListItem>2015</asp:ListItem>
	<asp:ListItem>2016</asp:ListItem>
                 </asp:DropDownList></td><td><asp:Label ID="lbldate" runat="server" Visible="true"></asp:Label></td></tr>
                 <tr><td></td><td>Particular</td><td><asp:TextBox ID="txt_particular" runat="server" Width="200px"></asp:TextBox></td></tr>
                 <tr><td></td><td></td><td style="text-align:left;"><asp:Button ID="btnsubmit" runat="server" Text="Submit" OnClick="btnsubmit_Click" /></td></tr>
                 <tr><td></td><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
                 <tr><td></td><td></td><td><asp:GridView ID="gv1" runat="server"></asp:GridView></td></tr>
</table>

</asp:Content>

