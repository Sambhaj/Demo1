<%@ Page Language="C#" AutoEventWireup="true" CodeFile="chk_prices.aspx.cs" Inherits="chk_prices" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Check Prices</title>
    <link rel="shortcut icon" type="image/png" href="images/fav.png" width="16" height="16"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <form id="form1" runat="server">
    <div class="container"><br />
    <center>
    <div style="padding:10px; background-color:#F39C12; text-align:center; font-size:21px; width:100%; font-weight:bold; color:#FFFFFF;">Check Prices</div></center>
    <br />
    <table style="width:100%;">
    <tr>
    <td style="width:50%;">
    <div style="text-align:left;">
    <asp:ImageButton ID="btnback" runat="server" ImageUrl="~/images/back.png" ToolTip="Back" OnClick="btnback_Click" />
    </div>
    </td>
    
    <td style="width:50%;">
    <div style="text-align:right;">
    <asp:ImageButton ID="btnlogout" runat="server" ImageUrl="~/images/logout.png" ToolTip="Logout" OnClick="btnlogout_Click" />
    </div>
    </td>
    </tr>
    </table>   
    
    
    <center><div><table style="width:100%; color:White;"><tr>
    <td style="text-align:right; padding-right:10px; height: 30px;">
        <asp:Label ID="lblmsg" runat="server" Text="Select Panchang Language" Font-Bold="True" ForeColor="#000040"></asp:Label>
    </td>
    <td style="text-align:left; padding-left:10px; height: 30px;">
        <asp:DropDownList ID="ddlpanchang_language" runat="server" Font-Bold="True" Font-Size="9pt" Height="28px" ForeColor="Red" AutoPostBack="True" OnSelectedIndexChanged="ddlpanchang_language_SelectedIndexChanged1">
            <asp:ListItem>---Select Language---</asp:ListItem>
            <asp:ListItem>Gujarati</asp:ListItem>
            <asp:ListItem>Hindi</asp:ListItem>
            <asp:ListItem>English</asp:ListItem>
            <asp:ListItem>Gujarati English Mix</asp:ListItem>
        </asp:DropDownList>
    </td>
    </tr></table></div></center>
    
     <br />
    
    <center>
    <table style="width:100%">
    <tr>
    <td>
    <div class="panel panel-success"  >
      
      <div class="panel-body">
       <table style="width:100%">
       <tr>
        <td>
        <center>
            <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" BackColor="White" BorderColor="#999999" BorderStyle="None" BorderWidth="1px" CellPadding="3" GridLines="Vertical">
                
                <Columns>
                <asp:BoundField DataField="quantity" HeaderText="Quantity">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="rate" HeaderText="Rate">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="total" HeaderText="Total">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="4pg_extra" HeaderText="4-Page Extra">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="blank_envelope" HeaderText="Blank Envelope">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="envelope_print" HeaderText="Print Envelope">
                <ItemStyle Width="100px" /></asp:BoundField>
                </Columns>
                
                <FooterStyle BackColor="#CCCCCC" ForeColor="Black" />
                <RowStyle BackColor="#EEEEEE" ForeColor="Black" Font-Size="10pt" HorizontalAlign="Center" VerticalAlign="Middle" />
                <SelectedRowStyle BackColor="#008A8C" Font-Bold="True" ForeColor="White" />
                <PagerStyle BackColor="#999999" ForeColor="Black" HorizontalAlign="Center" />
                <HeaderStyle BackColor="Navy" Font-Bold="True" ForeColor="White" Font-Size="10pt" Height="10px" HorizontalAlign="Center" VerticalAlign="Middle" BorderStyle="Ridge" />
                <AlternatingRowStyle BackColor="Gainsboro" />
            </asp:GridView>
            </center>
        </td>
       </tr>
       </table>
       </div>
       
     </div>
     </td>
     </tr>
     </table>
       
       
    </center>
    </div>
    </form>
</body>
</html>
