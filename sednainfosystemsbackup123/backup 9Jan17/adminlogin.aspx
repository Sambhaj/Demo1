<%@ Page Language="C#" AutoEventWireup="true" CodeFile="adminlogin.aspx.cs" Inherits="adminlogin" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Admin Login</title>
</head>
<body> 
<form id="form1" runat="server">
   <div style="margin:0 auto; border-width:1px; border-style:solid; padding:1,1,1,1; height:auto; width:957px; height:800px;">
   <table style="width:900px;"><tr><td style="text-align:right; width:350px"><img src="images/logo.png" alt="" /></td><td><h1>Infosystems</h1></td></tr></table>
  
   <hr />
        <br />  <br />  <br />
   <center><TABLE><TBODY><TR><TD><BR 
      /><BR /><A href="newemp_regi.aspx"><IMG src="images/admin.jpg" 
    /></A></TD><TD><TABLE class="rnd" cellSpacing=6 
          cellPadding=6><TBODY><TR><TD>User Name</TD><TD><asp:TextBox id="txtusernm" runat="server" Width="160px"></asp:TextBox></TD></TR><TR><TD>Password</TD><TD><asp:TextBox id="txtpass" runat="server" Width="160px" TextMode="Password"></asp:TextBox></TD></TR><TR><TD></TD><TD><asp:Button id="brnsubmit" onclick="brnsubmit_Click" runat="server" Width="76px" Text="Login"></asp:Button>
</TD></TR></TBODY></TABLE></TD></TR><TR><TD></TD><TD><asp:Label id="lblmsg" runat="server" ForeColor="red"></asp:Label></TD></TR></TBODY></TABLE></center>
    </div>
    </form>
   
</body>
</html>
