<%@ Page Language="C#" AutoEventWireup="true" CodeFile="newemp_regi.aspx.cs" Inherits="newemp_regi" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Employee Registration</title>
    <script type="text/javascript">
    
function mobval()
{
     var txt1=document.getElementById("txtmobno");
     var lbl1=document.getElementById("lblmoberr");     
     var lnth=txt1.value.length; 
          lbl1.innerHTML=""; 
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById("txtmobno").value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
           var msg="Please enter 10 digit mobile number.";
         lbl1.innerHTML=msg;
         txt1.value="";
         return false;
         }
         else
         {
          lbl1.innerHTML="";
          return true;
         }
}

function emailval()
{
var txt1=document.getElementById("txtemail");
var txt11=document.getElementById("txtemail").value;
var lbl1=document.getElementById("lblemailerr");
lbl1.innerHTML="";

var re=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/ ;
if(!re.test(txt11))
{
lbl1.innerHTML="Enter valid email";
 txt1.value="";
 return false
 }
 else
 {
 return true;
 }
}

 function checkdate()    // function for validation in checking calender dates....
{
   if(document.getElementById("ddldate").value == "Date")
   {
        document.getElementById("lbldate").innerHTML="SELECT DATE";
   }
   else
   {
      if(document.getElementById("ddlmonth").value == "Month")
        {
        document.getElementById("lbldate").innerHTML="SELECT MONTH";
        }
        else
        {   
            if( document.getElementById("ddlyear").value == "Year")
            {
            document.getElementById("lbldate").innerHTML="SELECT YEAR";
            }      
            else
            {
                var date1=document.getElementById("ddldate");
                var month=document.getElementById("ddlmonth");
                var yer=document.getElementById("ddlyear").value;
                var lbl=document.getElementById("lbldate");
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
                            x=yer%4;
                            y=yer%400;
                            z=yer%100;
                            if (x == 0 && ( y == 0 || z != 0))
                            {            
                            lbl.innerHTML = dt1.concat(mon,yer);
                            
                            }
                            else
                            {
                            //lbl.innerHTML =yer +" Only leap year can have 29 days";   
                            lbl.innerHTML =yer +" does not have 29 days in Feb Month";  
                              date1.value="Date"; 
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
                 lbl.innerHTML=dt1.concat(mon,yer);
                }
            }    
      }
   }
}


function chk()  
{
var a=document.getElementById("txtpsw").value;
var b=document.getElementById("txtcof_psw").value;
var c=document.getElementById("lblmsg");

if(a == b)
{
c.innerHTML="";
return true;
}
else
{
document.getElementById("txtcof_psw").value="";
c.innerHTML='Password Should Same';
return false;
}
}

function clearform()
{
//document.getElementById("txtemp_id").value="";
document.getElementById("txtemp_nm").value="";
document.getElementById("txtuser_nm").value="";
document.getElementById("txtpsw").value="";
document.getElementById("txtcof_psw").value="";
document.getElementById("ddldate").value="Date";
document.getElementById("ddlmonth").value="Month";
document.getElementById("ddlyear").value="Year";
document.getElementById("txtdesig").value="";
document.getElementById("txtmobno").value="";
document.getElementById("txtemail").value="";
document.getElementById("txtaddr").value="";
document.getElementById("txt_bloodgr").value="Select";


}

 function chkempty()    //check all fields are fill or not
{
    var txt1=document.getElementById("txtemp_nm");
    var txt2=document.getElementById("txtpsw");
    var txt3=document.getElementById("txtcof_psw");
    var txt4=document.getElementById("txtdesig");
    var txt5=document.getElementById("txtmobno");
    var txt6=document.getElementById("txtemail");
    var txt7=document.getElementById("txtaddr");
    var txt8=document.getElementById("txt_bloodgr");
    var txt10=document.getElementById("ddldate");
    var txt11=document.getElementById("ddlmonth");
    var txt12=document.getElementById("ddlyear");
    var lbl=document.getElementById("lblmsg");
      
    //if(txt1.value == "" && txt2.value == "" && txt3.value == "" && txt4.value == "" && txt5.value == ""  && txt6.value == "" && txt7.value == "" && txt8.value == "" && txt9.value == "" && txt13.value == "" && txt14.value == ""  )
    if(txt1.value == "" || txt2.value == "" || txt3.value == "" || txt4.value == "" || txt5.value == ""  || txt6.value == "" || txt7.value == "" )
    {
        lbl.innerHTML="Please fill the required fields";
           return false;     
    }
    else if(txt10.value == "Date")
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
    else if(txt8.value == "Select")
    {
        lbl.innerHTML="Please select blood group";
           return false;     
    }
    else
    {
        lbl.innerHTML="";
        return true;
    }
}






    </script>
