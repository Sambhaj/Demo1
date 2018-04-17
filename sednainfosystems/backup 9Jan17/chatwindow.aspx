<%@ Page Language="C#" AutoEventWireup="true" CodeFile="chatwindow.aspx.cs" Inherits="chatwindow" %>

<%@ Register Assembly="System.Web.Extensions, Version=3.5.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35"
    Namespace="System.Web.UI" TagPrefix="asp" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Untitled Page</title>
</head>
<body>
    <form id="form1" runat="server">
        
     <div style="border-style:solid;  border-width:1px; margin:0 auto; border-color:Black; padding:0,0,0,0; width:900px; min-height:650px;">
     <div style="margin-left:150px;">
         <asp:Label ID="lblmsgid"  runat="server" Text="Label" Visible="false"></asp:Label>
     <br /><asp:Label ID="lblcnt" runat="server" Text="Label" Visible="false"></asp:Label>
     Welcome :  <asp:Label ID="lblnm" runat="server" Text="Label"></asp:Label>&nbsp; <asp:Label ID="lblmobno" runat="server" Text="Label"></asp:Label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <asp:Button ID="Button1" runat="server" Text="Read New Message" OnClick="Button1_Click" /> &nbsp; <asp:LinkButton ID="lnk1" runat="server" Text="Exit Chatting" PostBackUrl="~/authent.aspx"></asp:LinkButton><br />
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
  </td><td></td></tr></table>
            
       
             <br />
             <asp:TextBox ID="txtmsg" runat="server" TextMode="MultiLine" style="resize:none" Height="30px" Width="400px"></asp:TextBox> &nbsp; &nbsp; <asp:Button ID="btnsend" Text="Send" runat="server" OnClick="btnsend_Click" />
</div>
    </div>
    </form>
</body>
</html>
