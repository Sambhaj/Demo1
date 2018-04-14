<%@ Page Language="C#" MasterPageFile="~/adminmaster.master" AutoEventWireup="true" CodeFile="sitecheck.aspx.cs" Inherits="sitecheck" Title="Site Status" %>
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
<script type = "text/javascript">
function Check_Click(objRef)
{
    //Get the Row based on checkbox
    var row = objRef.parentNode.parentNode;
    if(objRef.checked)
    {
        //If checked change color to Aqua
       // row.style.backgroundColor = "aqua";
    }
    else
    {    
        //If not checked change back to original color
        if(row.rowIndex % 2 == 0)
        {
           //Alternating Row Color
         //  row.style.backgroundColor = "#C2D69B";
        }
        else
        {
           //row.style.backgroundColor = "white";
        }
    }
    
    //Get the reference of GridView
    var GridView = row.parentNode;
    
    //Get all input elements in Gridview
    var inputList = GridView.getElementsByTagName("input");
    
    for (var i=0;i<inputList.length;i++)
    {
        //The First element is the Header Checkbox
        var headerCheckBox = inputList[0];
        
        //Based on all or none checkboxes
        //are checked check/uncheck Header Checkbox
        var checked = true;
        if(inputList[i].type == "checkbox" && inputList[i] != headerCheckBox)
        {
            if(!inputList[i].checked)
            {
                checked = false;
                break;
            }
        }
    }
    headerCheckBox.checked = checked;
    
}
</script>
<script type = "text/javascript">
function checkAll(objRef)
{
    var GridView = objRef.parentNode.parentNode.parentNode;
    var inputList = GridView.getElementsByTagName("input");
    for (var i=0;i<inputList.length;i++)
    {
        //Get the Cell To find out ColumnIndex
        var row = inputList[i].parentNode.parentNode;
        if(inputList[i].type == "checkbox"  && objRef != inputList[i])
        {
            if (objRef.checked)
            {
                //If the header checkbox is checked
                //check all checkboxes
                //and highlight all rows
             //   row.style.backgroundColor = "aqua";
                inputList[i].checked=true;
            }
            else
            {
                //If the header checkbox is checked
                //uncheck all checkboxes
                //and change rowcolor back to original 
                if(row.rowIndex % 2 == 0)
                {
                   //Alternating Row Color
               //    row.style.backgroundColor = "#C2D69B";
                }
                else
                {
                 //  row.style.backgroundColor = "white";
                }
                inputList[i].checked=false;
            }
        }
    }
}
</script>
<center>
<h2>Status of site</h2>
   Status Date 
    <asp:TextBox ID="txt_date" runat="server"></asp:TextBox>
           <table><tr><td align="left">    <asp:Button ID="btndelete" runat="server" Text="Delete" Width="50px" OnClick="btndelete_Click" />
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <asp:Button ID="btnsave" runat="server" Text="Save Status" Width="100px" OnClick="btnsave_Click" />
           </td></tr>
           <tr><td>
           <div>
          
     <asp:GridView ID="GridView1" runat="server"  AllowPaging="false"  RowStyle-Wrap="true" AutoGenerateColumns="False"  DataKeyNames="site_id"
                     OnPageIndexChanging="GridView1_PageIndexChanging" CellPadding="4" BorderColor="#CC9966" BorderStyle="None" BorderWidth="1px">
                    <RowStyle Font-Names="Verdana" Wrap="True" BackColor="White" ForeColor="#330099" />
                    <EditRowStyle Font-Names="Verdana" />
                    <HeaderStyle BackColor="#00AEEF" Font-Names="Verdana" Font-Size="15px" ForeColor="#FFFFFF" Font-Bold="True" />
                    <AlternatingRowStyle BackColor="#DEE9ED" Font-Names="Verdana" />
                    <Columns>
                    <asp:TemplateField>
        <HeaderTemplate>
        <asp:CheckBox ID="checkAll" runat="server" onclick = "checkAll(this);" />
        </HeaderTemplate> 
        <ItemTemplate>
        <asp:CheckBox ID="CheckBox1" runat="server" onclick = "Check_Click(this)" />
        </ItemTemplate> 
        </asp:TemplateField> 
                       
                       
                        <asp:BoundField DataField="site_id" HeaderText="Id" InsertVisible="False" ReadOnly="True"
                            SortExpression="site_id" Visible="False" />
                       
                     
                           <asp:BoundField DataField="sitename" HeaderText="Site Name" SortExpression="sitename" />
                                                
                 
                    </Columns>
                    <FooterStyle BackColor="#FFFFCC" ForeColor="#330099" />
                    <PagerStyle BackColor="#024863" ForeColor="#330099" HorizontalAlign="Center" />
                    <SelectedRowStyle BackColor="#6D7B7F" Font-Bold="True" ForeColor="#663399" />
                </asp:GridView>
</div>    

           </td></tr>
           </table> 
           
             

 <asp:Label ID="lblmsg" runat="server" Text=""></asp:Label>
 </center>
</asp:Content>

