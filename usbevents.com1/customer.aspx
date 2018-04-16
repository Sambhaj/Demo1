<%@ Page Language="C#" MasterPageFile="~/admmaster.master" AutoEventWireup="true" CodeFile="customer.aspx.cs" Inherits="customer" Title="Customer" %>
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
//=======================================

//=====================================================
 function chkempty()    //check all fields are fill or not
{
    var txt1=document.getElementById('<%= txt_firmname.ClientID%>');
    var txt2=document.getElementById('<%= txt_pname.ClientID%>');
    var txt3=document.getElementById('<%= txt_bookedby.ClientID%>');
    var txt4=document.getElementById('<%= txt_pmobno.ClientID%>');
    var txt5=document.getElementById('<%= txt_bookedby_mobno.ClientID%>');

    var txt7=document.getElementById('<%= txt_advance.ClientID%>');
    var txt8=document.getElementById('<%= txt_tot_amt.ClientID%>');
    var txt9=document.getElementById('<%= txt_facility.ClientID%>');
    var txt10=document.getElementById('<%= ddl_createdby.ClientID%>');
    var lbl=document.getElementById('<%= lblmsg.ClientID%>');
      var txt14=document.getElementById('<%= txt_evnm.ClientID%>');
    if(txt1.value == "" || txt2.value == "" || txt3.value == "" || txt4.value == "" || txt5.value == ""  ||  txt7.value == "" || txt8.value == "" || txt9.value == "" || txt10.value == "" || txt14.value == "" )
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
     var txt1=document.getElementById('<%= txt_pmobno.ClientID%>');
     var lbl1=document.getElementById('<%= lblmoberr.ClientID%>');
     var lnth=txt1.value.length; 
          lbl1.innerHTML=""; 
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('<%= txt_pmobno.ClientID%>').value;
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
 function mobval1()
{
     var txt1=document.getElementById('<%= txt_bookedby_mobno.ClientID%>');
     var lbl1=document.getElementById('<%= lblmoberr1.ClientID%>');
     var lnth=txt1.value.length; 
          lbl1.innerHTML=""; 
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('<%= txt_bookedby_mobno.ClientID%>').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
         //alert("Please enter 10 digit mobile number.");
           var msg="Please enter 10 digit mobile number.";
         lbl1.innerHTML=msg;
         txt1.value="";
         return false;
         }
         else
         {
          lbl1.innerHTML="";
          return true;
         }
}



function calc()
{
    var txt1=document.getElementById('<%= txt_advance.ClientID%>').value;
    var txt2=document.getElementById('<%= txt_tot_amt.ClientID%>').value;
  
    if(document.getElementById('<%= txt_advance.ClientID%>').value == "" || document.getElementById('<%= txt_tot_amt.ClientID%>').value == "")
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

function showpanel()
{
document.getElementById('<%= txt_content.ClientID%>').value=document.getElementById('<%= txt_facility.ClientID%>').value;
document.getElementById('<%= pn1.ClientID%>').style.display = "block";
document.getElementById('<%= txt_content.ClientID%>').focus();
}
function hidepanel()
{
document.getElementById('<%= pn1.ClientID%>').style.display = "none";
}
function copydt()
{
document.getElementById('<%= txt_facility.ClientID%>').value=document.getElementById('<%= txt_content.ClientID%>').value;
hidepanel();
}
</script>
<center>
<br />
<h2>Customer Registration Form </h2><br /><br />
<table><tr><td>
<table cellspacing="6">
<tr><td>Event Name</td><td><asp:TextBox id="txt_evnm" runat="server" Width="200px" ></asp:TextBox></td><td><asp:LinkButton ID="lnk1" runat="server" Text="Check Event Name" OnClick="lnk1_click"></asp:LinkButton></td></tr>
<tr><td>Firm Name</td><td><asp:TextBox id="txt_firmname" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Person Name</td><td><asp:TextBox id="txt_pname" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Person Mobile No</td><td><asp:TextBox id="txt_pmobno" runat="server" Width="200px" MaxLength="10"></asp:TextBox></td><td><asp:Label ID="lblmoberr" runat="server"></asp:Label></td></tr>
<tr><td>Booked By</td><td><asp:TextBox id="txt_bookedby" runat="server" Width="200px" ></asp:TextBox></td></tr>
<tr><td>Booked By Mobile No</td><td><asp:TextBox id="txt_bookedby_mobno" runat="server" Width="200px" MaxLength="10"></asp:TextBox></td><td><asp:Label ID="lblmoberr1" runat="server"></asp:Label></td></tr>
<%--<tr><td>Event Description</td><td><asp:TextBox id="txt_event_desc" runat="server" Width="200px" TextMode="MultiLine" Height="50px" style="resize:none;"></asp:TextBox></td></tr>--%>
<tr><td>Total Amount</td><td><asp:TextBox id="txt_tot_amt" runat="server" Width="200px" Text="0" style="text-align:right;" MaxLength="7"></asp:TextBox></td></tr>
<tr><td>Advance</td><td><asp:TextBox id="txt_advance" runat="server" Width="200px" MaxLength="7" style="text-align:right;" Text="0"></asp:TextBox></td></tr>
<tr><td>Balance</td><td><asp:TextBox id="txt_balance" runat="server" Width="200px" MaxLength="7" Text="0" style="text-align:right;" ></asp:TextBox></td></tr>
<tr><td>Event Date</td><td><asp:TextBox id="txt_date" runat="server" Width="200px"></asp:TextBox></td></tr>
<tr><td>Event Address</td><td><asp:TextBox id="txt_eventadd" runat="server" Width="200px" TextMode="MultiLine" Height="50px" style="resize:none;"></asp:TextBox></td></tr>
<tr><td>Requirement</td><td><asp:TextBox id="txt_facility" runat="server" Width="200px" TextMode="MultiLine" Height="50px" style="resize:none;"></asp:TextBox></td></tr>
<tr><td>Created By</td><td><asp:DropDownList ID="ddl_createdby" runat="server" Width="200px"><asp:ListItem>Select</asp:ListItem></asp:DropDownList></td></tr>
<tr><td></td><td><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Text="Submit" Width="84px" Height="30px" OnClientClick=" if(!chkempty())  return false;" ></asp:Button></td></tr>
<tr><td></td><td><asp:Label ID="lblmsg" runat="server"></asp:Label></td></tr>
<asp:Label ID="lblid" runat="server" Visible="false"></asp:Label>
</table>
</td>
<td><asp:Panel ID="pn1" runat="server" >Requirement<br /><asp:TextBox ID="txt_content" runat="server" Width="350px" TextMode="MultiLine" Height="400px"> </asp:TextBox> <asp:Button ID="btnsv" runat="server" Text="Save" OnClientClick="copydt(); return false;" /></asp:Panel></td>
</tr></table>

</center>
   


</asp:Content>

