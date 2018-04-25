<%@ Page Language="C#" AutoEventWireup="true" CodeFile="demo.aspx.cs" Inherits="demo" %>

    
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="Head1" runat="server">
    <title>Inquiry Form</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="images/fav.png" width="16" height="16"/>
    <link rel="stylesheet" type="text/css" href="assets/css/isotope.css" media="screen" />
	<link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="assets/css/style.css">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });
</script>

 <script type="text/javascript">
     function validate() {
         var summary = "";
         summary += isvalidfname();
         summary += isvalidpostalcode();
         summary += isvalidhomecontact();
         summary += isvalidofficecontact();
         summary += isvalidmobno();
         summary += isvalidwhatsappno();
         summary += isvalidprintcopy();
         if (summary != "") {
             alert(summary);
             return false;
         }
         else {
             return true;
         }
     }

     function isvalidfname() {
         var pn;
         var tpn = document.getElementById("<%=txtfirstname.ClientID %>");
    pn = tpn.value;
    if (pn == "") {
        return ("Please Enter First Name !!" + "\n");
    }
    else {
        return "";
    }
}


function isvalidmobno() {
    var mnl;
    var tmnl = document.getElementById("<%=txtmobileno.ClientID %>");
    mnl = tmnl.value;
    if (isNaN(mnl)) {
        return ("Only Digits Are Allowed In Mobile Number !!" + "\n");
    }
    else {
        return "";
    }
}

function isvalidwhatsappno() {
    var mnl;
    var tmnl = document.getElementById("<%=txtwhatsappno.ClientID %>");
    mnl = tmnl.value;
    if (isNaN(mnl)) {
        return ("Only Digits Are Allowed In Whats App Number !!" + "\n");
    }
    else {
        return "";
    }
}

function isvalidhomecontact() {
    var mnl;
    var tmnl = document.getElementById("<%=txthomecontact.ClientID %>");
    mnl = tmnl.value;
    if (isNaN(mnl)) {
        return ("Only Digits Are Allowed In Home Contact !!" + "\n");
    }
    else {
        return "";
    }
}

function isvalidofficecontact() {
    var mnl;
    var tmnl = document.getElementById("<%=txtofficecontact.ClientID %>");
    mnl = tmnl.value;
    if (isNaN(mnl)) {
        return ("Only Digits Are Allowed In Office Contact !!" + "\n");
    }
    else {
        return "";
    }
}

function isvalidprintcopy() {
    var mnl;
    var tmnl = document.getElementById("<%=txtprintcopies.ClientID %>");
    mnl = tmnl.value;
    if (mnl == "") {
        return ("Please Enter Number Of Print Copies!!" + "\n");
    }
    else if (isNaN(mnl)) {
        return ("Only Digits Are Allowed For Print Copies !!" + "\n");
    }
    else {
        return "";
    }
}

function isvalidpostalcode() {
    var mnl;
    var tmnl = document.getElementById("<%=txtpostalcode.ClientID %>");
    mnl = tmnl.value;
    if (isNaN(mnl)) {
        return ("Only Digits Are Allowed In Postal Code !!" + "\n");
    }
    else {
        return "";
    }
}

 </script>
 
 <%--javascript to hide and show 4-page extra pannel start--%>
 <script type = "text/javascript">
     function Show(obj) {
         if (rdoyes.checked) {

             document.getElementById('DivHide').style.display = 'block';
         }
     }
     function Hide(obj) {
         if (rdono.checked) {
             document.getElementById('DivHide').style.display = 'none';
         }
     }
    </script>
    <%--javascript to hide and show 4-page extra pannel End--%>
    
    <%--javascript to hide and show Envelope Option start--%>
    <script type = "text/javascript">
        function Show1(obj) {
            if (rdowithenvo.checked) {
                document.getElementById('Hdiv1').style.display = 'block';
            }
        }
        function Hide1(obj) {
            if (rdowithoutenvo.checked) {
                document.getElementById('Hdiv1').style.display = 'none';
            }
        }
    </script>
    <%--javascript to hide and Show Envelope Option End--%>
    
    
    
    
    <%--javascript to hide and show Billing Pannel start--%>
    <script type = "text/javascript">
        function Show2() {
            document.getElementById('Div_Bill').style.display = 'block';
        }
        function Hide2(obj) {
            document.getElementById('Div_Bill').style.display = 'none';
        }
    </script>
    <%--javascript to hide and show Billing Pannel End--%>
    
    <%--javascript to set image id in textbox control Start--%>
    <script type="text/javascript">
        function SetName1(imgid) {
            document.getElementById("txtpage5").value = imgid;
        }

        function SetName2(imgidd) {
            document.getElementById("txtpage8").value = imgidd;
        }
    </script>
    <%--javascript to set image id in textbox control End--%>
    
    
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  
  <style>
  body{
  font-family: 'Open Sans', sans-serif;
  }
  </style>
  
  <style>
