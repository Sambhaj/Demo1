<%@ Page Language="C#" MasterPageFile="~/msp.master" AutoEventWireup="true" CodeFile="login.aspx.cs" Inherits="login" Title="Login Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<form id="form1">
    <div>
     <table><tr><td>
     <h2>Login Here</h2><br /> <br />
    <table cellpadding="6" cellspacing="6" class="rnd">
    <tr><td>User Name</td><td><asp:TextBox runat="server" id="txtusernm" Width="160px" ></asp:TextBox></td></tr>
    <tr><td>Password</td><td><asp:TextBox ID="txtpass" runat="server" TextMode="Password" Width="160px"></asp:TextBox></td></tr>
    <tr><td></td><td><asp:Button ID="brnsubmit" Text="Login" runat="server" Width="76px" OnClick="brnsubmit_Click" />&nbsp;
<%--    <asp:LinkButton ID="lnkforgotpass" runat="server" Text="Forgot Password" Font-Size="12px" OnClick="lnkforgotpass_Click" ></asp:LinkButton>--%></td></tr>
    <tr><td></td><td><%--<asp:LinkButton ID="lnknewemp" Text="New Employee Registration" PostBackUrl="~/newemp_regi.aspx" runat="server"></asp:LinkButton>--%></td></tr>
    <tr><td></td><td><asp:Label id="lblmsg" ForeColor="red" runat="server" ></asp:Label></td></tr>
    </table>
        </td><td><img src="images/login.png" /></td></tr>
        
        </table><br /><br />
    </div>
    </form>
</asp:Content>

