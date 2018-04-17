<%@ Page Language="C#" AutoEventWireup="true" CodeFile="adm_emp_drprt1.aspx.cs" Inherits="emp_dailyreport" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Employee Daily Report</title>
    <script type="text/javascript" src="jquery.dataTables.js"></script>
    <script type="text/javascript" src="dataTables.columnFilter.js"></script>
    <script type="text/javascript">
    function SetupFilter(textboxID, gridID, columnName) {
    $('#' + textboxID).keyup(function () {
        var index;
        var text = $("#" + textboxID).val();

        $('#' + gridID + ' tbody tr').each(function () {
            $(this).children('th').each(function () {
                if ($(this).html() == columnName)
                    index = $(this).index();
            });

            $(this).children('td').each(function () {
                if ($(this).index() == index) {
                    var tdText = $(this).children(0).html() == null ? $(this).html() : $(this).children(0).html();

                    if (tdText.indexOf(text, 0) > -1) {
                        $(this).closest('tr').show();
                    } else {
                        $(this).closest('tr').hide();
                    }
                };
            });
        });
    });
};



    </script>
    <script type="text/javascript">
      
function copydata()
{      

       //-----------code to delete table
            var table = document.getElementById("tbl1");
            var rowCount = table.rows.length;
             for(var i=0; i<rowCount; i++) 
            {
               var row = table.rows[i];              
               table.deleteRow(i);
               rowCount--;
               i--;
            }//----------------code to delete table----                        
       var body=document.getElementById("div1");
    //  var body= document.getElementsByTagName("body")[0];  
    
   
       var grid = document.getElementById("dvreport");
       var ddlid= document.getElementById("ddlemplist").value;
        var a=grid.rows[0];   
           
        // create elements <table> and a <tbody>
      //  document.getElementById("div1").style.display = 'block';

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
//        setPos(body);
//        body.x= Math.random() * 200 + 50;
//        body.y= Math.random() * 200 + 50;
        
        // put <table> in the <body>
       // body.appendChild(tbl);
        // tbl border attribute to 
        tbl.setAttribute("border", "1");
        
        grid.style.display = 'none';
}
    </script>
</head>
<body>
      <form id="form1" runat="server">
    <div style="width:auto;">  
    <table style="border-style:solid;   margin:0 auto; border-color:Black;  border-width:1px; "><tr><td><table style="width:900px;" ><tr><td style="text-align:right; width:350px"><img src="images/logo.png" alt="" /></td><td><h1></h1></td></tr></table></td></tr>
    <tr><td>
    <table style="width:900px;"><tr><td></td><td style="width:300px; text-align:right;">Welcome &nbsp;<asp:Label ID="lblnm" runat="server" Text="Label"></asp:Label></td><td style="width:300px; text-align:center;"><a href="admin_home.aspx">Home</a></td><td style=" width:300px; text-align:left;"><asp:LinkButton ID="btn_logout" runat="server" Text="LogOut" OnClick="btn_logout_Click1"></asp:LinkButton></td></tr></table>
    </td></tr> 
    <tr><td style="margin-left:100px;">
    <br /><asp:Label ID="lblid" runat="server" Text="" Visible="false"></asp:Label>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
        &nbsp; &nbsp; &nbsp;Display Daily report monthly 
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
           <asp:ListItem>Year</asp:ListItem>
           <asp:ListItem>2013</asp:ListItem>
           <asp:ListItem>2014</asp:ListItem>
           <asp:ListItem>2015</asp:ListItem>
           </asp:DropDownList>
           <asp:Button ID="btnsearch" runat="server" Text="Search Report" OnClick="btnsearch_click" />
           <br /><br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
        &nbsp; &nbsp; &nbsp;<asp:DropDownList ID="ddlemplist" Visible="false" runat="server" AutoPostBack="false" OnSelectedIndexChanged="ddlemplist_SelectedIndexChanged" ><asp:ListItem>Select</asp:ListItem></asp:DropDownList>    
        <asp:Button ID="btncheck" runat="server" Visible="false" Text="search" OnClientClick="copydata(); return false;"/>       
          <div id="div1" style="clear: both;">
           </div>
    
    <table id="tbl1" style="border-collapse:collapse;"></table>
           <asp:DataGrid ID="dvreport" runat="server" ></asp:DataGrid>
            <asp:Label ID="lblmsg" runat="server" Text=""></asp:Label>  
    </td></tr>    
    </table>        
    </div>    
    </form>
</body>
</html>
