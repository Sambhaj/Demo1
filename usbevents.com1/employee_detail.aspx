<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="employee_detail.aspx.cs" Inherits="employee_detail" Title="Employee Detail Form" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/base/jquery-ui.css" type="text/css" media="all" />
           <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js" type="text/javascript"></script>


    <script type="text/javascript">
        $(function () {
            $("#<%= txt_date.ClientID  %>").datepicker();
        });              
    </script>
<script type="text/javascript">

function chkempty()    //check all fields are fill or not
{
    var txt1=document.getElementById('<%= txt_name.ClientID%>');
    var txt2=document.getElementById('<%= txt_mobno.ClientID%>');
    var txt3=document.getElementById('<%= txt_add.ClientID%>');
    var txt4=document.getElementById('<%= txt_ref.ClientID%>');
    var txt5=document.getElementById('<%= txt_date.ClientID%>');
    var lbl=document.getElementById('<%= lblmsg.ClientID%>');
    if(txt1.value == "" || txt2.value == "" || txt3.value == "" || txt4.value == "" || txt5.value == "" )
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
//alert("Please enter 10 digit mobile number.");
         txt1.value="";
         return false;
         }
         else
         {
          lbl1.innerHTML="";
          return true;
         }
}
</script>
<center><br />
<h2>Employee Detail Form</h2>
<br /><br />
<table cellspacing="6">
<tr><td>Name</td><td><asp:TextBox id="txt_name" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Date Of Birth</td><td><asp:TextBox id="txt_date" runat="server" Width="200px" ></asp:TextBox></td>
<tr><td>Mobile No</td><td><asp:TextBox id="txt_mobno" runat="server" Width="200px" MaxLength="10" ></asp:TextBox></td><td><asp:Label ID="lblmoberr" runat="server"></asp:Label></td></tr>
<tr><td>Address</td><td><asp:TextBox id="txt_add" runat="server" TextMode="multiLine" Height="50px" style="resize:none;" Width="200px"></asp:TextBox></td></tr>

<tr><td>Reference</td><td><asp:TextBox id="txt_ref" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" OnClientClick=" if(!chkempty())  return false;" runat="server" Text="Submit" Width="84px" Height="30px" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table></center>
</asp:Content>

