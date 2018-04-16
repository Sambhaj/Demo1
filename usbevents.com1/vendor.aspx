<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="vendor.aspx.cs" Inherits="co_ordinator" Title="Vendor Form" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<script type="text/javascript">


function chkempty()    //check all fields are fill or not
{
    var txt1=document.getElementById('<%= txt_nm.ClientID%>');
    var txt2=document.getElementById('<%= txt_address.ClientID%>');
    var txt3=document.getElementById('<%= txt_specilities.ClientID%>');

      var lbl=document.getElementById('<%= lblmsg.ClientID%>');
    var txt5=document.getElementById('<%= txt_mobno.ClientID%>');
      
    if(txt1.value == "" || txt2.value == "" || txt3.value == "" || txt5.value == "")
    {
        lbl.innerHTML="Please fill the required fields";
           return false;     
    }   
    else
    {
        lbl.innerHTML="";
        return true;
    }
}

function isNumeric(keyCode)
{
      if(keyCode==16)
            isShift = true;
 
   return ((keyCode >= 48 && keyCode <= 57 || keyCode == 8 || keyCode == 9 || keyCode == 46 || keyCode == 188 || keyCode == 37 || keyCode == 38 || keyCode == 39 || keyCode == 40  ||
            (keyCode >= 96 && keyCode <= 105)) && isShift == false);
}
  function mobval()
{
     var txt1=document.getElementById('<%= txt_mobno.ClientID%>');
     var lbl1=document.getElementById('<%= lblmoberr.ClientID%>');
     var lnth=txt1.value.length; 
          lbl1.innerHTML=""; 
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('<%= txt_mobno.ClientID%>').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
           var msg="Please enter 10 digit mobile number.";
         lbl1.innerHTML=msg;
// alert("Please enter 10 digit mobile number.");
         txt1.value="";
         return false;
         }
         else
         {
          lbl1.innerHTML="";
          return true;
         }
}

function showpanel()
{
document.getElementById('<%= txt_content.ClientID%>').value=document.getElementById('<%= txt_specilities.ClientID%>').value;
document.getElementById('<%= pn1.ClientID%>').style.display = "block";
document.getElementById('<%= txt_content.ClientID%>').focus();
}
function hidepanel()
{
document.getElementById('<%= pn1.ClientID%>').style.display = "none";
}
function copydt()
{
document.getElementById('<%= txt_specilities.ClientID%>').value=document.getElementById('<%= txt_content.ClientID%>').value;
hidepanel();
}
</script>
<br />
<h2>Vendor Form </h2>
<br /><br />
<table><tr><td>
<table cellspacing="6">
<tr><td>Name</td><td><asp:TextBox id="txt_nm" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Mobile No</td><td><asp:TextBox id="txt_mobno" runat="server" Width="200px" MaxLength="10" ></asp:TextBox></td><td><asp:Label ID="lblmoberr" runat="server"></asp:Label></td></tr>
<tr><td>Address</td><td><asp:TextBox id="txt_address" runat="server" Width="200px" TextMode="MultiLine" Height="50px" style="resize:none;"></asp:TextBox></td></tr>
<tr><td>Job Description</td><td><asp:TextBox id="txt_specilities" runat="server" Width="200px" TextMode="MultiLine" Height="50px" style="resize:none;"></asp:TextBox></td></tr>
<%--<tr><td>Cost Description</td><td><asp:TextBox id="txt_costdesc" runat="server" Width="200px" TextMode="MultiLine" Height="50px" style="resize:none;"></asp:TextBox></td></tr>--%>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Text="Submit" Width="84px" Height="30px" OnClientClick=" if(!chkempty())  return false;" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table>
</td>
<td><asp:Panel ID="pn1" runat="server" >Job Description<br /><asp:TextBox ID="txt_content" runat="server" Width="400px" TextMode="MultiLine" Height="180px"> </asp:TextBox> <asp:Button ID="btnsv" runat="server" Text="Save" OnClientClick="copydt(); return false;" /></asp:Panel></td>
</tr></table>

</asp:Content>

