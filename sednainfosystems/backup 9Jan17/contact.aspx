<%@ Page Language="C#" MasterPageFile="~/mspfull.master" AutoEventWireup="true" CodeFile="contact.aspx.cs" Inherits="contact" Title="Sedna Infosystems:Contact Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

<div class="title"><h2>Contact Us</h2></div>
<div class="para">
<table>
<tr>
<td>
<table align="center" border="0" cellpadding="2" cellspacing="1">
                                    <tr><td height="4px"></td></tr>								
  	                                <%--<tr><td>Name:</td></tr>--%>
	                                <tr><td><asp:TextBox class="txtbx" OnClick="this.value=''" onblur="if(this.value==''){this.value='Name'}" ID="txtname" Width="190px" runat="server">Name</asp:TextBox></td></tr>
	                                <%--<tr><td>City/State:</td></tr>--%>
	                                <tr><td><asp:TextBox class="txtbx" OnClick="this.value=''" onblur="if(this.value==''){this.value='City/State:'}" ID="txtstate" Width="190px" runat="server">City/State:</asp:TextBox></td></tr>
	                                <%--<tr><td>E-mail Id:</td></tr>--%>
	                                <tr><td><asp:TextBox class="txtbx" OnClick="this.value=''" onblur="if(this.value==''){this.value='E-mail Id:'}" ID="txtemail" Width="190px" runat="server">E-mail Id:</asp:TextBox></td></tr>
	                                <%--<tr><td>Contact No:</td></tr>--%>
	                                <tr><td><asp:TextBox class="txtbx" OnClick="this.value=''" onblur="if(this.value==''){this.value='Contact No:'}" ID="txtmobno" Width="190px" runat="server">Contact No:</asp:TextBox></td></tr>
	                                <%--<tr><td>Message:</td></tr>--%>
	                                <tr><td><asp:TextBox class="txtbxmsg" OnClick="this.value=''" onblur="if(this.value==''){this.value='Your Message'}" ID="txtmsg" Width="190px" Height="100px" runat="server" TextMode="MultiLine">Your Message</asp:TextBox></td></tr>
	                                <tr><td align="left">
	                                <asp:ImageButton ID="submit" runat="server" ImageUrl="images/enquiry.png" OnClick="submit_Click" />
	                                </td></tr>
	                                <tr><td height="4px"></td></tr>
  	                </table>
</td><td align="center">
<marquee scrollamount="2" direction="left"><b>Dealers inquiry for sales is solicited. Fill up the inquiry form below provided to give you a call.</b></marquee><br /><br />
<img src="images/c3.png" /></td><td width="25px"></td>
<td>

<h3>Sedna Infosystems</h3>
<h5>Corporate Office:</h5>
A-505, Block-1, <br />Sarvoday Galaxy,<br />
Kopar, Thane.
<hr />
217, Samuel Street, <br />Masjid Bunder, Mumbai
<hr />
<h5>Development Office:</h5>
Opp. State Bank Of India<br /> 
Old Cotton Market, Amravati<br /><hr />
<u>E-mail</u>: <i>info@sednainfosystems.com</i><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>asksedna@gmail.com</i><br /><br />
<u>Contact</u>: +91- 9890750803 <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91- 8425043894<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91- 8484897384<br /><br />
<u>Website</u>:<a href="http://www.sednainfosystems.com"> Sedna</a><br />

</td></tr>
</table>

</div>
</asp:Content>

