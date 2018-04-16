<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="Co_ordinator_manage.aspx.cs" Inherits="Co_ordinator_manage" Title="Co-ordinator Manage" %>
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
    var txt2=document.getElementById('<%= txt_desc.ClientID%>');
    var txt3=document.getElementById('<%= txt_cost_final.ClientID%>');
    var txt4=document.getElementById('<%= txt_advance.ClientID%>');
    var txt5=document.getElementById('<%= txt_balance.ClientID%>');
    var lbl=document.getElementById('<%= lblmsg.ClientID%>');
    var txt14=document.getElementById('<%= co_ordinator_name.ClientID%>');
    if(txt1.value == "" || txt2.value == "" || txt3.value == "" || txt4.value == "" || txt5.value == "")
    {
        lbl.innerHTML="Please fill the required fields";
           return false;     
    }
     else if(txt1.value == "Select")
    {
        lbl.innerHTML="Please Select Event Name";
           return false;     
    }
     else if(txt14.value == "Select")
    {
        lbl.innerHTML="Please Select Co-ordinator name";
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

function calc()
{
    var txt1=document.getElementById('<%= txt_advance.ClientID%>').value;
    var txt2=document.getElementById('<%= txt_cost_final.ClientID%>').value;
     
    if(document.getElementById('<%= txt_advance.ClientID%>').value == "" || document.getElementById('<%= txt_cost_final.ClientID%>').value == "")
    {
    document.getElementById('<%= txt_balance.ClientID%>').value="";
    }
    else
    {
    document.getElementById('<%= txt_balance.ClientID%>').value=parseFloat(txt2) - parseFloat(txt1);
    }
}
</script>
<center>
<br /><h2>Co-ordinator Manage Form </h2><br /><br />
<table cellspacing="6">

            <tr><td>Date</td><td><asp:TextBox id="txt_date" runat="server" Width="200px"></asp:TextBox></td></tr>
<tr><td>Event Name</td><td><asp:DropDownList ID="ddl_evnm" runat="server" AutoPostBack="true" OnSelectedIndexChanged="ddl_evnm_click" Width="200px"><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td><td><asp:Label ID="lbldt" runat="server"></asp:Label></td></tr>
<tr><td>Co-ordinator Name</td><td><asp:DropDownList ID="co_ordinator_name" runat="server" Width="200px"><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td></tr>
<tr><td>Description</td><td><asp:TextBox id="txt_desc" runat="server" Width="200px" TextMode="MultiLine" Height="50px" style="resize:none;"></asp:TextBox></td></tr>
<tr><td>Cost Final</td><td><asp:TextBox id="txt_cost_final" runat="server" Width="200px" MaxLength="7"></asp:TextBox></td></tr>
<tr><td>Advance</td><td><asp:TextBox id="txt_advance" runat="server" Width="200px" MaxLength="7" ></asp:TextBox></td></tr>
<tr><td>Balance</td><td><asp:TextBox id="txt_balance" runat="server" Width="200px" MaxLength="7" ></asp:TextBox></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Text="Submit" Width="84px" Height="30px" OnClientClick=" if(!chkempty())  return false;" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
</table>

<asp:LinkButton ID="lnkrpt" Text="Report" PostBackUrl="~/report_viewer.aspx?rpt=cordinater_manage.rpt" runat="server"></asp:LinkButton>

</center>
</asp:Content>

