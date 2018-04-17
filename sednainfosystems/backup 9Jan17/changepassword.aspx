<%@ Page Language="C#" MasterPageFile="~/empmaster.master" AutoEventWireup="true" CodeFile="changepassword.aspx.cs" Inherits="changepassword" Title="Change Password" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <script type="text/javascript">
    function chk()  //code to check same password
{
var a=document.getElementById('<%= txtpass.ClientID%>').value;
var b=document.getElementById('<%= txtconfpas.ClientID%>').value;
var c=document.getElementById('<%= lblpass.ClientID%>');

if(a == b)
{
c.innerHTML="";
return true;
}
else
{
document.getElementById('<%= txtconfpas.ClientID%>').value="";
c.innerHTML='Password Should Same';
return false;
}
}



function empty() //code to check empty fields
    {  
         var lbl=document.getElementById('<%= lblmsg.ClientID %>');          
         var emt1=document.getElementById('<%= txtoldpass.ClientID %>');
         var emt2=document.getElementById('<%= txtpass.ClientID %>');
         var emt3=document.getElementById('<%= txtconfpas.ClientID %>');                        
              
          if(emt1.value == "" || emt2.value == "" || emt3.value == "" )
           {
        lbl.innerHTML="Enter all the fields";
        return false;
        }         
        else
        {
        return true;
        }
    }
   </script>

<br />
<center>
<table><asp:Label ID="lblid" runat="server" Text="" Visible="false"></asp:Label>
    <tr><td></td><td colspan="2"><asp:Label ID="Label1" runat="server" Font-Bold="True" Font-Size="Larger" ForeColor="Purple"
        Text="Change Password"></asp:Label><br /><br /></td></tr>
    <%-- <tr><td style="width: 150px" align="left">
        username</td><td ><asp:TextBox ID="txtusername" runat="server"   Width="215px" MaxLength="10"></asp:TextBox></td><td style="width: 163px"></td></tr>--%>
    <tr><td style="width: 150px" align="left">
        Old Password</td><td ><asp:TextBox ID="txtoldpass" runat="server" TextMode="Password"   Width="215px" MaxLength="10"></asp:TextBox></td><td style="width: 163px"></td></tr>
        <tr><td style="width: 87px" align="left">
       New Password</td><td style="width: 193px"><asp:TextBox ID="txtpass" runat="server" TextMode="Password"   Width="215px" MaxLength="10"></asp:TextBox></td><td style="width: 163px"></td></tr>
        <tr><td style="width: 87px" align="left">
        Confirm Password</td><td style="width: 193px"><asp:TextBox ID="txtconfpas" runat="server" TextMode="Password"   Width="215px" MaxLength="10"></asp:TextBox></td><td style="width: 163px" align="left">
        
            <asp:Label ID="lblpass" runat="server" ForeColor="DimGray"></asp:Label></td></tr>
            <tr><td></td><td colspan="2"><asp:Button ID="btnsubmit" runat="server" Text="Submit" Height="25px" Width="93px" OnClick="btnsubmit_Click" OnClientClick=" if(!empty())  return false;"/></td></tr>        
            <tr><td></td><td colspan="2"><asp:Label ID="lblmsg" ForeColor="green" runat="server"></asp:Label></td></tr>
        </table>
</center>
</asp:Content>

