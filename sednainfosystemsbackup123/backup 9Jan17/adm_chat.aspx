<%@ Page Language="C#" MasterPageFile="~/adminmaster.master" AutoEventWireup="true" CodeFile="adm_chat.aspx.cs" Inherits="adm_chat" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
  <br />
  <div style="margin-left:150px;">
      <asp:Label ID="lblmobno" runat="server" Text="Label" Visible="false"></asp:Label>
      <asp:Label ID="lblnm" runat="server" Text="Label" Visible="false"></asp:Label>
   <asp:Button ID="Button1" runat="server" Text="Refresh" />&nbsp;&nbsp;&nbsp;<asp:LinkButton ID="lnk1" runat="server" Text="Visitors List" PostBackUrl="~/onlinechatlist.aspx"></asp:LinkButton><br />
  <table><tr><td><asp:Panel ID="pn1" runat="server" BorderColor="black" BorderWidth="1px" Height="300px" Width="500px" >
         <div style=" width:500px; height:300px; overflow:scroll; border-width:1px; border-color:Black;">
                  <asp:DataGrid ID="lst1"  runat="server" BorderColor="black" ShowHeader="false"   GridLines="none" AutoGenerateColumns="false" >
                  <Columns>
                  <asp:BoundColumn DataField="msgby" SortExpression="msgby" ItemStyle-VerticalAlign="top" ItemStyle-Width="15%"></asp:BoundColumn>
                  <asp:BoundColumn DataField="msg" SortExpression="msg" ItemStyle-Width="70%"></asp:BoundColumn>
                  </Columns>
                  </asp:DataGrid>
                  </div>
        </asp:Panel>
  </td><td>&nbsp;</td></tr></table>
            
             <br />
             <asp:TextBox ID="txtmsg" runat="server" TextMode="MultiLine" style="resize:none" Height="30px" Width="400px"></asp:TextBox> &nbsp; &nbsp; <asp:Button ID="btnsend" Text="Send" runat="server" OnClick="btnsend_Click" />
    <asp:Label ID="lblmsgid"  runat="server" Text="Label" Visible="false"></asp:Label>
</div>
</asp:Content>

