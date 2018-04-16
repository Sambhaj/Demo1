<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="changepassword.aspx.cs" Inherits="changepassword" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<center>
  <h2>Change Password</h2>
  <br />
  <table>
  <tr><td>Username</td><td> <asp:TextBox ID="txtusername" runat="server"></asp:TextBox></td></tr>
  <tr><td>Old Password</td><td> <asp:TextBox ID="txtoldpassword" TextMode="password" runat="server"></asp:TextBox></td></tr>
  <tr><td>New Password</td><td> <asp:TextBox ID="txtnewpassword" TextMode="password" runat="server"></asp:TextBox></td></tr>
  <tr><td>Confirm Password</td><td> <asp:TextBox ID="txtconfirmpassword" runat="server" TextMode="password"></asp:TextBox></td></tr>
  <tr><td></td><td><asp:Button ID="btnlogin" runat="server" Text="Submits" OnClick="btnlogin_Click" /></td></tr>
  <tr><td></td><td> <asp:Label ID="lblmsg" runat="server" Text=""></asp:Label> </td></tr>
  </table>
  
    </center>
</asp:Content>

