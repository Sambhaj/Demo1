<%@ Page Language="C#" MasterPageFile="~/adminmaster.master" AutoEventWireup="true" CodeFile="adm_salary.aspx.cs" Inherits="salary_fill_grid" Title="Employee Payment" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<script type="text/javascript">

function calc(objref)
{
var pt=0;
   var netsal=0;
var txtpt=document.getElementById('<%= txt_pt_tot.ClientID %>');
var txtnetm=document.getElementById('<%= txt_netsal_tot.ClientID %>');
var ri=objref+1;
 var grd = document.getElementById('<%= Gridview1.ClientID %>');

    CellValue = grd.rows[ri].cells[1].getElementsByTagName("input").item(0).value;     
    basic=grd.rows[ri].cells[1].getElementsByTagName("input").item(0).value;                 
    ta=grd.rows[ri].cells[2].getElementsByTagName("input").item(0).value;                
    da=grd.rows[ri].cells[3].getElementsByTagName("input").item(0).value;                           
    incentive=grd.rows[ri].cells[4].getElementsByTagName("input").item(0).value;                 
    leave=grd.rows[ri].cells[5].getElementsByTagName("input").item(0).value;  
    
    if(leave == "")
    {
     var lv=grd.rows[ri].cells[5].children[0];
     lv.value="0";
     leave="0"
    }
    
    gt=parseFloat(basic) + parseFloat(ta) + parseFloat(da) + parseFloat(incentive);
            var g_sal=parseFloat(gt) - parseFloat(leave);
            var gsal=grd.rows[ri].cells[6].children[0];
            var p_t=grd.rows[ri].cells[7].children[0];
            var net_sal=grd.rows[ri].cells[8].children[0];
            gsal.value=g_sal;
            if(parseFloat(g_sal) >= 5000 && parseFloat(g_sal) < 10000)
            {
             pt=175;
            p_t.value=pt;
            netsal=parseFloat(g_sal) - parseFloat(pt);
            net_sal.value=netsal;  
             
            }
            else if(parseFloat(g_sal) >= 10000)
            {
            pt=200;
            p_t.value=pt;
            netsal=parseFloat(g_sal) - parseFloat(pt);
            net_sal.value=netsal;           
            }
            else
            {
            p_t.value=0;
            netsal=g_sal
            net_sal.value=netsal;
            } 
}

function isNumeric(keyCode)
{
      if(keyCode==16)
            isShift = true;
 
      return ((keyCode >= 48 && keyCode <= 57 || keyCode == 8 || (keyCode >= 96 && keyCode <= 105)|| keyCode == 9 || keyCode == 46  ) && isShift == false);
}

function tot_sal()
{
    var totpt=0;    var totnet=0;
    var grd = document.getElementById('<%= Gridview1.ClientID %>');
   for (var i=1;i<=5;i++)
   { 
    var pt=grd.rows[i].cells[7].getElementsByTagName("input").item(0).value;                 
    var net=grd.rows[i].cells[8].getElementsByTagName("input").item(0).value;                 
    totpt= parseFloat(totpt) + parseFloat(pt);
    totnet= parseFloat(totnet) + parseFloat(net);
    }
    document.getElementById('<%= txt_pt_tot.ClientID %>').value=totpt;  
    document.getElementById('<%= txt_netsal_tot.ClientID %>').value=totnet;    
}

function chkno(value,objref)
{
var ri=objref+1;
var grd = document.getElementById('<%= Gridview1.ClientID %>');
var txt1=grd.rows[ri].cells[value].getElementsByTagName("input").item(0).value;    
if(txt1 == "")
{
 var gsal=grd.rows[ri].cells[value].children[0];
 gsal.value="0";
}
}

</script>


