<%@ Page Language="C#" MasterPageFile="~/adminmaster.master" AutoEventWireup="true" CodeFile="adm_changpass.aspx.cs" Inherits="adm_changpass" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table><tr><td style="width:200px;"></td><td colspan="2"><h2>Change Password</h2></td></tr>
<tr><td></td><td>Old Password</td><td><asp:TextBox ID="txtoldpss" runat="server" Width="200px" MaxLength="20" TextMode="Password"></asp:TextBox></td></tr>
<tr><td></td><td>New Password</td><td><asp:TextBox ID="txtnewpass" runat="server" Width="200px" MaxLength="20" TextMode="Password"></asp:TextBox></td></tr>
<tr><td></td><td>Confirm Password</td><td><asp:TextBox ID="txtconfpass" runat="server" Width="200px" MaxLength="20" TextMode="Password"></asp:TextBox></td></tr>
<tr><td></td><td></td><td><asp:Button ID="btnsubmit" Text="Submit" runat="server" OnClick="btnsubmit_click" /></td></tr>
<tr><td></td><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table>

</asp:Content>

