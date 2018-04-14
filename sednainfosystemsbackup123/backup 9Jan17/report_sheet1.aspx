<%@ Page Language="C#" MasterPageFile="~/empmaster.master" AutoEventWireup="true" CodeFile="report_sheet1.aspx.cs" Inherits="report_sheet" Title="Daily Report Sheet" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<center>
    Display Daily report monthly<asp:Label ID="lblid" Visible="false" runat="server" Text=""></asp:Label>
     <asp:DropDownList ID="ddlmonth" runat="server" >
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
           <asp:ListItem>Year</asp:ListItem>
           <asp:ListItem>2000</asp:ListItem>
           <asp:ListItem>2001</asp:ListItem>
           <asp:ListItem>2002</asp:ListItem>
           <asp:ListItem>2003</asp:ListItem>
           <asp:ListItem>2004</asp:ListItem>
           <asp:ListItem>2005</asp:ListItem>
           <asp:ListItem>2006</asp:ListItem>
           <asp:ListItem>2007</asp:ListItem>
           <asp:ListItem>2008</asp:ListItem>
           <asp:ListItem>2009</asp:ListItem>
           <asp:ListItem>2010</asp:ListItem>
           <asp:ListItem>2011</asp:ListItem>
           <asp:ListItem>2012</asp:ListItem>
           <asp:ListItem>2013</asp:ListItem>
           <asp:ListItem>2014</asp:ListItem>
           <asp:ListItem>2015</asp:ListItem>
           </asp:DropDownList>
           <asp:Button ID="btnsearch" runat="server" Text="Search Report" OnClick="btnsearch_click" />
           <br /><br />
           <asp:DataGrid ID="dvreport" runat="server" ></asp:DataGrid>
           <asp:Label ID="lblmsg" runat="server" Text=""></asp:Label>
    </center>
</asp:Content>

