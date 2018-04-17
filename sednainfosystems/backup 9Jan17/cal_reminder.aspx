<%@ Page Language="C#" MasterPageFile="~/empmaster.master" AutoEventWireup="true" CodeFile="cal_reminder.aspx.cs" Inherits="cal_reminder" Title="Call Reminder" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

<script type="text/javascript">
function dataa()
{
var a=document.getElementById('<%= btnfrdt.ClientID%>');
var b=document.getElementById('<%= ddldatefrm.ClientID%>');
var c=document.getElementById('<%= ddlmonthfrm.ClientID%>');
var d=document.getElementById('<%= ddlyearfrm.ClientID%>');
var e=document.getElementById('<%= btnchkclrpt.ClientID%>');
var f=document.getElementById('<%= btncheckremind.ClientID%>');
var g=document.getElementById('<%= ddldate.ClientID%>');
var h=document.getElementById('<%= ddlmonth.ClientID%>');
var i=document.getElementById('<%= ddlyear.ClientID%>');
a.style.display='none';
b.style.display='none';
c.style.display='none';
d.style.display='none';
e.style.display='none';
f.style.display='none';
g.style.display='none';
h.style.display='none';
i.style.display='none';
}

function chk()
{
var a=document.getElementById('<%= btnfrdt.ClientID%>');
var b=document.getElementById('<%= ddldatefrm.ClientID%>');
var c=document.getElementById('<%= ddlmonthfrm.ClientID%>');
var d=document.getElementById('<%= ddlyearfrm.ClientID%>');
var e=document.getElementById('<%= btnchkclrpt.ClientID%>');
var f=document.getElementById('<%= btncheckremind.ClientID%>');
var g=document.getElementById('<%= ddldate.ClientID%>');
var h=document.getElementById('<%= ddlmonth.ClientID%>');
var i=document.getElementById('<%= ddlyear.ClientID%>');
a.style.display='none';
b.style.display='block';
c.style.display='block';
d.style.display='block';
e.style.display='block';
f.style.display='block';
g.style.display='block';
h.style.display='block';
i.style.display='block';
}

function chk1()
{
var a=document.getElementById('<%= btnfrdt.ClientID%>');
var b=document.getElementById('<%= ddldatefrm.ClientID%>');
var c=document.getElementById('<%= ddlmonthfrm.ClientID%>');
var d=document.getElementById('<%= ddlyearfrm.ClientID%>');
var e=document.getElementById('<%= btnchkclrpt.ClientID%>');
var f=document.getElementById('<%= btncheckremind.ClientID%>');
var g=document.getElementById('<%= ddldate.ClientID%>');
var h=document.getElementById('<%= ddlmonth.ClientID%>');
var i=document.getElementById('<%= ddlyear.ClientID%>');
a.style.display='block';
b.style.display='none';
c.style.display='none';
d.style.display='none';
e.style.display='none';
f.style.display='none';
g.style.display='block';
h.style.display='block';
i.style.display='block';
}
</script>


    
<asp:LinkButton ID="lnkbetween" runat="server" OnClientClick="chk(); return false;" Text="Check Between Date"></asp:LinkButton> &nbsp;&nbsp;&nbsp; <asp:LinkButton ID="lnksp" runat="server" OnClientClick="chk1(); return false;" Text="Check For Date"></asp:LinkButton>
<br />
<table><tr><td><asp:DropDownList ID="ddldate" runat="server" >
        <asp:ListItem>Date</asp:ListItem>
        <asp:ListItem>1</asp:ListItem>
        <asp:ListItem>2</asp:ListItem>
        <asp:ListItem>3</asp:ListItem>
        <asp:ListItem>4</asp:ListItem>
        <asp:ListItem>5</asp:ListItem>
        <asp:ListItem>6</asp:ListItem>
        <asp:ListItem>7</asp:ListItem>
        <asp:ListItem>8</asp:ListItem>
        <asp:ListItem>9</asp:ListItem>
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
    </asp:DropDownList>
</td><td><asp:DropDownList ID="ddlmonth" runat="server" >
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
           </asp:DropDownList> 

</td><td> <asp:DropDownList ID="ddlyear" runat="server" >
           <asp:ListItem>Year</asp:ListItem>
           <asp:ListItem>2013</asp:ListItem>
            </asp:DropDownList></td></tr></table>

          <asp:Button ID="btnfrdt" runat="server" Text="Check Reminder For Date" OnClick="btnfrdt_click"/>
            <br />

<table><tr><td><asp:DropDownList ID="ddldatefrm" runat="server" >
        <asp:ListItem>Date</asp:ListItem>
        <asp:ListItem>1</asp:ListItem>
        <asp:ListItem>2</asp:ListItem>
        <asp:ListItem>3</asp:ListItem>
        <asp:ListItem>4</asp:ListItem>
        <asp:ListItem>5</asp:ListItem>
        <asp:ListItem>6</asp:ListItem>
        <asp:ListItem>7</asp:ListItem>
        <asp:ListItem>8</asp:ListItem>
        <asp:ListItem>9</asp:ListItem>
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
    </asp:DropDownList></td><td>
    <asp:DropDownList ID="ddlmonthfrm" runat="server" >
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
           </asp:DropDownList> 
    </td><td>           <asp:DropDownList ID="ddlyearfrm" runat="server" >
           <asp:ListItem>Year</asp:ListItem>
           <asp:ListItem>2013</asp:ListItem>
            </asp:DropDownList></td></tr></table><br />
    

          <table><tr><td><asp:Button ID="btnchkclrpt" runat="server" Text="Check Call report" OnClick="btnchkclrpt_Click"  /> </td><td><asp:Button ID="btncheckremind" runat="server" Text="Check Reminder" OnClick="btncheckremind_Click" /></td></tr></table> 
           <br /><br />
           <asp:Label ID="lblms" runat="server" Text=""></asp:Label><br />
           <asp:Label ID="lblmsg" runat="server" Text=""></asp:Label>  
           <asp:DataGrid ID="gv1" runat="server"  Width="870px"></asp:DataGrid>
            

</asp:Content>

