<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Forgotpass.aspx.cs" Inherits="Forgotpass" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Forgot Password</title>
     <script type="text/javascript">
    function emailval()      //to check valid email
{
var txt1=document.getElementById("txtemail");
var txt11=document.getElementById("txtemail").value;
var lbl1=document.getElementById("emailerr");
lbl1.innerHTML="";

var re=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/ ;
if(!re.test(txt11))
{
lbl1.innerHTML="Enter valid email";
 txt1.value="";}
}
    </script>

</head>
<body>
    <form id="form1" runat="server">
  <div style="margin:0 auto; border-width:1px; border-style:solid; padding:1,1,1,1; height:auto; width:957px; height:800px;">
 <table style="width:900px;"><tr><td style="text-align:right; width:350px"><img src="images/logo.png" alt="" /></td><td><h1>Infosystems</h1></td></tr></table>
   <hr />
   

    <center>
    <br /><br /><br />
    <asp:Label ID="Label2" runat="server" Font-Bold="True" Font-Size="Larger" ForeColor="Purple"
            Text="Enter Username and Email address to get password"></asp:Label> 
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Go to &nbsp;<asp:LinkButton ID="lnklogin" runat="server" PostBackUrl="Default.aspx" >Login</asp:LinkButton>
    <br /><br /><br />
    <table><tr><td style="width: 90px">User Name </td><td style="width: 200px"><asp:TextBox ID="txtuser" Width="180px" runat="server"></asp:TextBox></td><td style="width:200px;"></td></tr>
    <tr><td><asp:Label ID="lbl1" runat="server" Text="Email Id"></asp:Label></td> <td><asp:TextBox ID="txtemail" Width="180px" runat="server" ></asp:TextBox></td><td><asp:Label ID="emailerr" runat="server" ForeColor="red"></asp:Label></td></tr>
    <tr><td></td><td align="left"><asp:Button ID="btnsubmit1" runat="server" Text="Submit" OnClick="btnsubmit_Click" /><asp:Button ID="btnsubmit2" runat="server" Text="Submit" OnClick="btnsubmit1_Click" /></td></tr>
    </table><br /><br /><asp:Label ID="Label1" runat="server" Text=" Thank you. Your Password is :" ></asp:Label>
    <asp:Label ID="lblmsg" runat="server" ></asp:Label><br />
    </center>      
    </div>

    </form>
</body>
</html>
