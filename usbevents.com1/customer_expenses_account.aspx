<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="customer_expenses_account.aspx.cs" Inherits="customer_expenses_account" Title="Customer Expenses Account" %>
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
    var txt2=document.getElementById('<%= txt_expense_desc.ClientID%>');
    var txt3=document.getElementById('<%= ddl_madeby.ClientID%>');
    var txt4=document.getElementById('<%= txt_amt.ClientID%>');
    var txt5=document.getElementById('<%= ddl_conm.ClientID%>');
       var txt6=document.getElementById('<%= txt_date.ClientID%>');
    var lbl=document.getElementById('<%= lblmsg.ClientID%>');
    if(txt2.value == ""  || txt4.value == "" || txt5.value == "" || txt6.value == "")
    {
        lbl.innerHTML="Please fill the required fields";
           return false;     
    }  
      else if(txt1.value == "Select")
    {
        lbl.innerHTML="Please Select Event Name";
           return false;     
    }
      else if(txt3.value == "Select")
    {
        lbl.innerHTML="Please Select Made By";
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
function chknm()
{
var b=document.getElementById('<%= txt_amt.ClientID%>').value;
if(isNaN(parseFloat(b)))
{
document.getElementById('<%= txt_amt.ClientID%>').value="";
alert("No Only");
}
}
function isNumeric(keyCode)
{
      if(keyCode==16)
            isShift = true;
 
    return ((keyCode >= 48 && keyCode <= 57 || keyCode == 8 || keyCode == 9 || keyCode == 46 || keyCode == 188 || keyCode == 37 || keyCode == 38 || keyCode == 39 || keyCode == 40  ||
            (keyCode >= 96 && keyCode <= 105)) && isShift == false);
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
 function mobval()
{
//alert("helo");
     var txt1=document.getElementById('<%= txt_mobno.ClientID%>');
    // var lbl1=document.getElementById('<%= lblmoberr.ClientID%>');
     var lnth=txt1.value.length; 
         // lbl1.innerHTML=""; 
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('<%= txt_mobno.ClientID%>').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
          // var msg="Please enter 10 digit mobile number.";
        // lbl1.innerHTML=msg;
alert("Please enter 10 digit mobile number.");
         txt1.value="";
         return false;
         }
         else
         {
        //  lbl1.innerHTML="";
          return true;
         }
}
function chkempty1()    //check all fields are fill or not
{
    var txt1=document.getElementById('<%= txt_nm.ClientID%>');
    var txt2=document.getElementById('<%= txt_address.ClientID%>');
    var txt3=document.getElementById('<%= txt_specilities.ClientID%>');
    var txt4=document.getElementById('<%= txt_costdesc.ClientID%>');
      var lbl=document.getElementById('<%= lblmsg1.ClientID%>');
    var txt5=document.getElementById('<%= txt_mobno.ClientID%>');
      
    if(txt1.value == "" || txt2.value == "" || txt3.value == "" || txt4.value == "" || txt5.value == "")
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

</script>
<center>
<br /><h2>Customer Account Expenses Form</h2><br /><br />
<table><tr><td>
<table cellspacing="6">
<tr><td width="100px">Event Name</td><td><asp:DropDownList ID="ddl_evnm" runat="server" AutoPostBack="true" OnSelectedIndexChanged="ddl_evnm_click" Width="200px"><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td><td><asp:Label ID="lbldt" runat="server"></asp:Label></td></tr>
           <tr><td>Date</td><td><asp:TextBox id="txt_date" runat="server" Width="200px"></asp:TextBox></td></tr>
<tr><td>Description</td><td><asp:TextBox id="txt_expense_desc" runat="server" Width="200px" style="resize:none;" TextMode="MultiLine" Height="50px"></asp:TextBox></td></tr>
<tr><td>Made By</td><td><asp:DropDownList ID="ddl_madeby" runat="server" Width="200px"><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td></tr>
<tr><td>Total Amount</td><td><asp:TextBox id="txt_tot_amt" runat="server" Width="200px" MaxLength="7"></asp:TextBox></td></tr>
<tr><td>Amount</td><td><asp:TextBox id="txt_amt" runat="server" Width="200px" MaxLength="7" ></asp:TextBox></td></tr>
<tr><td>Balance</td><td><asp:TextBox id="txt_balance" runat="server" Width="200px" MaxLength="7"  ></asp:TextBox></td></tr>
<tr><td>Taken By</td><td><asp:DropDownList ID="ddl_conm" runat="server" Width="200px"><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td><td><asp:LinkButton ID="lnkco" runat="server" Text="New Co-Ordinator" OnClick="lnkco_click"></asp:LinkButton></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Text="Submit" Width="84px" Height="30px" OnClientClick=" if(!chkempty())  return false;" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table>
</td>

<td>
<asp:Panel ID="pn1" Visible="false" runat="server">
<table cellspacing="6">
<tr><td>Name</td><td><asp:TextBox id="txt_nm" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Mobile No</td><td><asp:TextBox id="txt_mobno" runat="server" Width="200px" MaxLength="10" ></asp:TextBox></td><td><asp:Label ID="lblmoberr" runat="server"></asp:Label></td></tr>
<tr><td>Address</td><td><asp:TextBox id="txt_address" runat="server" Width="200px" TextMode="MultiLine" Height="50px" style="resize:none;"></asp:TextBox></td></tr>
<tr><td>Specialities</td><td><asp:TextBox id="txt_specilities" runat="server" Width="200px" TextMode="MultiLine" Height="50px" style="resize:none;"></asp:TextBox></td></tr>
<tr><td>Cost Description</td><td><asp:TextBox id="txt_costdesc" runat="server" Width="200px" TextMode="MultiLine" Height="50px" style="resize:none;"></asp:TextBox></td></tr>
<tr><td></td><td><asp:Button id="Button1" onclick="btnsubmit_Click1" runat="server" Text="Submit" Width="84px" Height="30px" OnClientClick=" if(!chkempty1())  return false;" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg1" runat="server"></asp:Label></td></tr>
</table>
</asp:Panel>
</td></tr></table>
</center>
</asp:Content>

