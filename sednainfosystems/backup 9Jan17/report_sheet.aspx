<%@ Page Language="C#" AutoEventWireup="true" CodeFile="report_sheet.aspx.cs" Inherits="report_sheet" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Report sheet</title>
</head>
<body>
    <form id="form1" runat="server">
    <div style="width:auto;">  
    <table style="border-style:solid;   margin:0 auto; border-color:Black;  border-width:1px; "><tr><td><table style="width:900px;" ><tr><td style="text-align:right; width:350px"><img src="images/logo.png" alt="" /></td><td><h1>Infosystems</h1></td></tr></table></td></tr>
    <tr><td>
    <table style="width:900px;"><tr><td></td><td style="width:300px; text-align:right;">Welcome &nbsp;<asp:Label ID="lblnm" runat="server" Text="Label"></asp:Label></td><td style="width:300px; text-align:center;"><a href="Employee_home.aspx">Home</a></td><td style=" width:300px; text-align:left;"><asp:LinkButton ID="btn_logout" runat="server" Text="LogOut" OnClick="btn_logout_Click1"></asp:LinkButton></td></tr></table>
    </td></tr> 
    <tr><td style="margin-left:100px;">
    <br /><asp:Label ID="lblid" runat="server" Text="" Visible="false"></asp:Label>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
        &nbsp; &nbsp; &nbsp;Display Daily report monthly
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
           <asp:ListItem>Year</asp:ListItem>
                  <asp:ListItem>2013</asp:ListItem>
           <asp:ListItem>2016</asp:ListItem>
           <asp:ListItem>2017</asp:ListItem>
           </asp:DropDownList>
           <asp:Button ID="btnsearch" runat="server" Text="Search Report" OnClick="btnsearch_click" />
           <br /><br />
           <asp:DataGrid ID="dvreport" runat="server" ></asp:DataGrid>
            <asp:Label ID="lblmsg" runat="server" Text=""></asp:Label>  
    </td></tr>    
    </table>        
    </div>    
    </form>
</body>
</html>
