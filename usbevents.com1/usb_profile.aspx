<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="usb_profile.aspx.cs" Inherits="usb_profile" Title="Profile Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<script type="text/javascript" src="js/copy.js"></script>
<%--<br />
<h2>USB PROFILE</h2>--%>
<br />
<table cellpadding="5" cellspacing="15">
<tr>
<td class="rndpro"><a href="customer.aspx">Customer Registration</a></td>
<td class="rndpro"><a href="vendor.aspx">Vendor</a></td>
<td class="rndpro"><a href="vendorr_manage.aspx">Vendor Manage</a></td>
</tr>
<tr>
<%--<td class="rndpro"><a href="customer_expenses_account.aspx">Customer Expenses</a></td>--%>
<td class="rndpro"><a href="vendor_pay_account.aspx">Vendor Pay Account</a></td>
<td class="rndpro"><a href ="customer_pay_account.aspx">Customer Part Payment</a></td>
<td class="rndpro"><a href="maintanance.aspx">Maintanance</a></td>

</tr>
<tr>
<td class="rndpro"><a href="profit_loss.aspx">Profit Loss</a></td>
<td class="rndpro"><a href="daily_debit_acc.aspx">Daily Debit</a></td>
<td class="rndpro"><a href="daily_credit_acc.aspx">Daily Credit</a></td>

</tr>
<tr>
<td class="rndpro"><a href="gain_loss_ac.aspx">Gain & Loss A/C</a></td>
<td class="rndpro"><a href="employee_detail.aspx">Employee Detail</a></td>
<td class="rndpro"><a href="changepassword.aspx">Change Password</a></td>

<%--<td class="rndpro"><a href="registration.aspx">Registration</a></td>--%>
</tr>
</table>
</asp:Content>

