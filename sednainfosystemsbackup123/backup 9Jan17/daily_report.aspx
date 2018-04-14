<%@ Page Language="C#" MasterPageFile="~/empmaster.master" AutoEventWireup="true" CodeFile="daily_report.aspx.cs" Inherits="daily_report" Title="Daily Reports" %>
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
                        lbl.innerHTML = "February month have 28 days";
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
                     lbl.innerHTML = "April month have 30 days";  
                       date1.value="Date";  
                }
                else if (mon == "Jun" && dt1 > 30)
                {
                     lbl.innerHTML = "Jun month have 30 days";    
                       date1.value="Date";
                }
                else if (mon == "Sep" && dt1 > 30)
                {
                     lbl.innerHTML = "September month have 30 days";    
                       date1.value="Date";
                }
                else if (mon == "Nov" && dt1 > 30)
                {
                     lbl.innerHTML = "November month have 30 days";    
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

//===================================================================================

 function chkempty()    //check all fields are fill or not
{
var txt1=document.getElementById('<%= txt_11_am.ClientID%>');
var txt2=document.getElementById('<%= txt_12_am.ClientID%>');
var txt3=document.getElementById('<%= txt_13_am.ClientID%>');
var txt4=document.getElementById('<%= txt_14_am.ClientID%>');
var txt5=document.getElementById('<%= txt_15_am.ClientID%>');
var txt6=document.getElementById('<%= txt_16_am.ClientID%>');
var txt7=document.getElementById('<%= txt_17_am.ClientID%>');
var txt8=document.getElementById('<%= txt_18_am.ClientID%>');
var txt9=document.getElementById('<%= txt_19_am.ClientID%>');
var txt10=document.getElementById('<%= ddldate.ClientID%>');
var txt11=document.getElementById('<%= ddlmonth.ClientID%>');
var txt12=document.getElementById('<%= ddlyear.ClientID%>');
var txt13=document.getElementById('<%= txt_si_time.ClientID%>');
var txt14=document.getElementById('<%= txt_so_time.ClientID%>');
var lbl=document.getElementById('<%= lblmsg.ClientID%>');
  
////if(txt1.value == "" || txt2.value == "" || txt3.value == "" || txt4.value == "" || txt5.value == ""  || txt6.value == "" || txt7.value == "" || txt8.value == "" || txt9.value == "" || txt13.value == "" || txt14.value == ""  )
//if(txt1.value == "" && txt2.value == "" && txt3.value == "" && txt4.value == "" && txt5.value == ""  && txt6.value == "" && txt7.value == "" && txt8.value == "" && txt9.value == "" && txt13.value == "" && txt14.value == ""  )
//{
//    lbl.innerHTML="Please fill the required fields";
//       return false;     
//}
if(txt10.value == "Date")
{
    lbl.innerHTML="Please Select Date";
       return false;     
}
else if(txt11.value == "Month")
{
    lbl.innerHTML="Please Select Month";
       return false;     
}
 else if(txt12.value == "Year")
{
    lbl.innerHTML="Please Select Year";
       return false;     
}
else if(txt13.value == "" || txt13.value == "00")
{
    lbl.innerHTML="Please Enter Sign In Time";
    return false;     
}
else if(txt14.value == "" || txt14.value == "00")
{
    lbl.innerHTML="Please Enter Sign Out Time";
       return false;     
}
else
{
    lbl.innerHTML="";
    return true;
}
}
//=========================
            //below functions are to check time 
 function rem_sit1()                    
    {
    var txt1=document.getElementById('<%= txt_si_time.ClientID%>');
    if(txt1.value == "00")
   {
  txt1.value="";
    }
    }
    
    //====================================
    function rem_sit2()
    {
   // var digits=/^([0-9])$/;    
      document.getElementById('<%= lbltim.ClientID%>').innerHTML="";
    var txt1=document.getElementById('<%= txt_si_time.ClientID%>');
   // var txt11=document.getElementById('<%= txt_si_time.ClientID%>').value;
        // var digitsArray = txt11.match(digits);
    if(txt1.value == "" || txt1.value == "0"|| txt1.value == " "|| txt1.value == "  ")
    {
        txt1.value="00";
    }
//    else if(digitsArray == null)
//    {
//    document.getElementById('<%= lbltim.ClientID%>').innerHTML="Only no";
//     txt1.value="00";
//    }
    else if(txt1.value > 24)
    {
    document.getElementById('<%= lbltim.ClientID%>').innerHTML="Hours between 1-24";
     txt1.value="00";    
    }
     if(txt1.value <= 23 && txt1.value >= 12)
     {
      document.getElementById('<%= ddlsi.ClientID%>').value = "Pm";
     } 
     else
     {
      document.getElementById('<%= ddlsi.ClientID%>').value = "Am";
     }   
    }
    //====================================
     function rem_sim1()
    {
    var txt1=document.getElementById('<%= txt_si_min.ClientID%>');
    if(txt1.value == "00")
   {
  txt1.value="";
    }
    }
    
    //====================================
    function rem_sim2()
    {
    var txt1=document.getElementById('<%= txt_si_min.ClientID%>');
    if(txt1.value == "" || txt1.value == "0"|| txt1.value == " "|| txt1.value == "  ")
    {
        txt1.value="00";
    }
     else if(txt1.value > 60)
    {
    document.getElementById('<%= lbltim.ClientID%>').innerHTML="Minutes between 1-60";
     txt1.value="00";
    }
    else
    {
    document.getElementById('<%= lbltim.ClientID%>').innerHTML="";
    }
    }
    //====================================
     function rem_sot1()
    {
    var txt1=document.getElementById('<%= txt_so_time.ClientID%>');
    if(txt1.value == "00")
   {
  txt1.value="";
    }
    
    }
    
    //====================================
    function rem_sot2()
    {
      document.getElementById('<%= lbltim.ClientID%>').innerHTML="";
    var txt1=document.getElementById('<%= txt_so_time.ClientID%>');
    if(txt1.value == "" || txt1.value == "0"|| txt1.value == " "|| txt1.value == "  ")
    {
        txt1.value="00";
    }
      else if(txt1.value > 24)
    {
    document.getElementById('<%= lbltim.ClientID%>').innerHTML="Hours between 1-24";
     txt1.value="00";
    }
    else if(txt1.value <= 23 && txt1.value >= 12)
     {
      document.getElementById('<%= ddlso.ClientID%>').value = "Pm";
     }
     else
     {
     document.getElementById('<%= ddlso.ClientID%>').value = "Am";
     }
    
    }
    //====================================
     function rem_som1()
    {
    var txt1=document.getElementById('<%= txt_so_min.ClientID%>');
    if(txt1.value == "00")
   {
  txt1.value="";
    }
    }
    
    //====================================
    function rem_som2()
    {
    var txt1=document.getElementById('<%= txt_so_min.ClientID%>');
    if(txt1.value == "" || txt1.value == "0"|| txt1.value == " "|| txt1.value == "  ")
    {
        txt1.value="00";
    }
     else if(txt1.value > 60)
    {
    document.getElementById('<%= lbltim.ClientID%>').innerHTML="Minutes between 1-60";
     txt1.value="00";
    }
    else
    {
    document.getElementById('<%= lbltim.ClientID%>').innerHTML="";
    }
    }
//====================================




</script>
    <center>
   <asp:Panel ID="pn1" runat="server" >
    <asp:Label ID="lblid" runat="server" Text="" Visible="false"></asp:Label>
    <table><tr><td colspan="2" align="center">Daily Sheet Report</td></tr>
    <tr><td colspan="2"></td></tr>
    <tr><td>Date</td><td style=" "> <asp:DropDownList ID="ddldate" runat="server" >
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
           <asp:ListItem>Year</asp:ListItem>
                 </asp:DropDownList></td><td><asp:Label ID="lbldate" runat="server" Visible="true"></asp:Label></td></tr>
           <tr><td>Sign In Time</td><td><asp:TextBox ID="txt_si_time" runat="server" MaxLength="2" Width="30px" Text="00"></asp:TextBox>&nbsp;<asp:TextBox ID="txt_si_min" runat="server" Width="30px" Text="00" MaxLength="2"></asp:TextBox> &nbsp; <asp:DropDownList ID="ddlsi" runat="server" ><asp:ListItem>Am</asp:ListItem><asp:ListItem>Pm</asp:ListItem></asp:DropDownList><asp:Label ID="lbltim" runat="server" Text=""></asp:Label></td></tr>
           <tr><td>Sign Out Time</td><td><asp:TextBox ID="txt_so_time" runat="server" MaxLength="2" Width="30px" Text="00"></asp:TextBox>&nbsp;<asp:TextBox ID="txt_so_min" runat="server" Width="30px" Text="00" MaxLength="2"></asp:TextBox>&nbsp; <asp:DropDownList ID="ddlso" runat="server" ><asp:ListItem>Am</asp:ListItem><asp:ListItem>Pm</asp:ListItem></asp:DropDownList></td></tr>
           <tr><td>11 Am</td><td><asp:TextBox ID="txt_11_am" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50" ></asp:TextBox>  </td></tr>
           <tr><td>12 Pm</td><td><asp:TextBox ID="txt_12_am" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50"></asp:TextBox>  </td></tr>
           <tr><td>13 Pm</td><td><asp:TextBox ID="txt_13_am" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50"></asp:TextBox>  </td></tr>
           <tr><td>14 Pm</td><td><asp:TextBox ID="txt_14_am" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50"></asp:TextBox>  </td></tr>
           <tr><td>15 Pm</td><td><asp:TextBox ID="txt_15_am" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50"></asp:TextBox>  </td></tr>
           <tr><td>16 Pm</td><td><asp:TextBox ID="txt_16_am" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50"></asp:TextBox>  </td></tr>
           <tr><td>17 Pm</td><td><asp:TextBox ID="txt_17_am" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50"></asp:TextBox>  </td></tr>
           <tr><td>18 Pm</td><td><asp:TextBox ID="txt_18_am" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50"></asp:TextBox>  </td></tr>
           <tr><td>19 Pm</td><td><asp:TextBox ID="txt_19_am" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50"></asp:TextBox>  </td></tr>
           <tr><td>20 Pm</td><td><asp:TextBox ID="txt_20_pm" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50"></asp:TextBox>  </td></tr>
           <tr><td>Report File</td> <td style="width: 270px"><asp:FileUpload ID="FileUpload1" runat="server" Width="264px" /> </td></tr>
           <tr><td></td><td><asp:Button ID="btnsubmit" runat="server" Text="Submit" OnClick="btnsubmit_click"  OnClientClick=" if(!chkempty())  return false;" /></td></tr>
           <tr><td></td><td><asp:Label ID="lblmsg" runat="server" Text=""></asp:Label></td></tr>
    </table>
    
       <asp:Label ID="lbldt" Visible="false" runat="server" Text="Label"></asp:Label><asp:Label ID="lbltime" Visible="False" runat="server" Text="Label"></asp:Label>
    </asp:Panel>                
    </center>
</asp:Content>

