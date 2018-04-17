<%@ Page Language="C#" MasterPageFile="~/empmaster.master" AutoEventWireup="true" CodeFile="client_reg.aspx.cs" Inherits="client_reg" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

  <script type="text/javascript">
 function mobval()
{   
        var txt1=document.getElementById('<%= txt_pmobno.ClientID%>');
         var lbl1=document.getElementById('<%= lblmoberr.ClientID%>');
         var lnth=txt1.value.length; 
        lbl1.innerHTML=""; 
        var digits=/^([0-9]{10})$/;
        var txtvalue=document.getElementById('<%= txt_pmobno.ClientID%>').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
        alert("Please enter 10 digit mobile number.");
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
//lbl1.innerHTML="Enter valid email";
alert("Enter valid email");
 txt1.value="";
 return false
 }
 else
 {
 return true;
 }
}

function chkempty()    //check all fields are fill or not
{
    var txt1=document.getElementById('<%= txtclient_nm.ClientID%>');
    var txt2=document.getElementById('<%= txt_pmobno.ClientID%>');
    var txt3=document.getElementById('<%= txt_email.ClientID%>');
    var txt4=document.getElementById('<%= txt_remark.ClientID%>');
    var lbl=document.getElementById('<%= lblmsg.ClientID%>');
    if(txt1.value == "" || txt2.value == "" || txt4.value == "" )
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


</script>

<center>
<h2>Client Registration</h2><br />
<table><tr><td>Client Name</td><td><asp:TextBox id="txtclient_nm" runat="server" Width="200px" MaxLength="30"></asp:TextBox></td></tr>
<tr><td>Mobile No</td><td><asp:TextBox id="txt_pmobno" runat="server" Width="200px" MaxLength="10"></asp:TextBox></td><asp:Label ID="lblmoberr" runat="server"></asp:Label></tr>
<tr><td>Email Id</td><td><asp:TextBox id="txt_email" runat="server" Width="200px" MaxLength="30"></asp:TextBox></td><td><asp:Label ID="lblemailerr" runat="server"></asp:Label></td></tr>
<tr><td>Remark</td><td><asp:TextBox id="txt_remark" runat="server" TextMode="multiLine" Height="50px" Width="200px" style="resize:none"></asp:TextBox></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" OnClientClick=" if(!chkempty())  return false;" Text="Submit" Width="84px" Height="30px" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table>
</center>

</asp:Content>