#zoom_img img{
margin:20px;
height:105px;
width:75px;
-moz-transition:-moz-transform 0.5s ease-in; 
-webkit-transition:-webkit-transform 0.5s ease-in; 
-o-transition:-o-transform 0.5s ease-in;
}
#zoom_img img:hover{
-moz-transform:scale(2);
-webkit-transform:scale(2);
-o-transform:scale(2);
}
</style>

<%--button style code start--%>
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
<%--button style code End--%>

<%--Confirm button style code start--%>
<style>
.utt6{
	border: 2px solid #FFFFFF;
 background:#F9AEAE;
	color: #FFFFFF;
	padding: 6px;
	font-size:14px;
	 border-radius:5px;
	width:120px;
	cursor: pointer;
	font-family: 'Open Sans', sans-serif;
	height:35px;
	position: relative;
	box-sizing: border-box;
	transition: all 500ms ease; 
}
.utt6:hover {
	
	color: #FFFFFF;
	background:#F93C3C;
}
</style>
<%--button style code End--%>

</head>
<body style="background-image:url('images/back1.jpg');  
    background-repeat:  repeat;background-position: 100% 0%; ">
    
<form runat="server" id="form2" name="form1" method="post">
<div class="container"><br />
<center>
<div style="padding:10px; background-color:#F93C3C; text-align:center; font-size:21px; width:100%; font-weight:bold; color:#FFFFFF;">INQUIRY FORM</div></center>
<br />
<div class="row">
<%--Div-2 Start--%>
    <div class="col-sm-6">
    <%--Customer Information Pannel Start Here--%>
    <table style="width:100%">
    <tr>
    <td>
    <div class="panel panel-success"  >
      <div class="panel-heading" style="font-size:15px; color:Black; background:#F9AEAE; height:40px; font-weight:bold;">Customer Information</div>
      <div class="panel-body">
       <table style="width:100%">
       <tr>
        <td style="text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Inquiry Number</td>
        <td style="text-align:left; padding-bottom:2px;"><asp:TextBox ID="txtorderno" runat="server"  Font-Bold="False" ReadOnly="True"></asp:TextBox></td>
       </tr>
       <tr>
        <td style="text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;First Name</td>
        <td style="text-align:left; padding-bottom:2px;"><asp:TextBox ID="txtfirstname" runat="server" TabIndex="1"></asp:TextBox></td>
       </tr>
       <tr>
        <td style="text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Middle Name</td>
        <td style="text-align:left; padding-bottom:2px;"><asp:TextBox ID="txtmiddlename" runat="server" TabIndex="2"></asp:TextBox></td>
       </tr>
       <tr>
        <td style="text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Last Name</td>
        <td style="text-align:left; padding-bottom:2px;"><asp:TextBox ID="txtlastname" runat="server" TabIndex="3"></asp:TextBox></td>
       </tr>
       <tr>
        <td style="text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Address</td>
        <td style="text-align:left; padding-bottom:2px;"><asp:TextBox ID="txtaddress" runat="server" TextMode="MultiLine" TabIndex="4"></asp:TextBox></td>
       </tr>
       <tr>
        <td style="text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;City</td>
        <td style="text-align:left; padding-bottom:2px;"><asp:TextBox ID="txtcity" runat="server" TabIndex="5"></asp:TextBox></td>
       </tr>
       <tr>
        <td style="text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Postal Code</td>
        <td style="text-align:left; padding-bottom:5px;"><asp:TextBox ID="txtpostalcode" runat="server" TabIndex="6"></asp:TextBox></td>
       </tr>
       </table>
       </div>
       </div>
       </td>
       </tr>
       </table>
       <%--Customer Information Pannel End Here--%>
           
    <%--Photos Selection pannel Start Here--%>
    <table style="width:100%">
    <tr>
    <td style="text-align:left;">
    <div class="panel panel-success">
    <div class="panel-heading" style="font-size:15px; color:Black; background:#F9AEAE; height:40px; font-weight:bold;">Select Photos</div>
      <div class="panel-body">
       <table style="width:100%">
        <tr>
            <td style="text-align:left; width:30%; padding-bottom:3px; font-size:11px; font-weight:bold; color:Black;">&nbsp;Page 1</td>
            <td style="text-align:left; padding-left:10px; padding-bottom:3px;"><asp:TextBox ID="txtpage5" runat="server" data-toggle="modal" data-target="#myModal1" TabIndex="23"></asp:TextBox></td>
        </tr>
        <tr>
            <td style="text-align:left; font-size:11px; padding-bottom:3px; font-weight:bold; color:Black;">&nbsp;Page 2</td>
            <td style="text-align:left; padding-left:10px; padding-bottom:3px;"><asp:TextBox ID="txtpage2" runat="server" Text="Fix pg_2" data-toggle="modal" data-target="#myModal2" ReadOnly="true" TabIndex="24"></asp:TextBox></td>
        </tr>
        <tr>
            <td style="text-align:left; font-size:11px; padding-bottom:3px; font-weight:bold; color:Black;">&nbsp;Page 3</td>
            <td style="text-align:left; padding-left:10px; padding-bottom:3px;"><asp:TextBox ID="txtpage3" runat="server" Text="Fix pg_3" ReadOnly="true" data-toggle="modal" data-target="#myModal3" TabIndex="25"></asp:TextBox></td>
        </tr>
        <tr>
            <td style="text-align:left; font-size:11px; padding-bottom:3px; font-weight:bold; color:Black;">&nbsp;Page 4</td>
            <td style="text-align:left; padding-left:10px; padding-bottom:3px;"><asp:TextBox ID="txtremark1" runat="server" TextMode="MultiLine" TabIndex="26"></asp:TextBox><br />
            <asp:FileUpload ID="FileUpload5" runat="server" Font-Names="Verdana" Font-Size="10pt" TabIndex="27"/></td>
        </tr>
        <tr>
            <td style="text-align:left; font-size:11px; padding-bottom:3px; font-weight:bold; color:Black;">&nbsp;Page 5</td>
            <td style="text-align:left; padding-left:10px; padding-bottom:3px;"><asp:TextBox ID="txtpage8" runat="server" data-toggle="modal" data-target="#myModal4" TabIndex="28"></asp:TextBox></td>
        </tr>
        <tr>
            <td style="text-align:left; font-size:11px; padding-bottom:3px; font-weight:bold; color:Black;">&nbsp;Page 6</td>
            <td style="text-align:left; padding-left:10px; padding-bottom:3px;"><asp:TextBox ID="txtpage6" runat="server" Text="Fix pg_6" data-toggle="modal" data-target="#myModal6" ReadOnly="true" TabIndex="29"></asp:TextBox></td>
        </tr>
        <tr>
            <td style="text-align:left; font-size:11px; padding-bottom:3px; font-weight:bold; color:Black;">&nbsp;Page 7</td>
            <td style="text-align:left; padding-left:10px; padding-bottom:3px;"><asp:TextBox ID="txtpage7" runat="server" Text="Fix pg_7" data-toggle="modal" data-target="#myModal7" ReadOnly="true" TabIndex="30"></asp:TextBox></td>
        </tr>
        <tr>
            <td style="text-align:left; font-size:11px; padding-bottom:3px; font-weight:bold; color:Black;">&nbsp;Page 8</td>
            <td style="text-align:left; padding-left:10px; padding-bottom:3px;"><asp:TextBox ID="txtremark4" runat="server" TextMode="MultiLine" TabIndex="31"></asp:TextBox><br>
            <asp:FileUpload ID="FileUpload8" runat="server" Font-Names="Verdana" Font-Size="10pt" TabIndex="32"/></td>
        </tr>
       </table>
       </div>
       </div>
       </td>
       </tr>
       </table>
    <%--Photos Selection pannel End Here--%>
    </div>
    <%--Div-2 End--%>
    
    
    
    <%--Div-3 Start--%>
    <div class="col-sm-6">
    <%--Contact Information Pannel Start Here--%>
    <table style="width:100%">
    <tr>
    <td style="text-align:left;">
    <div class="panel panel-success">
      <div class="panel-heading" style="font-size:15px; color:Black; background:#F9AEAE; height:40px; font-weight:bold;">Contact Information</div>
      <div class="panel-body">
       <table style="width:100%">
        <tr>
        <td style="padding-bottom:3px; text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Home Contact</td>
        <td style="padding-left:10px; padding-bottom:3px; text-align:left;"><asp:TextBox ID="txthomecontact" runat="server" TabIndex="7"></asp:TextBox></td>
        </tr>
        <tr>
        <td style="padding-bottom:3px; text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Office Contact</td>
        <td style="padding-left:10px; padding-bottom:3px; text-align:left;"><asp:TextBox ID="txtofficecontact" runat="server" TabIndex="8"></asp:TextBox></td>
        </tr>
        <tr>
        <td style="padding-bottom:3px; text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Mobile Number</td>
        <td style="padding-left:10px; padding-bottom:3px; text-align:left;"><asp:TextBox ID="txtmobileno" runat="server" TabIndex="9"></asp:TextBox></td>
        </tr>
        <tr>
        <td style="padding-bottom:3px; text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Email Address</td>
        <td style="padding-left:10px; padding-bottom:3px; text-align:left;"><asp:TextBox ID="txtemail" runat="server" TabIndex="10"></asp:TextBox></td>
        </tr>
        <tr>
        <td style="padding-bottom:3px; text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Whats App Number</td>
        <td style="padding-left:10px; padding-bottom:3px; text-align:left;"><asp:TextBox ID="txtwhatsappno" runat="server" TabIndex="11"></asp:TextBox></td>
        </tr>
        </table>
      </div>
    </div>
    </td>
    </tr>
    </table>
    <%--Contact Information Pannel End Here--%>
    
    <%--Panchang Language Panel start Here--%>
    <table style="width:100%">
    <tr>
    <td colspan="2" style="text-align:left;">
    <div class="panel panel-success">
      <div class="panel-body">
       <table style="width:100%">
        <tr>
    <td style="text-align:left; padding-top:2px; font-size:11px; font-weight:bold; color:Black;" valign="top">&nbsp;Panchang Language</td>
    <td style="text-align:left;" valign="top">
    <asp:RadioButton ID="rdogujrati" runat="server" Font-Size="8pt" GroupName="G1" Text="Gujarati" Font-Bold="False" TabIndex="12" Checked="True" />
        &nbsp;<asp:RadioButton ID="rdohindi" runat="server" Font-Size="8pt" GroupName="G1" Text="Hindi" Font-Bold="False" TabIndex="13" />
        &nbsp;<asp:RadioButton ID="rdoenglish" runat="server" Font-Size="8pt" GroupName="G1" Text="English" Font-Bold="False" TabIndex="14" /><br />
        <asp:RadioButton ID="rdogujeng" runat="server" Font-Size="8pt" GroupName="G1" Text="Gujarati English Mix" Font-Bold="False" TabIndex="15" />
    </td>
    </tr>
    <tr>
    <td style="text-align:left; font-size:11px; font-weight:bold; color:Black; padding-bottom:10px;">&nbsp;Print Copies</td>
    <td style="text-align:left; padding-top:5px;">&nbsp;<asp:TextBox ID="txtprintcopies" runat="server" Width="80px" TabIndex="16"></asp:TextBox><br />
        &nbsp;<asp:Label ID="lblminimumcopymsg" runat="server" Font-Bold="False" ForeColor="Red" Text="Minimum 100 and in Multiple of 100" Font-Size="8pt"></asp:Label></td>
    </tr>
    <tr style="height:25px;">
    <td style="text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Delivery Option</td>
    <td style="text-align:left;" align="left">
    <asp:RadioButton ID="rdohand" runat="server" Font-Size="8pt" GroupName="G5" Text="Hand Delivery" Font-Bold="False" TabIndex="17" />
        &nbsp;&nbsp;<asp:RadioButton ID="rdohome" runat="server" Font-Size="8pt" GroupName="G5" Text="Home Delivery" Font-Bold="False" TabIndex="18" /></td>
    </tr>
    <tr style="height:25px;">
    <td style="text-align:left; font-size:11px; font-weight:bold; color:Black;">&nbsp;Envelope</td>
    <td style="text-align:left;" align="left">
    <asp:RadioButton ID="rdowithoutenvo" runat="server" Font-Size="8pt" GroupName="G2" Text="Without Envelope" Font-Bold="False" TabIndex="19" Checked="True" onclick = "Hide1(this)" AutoPostBack="true" />
        &nbsp;<asp:RadioButton ID="rdowithenvo" runat="server" Font-Size="8pt" GroupName="G2" Text="With Envelope" Font-Bold="False" TabIndex="20" onclick = "Show1(this)" /></td>
    </tr>
    
    <%--Hidden Table row start--%>
    <tr>
    <td ></td> 
    <td id ="Hdiv1" style="display:none;">
    <asp:RadioButton ID="rdoblank" runat="server" Font-Size="8pt" GroupName="G3" Text="Blank" Font-Bold="False" TabIndex="18" Checked="True" />
        &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<asp:RadioButton ID="rdoprint" runat="server" Font-Size="8pt" GroupName="G3" Text="Print" Font-Bold="False" TabIndex="19" /></td>
    </tr>
    <%--Hidden Table row End--%>
    
    <tr>
    <td style="text-align:left; font-size:11px; font-weight:bold; color:Black;" align="left">&nbsp;4-Page Extra</td>
    <td style="text-align:left;" align="left">
    <asp:RadioButton ID="rdoyes" runat="server"  Font-Size="8pt" GroupName="G4" Text="Yes" Font-Bold="False" TabIndex="21" onclick = "Show(this)" />
        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<asp:RadioButton ID="rdono" runat="server" Font-Size="8pt" GroupName="G4" Text="No" Font-Bold="False" TabIndex="22" Checked="true" onclick = "Hide(this)" /></td>
    </tr>
    
    </table>
    </div>
    
    </div>
    </td>
    </tr>
    </table>
    <%--Panchang Language Panel End Here--%>
    
    <%--4-Pages Extra Panel Start Here--%>
    <div id="DivHide" style="display:none;">
    <table style="width:100%">
    <tr>
    <td colspan="2" style="text-align:left;">
    <div class="panel panel-success">
      <div class="panel-heading" style="font-size:13px; color:Black; background:#F9AEAE; height:40px; font-weight:bold;">4-Pages Extra</div>
      <div class="panel-body">
       <table style="width:100%">
        <tr>
        <td style="text-align:left; padding-left:3px; padding-bottom:5px; font-size:11px; font-weight:bold; color:Black;">&nbsp;Remark</td>
        <td style="text-align:left; padding-left:5px; padding-bottom:2px;"><asp:TextBox ID="txtremark" runat="server" TextMode="MultiLine"></asp:TextBox></td>
        </tr>
        <tr>
        <td style="text-align:left; padding-left:3px; padding-bottom:5px; font-size:11px; font-weight:bold; color:Black;">&nbsp;Select Image</td>
        <td style="text-align:left; padding-left:5px; padding-bottom:2px;"><asp:FileUpload ID="FileUpload1" runat="server" Font-Names="Verdana" Font-Size="10pt"/></td>
        </tr>
       </table>
    </div>
    </div>
    </td>
    </tr>
    </table>
    </div>
    <%--4-Pages Extra Panel End Here--%>
    
    <%--Display Bill Panel Start Here--%>
    <div id="Div_Bill">
    <table style="width:100%">
    <tr>
    <td colspan="2" style="text-align:left;">
    <div class="panel panel-success">
      <div class="panel-heading" style="font-size:13px; color:Black; background:#F9AEAE; height:40px; font-weight:bold;">Order Summary</div>
      <div class="panel-body">
       <table style="width:100%">
        <tr>
        <td style="text-align:left; width:65%; padding-left:3px; padding-bottom:5px; font-size:11px; font-weight:bold; color:Black;">&nbsp;Quantity</td>
        <td style="text-align:left; padding-left:5px; padding-bottom:2px;">
            &nbsp;<asp:Label ID="lblb_quantity" runat="server" Font-Bold="True" Font-Size="10pt" ForeColor="Teal"
                Text="Label"></asp:Label></td>
        </tr>
        <tr>
        <td style="text-align:left; padding-left:3px; padding-bottom:5px; font-size:11px; font-weight:bold; color:Black;">&nbsp;Unit Price</td>
        <td style="text-align:left; padding-left:5px; padding-bottom:2px;">
            &nbsp;<asp:Label ID="lblb_unitprice" runat="server" Font-Bold="True" Font-Size="10pt" ForeColor="Teal"
                Text="Label"></asp:Label></td>
        </tr>
        <tr>
        <td style="text-align:left; padding-left:3px; padding-bottom:5px; font-size:11px; font-weight:bold; color:Black;">&nbsp;4-Page Extra Charge</td>
        <td style="text-align:left; padding-left:5px; padding-bottom:2px;">
            &nbsp;<asp:Label ID="lblb_extrapg" runat="server" Font-Bold="True" Font-Size="10pt" ForeColor="Teal"
                Text="Label"></asp:Label></td>
        </tr>
        <tr>
        <td style="text-align:left; padding-left:3px; padding-bottom:5px; font-size:11px; font-weight:bold; color:Black;">
            &nbsp;<asp:Label ID="lblb_envelopemsg" runat="server" Text="Envelope Charge" Visible="False"></asp:Label></td>
        <td style="text-align:left; padding-left:5px; padding-bottom:2px;">
            &nbsp;<asp:Label ID="lblb_envelope" runat="server" Font-Bold="True" Font-Size="10pt" ForeColor="Teal"
                Text="Label" Visible="False"></asp:Label></td>
        </tr>
        <tr>
        <td style="text-align:left; padding-left:3px; font-size:11px; font-weight:bold; color:Black;">&nbsp;Total Amount</td>
        <td style="text-align:left; padding-left:5px; padding-bottom:2px;">
            &nbsp;<asp:Label ID="lblb_totalamt" runat="server" Font-Bold="True" Font-Size="11pt" ForeColor="Red" Text="Label"></asp:Label></td>
        </tr>
        <tr>
        <td align="left" valign="top" style="padding-left:5px;"><asp:Label ID="lbldeliveryextrachargemsg" runat="server" Font-Bold="False" Font-Size="9pt" ForeColor="Red" Text="Delievery charges extra as applicable"></asp:Label></td>
        <td style="text-align:left; padding-top:10px; padding-left:3px;"><asp:Button ID="btnconform" class="utt6" runat="server" Text="Confirm Order" TabIndex="35" OnClick="btnconform_Click" Visible="False" /></td>
        </tr>
       </table>
    </div>
    </div>
    </td>
    </tr>
    </table>
    </div>
    
    <%--Display Bill Panel End Here--%>
    
    </div>
    <%--Div-3 End--%>
    
    </div>
    
    <center>
    <div style="padding:10px;text-align:center;">
        <asp:CheckBox ID="chkcondition"  runat="server" Text="We accept all terms and conditions. To view terms and conditions," Font-Size="10pt" /><a href="terms.pdf" class="red" style="font-size:13px; padding-left:5px; color:Red;"><b>Click Here</b></a>
    </div>
    <div style="background-color:#F93C3C; padding:10px;text-align:center;">
        <asp:Button ID="btnsubmit" class="utt5" runat="server" Text="SUBMIT" TabIndex="33" OnClientClick="javascript:validate();" OnClick="btnsubmit_Click" />
        <a href="index.php"><asp:Button ID="btncancel" class="utt5" runat="server" Text="CANCEL" TabIndex="34" /></a>
    </div>
        <div>
            <asp:Label ID="lblfupload" runat="server" Text="0" Visible="False"></asp:Label>
            <asp:Label ID="lblfupload5" runat="server" Text="0" Visible="False"></asp:Label>
            <asp:Label ID="lblfupload8" runat="server" Text="0" Visible="False"></asp:Label>
        </div>
    </center> 
        <div style="text-align:right;">
        <asp:Label ID="Label1" runat="server" Text="For best view in Chrome set Resolution : 1280 X 720" Font-Size="10.5pt" ForeColor="Navy"></asp:Label>
        </div>

