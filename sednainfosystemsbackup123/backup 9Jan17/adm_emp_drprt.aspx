<%@ Page Language="C#" AutoEventWireup="true" CodeFile="adm_emp_drprt.aspx.cs" Inherits="adm_emp_drprt" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Employee Daily Report</title>
     <script type="text/javascript">
     function onld()
     {
     document.getElementById("grid2").style.display='none';
     document.getElementById("lblheight").style.display='none';
     document.getElementById("lblwidth").style.display='none';
     document.getElementById("tbl1").style.visibility='hidden';            
     }
     
    var vis=null;
     function copydata(rowindex)
     {
     document.getElementById("tbl1").style.visibility='visible';
     //code to get selected value of gridview
      var i, CellValue, Row1, td;
           i = parseInt(rowindex)+1 ;  
                  
            var table1 = document.getElementById("grid1");
            Row1 = table1.rows[i].cells[1];
           
           CellValue=Row1.innerHTML; //alert(i);
       var ddlid=CellValue;
       
           //---------
     
       //-----------code to delete table
            var table = document.getElementById("tbl1");
            table.style.backgroundColor = "aqua";
������������var rowCount = table.rows.length;
�������������for(var i=0; i<rowCount; i++) 
������������{
������������  �var row = table.rows[i];��������������
               table.deleteRow(i);
               rowCount--;
               i--;
            }//--------------end--code to delete table----    
            
            //-------table creation code------                    
       var body=document.getElementById("div1");
       var grid = document.getElementById("grid2");
       
        var a=grid.rows[0];   
           
        // create elements <table> and a <tbody>
        document.getElementById("div1").style.display = 'block';

        var tbl     =  document.getElementById("tbl1");
        var tblBody = document.createElement("tbody");

        // cells creation
        for (var j = 0; j < grid.rows.length; j++) 
        {
        var aa=grid.rows[j];
        var cia=aa.cells[0];
        var chkid=cia.innerHTML;
        
        if(j == 0)
        {
           var row = document.createElement("tr");
            for (var i = 0; i < a.cells.length; i++)
           {
            var bb=aa.cells[i];
            var dd=bb.innerHTML;
         
             var cell = document.createElement("td");    
                  var cellText = document.createTextNode(dd); 

                cell.appendChild(cellText);
                row.appendChild(cell);
            }

            //row added to end of table body
            tblBody.appendChild(row);
        }
        if(chkid == ddlid )
        {
            // table row creation
            var row = document.createElement("tr");
            for (var i = 0; i < a.cells.length; i++)
           {
            var bb=aa.cells[i];
            var dd=bb.innerHTML;
         
         if(dd == '&nbsp;')
         {
         dd="";
         }
             var cell = document.createElement("td");    
                  var cellText = document.createTextNode(dd); 

                cell.appendChild(cellText);
                row.appendChild(cell);
            }

            //row added to end of table body
            tblBody.appendChild(row);
          } 
        } 

        // append the <tbody> inside the <table>
        tbl.appendChild(tblBody);
        // put <table> in the <body>
        body.appendChild(tbl);
        // tbl border attribute to 
        tbl.setAttribute("border", "1");
        grid.style.display = 'none';
        //====================================end of table creattion code=======
        
        //==========code for postion of table===
       
       var a=document.getElementById("lblheight").value;
       var b=document.getElementById("lblwidth").value;
       var j=parseInt(rowindex)+1 ;  
       var c=parseInt(j*23) + parseInt(a);
      
         var div1=document.getElementById("div1");
         div1.style.position="absolute";
         div1.style.top=c+"px";
         div1.style.left=b+"px";
       vis="yes";         
  return false;
     }   
     
    function pnvistru()
     { 
         if(vis == null)
         {
         document.getElementById("tbl1").style.visibility='hidden';
         }
         vis=null;
     }                         
    </script>
