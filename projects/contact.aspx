<%@ Page Language="C#" MasterPageFile="mspfull.master" AutoEventWireup="true" CodeFile="contact.aspx.cs" Inherits="contact" Title="The Perfect Wedding:Contact Page" %>
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
<img src="images/c3.png" /></td><td width="25px"></td>
<td>

<h3>The Perfect Wedding</h3>
  
<h5>Mumbai:</h5>
&nbsp;302 No. Triveni Tower, <br />
&nbsp;Near Bila Bong School, <br />
&nbsp;Malad west, Mumbai

<hr />


&nbsp;<u>E-mail</u>&nbsp;&nbsp;&nbsp;:&nbsp; <i>shaktihanda82@gmail.com</i><br />
<%--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>shaktihanda82@gmail.com--%></i><br />

&nbsp;<u>Contact</u>&nbsp;:&nbsp; +91- 9890750803 <br />
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91- 9637322268<br />
&nbsp;<u>Website</u>&nbsp;:&nbsp;<a href="http://www.theperfectwedding.co.in">The Perfect Wedding</a><br />

</td></tr>
</table>

</div>
</asp:Content>

