<%@ Page Language="C#" AutoEventWireup="true" CodeFile="change_password.aspx.cs" Inherits="change_password" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Change Password</title>
    <link rel="shortcut icon" type="image/png" href="images/fav.png" width="16" height="16"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <style>
.utt5{
	border: 2px solid #FFFFFF;
 background:#FFFFFF;
	color: #000000;
	padding: 6px;
	font-size:14px;
	 border-radius:5px;
	width:110px;
	cursor: pointer;
	font-family: 'Open Sans', sans-serif;
	height:35px;
	position: relative;
	box-sizing: border-box;
	transition: all 500ms ease; 
}
.utt5:hover {
	border: 2px solid #000000;
	color: #000000;
	 
}
</style>

</head>
<body>
    <form id="form1" runat="server">
    <div class="container"><br />
    <center>
    <div style="padding:10px; background-color:#F39C12; text-align:center; font-size:21px; width:100%; font-weight:bold; color:#FFFFFF;">Change Password Form</div></center>
    <br />
    <table style="width:100%;">
    <tr>
    <td style="width:50%;">
    <div style="text-align:left;">
    <asp:ImageButton ID="btnback" runat="server" ImageUrl="~/images/back.png" ToolTip="Back" OnClick="btnback_Click1" />
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
    <table style="width:40%">
    <tr>
    <td>
    <div class="panel panel-success"  >
      
      <div class="panel-heading" style="font-size:15px; color:Black; background:#F9AEAE; height:40px; font-weight:bold;">Change Password Here</div>
      <div class="panel-body">
       <table style="width:80%">
       <tr>
        <td style="text-align:left; padding-bottom:5px; font-weight:bold; color:Black;"><asp:Label ID="Label1" runat="server" Text="Current Password :" Width="135px"></asp:Label></td>
        <td style="text-align:left; padding-left:10px; padding-bottom:5px;" align="left"><asp:TextBox ID="txtcurrpass" runat="server" TextMode="Password"></asp:TextBox></td>
       </tr>
       <tr>
        <td style="text-align:left; padding-bottom:5px; font-weight:bold; color:Black;"><asp:Label ID="Label2" runat="server" Text="New Password :" Width="135px"></asp:Label></td>
        <td style="text-align:left; padding-left:10px; padding-bottom:5px;" align="left"><asp:TextBox ID="txtpassword1" runat="server" TextMode="Password" MaxLength="6"></asp:TextBox></td>
       </tr>
       <tr>
        <td style="text-align:left; font-weight:bold; color:Black;"><asp:Label ID="Label3" runat="server" Text="Confirm Password :" Width="135px"></asp:Label></td>
        <td style="text-align:left; padding-left:10px;" align="left"><asp:TextBox ID="txtpassword2" runat="server" TextMode="Password" MaxLength="6"></asp:TextBox></td>
       </tr>
       </table>
       </div>
       
     </div>
     <center>
        <asp:Label ID="lblmsg" runat="server" Text="Label" Visible="false"></asp:Label></center></td>
       </tr>
       </table>
       
       <div style="background-color:#F39C12; padding:10px;text-align:center;">
        <asp:Button ID="btnsubmit" class="utt5" runat="server" Text="SUBMIT" OnClick="btnsubmit_Click" />
        <asp:Button ID="btncancel" class="utt5" runat="server" Text="CANCEL" OnClick="btncancel_Click" />
    </div>
       
    </center>
    </div>
    </form>
</body>
</html>
