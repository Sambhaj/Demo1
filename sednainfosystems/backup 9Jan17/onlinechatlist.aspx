<%@ Page Language="C#" MasterPageFile="~/adminmaster.master" AutoEventWireup="true" CodeFile="onlinechatlist.aspx.cs" Inherits="onlinechatlist" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<br />
<div style="margin-left:150px;">
                  <asp:DataGrid ID="lst1" Height="300px" runat="server" BorderColor="black" ShowHeader="false"   GridLines="none" AutoGenerateColumns="false" >
                  <Columns>
                  <asp:TemplateColumn>
                 <ItemTemplate>
                 <asp:HyperLink runat="server" NavigateUrl='<%# string.Format("~/adm_chat.aspx?mobno={0}&msgby={1}",HttpUtility.UrlEncode(Eval("mobno").ToString()), HttpUtility.UrlEncode(Eval("msgby").ToString())) %>' Text="Chat" />
                 </ItemTemplate>
                  </asp:TemplateColumn>
                  <asp:BoundColumn DataField="mobno" SortExpression="msgby" ></asp:BoundColumn>
                  <asp:BoundColumn DataField="msgby" SortExpression="msgby" ></asp:BoundColumn>
                  </Columns>
                  </asp:DataGrid>
             
   
</div>
</asp:Content>

