<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="report_viewer.aspx.cs" Inherits="report_viewer" Title="Result" %>

<%@ Register Assembly="CrystalDecisions.Web, Version=10.2.3600.0, Culture=neutral, PublicKeyToken=692fbea5521e1304"
    Namespace="CrystalDecisions.Web" TagPrefix="CR" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table align="center"><tr><td>
    <CR:CrystalReportViewer ID="CrystalReportViewer1" runat="server" AutoDataBind="True"
        Height="1054px" BackColor="White" ReportSourceID="CrystalReportSource1" Width="919px" />
    <CR:CrystalReportSource ID="CrystalReportSource1" runat="server">
        <Report FileName="CrystalReport.rpt">
        </Report>
    </CR:CrystalReportSource>
    <CR:CrystalReportSource ID="CrystalReportSource2" runat="server">
      <Report FileName="blank.rpt"></Report>
    </CR:CrystalReportSource>
   </td></tr></table>

</asp:Content>

