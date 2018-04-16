<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="profit_loss.aspx.cs" Inherits="profit_loss" Title="Profit Loss" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/base/jquery-ui.css" type="text/css" media="all" />
           <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js" type="text/javascript"></script>


    <script type="text/javascript">
        $(function () {
            $("#<%= txt_dt_frm.ClientID  %>").datepicker();
        });
        
        $(function() {
            $("#<%= txt_dt_to.ClientID %>").datepicker();
            });
    </script>
<br /><h2>Profit Loss Account Form</h2>
<br /><br />
 <table cellspacing="6">
        <tr><td>From</td><td><asp:TextBox ID="txt_dt_frm" runat="server" Width="100px"></asp:TextBox></td><td>To</td><td>
        <asp:TextBox ID="txt_dt_to" runat="server" Width="100px"></asp:TextBox>
        </td></tr>
           <tr><td align="center" colspan="4"><br />
           <asp:Button id="Button1" onclick="btnsubmit_Click" OnClientClick=" if(!chkempty())  return false;" runat="server" Text="Search Account" Width="150px" Height="30px" ></asp:Button><br /></td></tr>
           </table>  
           <br />

<table cellspacing="6">
<tr><td >Total Credit</td><td><asp:TextBox ID="txt_credit" runat="server" Width="150px" style="text-align:right;" ReadOnly="true"></asp:TextBox></td></tr>
<tr><td >Total Debit</td><td><asp:TextBox ID="txt_debit" runat="server" Width="150px" style="text-align:right;" ReadOnly="true"></asp:TextBox></td></tr>
<tr><td >Total Maintanance</td><td><asp:TextBox ID="txt_maintanance" runat="server" Width="150px" style="text-align:right;" ReadOnly="true"></asp:TextBox></td></tr>
<tr><td >Total Profit/Loss</td><td><asp:TextBox ID="txt_profit" runat="server" Width="150px" style="text-align:right;" ReadOnly="true"></asp:TextBox></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table>
</asp:Content>

