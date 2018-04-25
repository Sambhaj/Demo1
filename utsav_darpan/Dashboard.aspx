<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Dashboard.aspx.cs" Inherits="Dashboard" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="images/fav.png" width="16" height="16"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
</head>

<body style="background-image:url('images/back1.jpg'); background-repeat:  repeat;background-position: 100% 0%; ">
    <form id="form1" runat="server">
    <div class="container"><br />
    <center>
    <div style="padding:10px; background-color:#F39C12; text-align:center; font-size:21px; width:100%; font-weight:bold; color:#FFFFFF;">Dashboard Form</div></center>
    <br />
    <div style="text-align:right;">
    <asp:ImageButton ID="btnlogout" runat="server" ImageUrl="~/images/logout.png" ToolTip="Logout" OnClick="btnlogout_Click1" />
    </div>
    <br />
    <center>
    <table style="width:30%">
    <tr>
    <td>
    <div class="panel panel-success"  >
      
      <div class="panel-body">
       <table style="width:100%">
       <tr>
        <td style="width: 25%; height:80px; text-align:center;"><asp:ImageButton ID="btnchangepwd" runat="server" Height="120px" Width="140px" ImageUrl="~/images/chnge_pass.png" style="padding:20px " ToolTip="Change Password" TabIndex="1" OnClick="btnchangepwd_Click" /></td>
        <td style="width: 25%; height:80px; text-align:center;"><asp:ImageButton ID="btnreguser" runat="server" Height="120px" Width="140px" ImageUrl="~/images/reg_user.png" style="padding:20px" ToolTip="Check Registered Users" TabIndex="2" OnClick="btnreguser_Click"/></td>
       </tr>
       <tr>
        <td colspan="2" style="width: 25%; height:80px; text-align:center;"><asp:ImageButton ID="btncheckprices" runat="server" Height="120px" Width="140px" ImageUrl="~/images/check_price.png" style="padding:20px " ToolTip="Check Prices" TabIndex="3" OnClick="btncheckprices_Click" /></td>
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
