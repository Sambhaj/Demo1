<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="gain_loss_ac.aspx.cs" Inherits="profit_credit" Title="Profit Credit" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

<center>
<br /><h2>Gain & Loss A/C </h2><br /><br />
<table cellspacing="6">
<tr><td width="100px">Event Name</td><td><asp:DropDownList ID="ddleventname" runat="server" Width="200px" AutoPostBack="true" OnSelectedIndexChanged="ddlperson_nm_changed"  ><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td><td><asp:Label ID="lblevdt" runat="server"></asp:Label></td></tr>
<tr><td>Event Expenses</td><td><asp:TextBox id="txt_evntexp" runat="server" Width="150px" MaxLength="9" style="text-align:right;" ReadOnly="true"  ></asp:TextBox></td></tr>
<tr><td>Event Cost</td><td><asp:TextBox id="txt_eventcost" runat="server" Width="150px" MaxLength="9" style="text-align:right;" ReadOnly="true"></asp:TextBox></td></tr>
<tr><td>Event Profit/Loss</td><td><asp:TextBox id="txt_profloss" runat="server" Width="150px"  MaxLength="10" style="text-align:right;" ReadOnly="true"></asp:TextBox></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Visible="false" Text="Submit" Width="84px" Height="30px" OnClientClick=" if(!chkempty())  return false;" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table><br /><br />
   <h3> <asp:Label ID="lbltitl" Text="" runat="server"></asp:Label></h3><br />
<asp:GridView ID="gv_credit" runat="server" AutoGenerateColumns="false" RowStyle-HorizontalAlign="Center" RowStyle-VerticalAlign="Middle">
<Columns>
<asp:BoundField DataField="expdate" SortExpression="expdate"  HeaderText="Pay In Date" ItemStyle-Width="60px" />
<asp:BoundField DataField="payamt" SortExpression="payamt"  ItemStyle-HorizontalAlign="right" HeaderText="Amount" ItemStyle-Width="70px" />
<asp:BoundField DataField="paidby" SortExpression="paidby"  HeaderText="Paid By" ItemStyle-Width="170px" />
<asp:BoundField DataField="remark" SortExpression="remark"  HeaderText="Remark" ItemStyle-Width="150px" />
<asp:BoundField DataField="vendornm" SortExpression="vendornm"  HeaderText="Vendor Name" ItemStyle-Width="150px" />


</Columns>
</asp:GridView>
</center>
</asp:Content>

