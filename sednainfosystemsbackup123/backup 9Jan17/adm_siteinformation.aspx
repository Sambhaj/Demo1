<%@ Page Language="C#" MasterPageFile="~/adminmaster.master" AutoEventWireup="true" CodeFile="adm_siteinformation.aspx.cs" Inherits="adm_siteinformation" Title="Site Info" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/base/jquery-ui.css" type="text/css" media="all" />
          <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#<%= txtreminddate.ClientID  %>").datepicker();
        });   
        </script>
<center>
<table><tr><td ></td><td colspan="2"><h2>Site Information</h2></td></tr>
<tr><td>Site Name</td><td><asp:TextBox ID="txtsitename" runat="server" Width="200px"  ></asp:TextBox></td></tr>
<tr><td>Remind Date</td><td>
    <asp:DropDownList ID="txtreminddate" runat="server"><asp:ListItem>Select</asp:ListItem><asp:ListItem>JAN</asp:ListItem><asp:ListItem>FEB</asp:ListItem><asp:ListItem>MAR</asp:ListItem><asp:ListItem>APR</asp:ListItem><asp:ListItem>MAY</asp:ListItem><asp:ListItem>JUN</asp:ListItem><asp:ListItem>JUL</asp:ListItem><asp:ListItem>AUG</asp:ListItem><asp:ListItem>SEP</asp:ListItem><asp:ListItem>OCT</asp:ListItem><asp:ListItem>NOV</asp:ListItem><asp:ListItem>DEC</asp:ListItem>
    </asp:DropDownList>

<%--<asp:TextBox ID="txtreminddate" runat="server" Width="200px"  ></asp:TextBox>--%></td></tr>
<tr><td>Type</td><td><asp:TextBox ID="txttype" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Customer Name</td><td><asp:TextBox ID="txtcustname" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Contact No.</td><td><asp:TextBox ID="txtmobno" runat="server" Width="200px"></asp:TextBox></td></tr>
<tr><td>Remark</td><td><asp:TextBox ID="txtremark" TextMode="multiLine" runat="server" Width="200px"></asp:TextBox></td></tr>
<tr><td></td><td><asp:Button ID="btnsubmit" Text="Submit" runat="server" OnClick="btnsubmit_click" /></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table>
</center>
</asp:Content>

