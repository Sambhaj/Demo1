<%@ Page Language="C#" AutoEventWireup="true" CodeFile="chk_reg_user.aspx.cs" Inherits="chk_reg_user" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Check Registered Users</title>
    <link rel="shortcut icon" type="image/png" href="images/fav.png" width="16" height="16"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <form id="form1" runat="server">
    <div class="container"><br />
    <center><div style="padding:10px; background-color:#F39C12; text-align:center; font-size:21px; width:100%; font-weight:bold; color:#FFFFFF;">Registered Users</div></center>
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
            <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" BackColor="White"
                BorderColor="#999999" BorderStyle="None" BorderWidth="1px" CellPadding="3" GridLines="Vertical">
                <Columns>
                <asp:BoundField DataField="order_no" HeaderText="Invoice No.">
                <ItemStyle Width="50px" /></asp:BoundField>
                
                <asp:BoundField DataField="full_name" HeaderText="Name">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="address" HeaderText="Address">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="phone_home" HeaderText="Home Contact">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="phone_office" HeaderText="Office Contact">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="mobile" HeaderText="Mobile No.">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="email" HeaderText="Email">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="whatsapp_no" HeaderText="Whats-App No.">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="panchang_language" HeaderText="Panchang Language">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="print_copies" HeaderText="Print Copies">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="envelope" HeaderText="Envelope">
                <ItemStyle Width="50px" /></asp:BoundField>
                
                <asp:BoundField DataField="withenvlope" HeaderText="With Envelope">
                <ItemStyle Width="50px" /></asp:BoundField>
                
                <asp:BoundField DataField="delivery" HeaderText="Delivery">
                <ItemStyle Width="50px" /></asp:BoundField>
                
                <asp:BoundField DataField="4pg_extra" HeaderText="4-Page Extra">
                <ItemStyle Width="50px" /></asp:BoundField>
                
                <asp:TemplateField HeaderText = "Image">
                <ItemTemplate>
                <asp:ImageButton ID="imgbtn" ImageUrl='<%# Eval("img") %>' runat="server" CommandArgument = '<%# Eval("img") %>' ControlStyle-Width="90" ControlStyle-Height = "80" ToolTip="Click For Download" OnClick="DownloadFile" />
                </ItemTemplate>
                </asp:TemplateField>
        
                <asp:BoundField DataField="remark" HeaderText="Remark">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="pg_1" HeaderText="Page-1">
                <ItemStyle Width="50px" /></asp:BoundField>
                
                <asp:BoundField DataField="pg_2" HeaderText="Page-2">
                <ItemStyle Width="50px" /></asp:BoundField>
                
                <asp:BoundField DataField="pg_3" HeaderText="Page-3">
                <ItemStyle Width="50px" /></asp:BoundField>
                
                <asp:BoundField DataField="pg_5" HeaderText="Page-5">
                <ItemStyle Width="50px" /></asp:BoundField>
                
                <asp:BoundField DataField="pg_6" HeaderText="Page-6">
                <ItemStyle Width="50px" /></asp:BoundField>
                
                <asp:BoundField DataField="pg_7" HeaderText="Page-7">
                <ItemStyle Width="50px" /></asp:BoundField>
                
                <asp:TemplateField HeaderText = "Image-4">
                <ItemTemplate>
                <asp:ImageButton ID="imgbtn4" ImageUrl='<%# Eval("img4") %>' runat="server" CommandArgument = '<%# Eval("img4") %>' ControlStyle-Width="90" ControlStyle-Height = "80" ToolTip="Click For Download" OnClick="DownloadFile" />
                </ItemTemplate>
                </asp:TemplateField>
                
                <asp:BoundField DataField="remark4" HeaderText="Remark-4">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:TemplateField HeaderText = "Image-8">
                <ItemTemplate>
                <asp:ImageButton ID="imgbtn8" ImageUrl='<%# Eval("img8") %>' runat="server" CommandArgument = '<%# Eval("img8") %>' ControlStyle-Width="90" ControlStyle-Height = "80" ToolTip="Click For Download" OnClick="DownloadFile" />
                </ItemTemplate>
                </asp:TemplateField>
                
                <asp:BoundField DataField="remark8" HeaderText="Remark-8">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                <asp:BoundField DataField="final_total" HeaderText="Total Amount">
                <ItemStyle Width="100px" /></asp:BoundField>
                
                </Columns>
                <FooterStyle BackColor="#CCCCCC" ForeColor="Black" />
                <RowStyle BackColor="#EEEEEE" ForeColor="Black" Font-Size="9pt" HorizontalAlign="Center" VerticalAlign="Middle" />
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
