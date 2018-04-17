<%@ Page Language="C#" MasterPageFile="~/empmaster.master" AutoEventWireup="true" CodeFile="Employee_home.aspx.cs" Inherits="Employee_home" Title="Employee Home" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

 <div>
      
   
<center><br /><br /><br /><br />
     <a href="daily_report.aspx">Employee Daily Report Form</a>
    <br /><br />
    <a href="report_sheet.aspx">Display Daily Report </a>
      <br /><br />
    <a href="empleave.aspx">Leave Form</a>
     <br /><br />
    <a href="holidayslist.aspx">Office Holiday List</a>
     <br /><br />
    <a href="emp_profile.aspx">View Profile</a>
    <br /><br />
    <a href="changepassword.aspx">Change Password</a>
    <br /><br />  <a href="emp_salary.aspx">Salary Sheet</a><br /><br />
 <asp:LinkButton ID="a2" runat="server"  Visible="false" Text="Call Log" PostBackUrl="~/cal_log.aspx"></asp:LinkButton>
   <br /><br />
   <asp:LinkButton ID="a3" runat="server"  Visible="false" Text="Client Registration" PostBackUrl="~/client_reg.aspx"></asp:LinkButton><br /><br />
<%--     <a id="a1" visible="false" href="cal_log.aspx">Call Log</a>
      <br /><br />
--%>      <asp:LinkButton ID="a1" runat="server" Visible="false" Text="Todays Call Reminder" PostBackUrl="~/cal_reminder.aspx"></asp:LinkButton>
<%--     <a id="a2" visible="false" href="cal_reminder.aspx">Todays Call Reminder</a>
--%>      
 <br /><br />
  
   <br />
</center>

</div>
</asp:Content>

