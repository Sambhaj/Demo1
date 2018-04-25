<%@ Page Language="C#" AutoEventWireup="true" CodeFile="authent.aspx.cs" Inherits="authent" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
</head>
<body>
    <form id="form1" runat="server"><br />
     <div style="border-style:solid;  border-width:1px; margin:0 auto; border-color:Black; padding:0,0,0,0; width:900px; min-height:400px;">
     <div style="margin-left:300px;">
     <br /><br /><br /><br />
      Chat with our experts for solution<br /><br />
     <table><tr><td>Name </td><td><asp:TextBox ID="txtnm" runat="server" Width="200px"></asp:TextBox></td></tr>
    <tr><td>Mobile No </td><td><asp:TextBox ID="txtmobno" runat="server" Width="200px" MaxLength="10"></asp:TextBox></td></tr>
    <tr><td> </td><td><asp:Button ID="btnsubmit" Text="Submit" OnClick="btnsubmit_Click" runat="server" /></td></tr>
    <tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
    </table>
    </div>
    </div>
    </form>
</body>
</html>
