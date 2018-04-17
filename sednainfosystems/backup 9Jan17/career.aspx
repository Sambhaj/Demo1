<%@ Page Language="C#" AutoEventWireup="true" CodeFile="career.aspx.cs" Inherits="career"  EnableViewState="true" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Career Page</title>
    <link rel="shortcut icon" href="images/sedna.png" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <link href="themes/1/style1.css" rel="stylesheet" type="text/css" />
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <script type="text/javascript">
    
function mobval()
{
     var txt1=document.getElementById("txtcontact");
     var lbl1=document.getElementById("lblmoberr");     
     var lnth=txt1.value.length; 
          lbl1.innerHTML=""; 
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById("txtcontact").value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
           var msg="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Please enter 10 digit mobile number.";
         lbl1.innerHTML=msg;
         txt1.value="";
         return false;
         }
         else
         {
          lbl1.innerHTML="";
          return true;
         }
}

function emailval()
{
var txt1=document.getElementById("txtemail");
var txt11=document.getElementById("txtemail").value;
var lbl1=document.getElementById("lblemailerr");
lbl1.innerHTML="";

var re=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/ ;
if(!re.test(txt11))
{
lbl1.innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Enter valid email";
 txt1.value="";
 return false
 }
 else
 {
 return true;
 }
}
</script>
</head>
<body>
<table width="55px" height="160px" class="social_r" border="0" cellpadding="0" cellspacing="0">
            <tr><td height="7px" align="center"></td></tr>
            <tr><td align="center"><a href="https://www.facebook.com/pages/SednaInfosystems/203973059653300"><img src="images/f.png" title="Facebook" alt="f" /></a></td></tr>
            <tr><td align="center"><a href="https://plus.google.com/106955248615388392783/about"><img src="images/google.png" title="Google+"  alt="g"/></a></td></tr>
            <tr><td align="center"><a href="https://twitter.com/sednainfo"><img src="images/twitt.png" title="Twitter" alt="t"/></a></td></tr>
            <tr><td align="center"><a href="http://sednainfo.blogspot.in/"><img src="images/blog.png" title="Blog" alt="b" /></a></td></tr>
           <%-- <tr><td align="center"><a href=""><img src="images/linkd.png" title="Linkdin" alt="l"/></a></td></tr>
            <tr><td align="center"><a href=""><img src="images/msg.png" title="Message" alt="m"/></a></td></tr>--%>
            <tr><td height="7px" align="center"></td></tr>
            </table>
    <form id="form2" runat="server">
    <div>
        <table align="center" class="main" border="0" cellpadding="0" cellspacing="0">
        <tr>
        <td class="header" colspan="3">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr><td><img src="images/logo.png" /></td><td align="center" valign="top"></td></tr>
            </table>
        </td>
        </tr>
        <tr><td class="menu_h" colspan="3">
        <div class="container">
        <ul id="nav">
                <li><a href="Default.aspx">Home</a></li>
                <li><a class="hsubs" href="about.aspx">About Us</a>
                   
                </li>
                <li><a class="hsubs" href="team.aspx">Team</a>
                    
                </li>
                <li><a class="hsubs" href="#">Products</a>
                    <ul class="subs">
                        <li><a href="jalseva.aspx">Watercan Distribution Systems</a></li>
                        <li><a href="ims.aspx">Institute Management System</a></li>
                        <li><a href="onlinetest.aspx">Online Objective Test Series</a></li>
                        <li><a href="matrimony.aspx">Matrimony Match Making</a></li>
                        <li><a href="job_card.aspx">Job Card Pro</a></li>
                        <li><a href="hospital.aspx">Hospital ERP</a></li>
                        <li><a href="mlm.aspx">MLM</a></li>
                        <li><a href="hotel.aspx">Hotel Pro</a></li>
                    </ul>
                </li>
                <li><a href="portfolio.aspx">Portfolio</a></li>
                <li><a href="clientele.aspx">Clientele</a></li>
                <li><a class="hsubs" href="#">Weblinks</a>
                    <ul class="subs">
                        <li><a href="http://sedna.biz/">sedna.biz</a></li>
                        <li><a href="http://sms.sedna.biz/">sms.sedna.biz</a></li>
                        <li><a href="http://projects.sedna.biz/">projects.sedna.biz</a></li>
                        <li><a href="http://jalseva.in/">jalseva.in</a></li>
                    </ul>
                </li>
                <li><a href="contact.aspx">Contact Us</a>
                    <ul class="subs">
                        <li><a href="career.aspx">Career</a></li>
                        <li><a href="contact.aspx">Contact Us</a></li>
                    </ul>
                </li>
                <li><a href="sitemap.aspx">Sitemap</a></li>
                <div id="lavalamp"></div>
            </ul>
           </div>
        <%--<a href="Default.aspx">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
        <a href="#">About Us</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
        <a href="#">Team</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
        <a href="#">Software</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
        <a href="#">Portfolio</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
        <a href="#">Clientele</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
        <a href="#">Contact</a>--%>
        </td></tr>
        <tr><td height="3px" colspan="3"></td></tr>
        <tr><td height="300px" width="1000px" colspan="3"><%--<img src="gallery/b2.jpg" />--%>
        <div id="sliderFrame">
                    <div id="slider">
                        <img src="gallery/b2.jpg" alt="" />
                        <img src="gallery/b1.jpg" alt="" />
                    </div>
                    </div>
        </td></tr>
        <tr><td height="5px" colspan="3"></td></tr>
        <tr bgcolor="white">
            <td class="col">
            <div class="middle">
    
    <div class="title"><h2>
        Careers</h2></div>
    <div style="padding:15px;">
    SEDNA,  IT solution provider lead the way of abreast solutions in huge and amazingly growing market. <%--Sedna is a leader in imaging technology development, offering consistent growth in a team-oriented, rewarding environment.--%> Join the team for a rewarding career in software development and continue to show how we are changing the world through better software.<br /><br />
        <h5>Sign up to be notified of new jobs at Sedna!</h5><br />
        <asp:Label ID="lblid"  runat="server" Text="" Visible="false"></asp:Label>
        <table width="100%"><tr><td>
        
        <table class="rndtbl" cellpadding="3" cellspacing="3">
        <tr><td></td><td><br /><asp:Label ID="Label1" runat="server" Text="Fields with * are mandatory" ForeColor="#FD484F"></asp:Label></td><td></td></tr>
        <%--<tr><td>Id</td><td><asp:TextBox ID="txtuid" runat="server" Width="200px"></asp:TextBox>  </td></tr>--%>
            <tr><td>Name *</td><td><asp:TextBox class="txtbx" ID="txtusername" runat="server" Width="200px"></asp:TextBox>  </td><td></td></tr>
           <tr><td>Contact No *</td><td><asp:TextBox class="txtbx" ID="txtcontact" runat="server" Width="200px"></asp:TextBox>  </td><td><asp:Label CssClass="error" ID="lblmoberr" runat="server" Text=""></asp:Label></td></tr>
           <tr><td>E-mail ID *</td><td><asp:TextBox class="txtbx" ID="txtemail" runat="server" Width="200px"></asp:TextBox> </td><td><asp:Label CssClass="error" id="lblemailerr" runat="server" Text="" ForeColor="Red"></asp:Label></td></tr>
           <tr><td>Applying For *</td><td>
               <asp:DropDownList class="txtbx"  ID="txtapplying" runat="server" Width="207px">
              
                   <asp:ListItem>MCA trainee developer</asp:ListItem>
                   <asp:ListItem>Part-time trainee</asp:ListItem>
                   <asp:ListItem>MBA trainee</asp:ListItem>
                   <asp:ListItem>Fresher BE/MCA/MBA</asp:ListItem>
                   <asp:ListItem>Software trainee</asp:ListItem>
                   <asp:ListItem>Software developer</asp:ListItem>
                   <asp:ListItem>Web-designer</asp:ListItem>
                   <asp:ListItem>Marketing Associate</asp:ListItem>
                   <asp:ListItem>Sales Associate</asp:ListItem>
                   <asp:ListItem>Business Development Officer</asp:ListItem>
                   <asp:ListItem>Franchisee</asp:ListItem>
                   <asp:ListItem>Channel Partner</asp:ListItem>
                   <asp:ListItem>Area Manager</asp:ListItem>
               </asp:DropDownList> </td><td></td></tr>
           <tr><td>Address</td><td><asp:TextBox class="txtbx" ID="txtaddress" runat="server" Width="200px"></asp:TextBox>  </td><td>
               <asp:Label ID="Label2" runat="server" Text="Label"  Font-Bold="true" Font-Names="Verdana" ForeColor="Blue"></asp:Label></td></tr>
           <%--<tr><td>Experience (in years)</td><td><asp:TextBox ID="TextBox3" runat="server" Width="300px" style="resize:none;"></asp:TextBox>  </td></tr>
           <tr><td>Current Employer</td><td><asp:TextBox ID="TextBox3" runat="server" Width="300px" style="resize:none;"></asp:TextBox>  </td></tr>
           <tr><td>Current Designation</td><td><asp:TextBox ID="TextBox4" runat="server" Width="300px" style="resize:none;"></asp:TextBox>  </td></tr>--%>
           <tr><td>Resume *</td> <td style="width: 200px"><asp:FileUpload ID="FileUpload1" runat="server" Width="205px" /> </td><td>
               <asp:Label ID="Label3" runat="server" Text="Label" Font-Bold="true" Font-Names="Verdana" ForeColor="Blue"></asp:Label></td></tr>
           <tr><td></td><td><%--<asp:Button ID="btnsubmit" runat="server" Text="Submit" OnClick="btnsubmit_click" />--%>
           <asp:ImageButton ID="submit" runat="server" ImageUrl="images/submit-button.jpg" OnClick="btnsubmit_click" />
           </td><td></td></tr>
           <tr><td></td><td><asp:Label ID="lblmsg" runat="server" Text="" ForeColor="Green"></asp:Label></td><td></td></tr>
        </table>
        
        </td><td align="center"><img src="images/career.png" /></td></tr></table>
        </div>
    </div>
            </td>     
        </tr>
        <tr><td class="blank"></td></tr>
        <tr><td class="footer" colspan="3">
        
       <table align="center" width="960px">
        <tr>
        <td width="240px">
        <h4>SEDNA</h4>
        <ul>
        <li><a href="http://sednainfo.blogspot.in/">Blog</a></li>
        <li><a href="http://youtube.com/asksedna">Youtube</a></li>        
        <li><a href="gallery.aspx">Photo Gallery</a></li>
        </ul>
        </td>
        <td width="240px">
        <h4>Website</h4>
        <ul>
        <li><a href="http://sedna.biz/" target="_blank">www.sedna.biz</a></li>
        <li><a href="http://sms.sedna.biz/">sms.sedna.biz</a></li>
        <li><a href="http://projects.sedna.biz/">projects.sedna.biz</a></li>
        </ul>
        </td>
        <td width="240px">
        <h4>Software</h4>
        <ul>
        <li><a href="ims.aspx">Institute Management System</a></li>
        <li><a href="hotel.aspx">Hotel Management Software</a></li>
        <li><a href="hospital.aspx">Hospital Management Software</a></li>
        </ul>
        </td>
        <td width="240px">
        <h4>Web Development</h4>
        <ul>
        <li><a href="design.aspx">Design & Usability</a></li>
        <li><a href="web_development.aspx">Website Development</a></li>
        <li><a href="web_app.aspx">Web Application Development</a></li>
        </ul>
        </td>
        </tr>
        </table>
        <div class="copy">Copyright &copy; 2013 All Rights Reserved <a style="color:#F9FCAE; font-weight:bold" href="http://www.sednainfosystems.com">SEDNA</a> | 
        <br /><div class="dis_poli"><a href="disclaimer.aspx">Disclaimer</a> || <a href="privacy.aspx">Privacy policy</a></div>
        </div>
        </td></tr>
        </table>
    </div>
    </form>
</body>
</html>