</head>
<body onload="onld()">
     <form id="form1" runat="server">
    <div  style="width:auto; height:auto;" >  
    <table style="border-style:solid;   margin:0 auto; border-color:Black;  border-width:1px; "><tr><td><table style="width:900px;" ><tr><td style="text-align:right; width:350px"><img src="images/logo.png" alt="" /></td><td><h1></h1></td></tr></table></td></tr>
    <tr><td>
    <table style="width:900px;"><tr><td></td><td style="width:300px; text-align:right;">Welcome &nbsp;<asp:Label ID="lblnm" runat="server" Text="Label"></asp:Label></td><td style="width:300px; text-align:center;"><a href="admin_home.aspx">Home</a></td><td style=" width:300px; text-align:left;"><asp:LinkButton ID="btn_logout" runat="server" Text="LogOut" OnClick="btn_logout_Click1"></asp:LinkButton></td></tr></table>
    </td></tr> 
    <tr><td style="margin-left:100px;">
    <br /><asp:Label ID="lblid" runat="server" Text="" Visible="false"></asp:Label>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
        &nbsp; &nbsp; &nbsp;Display Daily report monthly &nbsp; &nbsp; &nbsp; Select Month &nbsp; &nbsp;<asp:DropDownList
            ID="ddlmonth" runat="server">
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
        </asp:DropDownList>&nbsp;
        <asp:DropDownList ID="ddlyear" runat="server">
            <asp:ListItem>Year</asp:ListItem>
            <asp:ListItem>2013</asp:ListItem>
            <asp:ListItem>2014</asp:ListItem>
            <asp:ListItem>2015</asp:ListItem>
            <asp:ListItem>2016</asp:ListItem>
            <asp:ListItem>2017</asp:ListItem>
        </asp:DropDownList>
        &nbsp;
        <asp:Button ID="btnsearch" runat="server" OnClick="btnsearch_click" Text="Search Report" />
        &nbsp;&nbsp;<br />
         <div>
        <asp:TextBox ID="lblheight" style="display:none;" runat="server"></asp:TextBox>
        <asp:TextBox ID="lblwidth" style="display:none;" runat="server"></asp:TextBox>
    
    </div>
    <div style="margin-left:30px; margin-top:30px; width:900px;" onclick="pnvistru();" >    
    
    <asp:GridView ID="grid1" runat="server" DataKeyNames="emp_id" BackColor="gray" RowStyle-Width="20px" RowStyle-Height="20px" AutoGenerateColumns="false" OnRowDataBound="grid1_RowDataBound">
    <Columns>
  
<asp:TemplateField HeaderText="ID">
       <ItemTemplate>
      <%-- <asp:Label ID="lblid" Text='<%#Eval("emp_id") %>'  runat="server"></asp:Label>--%>
       <%--<asp:LinkButton ID="lnkid" Text='<%#Eval("emp_id") %>' OnClick="lnkid_click"  runat="server"></asp:LinkButton>--%>
       <asp:Button ID="lnkid" Text='<%#Eval("emp_id") %>' runat="server" OnClientClick="return false;" BorderStyle="none" BackColor="gray"  />
       </ItemTemplate>
    </asp:TemplateField>
    <asp:BoundField  DataField="emp_id" SortExpression="emp_id"  ControlStyle-Font-Size="1px" ItemStyle-Width="0.5px" ItemStyle-ForeColor="gray"  />
    <asp:BoundField  DataField="emp_name" HeaderText="Employee Name" SortExpression="emp_name" />
          <asp:TemplateField>
    <ItemTemplate>
        <asp:Button ID="btnselect"   runat="server" Text="Check Detail" />   
    </ItemTemplate>
    </asp:TemplateField>
    </Columns>
    </asp:GridView><br /><br />
   
   
   <asp:GridView ID="grid2" runat="server" BackColor="CadetBlue"></asp:GridView>
       
    </div>
      
  <asp:Panel ID="div1"  runat="server">   <table id="tbl1" style=" border-collapse: collapse;" onclick="findRowNumber();"></table></asp:Panel>
      <div id="pn1">  
    </div>
    
   </td></tr></table>
    </div>
    </form>
</body>
</html>
