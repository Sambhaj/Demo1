<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="profit_credit.aspx.cs" Inherits="profit_credit" Title="Profit Credit" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<script type="text/javascript">
function chkempty()    //check all fields are fill or not
{
    var txt1=document.getElementById('<%= txt_evntexp.ClientID%>');
    var txt2=document.getElementById('<%= txt_eventcost.ClientID%>');
    var txt3=document.getElementById('<%= txt_profloss.ClientID%>');
    var txt4=document.getElementById('<%= ddlperson_nm.ClientID%>');
    var lbl=document.getElementById('<%= lblmsg.ClientID%>');
      
    if(txt1.value == "" || txt2.value == "" || txt3.value == "")
    {
        lbl.innerHTML="Please fill the required fields";
           return false;     
    }
    else if(txt11.value == "Date")
    {
        lbl.innerHTML="Please Select Date";
           return false;     
    }
    else if(txt12.value == "Month")
    {
        lbl.innerHTML="Please Select Month";
           return false;     
    }
     else if(txt13.value == "Year")
    {
        lbl.innerHTML="Please Select Year";
         return false;     
    }
     else if(txt4.value == "Select")
    {
        lbl.innerHTML="Please Select Year";
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
var b=document.getElementById('<%= txt_evntexp.ClientID%>').value;
if(isNaN(parseFloat(b)))
{
document.getElementById('<%= txt_evntexp.ClientID%>').value="";
alert("No Only");
}
}

function calc()
{
    var txt1=document.getElementById('<%= txt_evntexp.ClientID%>').value;
    var txt2=document.getElementById('<%= txt_eventcost.ClientID%>').value;
    if(isNaN(parseFloat(txt2)))
    {
    document.getElementById('<%= txt_eventcost.ClientID%>').value="";
    alert("No Only");
    }    
    if(txt1 == "")
    {
    document.getElementById('<%= txt_profloss.ClientID%>').value="";
    }
    else
    {
    document.getElementById('<%= txt_profloss.ClientID%>').value=parseFloat(txt2) - parseFloat(txt1);
    }
}
</script>
<center>
<br /><h2>Profit Credit </h2><br /><br />
<table cellspacing="6">
<tr><td>Person Name</td><td><asp:DropDownList ID="ddlperson_nm" runat="server" Width="200px"  ><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td></tr>
<tr><td>Event Expenses</td><td><asp:TextBox id="txt_evntexp" runat="server" Width="200px" MaxLength="9" ></asp:TextBox></td></tr>
<tr><td>Event Cost</td><td><asp:TextBox id="txt_eventcost" runat="server" Width="200px" MaxLength="9"></asp:TextBox></td></tr>
<tr><td>Event Profit/Loss</td><td><asp:TextBox id="txt_profloss" runat="server" Width="200px"  MaxLength="10"></asp:TextBox></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Text="Submit" Width="84px" Height="30px" OnClientClick=" if(!chkempty())  return false;" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table></center>
</asp:Content>

