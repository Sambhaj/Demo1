<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="maintanance.aspx.cs" Inherits="office_expenses" Title="Office Expenses" %>
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
    var txt1=document.getElementById('<%= txt_voucher_no.ClientID%>');
    var txt2=document.getElementById('<%= txt_name.ClientID%>');
    var txt3=document.getElementById('<%= txt_amt.ClientID%>');
    var txt5=document.getElementById('<%= txt_paydetail.ClientID%>');
    var txt6=document.getElementById('<%= ddl_paidby.ClientID%>');
    var txt7=document.getElementById('<%= txt_takenby.ClientID%>');
    var lbl=document.getElementById('<%= lblmsg.ClientID%>');
    if(txt1.value == "" || txt2.value == "" || txt3.value == "" || txt4.value == "" || txt5.value == ""  || txt6.value == "" || txt7.value == "" )
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


</script>
<center><br /><h2>Maintanance Form</h2><br /><br />
<table cellspacing="6">
<tr><td>Voucher No</td><td><asp:TextBox id="txt_voucher_no" runat="server" Width="200px" ReadOnly="true" ></asp:TextBox></td></tr>
<tr><td>Name</td><td><asp:TextBox id="txt_name" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Pay Date</td><td><asp:TextBox id="txt_date" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Amount</td><td><asp:TextBox id="txt_amt" runat="server" Width="200px" MaxLength="7"  style="text-align:right;" ></asp:TextBox></td></tr>
<tr><td>Pay Detail</td><td><asp:TextBox id="txt_paydetail" runat="server" Width="200px" TextMode="MultiLine"  Height="50px" style="resize:none;" ></asp:TextBox></td></tr>
<tr><td>Paid By</td><td><asp:DropDownList ID="ddl_paidby" runat="server" Width="200px"><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td></tr>
<tr><td>Taken By</td><td><asp:TextBox id="txt_takenby" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Text="Submit" Width="84px" Height="30px" OnClientClick=" if(!chkempty())  return false;" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table></center>
</asp:Content>