</div>
  
  <!-- Modal-1 content-->
 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:Navy; font-weight:bold;">Select Page Image</h4>
        </div>
        <div id="zoom_img" class="modal-body">
            				<section id="portfolio" class="page-section section appear clearfix">


            <div class="row">
						<nav id="filter" class="col-md-12 text-center">
							<ul>
								<li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Yoga Conferance &amp; Competition</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".photography">Yoga At Abrod</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".print">Publication</a></li>
							</ul>
						</nav>
						<div class="col-md-12">
							<div class="row">
								<div class="portfolio-items isotopeWrapper clearfix" id="3">

								<article class="col-sm-4 isotopeItem webdesign">
										<div class="portfolio-item">
											<img src="assets/images/portfolio/g1-1.jpg" id="Page1_ASHAPURAMATA" onclick="SetName2(this.id)" data-dismiss="modal">
											<%--<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="assets/images/portfolio/g1-1.jpg" class="fancybox">
														<!-- <h5>Project Title</h5> -->
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>--%>
										</div>
								</article>

									<a href="img1/shi-ori/Sh17-3.jpg" class="thumbnail" data-categories="webdesign" title="Sh17-3">
                       <img src="img1/Sh17-3.jpg" id="Page1_Sh17-3" onclick="SetName1(this.id)" data-dismiss="modal" />
                      </a>
                    <a href="img1/shi-ori/Sh17-4.jpg" class="thumbnail" data-categories="webdesign" title="Sh17-4">
                       <img src="img1/Sh17-4.jpg" id="Page1_Sh17-4" onclick="SetName1(this.id)" data-dismiss="modal" />
                      </a>


									
									<article class="col-sm-4 isotopeItem photography">
										<div class="portfolio-item">
											<img src="assets/images/portfolio/g6-6.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="assets/images/portfolio/g6-6.jpg" class="fancybox">
														<!-- <h5>Project Title</h5> -->
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>

									
										
									
									<article class="col-sm-4 isotopeItem webdesign">
										<div class="portfolio-item">
											<img src="assets/images/portfolio/g11-11.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="assets/images/portfolio/g11-11.jpg" class="fancybox">
														<!-- <h5>Project Title</h5> -->
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>
                                    <article class="col-sm-4 isotopeItem print">
										<div class="portfolio-item">
											<img src="assets/images/portfolio/pub6.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="assets/images/portfolio/pub6.jpg" class="fancybox">
														<!-- <h5>Project Title</h5> -->
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>
									<article class="col-sm-4 isotopeItem print">
										<div class="portfolio-item">
											<img src="assets/images/portfolio/pub3-3.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="assets/images/portfolio/pub3-3.jpg" class="fancybox">
														<!-- <h5>Project Title</h5> -->
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>
									<article class="col-sm-4 isotopeItem webdesign">
										<div class="portfolio-item">
											<img src="assets/images/portfolio/g16-16.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="assets/images/portfolio/g16-16.jpg" class="fancybox">
														<!-- <h5>Project Title</h5> -->
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>

									
									
									<article class="col-sm-4 isotopeItem photography">
										<div class="portfolio-item">
											<img src="assets/images/portfolio/g3-3.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="assets/images/portfolio/g3-3.jpg" class="fancybox">
														<!-- <h5>Project Title</h5> -->
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>

								
									<article class="col-sm-4 isotopeItem photography">
										<div class="portfolio-item">
											<img src="assets/images/portfolio/g4-4.jpg" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="assets/images/portfolio/g4-4.jpg" class="fancybox">
														<!-- <h5>Project Title</h5> -->
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>
									
									<article class="col-sm-4 isotopeItem webdesign">
										<div class="portfolio-item">
											<img src="assets/images/portfolio/g27.jpg"  alt="" />
											<div class="portfolio-desc align-center"> 
												<div class="folio-info">
													<a href="assets/images/portfolio/g27.jpg"  class="fancybox">
														<!-- <h5>Project Title</h5> -->
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>
									
								
								</div>
							</div>
						</div>
					</div>
                                </section>
          <%--<center><p>

          <%--<img src="img/ASHAPURAMATA.jpg" id="Page1_ASHAPURAMATA" onclick="SetName1(this.id)" data-dismiss="modal" />--%>
          
          <%--<img src="img/ASHAPURAMATA.jpg" id="Page1_ASHAPURAMATA" onclick="SetName1(this.id)" data-dismiss="modal" />
          <img src="img/BALAJI.jpg" id="Page1_BALAJI" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/BHAVANIMATA.jpg" id="Page1_BHAVANIMATA" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/DASAMA.jpg" id="Page1_DASAMA" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/GAYATRIMATA.jpg" id="Page1_GAYATRIMATA" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/GP-1.jpg" id="Page1_GP-1" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/GP-2.jpg" id="Page1_GP-2" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/GP-3.jpg" id="Page1_GP-3" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/GP-4.jpg" id="Page1_GP-4" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/GP-5.jpg" id="Page1_GP-5" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/GP-6.jpg" id="Page1_GP-6" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/HIGLAJMATA.jpg" id="Page1_HIGLAJMATA" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/HM-1.jpg" id="Page1_HM-1" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/HM-2.jpg" id="Page1_HM-2" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/HM-3.jpg" id="Page1_HM-3" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/JALARAMBAPA.jpg" id="Page1_JALARAMBAPA" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/KHODIYARMA.jpg" id="Page1_KHODIYARMA" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/KR-1.jpg" id="Page1_KR-1" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/KR-2.jpg" id="Page1_KR-2" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/KR-3.jpg" id="Page1_KR-3" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/KR-4.jpg" id="Page1_KR-4" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/LAXMINARAYAN.jpg" id="Page1_LAXMINARAYAN" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/MATAJI-1.jpg" id="Page1_MATAJI-1" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/MATAJI-2.jpg" id="Page1_MATAJI-2" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/MATAJI-3.jpg" id="Page1_MATAJI-3" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/MATAJI-4.jpg" id="Page1_MATAJI-4" onclick="SetName1(this.id)" data-dismiss="modal"/>          
          <img src="img/MODHESHWARI.jpg" id="Page1_MODHESHWARI" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/RANDALMA.jpg" id="Page1_RANDALMA" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SAIBABA.jpg" id="Page1_SAIBABA" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SAPTSHRIGIMATA.jpg" id="Page1_SAPTSHRIGIMATA" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SATYANARAYAN.jpg" id="Page1_SATYANARAYAN" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SH-1.jpg" id="Page1_SH-1" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SH-2.jpg" id="Page1_SH-2" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SH-3.jpg" id="Page1_SH-3" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SH-4.jpg" id="Page1_SH-4" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SH-5.jpg" id="Page1_SH-5" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SH-6.jpg" id="Page1_SH-6" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SH-7.jpg" id="Page1_SH-7" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SH-8.jpg" id="Page1_SH-8" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SHV-1.jpg" id="Page1_SHV-1" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SHV-2.jpg" id="Page1_SHV-2" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SHV-3.jpg" id="Page1_SHV-3" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SHV-4.jpg" id="Page1_SHV-4" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SIDDHAMBIKAMATA.jpg" id="Page1_SIDDHAMBIKAMATA" onclick="SetName1(this.id)" data-dismiss="modal"/>
          <img src="img/SITARAM.jpg" id="Page1_SITARAM" onclick="SetName1(this.id)" data-dismiss="modal"/>       
          </p></center>--%>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal-2 content-->
   <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:Navy; font-weight:bold;">Fixed Image</h4>
        </div>
        <div id="Div2" class="modal-body">
          <center><p>
          <img src="img/PG-2FIX.jpg" data-dismiss="modal"/>      
          </p></center>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal-3 content-->
   <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:Navy; font-weight:bold;">Fixed Image</h4>
        </div>
        <div id="Div3" class="modal-body">
          <center><p>
          <img src="img/PG-3FIX.jpg" data-dismiss="modal"/>      
          </p></center>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal-6 content-->
   <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:Navy; font-weight:bold;">Fixed Image</h4>
        </div>
        <div id="Div4" class="modal-body">
          <center><p>
          <img src="img/PG-6FIX.jpg" data-dismiss="modal"/>      
          </p></center>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal-7 content-->
   <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:Navy; font-weight:bold;">Fixed Image</h4>
        </div>
        <div id="Div5" class="modal-body">
          <center><p>
          <img src="img/PG-7FIX.jpg" data-dismiss="modal"/>      
          </p></center>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal-4 content-->
   <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:Navy; font-weight:bold;">Select Page Image</h4>
        </div>
        <div id="Div1" class="modal-body">
         <center><p>
         <img src="img/ASHAPURAMATA.jpg" id="Page5_ASHAPURAMATA" onclick="SetName2(this.id)" data-dismiss="modal" />
          <img src="img/BALAJI.jpg" id="Page5_BALAJI" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/BHAVANIMATA.jpg" id="Page5_BHAVANIMATA" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/DASAMA.jpg" id="Page5_DASAMA" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/GAYATRIMATA.jpg" id="Page5_GAYATRIMATA" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/GP-1.jpg" id="Page5_GP-1" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/GP-2.jpg" id="Page5_GP-2" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/GP-3.jpg" id="Page5_GP-3" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/GP-4.jpg" id="Page5_GP-4" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/GP-5.jpg" id="Page5_GP-5" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/GP-6.jpg" id="Page5_GP-6" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/HIGLAJMATA.jpg" id="Page5_HIGLAJMATA" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/HM-1.jpg" id="Page5_HM-1" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/HM-2.jpg" id="Page5_HM-2" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/HM-3.jpg" id="Page5_HM-3" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/JALARAMBAPA.jpg" id="Page5_JALARAMBAPA" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/KHODIYARMA.jpg" id="Page5_KHODIYARMA" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/KR-1.jpg" id="Page5_KR-1" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/KR-2.jpg" id="Page5_KR-2" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/KR-3.jpg" id="Page5_KR-3" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/KR-4.jpg" id="Page5_KR-4" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/LAXMINARAYAN.jpg" id="Page5_LAXMINARAYAN" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/MATAJI-1.jpg" id="Page5_MATAJI-1" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/MATAJI-2.jpg" id="Page5_MATAJI-2" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/MATAJI-3.jpg" id="Page5_MATAJI-3" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/MATAJI-4.jpg" id="Page5_MATAJI-4" onclick="SetName2(this.id)" data-dismiss="modal"/>          
          <img src="img/MODHESHWARI.jpg" id="Page5_MODHESHWARI" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/RANDALMA.jpg" id="Page5_RANDALMA" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SAIBABA.jpg" id="Page5_SAIBABA" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SAPTSHRIGIMATA.jpg" id="Page5_SAPTSHRIGIMATA" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SATYANARAYAN.jpg" id="Page5_SATYANARAYAN" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SH-1.jpg" id="Page5_SH-1" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SH-2.jpg" id="Page5_SH-2" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SH-3.jpg" id="Page5_SH-3" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SH-4.jpg" id="Page5_SH-4" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SH-5.jpg" id="Page5_SH-5" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SH-6.jpg" id="Page5_SH-6" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SH-7.jpg" id="Page5_SH-7" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SH-8.jpg" id="Page5_SH-8" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SHV-1.jpg" id="Page5_SHV-1" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SHV-2.jpg" id="Page5_SHV-2" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SHV-3.jpg" id="Page5_SHV-3" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SHV-4.jpg" id="Page5_SHV-4" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SIDDHAMBIKAMATA.jpg" id="Page5_SIDDHAMBIKAMATA" onclick="SetName2(this.id)" data-dismiss="modal"/>
          <img src="img/SITARAM.jpg" id="Page5_SITARAM" onclick="SetName2(this.id)" data-dismiss="modal"/>       
          </p></center>
        </div>
      </div>
    </div>
  </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/jquery.isotope.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="assets/js/custom.js"></script>
  </form>
  
</body>
</html>
   