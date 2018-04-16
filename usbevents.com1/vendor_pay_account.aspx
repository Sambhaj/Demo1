<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="vendor_pay_account.aspx.cs" Inherits="vendor_pay_account" Title="Vendor Pay Account" %>
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
    var txt1=document.getElementById('<%= ddl_evnm.ClientID%>');
    var txt2=document.getElementById('<%= txt_tot_amt.ClientID%>');
    var txt3=document.getElementById('<%= txt_balance.ClientID%>');
    var txt4=document.getElementById('<%= txt_amt.ClientID%>');
    var txt5=document.getElementById('<%= txt_date.ClientID%>');
    var txt6=document.getElementById('<%= ddlpaidby.ClientID%>');
   var txt7=document.getElementById('<%= txt_remark.ClientID%>');
   var txt8=document.getElementById('<%= ddl_vendornm.ClientID%>');
    var lbl=document.getElementById('<%= lblmsg.ClientID%>');
    if(txt2.value == "" || txt3.value == "" || txt4.value == "" || txt5.value == "" || txt5.value == ""  || txt7.value == "" )
    {
        lbl.innerHTML="Please fill the required fields";
           return false;     
    }  
    else if(txt1.value == "Select")
    {
        lbl.innerHTML="Please Select Event Name";
           return false;     
    }
    else if(txt6.value == "Select")
    {
        lbl.innerHTML="Please Select Paid By";
           return false;     
    }
    else if(txt8.value == "Select")
    {
        lbl.innerHTML="Please Select Vendor Name";
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



<center><br /><h2>Vendor Account Pay Form</h2><br /><br />
<table cellspacing="6">
<tr><td>Event Name</td><td><asp:DropDownList ID="ddl_evnm" runat="server" AutoPostBack="true" OnSelectedIndexChanged="ddl_evnm_click" Width="200px"><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td><td><asp:Label ID="lbldt" runat="server"></asp:Label></td></tr>
<tr><td>Vendor Name</td><td><asp:DropDownList ID="ddl_vendornm" runat="server" Width="200px"  AutoPostBack="true"  OnSelectedIndexChanged="ddl_vendornm_click"></asp:DropDownList></td></tr>
<tr><td>Total Amount</td><td><asp:TextBox id="txt_tot_amt" runat="server" Width="200px" MaxLength="7" style="text-align:right;" ReadOnly="true"></asp:TextBox></td></tr>
<tr><td>Balance</td><td><asp:TextBox id="txt_balance" runat="server" Width="200px" MaxLength="7"  style="text-align:right;" ReadOnly="true" ></asp:TextBox></td></tr>
<tr><td>Pay Amount</td><td><asp:TextBox id="txt_amt" runat="server" Width="200px" MaxLength="7" style="text-align:right;" ></asp:TextBox></td></tr>
<tr><td>Date</td><td><asp:TextBox id="txt_date" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Paid By</td><td> <asp:DropDownList ID="ddlpaidby" Width="200px"  runat="server"></asp:DropDownList> </td></tr>
<tr><td>Remark</td><td><asp:TextBox id="txt_remark" runat="server" Width="200px" TextMode="MultiLine" Height="50px"   style="resize:none;"></asp:TextBox></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Text="Submit" Width="84px" Height="30px"  OnClientClick=" if(!chkempty())  return false;"></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table></center>
</asp:Content>

