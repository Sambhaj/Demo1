<%@ Page Language="C#" AutoEventWireup="true" CodeFile="emp_login.aspx.cs" Inherits="emp_login" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Employee Login</title>
</head>
<body>
    <form id="form1" runat="server">
   <div style="margin:0 auto; border-width:1px; border-style:solid; padding:1,1,1,1; height:auto; width:957px; height:800px;">
   <table style="width:900px;"><tr><td style="text-align:right; width:350px"><img src="images/logo.png" alt="" /></td><td><h1>Infosystems</h1></td></tr></table>
  
   <hr />
        <br />  <br />  <br />
   <center>
     <table><tr><td><br /><br /><a href="newemp_regi.aspx"><img src="images/admin.png" /></a></td><td>
        
    <table cellpadding="6" cellspacing="6" class="rnd">
    <tr><td>User Name</td><td><asp:TextBox runat="server" id="txtusernm" Width="160px" ></asp:TextBox></td></tr>
    <tr><td>Password</td><td><asp:TextBox ID="txtpass" runat="server" TextMode="Password" Width="160px"></asp:TextBox></td></tr>
    <tr><td></td><td><asp:Button ID="brnsubmit" Text="Login" runat="server" Width="76px" OnClick="brnsubmit_Click" />&nbsp;
    <asp:LinkButton ID="lnkforgotpass" runat="server" Text="Forgot Password" Font-Size="12px" OnClick="lnkforgotpass_Click" ></asp:LinkButton></td></tr>
    <tr><td></td><td><%--<asp:LinkButton ID="lnknewemp" Text="New Employee Registration" PostBackUrl="~/newemp_regi.aspx" runat="server"></asp:LinkButton>--%></td></tr>
    
    </table>
        </td></tr>
        <tr><td></td><td><asp:Label id="lblmsg" ForeColor="red" runat="server" ></asp:Label></td></tr>
        </table>
        </center>
    </div>
    </form>
</body>
</html>
