<%@ Page Language="C#" MasterPageFile="~/adminmaster.master" AutoEventWireup="true" CodeFile="adm_rpd_down.aspx.cs" Inherits="adm_rpd_down" Title="Download Report" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<div style="text-align:center; width:890px;">
<asp:DropDownList ID="ddlemplist" runat="server" AutoPostBack="false" OnSelectedIndexChanged="ddlemplist_SelectedIndexChanged"></asp:DropDownList>&nbsp; <asp:DropDownList ID="ddlmonth" runat="server" >
           <asp:ListItem>Month</asp:ListItem>
           <asp:ListItem>Jan</asp:ListItem>
           <asp:ListItem>Feb</asp:ListItem>
           <asp:ListItem>Mar</asp:ListItem>
           <asp:ListItem>Apr</asp:ListItem>
           <asp:ListItem>May</asp:ListItem>
           <asp:ListItem>Jun</asp:ListItem>
           <asp:ListItem>Jul</asp:ListItem>
           <asp:ListItem>Aug</asp:ListItem>
           <asp:ListItem>Sep</asp:ListItem>
           <asp:ListItem>Oct</asp:ListItem>
           <asp:ListItem>Nov</asp:ListItem>
           <asp:ListItem>Dec</asp:ListItem>
           </asp:DropDownList> &nbsp;
           <asp:DropDownList ID="ddlyear" runat="server" >
           <asp:ListItem>2013</asp:ListItem>
                 </asp:DropDownList><asp:Button ID="btnsearch" runat="server" Text="Search" OnClick="ddlemplist_SelectedIndexChanged" /><br /><br />
<asp:GridView  ID="gvdon" runat="server" AutoGenerateColumns="false" OnSelectedIndexChanged="gvdon_SelectedIndexChanged">
<Columns>
<asp:BoundField DataField="empid" HeaderText="Employee Id" SortExpression="empid" />
<asp:BoundField DataField="work_date" HeaderText="Report Date" SortExpression="worl_date" />
<asp:BoundField DataField="report_file" HeaderText="Report Document" SortExpression="report_file" />
<asp:CommandField  HeaderText="Download" ButtonType="Button" SelectText="Download"  ShowSelectButton="true" />
</Columns>
</asp:GridView>
</div>
    <asp:Label ID="Label1" runat="server" Visible="false" Text="Label"></asp:Label>
</asp:Content>

