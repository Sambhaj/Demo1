<%@ Page Language="C#" MasterPageFile="~/empmaster.master" AutoEventWireup="true" CodeFile="emp_salary.aspx.cs" Inherits="emp_salary" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

<center>
<asp:Label ID="lblid" runat="server" Text="" Visible="false"></asp:Label><asp:Label ID="lblnm" runat="server" Text="" Visible="false"></asp:Label>
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
                  <asp:ListItem>2013</asp:ListItem>
           <asp:ListItem>2014</asp:ListItem>
           <asp:ListItem>2015</asp:ListItem>
           </asp:DropDownList>&nbsp;&nbsp;&nbsp;<asp:Button ID="bunchk" Text="Search" runat="server" OnClick="btnchk_click" />
<br /><br />
<asp:GridView runat="server" ID="gv" AutoGenerateColumns="false">
<Columns>
<asp:BoundField DataField="basic" HeaderText="Basic Salary"  ItemStyle-Width="50px" ItemStyle-HorizontalAlign="right"/>
<asp:BoundField DataField="ta" HeaderText="TA"  ItemStyle-Width="50px" ItemStyle-HorizontalAlign="right"/>
<asp:BoundField DataField="da" HeaderText="DA"  ItemStyle-Width="50px" ItemStyle-HorizontalAlign="right"/>
<asp:BoundField DataField="incentive" HeaderText="Incentive"  ItemStyle-Width="50px" ItemStyle-HorizontalAlign="right"/>
<asp:BoundField DataField="leave" HeaderText="Leave"  ItemStyle-Width="50px" ItemStyle-HorizontalAlign="right"/>
<asp:BoundField DataField="gross_sal" HeaderText="Gross Salary"  ItemStyle-Width="50px" ItemStyle-HorizontalAlign="right"/>
<asp:BoundField DataField="prof_tax" HeaderText="Professional Tax"  ItemStyle-Width="50px" ItemStyle-HorizontalAlign="right"/>
<asp:BoundField DataField="net_sal" HeaderText="Net Salary"  ItemStyle-Width="50px" ItemStyle-HorizontalAlign="right"/>
</Columns>
</asp:GridView>
<br />
<asp:Label ID="lblmsg" runat="server"></asp:Label>
</center>
</asp:Content>

