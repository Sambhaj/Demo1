<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="registration.aspx.cs" Inherits="registration" Title="Registration" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

<script type="text/javascript">
 function chkempty()    //check all fields are fill or not
{
    var txt1=document.getElementById('<%= txt_name.ClientID%>');
    var txt2=document.getElementById('<%= txt_username.ClientID%>');
    var txt3=document.getElementById('<%= txt_password.ClientID%>');
    var txt4=document.getElementById('<%= txt_mobno.ClientID%>');
    var txt5=document.getElementById('<%= txt_email.ClientID%>');
    var txt6=document.getElementById('<%= txtconfirmpass.ClientID%>');
    var lbl=document.getElementById('<%= lblmsg.ClientID%>');
      
    if(txt1.value == "" || txt2.value == "" || txt3.value == "" || txt4.value == "" || txt5.value == "" || txt6.value == "" )
    {
        lbl.innerHTML="Please fill the required fields";
           return false;     
    }
   else
    {
        lbl.innerHTML="";
        return true;
    }
}
  function mobval()
{
     var txt1=document.getElementById('<%= txt_mobno.ClientID%>');
     var lbl1=document.getElementById('<%= lblmoberr.ClientID%>');
     var lnth=txt1.value.length; 
          lbl1.innerHTML=""; 
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('<%= txt_mobno.ClientID%>').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
           var msg="Please enter 10 digit mobile number.";
         lbl1.innerHTML=msg;
//alert("Please enter 10 digit mobile number.");
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
var txt1=document.getElementById('<%= txt_email.ClientID%>');
var txt11=document.getElementById('<%= txt_email.ClientID%>').value;
var lbl1=document.getElementById('<%= lblemailerr.ClientID%>');
lbl1.innerHTML="";

var re=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/ ;
if(!re.test(txt11))
{
lbl1.innerHTML="Enter valid email";
//alert("Enter valid email");
 txt1.value="";
 return false
 }
 else
 {
 return true;
 }
}
  function chk()  //code to check same password
{
var a=document.getElementById('<%= txt_password.ClientID%>').value;
var b=document.getElementById('<%= txtconfirmpass.ClientID%>').value;
var c=document.getElementById('<%= lblpass.ClientID%>');

if(a == b)
{
c.innerHTML="";
return true;
}
else
{
document.getElementById('<%= txtconfirmpass.ClientID%>').value="";
c.innerHTML='Password Should Same';
return false;
}
}


</script>
<center><br />
<h2>Registration Form</h2><br /><br />
<table cellspacing="6">
<tr><td>Person Name</td><td><asp:TextBox id="txt_name" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Mobile No</td><td><asp:TextBox id="txt_mobno" runat="server" Width="200px" MaxLength="10" ></asp:TextBox></td><td><asp:Label ID="lblmoberr" runat="server"></asp:Label></td></tr>
<tr><td>Email</td><td><asp:TextBox id="txt_email" runat="server" Width="200px"></asp:TextBox></td><td><asp:Label ID="lblemailerr" runat="server"></asp:Label></td></tr>

<tr><td>User Name</td><td><asp:TextBox id="txt_username" runat="server" Width="200px" ></asp:TextBox></td><td><asp:LinkButton ID="lnkchk" runat="server" Text="Check UserName" OnClick="lnkchk_Click"></asp:LinkButton></td><td><asp:Label ID="lblunm" runat="server"></asp:Label></td></tr>
<tr><td>Passwrod</td><td><asp:TextBox id="txt_password" runat="server" TextMode="Password" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Confirm Passwrod</td><td><asp:TextBox id="txtconfirmpass" runat="server" TextMode="Password" Width="200px" ></asp:TextBox></td><td><asp:Label ID="lblpass" runat="server"></asp:Label></td></tr>
<tr><td>User Type</td><td><asp:DropDownList id="ddl_utype" runat="server" Width="200px" Height="20px"><asp:ListItem>Select</asp:ListItem><asp:ListItem>Admin</asp:ListItem><asp:ListItem>Employee</asp:ListItem></asp:DropDownList></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" OnClientClick=" if(!chkempty())  return false;" runat="server" Text="Submit" Width="84px" Height="30px" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table></center>
</asp:Content>

