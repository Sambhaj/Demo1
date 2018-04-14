<%@ Page Language="C#" MasterPageFile="~/adminmaster.master" AutoEventWireup="true" CodeFile="work_update.aspx.cs" Inherits="work_update" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<centre>
<asp:Panel ID="pn1" runat="server">
<table><tr><td style="width:230px"></td><td colspan="2" align="center">Daily Sheet Report</td></tr>
    <tr><td></td><td colspan="2"></td></tr>
    <tr><td></td><td>Work Name</td><td><asp:TextBox ID="txt_worknm" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50" ></asp:TextBox>  </td></tr>
    <tr><td></td><td>Concern Person</td><td><asp:TextBox ID="txt_cperson" runat="server" Width="300px" MaxLength="50" ></asp:TextBox>  </td></tr>
    <tr><td></td><td>Description</td><td><asp:TextBox ID="txt_desc" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="50" ></asp:TextBox>  </td></tr>
    <tr><td></td><td>Date In</td><td style=" "> <asp:DropDownList ID="ddldate" runat="server" >
        <asp:ListItem>Date</asp:ListItem>
        <asp:ListItem>01</asp:ListItem>
        <asp:ListItem>02</asp:ListItem>
        <asp:ListItem>03</asp:ListItem>
        <asp:ListItem>04</asp:ListItem>
        <asp:ListItem>05</asp:ListItem>
        <asp:ListItem>06</asp:ListItem>
        <asp:ListItem>07</asp:ListItem>
        <asp:ListItem>08</asp:ListItem>
        <asp:ListItem>09</asp:ListItem>
        <asp:ListItem>10</asp:ListItem>
        <asp:ListItem>11</asp:ListItem>
        <asp:ListItem>12</asp:ListItem>
        <asp:ListItem>13</asp:ListItem>
        <asp:ListItem>14</asp:ListItem>
        <asp:ListItem>15</asp:ListItem>
        <asp:ListItem>16</asp:ListItem>
        <asp:ListItem>17</asp:ListItem>
        <asp:ListItem>18</asp:ListItem>
        <asp:ListItem>19</asp:ListItem>
        <asp:ListItem>20</asp:ListItem>
        <asp:ListItem>21</asp:ListItem>
        <asp:ListItem>22</asp:ListItem>
        <asp:ListItem>23</asp:ListItem>
        <asp:ListItem>24</asp:ListItem>
        <asp:ListItem>25</asp:ListItem>
        <asp:ListItem>26</asp:ListItem>
        <asp:ListItem>27</asp:ListItem>
        <asp:ListItem>28</asp:ListItem>
        <asp:ListItem>29</asp:ListItem>
        <asp:ListItem>30</asp:ListItem>
        <asp:ListItem>31</asp:ListItem>        
    </asp:DropDownList>&nbsp;
           <asp:DropDownList ID="ddlmonth" runat="server" >
           <asp:ListItem>Month</asp:ListItem>
           <asp:ListItem>Jan</asp:ListItem>
           <asp:ListItem>Feb</asp:ListItem>
           <asp:ListItem>Mar</asp:ListItem>
           <asp:ListItem>Apr</asp:ListItem>
           <asp:ListItem>May</asp:ListItem>
           <asp:ListItem>Jun</asp:ListItem>
           <asp:ListItem>Jul</asp:ListItem>
           <asp:ListItem>Aug</asp:ListItem>
           <asp:ListItem>Sep</asp:ListItem>
           <asp:ListItem>Oct</asp:ListItem>
           <asp:ListItem>Nov</asp:ListItem>
           <asp:ListItem>Dec</asp:ListItem>
           </asp:DropDownList> &nbsp;
           <asp:DropDownList ID="ddlyear" runat="server" >
           <asp:ListItem>Year</asp:ListItem><asp:ListItem>2013</asp:ListItem>
	<asp:ListItem>2014</asp:ListItem><asp:ListItem>2015</asp:ListItem>
                 </asp:DropDownList></td><td><asp:Label ID="lbldate" runat="server" Visible="true"></asp:Label></td></tr>
                 <tr><td></td><td>Date Executed</td><td style=" "> <asp:DropDownList ID="ddldate_e" runat="server" >
        <asp:ListItem>Date</asp:ListItem>
        <asp:ListItem>01</asp:ListItem>
        <asp:ListItem>02</asp:ListItem>
        <asp:ListItem>03</asp:ListItem>
        <asp:ListItem>04</asp:ListItem>
        <asp:ListItem>05</asp:ListItem>
        <asp:ListItem>06</asp:ListItem>
        <asp:ListItem>07</asp:ListItem>
        <asp:ListItem>08</asp:ListItem>
        <asp:ListItem>09</asp:ListItem>
        <asp:ListItem>10</asp:ListItem>
        <asp:ListItem>11</asp:ListItem>
        <asp:ListItem>12</asp:ListItem>
        <asp:ListItem>13</asp:ListItem>
        <asp:ListItem>14</asp:ListItem>
        <asp:ListItem>15</asp:ListItem>
        <asp:ListItem>16</asp:ListItem>
        <asp:ListItem>17</asp:ListItem>
        <asp:ListItem>18</asp:ListItem>
        <asp:ListItem>19</asp:ListItem>
        <asp:ListItem>20</asp:ListItem>
        <asp:ListItem>21</asp:ListItem>
        <asp:ListItem>22</asp:ListItem>
        <asp:ListItem>23</asp:ListItem>
        <asp:ListItem>24</asp:ListItem>
        <asp:ListItem>25</asp:ListItem>
        <asp:ListItem>26</asp:ListItem>
        <asp:ListItem>27</asp:ListItem>
        <asp:ListItem>28</asp:ListItem>
        <asp:ListItem>29</asp:ListItem>
        <asp:ListItem>30</asp:ListItem>
        <asp:ListItem>31</asp:ListItem>        
    </asp:DropDownList>&nbsp;
           <asp:DropDownList ID="ddlmonth_e" runat="server" >
           <asp:ListItem>Month</asp:ListItem>
           <asp:ListItem>Jan</asp:ListItem>
           <asp:ListItem>Feb</asp:ListItem>
           <asp:ListItem>Mar</asp:ListItem>
           <asp:ListItem>Apr</asp:ListItem>
           <asp:ListItem>May</asp:ListItem>
           <asp:ListItem>Jun</asp:ListItem>
           <asp:ListItem>Jul</asp:ListItem>
           <asp:ListItem>Aug</asp:ListItem>
           <asp:ListItem>Sep</asp:ListItem>
           <asp:ListItem>Oct</asp:ListItem>
           <asp:ListItem>Nov</asp:ListItem>
           <asp:ListItem>Dec</asp:ListItem>
           </asp:DropDownList> &nbsp;
           <asp:DropDownList ID="ddlyear_e" runat="server" >
           <asp:ListItem>Year</asp:ListItem><asp:ListItem>2013</asp:ListItem>
	<asp:ListItem>2014</asp:ListItem><asp:ListItem>2015</asp:ListItem>
                 </asp:DropDownList></td><td></td></tr>
           <tr><td></td><td>Disussion By</td><td><asp:DropDownList ID="ddldiscby" runat="server" ><asp:ListItem>Select</asp:ListItem><asp:ListItem>Telephone</asp:ListItem><asp:ListItem>Personal</asp:ListItem><asp:ListItem>Email</asp:ListItem><asp:ListItem>Other</asp:ListItem></asp:DropDownList></td></tr>       
           <tr><td></td><td>Material Provided</td><td><asp:TextBox ID="txt_materil" runat="server" Width="300px" style="resize:none;" TextMode="multiLine" MaxLength="100"></asp:TextBox>  </td></tr>           

           <tr><td></td><td></td><td><asp:Button ID="btnsubmit" runat="server" Text="Submit" OnClick="btnsubmit_click"  OnClientClick=" if(!chkempty())  return false;" /></td></tr>
           <tr><td></td><td></td><td><asp:Label ID="lblmsg" runat="server" Text=""></asp:Label></td></tr>
    </table>
</asp:Panel>
</centre>
</asp:Content>

