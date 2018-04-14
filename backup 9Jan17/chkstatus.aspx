<%@ Page Language="C#" MasterPageFile="~/adminmaster.master" AutoEventWireup="true" CodeFile="chkstatus.aspx.cs" Inherits="chkstatus" Title="Site Month Status" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<center>
<h3>Check Site Status</h3><br />
Select Date :&nbsp;   <asp:DropDownList ID="ddldate" AutoPostBack="true" runat="server" OnSelectedIndexChanged="ddldate_SelectedIndexChanged" Width="124px">
    </asp:DropDownList><br /><br />
    

<asp:GridView ID="GridView2" runat="server"   RowStyle-Wrap="true" 
                     CellPadding="4" BorderColor="#CC9966" BorderStyle="None" BorderWidth="1px">
                    <RowStyle Font-Names="Verdana" Wrap="True" BackColor="White" ForeColor="#330099" />
                    <EditRowStyle Font-Names="Verdana" />
                    <HeaderStyle BackColor="#00AEEF" Font-Names="Verdana" Font-Size="15px" ForeColor="#FFFFFF" Font-Bold="True" />
                    <AlternatingRowStyle BackColor="#DEE9ED" Font-Names="Verdana" />
                    
                    <FooterStyle BackColor="#FFFFCC" ForeColor="#330099" />
                    <PagerStyle BackColor="#024863" ForeColor="#330099" HorizontalAlign="Center" />
                    <SelectedRowStyle BackColor="#6D7B7F" Font-Bold="True" ForeColor="#663399" />
                </asp:GridView>
                </center><br />
</asp:Content>

