// JScript File

 function checkdate()    // function for validation in checking calender dates....
{
   if(document.getElementById('<%= ddldate.ClientID%>').value == "Date")
   {
        document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT DATE";
   }
   else
   {
      if(document.getElementById('<%= ddlmonth.ClientID%>').value == "Month")
        {
        document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT MONTH";
        }
        else
        {   
        document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT MONTH";
        document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT MONTH";
            if( document.getElementById('<%= ddlyear.ClientID%>').value == "Year")
            {
        document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT MONTH";
            document.getElementById('<%= lblmsg.ClientID%>').innerHTML="SELECT YEAR";
            }      
            else
            {
                var date1=document.getElementById('<%= ddldate.ClientID%>');
                var month=document.getElementById('<%= ddlmonth.ClientID%>');
                var yer=document.getElementById('<%= ddlyear.ClientID%>').value;
                var lbl=document.getElementById('<%= lblmsg.ClientID%>');
                var x;
                var y;
                var z;
                var lep1;
                var dt1=date1.value;
                var mon=month.value;
                if(mon == "Feb")
                {
                    if (dt1 < 29)
                    {
                    lbl.innerHTML = dt1.concat(mon,yer);
                    }
                    else
                    {
                        if(dt1 > 29)
                        {
                        lbl.innerHTML = "February month has 28 days";
                        date1.value="Date";
                        }
                        else
                        {
                            x=yer%4;
                            y=yer%400;
                            z=yer%100;
                            if (x == 0 && ( y == 0 || z != 0))
                            {            
                            lbl.innerHTML = dt1.concat(mon,yer);
                            
                            }
                            else
                            {
                            date1.value="Date"; 
                            //lbl.innerHTML =yer +" Only leap year can have 29 days";   
                            lbl.innerHTML =yer +" does not have 29 days in Feb Month";  
                              
                            }
                        }        
                    }                        
                }
                else if (mon == "Apr" && dt1 > 30)
                {
                     lbl.innerHTML = "April month has 30 days";  
                       date1.value="Date";  
                }
                else if (mon == "Jun" && dt1 > 30)
                {
                     lbl.innerHTML = "Jun month has 30 days";    
                       date1.value="Date";
                }
                else if (mon == "Sep" && dt1 > 30)
                {
                     lbl.innerHTML = "September month has 30 days";    
                       date1.value="Date";
                }
                else if (mon == "Nov" && dt1 > 30)
                {
                     lbl.innerHTML = "November month has 30 days";    
                       date1.value="Date";
                }
                else
                {
                // lbl.innerHTML=dt1.concat(mon,yer);
                }
            }    
      }
   }
}

  function chk()  
{
var a=document.getElementById('<%= txtpass.ClientID%>').value;
var b=document.getElementById('<%= txtconfpas.ClientID%>').value;
var c=document.getElementById('<%= lblpass.ClientID%>');

if(a == b)
{
c.innerHTML="";
return true;
}
else
{
document.getElementById('<%= txtconfpas.ClientID%>').value="";
c.innerHTML='Password Should Same';
return false;
}
}



function empty()
    {  
         var lbl=document.getElementById('<%= lblmsg.ClientID %>');          
         var emt1=document.getElementById('<%= txtoldpass.ClientID %>');
         var emt2=document.getElementById('<%= txtpass.ClientID %>');
         var emt3=document.getElementById('<%= txtconfpas.ClientID %>');                        
              
          if(emt1.value == "" || emt2.value == "" || emt3.value == "" )
           {
        lbl.innerHTML="Enter all the fields";
        return false;
        } 
        else if(chk())
        {
         return false;
        }
        else
        {
        return true;
        }
    }