<center>Salary Month
           <asp:DropDownList ID="ddlmonth" runat="server" >
           <asp:ListItem>Month</asp:ListItem>
           <asp:ListItem>Jan</asp:ListItem>
           <asp:ListItem>Feb</asp:ListItem>
           <asp:ListItem>Mar</asp:ListItem>
           <asp:ListItem>Apr</asp:ListItem>
           <asp:ListItem>May</asp:ListItem>
           <asp:ListItem>Jun</asp:ListItem>
           <asp:ListItem>Jul</asp:ListItem>
           <asp:ListItem>Aug</asp:ListItem>
           <asp:ListItem>Sep</asp:ListItem>
           <asp:ListItem>Oct</asp:ListItem>
           <asp:ListItem>Nov</asp:ListItem>
           <asp:ListItem>Dec</asp:ListItem>
           </asp:DropDownList> &nbsp;
           <asp:DropDownList ID="ddlyear" runat="server" >
           <asp:ListItem>Year</asp:ListItem><asp:ListItem>2013</asp:ListItem><asp:ListItem>2014</asp:ListItem></asp:DropDownList><br /><br />
<asp:gridview ID="Gridview1" runat="server"  AutoGenerateColumns="false"  OnRowDataBound="Gridview1_RowDataBound">
        <Columns>
        <asp:BoundField DataField="emp_name" HeaderText="Employee Name" />
        <asp:TemplateField HeaderText="Basic Salary" >
            <ItemTemplate>
                <asp:TextBox ID="txt_basic" runat="server"  style="text-align:right;" Text="0"  Height="20px" Width="90px"></asp:TextBox>
            </ItemTemplate>
        </asp:TemplateField>
        <asp:TemplateField HeaderText="TA">
            <ItemTemplate>
                <asp:TextBox ID="txt_ta" runat="server" style="text-align:right;" Height="20px"  Width="40px" Text="0"></asp:TextBox>
            </ItemTemplate>
        </asp:TemplateField>
        <asp:TemplateField HeaderText="DA">
            <ItemTemplate>
                 <asp:TextBox ID="txt_da" runat="server"  style="text-align:right;" Height="20px" Width="40px" Text="0" ></asp:TextBox>
            </ItemTemplate>
            
        </asp:TemplateField>
        <asp:TemplateField HeaderText="Incentive">
            <ItemTemplate>
                <asp:TextBox ID="txt_incentive" runat="server"  Width="70px" style="text-align:right;" Height="20px" Text="0"></asp:TextBox>
            </ItemTemplate>
        </asp:TemplateField>
        <asp:TemplateField HeaderText="Leave">
            <ItemTemplate>
                <asp:TextBox ID="txt_leave" runat="server"  Width="40px" style="text-align:right;" Height="20px"  Text="0"></asp:TextBox>
            </ItemTemplate>
        </asp:TemplateField>
        <asp:TemplateField HeaderText="Gross Salary">
            <ItemTemplate>
                <asp:TextBox ID="txt_gross" runat="server" Width="90px" style="text-align:right;" Height="20px" Text="0"></asp:TextBox>
            </ItemTemplate>
        </asp:TemplateField>
        <asp:TemplateField HeaderText="PT">
            <ItemTemplate>
                <asp:TextBox ID="txt_prof" runat="server" Width="70px" style="text-align:right;" Height="20px" Text="0"></asp:TextBox>
            </ItemTemplate>
        </asp:TemplateField>
        <asp:TemplateField HeaderText="Net Salary">
            <ItemTemplate>
                <asp:TextBox ID="txt_net" runat="server" Width="70px" style="text-align:right;" Height="20px" Text="0"></asp:TextBox>
            </ItemTemplate>
        </asp:TemplateField>
        </Columns>
</asp:gridview>

<table><tr><td style="width:530px; text-align:right;"><asp:Button ID="btn1" Text="Total" runat="server" OnClientClick="tot_sal(); return false;" /></td><td> <asp:TextBox ID="txt_pt_tot" runat="server" Height="20px" Width="70px" style="text-align:right;" Text="0"></asp:TextBox></td>
<td> <asp:TextBox ID="txt_netsal_tot" runat="server" Width="70px" style="text-align:right;" Height="20px" Text="0"></asp:TextBox></td>
</tr></table>

<br /><br /><asp:Button ID="btnsubmit" runat="server" Text="Submit" OnClick="btnsubmit_Click" />
<asp:Label ID="lblmsg" runat="server"></asp:Label></center>
</asp:Content>

