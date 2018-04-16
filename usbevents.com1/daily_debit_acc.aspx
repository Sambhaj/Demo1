<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="daily_debit_acc.aspx.cs" Inherits="daily_credit_acc" Title="Daily Credit Account" %>
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
<center><br /><h2>Daily Debit Detail Account Form</h2>
<br /><br />
<table cellspacing="6">  <tr><td>From</td><td><asp:TextBox ID="txt_dt_frm" runat="server" Width="100px"></asp:TextBox></td><td>To</td><td>
        <asp:TextBox ID="txt_dt_to" runat="server" Width="100px"></asp:TextBox>
        </td></tr></table><br /><asp:Button id="btnsubmit" onclick="btnsubmit_Click" OnClientClick=" if(!chkempty())  return false;" runat="server" Text="Search Account" Width="150px" Height="30px" ></asp:Button><br />

<br />
<asp:GridView ID="gv_credit" runat="server" AutoGenerateColumns="false" RowStyle-HorizontalAlign="Center" RowStyle-VerticalAlign="Middle">
<Columns>
<asp:BoundField DataField="evnm" HeaderText="Event Name" ItemStyle-Width="150px" />
<asp:BoundField DataField="paydate"  HeaderText="Event Date" ItemStyle-Width="70px" />
<asp:BoundField DataField="expdate" SortExpression="paydate"  HeaderText="Pay In Date" ItemStyle-Width="60px" />
<asp:BoundField DataField="remark" HeaderText="Remark" ItemStyle-Width="170px" />
<asp:BoundField DataField="paidby"   HeaderText="Paid By" ItemStyle-Width="150px" />
<asp:BoundField DataField="payamt"  ItemStyle-HorizontalAlign="right" HeaderText="Pay Amount" ItemStyle-Width="70px" />
<asp:BoundField DataField="vendornm"  HeaderText="Vendor Name" ItemStyle-Width="150px" />

</Columns>
</asp:GridView>
<br />
    <asp:Label ID="lblmsg" runat="server"></asp:Label></center>
    <asp:LinkButton ID="lnkrpt" Text="Report" PostBackUrl="~/report_viewer.aspx?rpt=Dailyddebit.rpt" runat="server"></asp:LinkButton>
</asp:Content>

