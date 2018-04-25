<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Admin_Login.aspx.cs" Inherits="Admin_Login" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Admin Login</title>
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
    <div style="padding:10px; background-color:#F39C12; text-align:center; font-size:21px; width:100%; font-weight:bold; color:#FFFFFF;">Admin Login Form</div></center>
    <br />
    <center>
    <table style="width:40%">
    <tr>
    <td>
    <div class="panel panel-success"  >
      
      <div class="panel-heading" style="font-size:15px; color:Black; background:#F9AEAE; height:40px; font-weight:bold;">Login Here</div>
      <div class="panel-body">
       <table style="width:100%">
       <tr>
        <td style="text-align:left; padding-bottom:5px; font-weight:bold; color:Black;"><asp:Label ID="Label1" runat="server" Text="User Name :" Width="90px"></asp:Label></td>
        <td style="text-align:left; padding-bottom:5px;" align="left"><asp:TextBox ID="txtusername" runat="server" placeholder="Enter User Name"></asp:TextBox></td>
       </tr>
       <tr>
        <td style="text-align:left; font-weight:bold; color:Black;"><asp:Label ID="Label2" runat="server" Text="Password :" Width="90px"></asp:Label></td>
        <td style="text-align:left;" align="left"><asp:TextBox ID="txtpassword" runat="server" placeholder="Enter Password" TextMode="Password"></asp:TextBox></td>
       </tr>
       </table>
       </div>
       
     </div>
     <center>
        <asp:Label ID="lblmsg" runat="server" Text="Label" Visible="False"></asp:Label></center></td>
       </tr>
       </table>
       
       <div style="background-color:#F39C12; padding:10px;text-align:center;">
        <asp:Button ID="btnlogin" class="utt5" runat="server" Text="LOGIN" OnClick="btnlogin_Click" />
        <a href="index.php"><asp:Button ID="btncancel" class="utt5" runat="server" Text="CANCEL" OnClick="btncancel_Click" /></a>
    </div>
       
    </center>
    </div>
    </form>
</body>
</html>
