<%@ Page Language="C#" AutoEventWireup="true" CodeFile="enquiry.aspx.cs" Inherits="enquiry" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>$ Welcome to Ultimate Show Bizz</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="ddsmoothmenu-v.css" />
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> -->
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js"></script>
<script type="text/javascript" src="divsmoothmenu.js"></script>
<script type="text/javascript" src="js/rc.js"></script>

<script type="text/javascript">

function chkbtn()
{
emailvalidate();
	mobval();
}
function emailvalidate()
{
	var x=document.getElementById('txtemail').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  	alert("Please enter valid email id!");
	document.getElementById('txtemail').value="";
	return false;
  	} 
  	else
  	{
  	return true;
  
  	}
  	}

function mobval()
{
     var txt1=document.getElementById('txtmobno');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('txtmobno').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
    	   alert("Please enter 10 digit mobile number.");
         txt1.value="";
         return false;
         }
         else
         {
               return true;
         }
}


</script>
</head>

<body>
<!-- begin #container -->
<div id="container">
    <!-- begin #header -->
    <div id="header">
	<table>
		<tr><td><h1>Ultimate Show Bizz</h1></td>
		<td align="right">
			<div class="logo"><!--<img src="images/logo2.png" /> --></div>
		</td></tr>
		<tr><td colspan="2">
			<div>
			<!--<img src="images/headerPic.jpg" /> -->
			<form id="form1" runat="server">
    <div style="width:876px; border:1px solid Gray; padding:0px 0px 0px 20px; margin-bottom:10px">
    <table width="100%"><tr><td>
			<h2>Enquiry Form</h2><br />
    <table align="center" border="0" cellpadding="3" cellspacing="3">								
  	                                <tr><td>Name:</td></tr>
	                                <tr><td><asp:TextBox ID="txtname" Width="210px" runat="server"></asp:TextBox></td></tr>
	                                <tr><td>City/State:</td></tr>
	                                <tr><td><asp:TextBox ID="txtstate" Width="210px" runat="server"></asp:TextBox></td></tr>
	                                <tr><td>E-mail Id:</td></tr>
	                                <tr><td><asp:TextBox ID="txtemail" Width="210px" runat="server"></asp:TextBox></td></tr>
	                                <tr><td>Contact No:</td></tr>
	                                <tr><td><asp:TextBox ID="txtmobno" Width="210px" runat="server"></asp:TextBox></td></tr>
	                                <tr><td>Message:</td></tr>
	                                <tr><td><asp:TextBox ID="txtmsg" Width="210px" runat="server" Height="50px" TextMode="MultiLine"></asp:TextBox></td></tr>
	                                <tr><td align="left"><br />
	                                <asp:Button ID="submit" runat="server" Font-Bold="True" Font-Names="Times New Roman" Font-Size="Medium"  OnClick="submit_Click" Text="Submit" />
	                                </td></tr>
  	                            </table>
  	                            </td>
  	                            <td align="right"><img src="images/contact2.jpg" /></td></tr></table>	
    </div>
    </form>
			</div>
		</td></tr>
		<tr><td colspan="2">
		<div id="smoothmenu1" class="ddsmoothmenu">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="shows.html">Shows</a></li>
			<li><a href="themes.html">Themes</a></li>
			<li><a href="celebrity.html">Celebrity</a></li>
			<li><a href="enquiry.aspx">Enquiry</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="contact.html">Contact Us</a></li>
		</ul>
		</div>
		</td></tr>
		</table>
	</div>
    <!-- end #header -->
	<div>&nbsp;</div>
	<!-- strt #footer -->
    <div id="footer">
    	<div class="copyright">
		<table width="100%" height="60px">
		<tr><td></td>
		<td align="right">Copyright © 2013 All rights reserved USB | Powered by <a href="http://www.sednainfosystems.com/" class="footerLink">Sedna</a> &nbsp;&nbsp;</td>
		</tr>
		</table>
		</div>
    </div>
    <!-- end #footer -->
</div>
<!-- end #container -->
</body>
</html>
    
