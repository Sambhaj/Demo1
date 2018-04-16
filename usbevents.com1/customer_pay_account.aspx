<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="customer_pay_account.aspx.cs" Inherits="customer_pay_account" Title="Customer Pay Account" %>
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
    var txt2=document.getElementById('<%= txt_amt.ClientID%>');
    var txt3=document.getElementById('<%= txt_paidby.ClientID%>');
    var txt4=document.getElementById('<%= txt_remark.ClientID%>');
    var txt5=document.getElementById('<%= ddl_takenby.ClientID%>');
    var txt6=document.getElementById('<%= txt_date.ClientID%>');
    var lbl=document.getElementById('<%= lblmsg.ClientID%>');
    if(txt1.value == "" || txt2.value == "" || txt3.value == "" || txt4.value == "" || txt5.value == ""  || txt7.value == "" || txt6 == "" )
    {
        lbl.innerHTML="Please fill the required fields";
           return false;     
    }  
    else if(txt1.value == "Select")
    {
        lbl.innerHTML="Please Select Event Name";
           return false;     
    }
    else if(txt5.value == "Select")
    {
        lbl.innerHTML="Please Select Taken By";
           return false;     
    }
    else
    {
        lbl.innerHTML="";
        return true;
    }
}


function calc()
{
    var txt1=document.getElementById('<%= txt_amt.ClientID%>').value;
    var txt2=document.getElementById('<%= txt_tot_amt.ClientID%>').value;
 
    if(document.getElementById('<%= txt_amt.ClientID%>').value == "" || document.getElementById('<%= txt_tot_amt.ClientID%>').value == "")
    {
    document.getElementById('<%= txt_balance.ClientID%>').value="";
    }
    else
    {
    document.getElementById('<%= txt_balance.ClientID%>').value=parseFloat(txt2) - parseFloat(txt1);
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

<center><br /><h2>Customer Account Pay Form</h2><br /><br />
<table cellspacing="6">
<tr><td>Event Name</td><td><asp:DropDownList ID="ddl_evnm" runat="server" AutoPostBack="true" OnSelectedIndexChanged="ddl_evnm_click" Width="200px"><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td><td><asp:Label ID="lbldt" runat="server"></asp:Label></td></tr>

<tr><td>Total Amount</td><td><asp:TextBox id="txt_tot_amt" runat="server" Width="200px" MaxLength="7" style="text-align:right;" ReadOnly="true"></asp:TextBox></td></tr>
<tr><td>Balance</td><td><asp:TextBox id="txt_balance" runat="server" Width="200px" MaxLength="7"  style="text-align:right;" ReadOnly="true" ></asp:TextBox></td></tr>
<tr><td>Pay Amount</td><td><asp:TextBox id="txt_amt" runat="server" Width="200px" MaxLength="7" style="text-align:right;"  ></asp:TextBox></td></tr>
<tr><td>Date</td><td><asp:TextBox id="txt_date" runat="server" Width="200px" MaxLength="7"></asp:TextBox></td></tr>
<tr><td>Paid By</td><td><asp:TextBox id="txt_paidby" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Remark</td><td><asp:TextBox id="txt_remark" runat="server" Width="200px" TextMode="MultiLine" Height="50px"   style="resize:none;"></asp:TextBox></td></tr>
<tr><td>Taken By</td><td><asp:DropDownList ID="ddl_takenby" runat="server" Width="200px"><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Text="Submit" Width="84px" Height="30px"  OnClientClick=" if(!chkempty())  return false;"></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table></center>
</asp:Content>