</head>
<body onload="clearform()">
    <form id="form1" runat="server">

    <!-- ############################################################################## -->
    <div style="border-style:solid;  border-width:1px; margin-left:130px; border-color:Black; padding:0,0,0,0; width:900px; height:800px;">
    
    <table style="width:900px;"><tr><td style="text-align:right; width:350px"><img src="images/logo.png" alt="" /></td><td><h1>Infosystems</h1></td></tr></table>
 <%--  <table style="width:900px;"><tr><td style=" text-align:right;"><a style="text-align:right;" href="emp_login.aspx">Login</a></td></tr></table>--%>
     <table style="width:900px;"><tr><td></td><td style="width:300px; text-align:right;">Welcome &nbsp;<asp:Label ID="lblnm" runat="server" Text="Label"></asp:Label></td><td style="width:300px; text-align:center;"><a href="admin_home.aspx">Home</a></td><td style=" width:300px; text-align:left;"><asp:LinkButton ID="btn_logout" runat="server" Text="LogOut" OnClick="btn_logout_Click1"></asp:LinkButton></td></tr></table>
   <hr />
 
   <center><TABLE><TBODY><TR><TD><BR /><BR 
      /><IMG alt="" src="images/sign-up.png" /></TD><TD><H2>RegistrationForm 
      </H2>&nbsp; &nbsp; <BR /><BR /><asp:Label id="lblempid" runat="server" Text=""></asp:Label> <asp:Label id="Label2" runat="server" Text="All fields are mandatory  " ForeColor="red"></asp:Label><BR 
      /><TABLE><TBODY><TR><TD align=right colSpan=3></TD></TR><TR><TD 
          style="WIDTH: 110px"><%--ID--%></TD><TD style="WIDTH: 264px"><asp:Label id="lblid" runat="server" Visible="false"></asp:Label></TD><TD 
          style="WIDTH: 490px"></TD></TR><TR><TD style="WIDTH: 200px">Employee 
            Id</TD><TD><asp:TextBox id="txtemp_id" runat="server" Width="258px" MaxLength="30" ReadOnly="true"></asp:TextBox></TD><TD></TD></TR><TR><TD>Employee 
            Name</TD><TD><asp:TextBox id="txtemp_nm" runat="server" Width="258px" MaxLength="30"></asp:TextBox></TD><TD></TD></TR><TR><TD>User 
            Name</TD><TD><asp:TextBox id="txtuser_nm" runat="server" Width="258px" MaxLength="30"></asp:TextBox></TD><TD></TD></TR><TR><TD>Password</TD><TD><asp:TextBox id="txtpsw" runat="server" Width="258px" MaxLength="30" TextMode="password"></asp:TextBox></TD><TD></TD></TR><TR><TD>Confirm 
            Password</TD><TD><asp:TextBox id="txtcof_psw" runat="server" Width="258px" MaxLength="30" TextMode="password"></asp:TextBox></TD><TD></TD></TR><TR><TD>Birth 
            Date</TD><TD><asp:DropDownList id="ddldate" runat="server">
        <asp:ListItem>Date</asp:ListItem>
        <asp:ListItem>01</asp:ListItem>
        <asp:ListItem>02</asp:ListItem>
        <asp:ListItem>03</asp:ListItem>
        <asp:ListItem>04</asp:ListItem>
        <asp:ListItem>05</asp:ListItem>
        <asp:ListItem>06</asp:ListItem>
        <asp:ListItem>07</asp:ListItem>
        <asp:ListItem>08</asp:ListItem>
        <asp:ListItem>09</asp:ListItem>
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
    </asp:DropDownList> <asp:DropDownList id="ddlmonth" runat="server" Width="62px" Height="20px">
                    <asp:ListItem>Month</asp:ListItem>
                    
                    <asp:ListItem>Jan</asp:ListItem><asp:ListItem>Feb</asp:ListItem>  <asp:ListItem>Mar</asp:ListItem>  <asp:ListItem>Apr</asp:ListItem>  <asp:ListItem>May</asp:ListItem>  <asp:ListItem>Jun</asp:ListItem>  <asp:ListItem>Jul</asp:ListItem>  <asp:ListItem>Aug</asp:ListItem>  <asp:ListItem>Sep</asp:ListItem>  <asp:ListItem>Oct</asp:ListItem>  <asp:ListItem>Nov</asp:ListItem>  <asp:ListItem>Dec</asp:ListItem>                   
                    </asp:DropDownList> <asp:DropDownList id="ddlyear" runat="server" Width="57px" Height="20px">
                     <asp:ListItem>Year</asp:ListItem> 
               <%--  <asp:ListItem>2000</asp:ListItem>
           <asp:ListItem>2001</asp:ListItem>
           <asp:ListItem>2002</asp:ListItem>
           <asp:ListItem>2003</asp:ListItem>
           <asp:ListItem>2004</asp:ListItem>
           <asp:ListItem>2005</asp:ListItem>
           <asp:ListItem>2006</asp:ListItem>
           <asp:ListItem>2007</asp:ListItem>
           <asp:ListItem>2008</asp:ListItem>
           <asp:ListItem>2009</asp:ListItem>
           <asp:ListItem>2010</asp:ListItem>
           <asp:ListItem>2011</asp:ListItem>
           <asp:ListItem>2012</asp:ListItem>
           <asp:ListItem>2013</asp:ListItem>
           <asp:ListItem>2014</asp:ListItem>
           <asp:ListItem>2015</asp:ListItem>         
                                 --%>
                              
                    </asp:DropDownList> </TD><TD><asp:Label id="lbldate" runat="server" Text="" ForeColor="Red" Visible="false"></asp:Label></TD></TR><TR><TD>Designation</TD><TD><asp:TextBox id="txtdesig" runat="server" Width="258px" MaxLength="60"></asp:TextBox></TD><TD></TD></TR><TR><TD>Mobile 
            No</TD><TD><asp:TextBox id="txtmobno" runat="server" Width="258px" MaxLength="10"></asp:TextBox></TD><TD><asp:Label id="lblmoberr" runat="server" Text="" ForeColor="Red"></asp:Label></TD></TR><TR><TD>Email</TD><TD><asp:TextBox id="txtemail" runat="server" Width="258px" MaxLength="30"></asp:TextBox></TD><TD><asp:Label id="lblemailerr" runat="server" Text="" ForeColor="Red"></asp:Label></TD></TR><TR><TD>Blood 
            Group</TD><TD><asp:DropDownList id="txt_bloodgr" runat="server" Width="258px"><asp:ListItem>Select</asp:ListItem>
   <asp:ListItem>A+</asp:ListItem><asp:ListItem>B+</asp:ListItem><asp:ListItem>AB+</asp:ListItem><asp:ListItem>O+</asp:ListItem><asp:ListItem>A-</asp:ListItem><asp:ListItem>B-</asp:ListItem><asp:ListItem>AB-</asp:ListItem><asp:ListItem>O-</asp:ListItem>
   </asp:DropDownList></TD><TD></TD></TR><TR><TD>Address</TD><TD><asp:TextBox style="resize: none" id="txtaddr" runat="server" Width="258px" MaxLength="50" TextMode="MultiLine"></asp:TextBox></TD><TD></TD></TR><TR><TD></TD><TD 
          colSpan=2><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Text="Submit" Width="84px" Height="30px" ></asp:Button></TD></TR><TR><TD></TD><TD colSpan=2><asp:Label id="lblmsg" runat="server" ForeColor="green"></asp:Label></TD></TR></TBODY></TABLE> 
    </TD></TR></TBODY></TABLE></center>
    </div>
    </form>
</body>
</html>
