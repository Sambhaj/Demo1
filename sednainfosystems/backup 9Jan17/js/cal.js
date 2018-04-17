// JavaScript Document


function getmon(m0, m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11)
{
   this[0] = m0;
   this[1] = m1;
   this[2] = m2;
   this[3] = m3;
   this[4] = m4;
   this[5] = m5;
   this[6] = m6;
   this[7] = m7;
   this[8] = m8;
   this[9] = m9;
   this[10] = m10;
   this[11] = m11;
}
function calendar()
{
   var monthNames = "JanFebMarAprMayJunJulAugSepOctNovDec";
   var today = new Date();
   var thisDay;
   var monthDays = new getmon(31, 28, 31, 30, 31, 30, 31, 31, 30,
      31, 30, 31);
      year = today.getYear() + 1900;
   thisDay = today.getDate();
      if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0))
      monthDays[1] = 29;
   nDays = monthDays[today.getMonth()];
   firstDay = today;
   firstDay.setDate(1);
   startDay = firstDay.getDay();
   document.writeln("<left>");
   document.write("<table border=2 bgcolor=#C2F89E cellpadding=1>");
   document.write("<tr><th colspan=7><font size=+1>");
   document.write(monthNames.substring(today.getMonth() * 3,
      (today.getMonth() + 1) * 3));
   document.write(". ");
   document.write(year);
   document.write("<tr><th>");
  document.write("Sun<th>Mon<th>Tue<th>Wed<th>Thu<th>Fri<th>Sat");
   document.write("<tr>");
   column = 0;
   for (i=0; i<startDay; i++)
   {
   document.write("<td align=center><font size+=3>");
      column++;
      document.write("</font>");
   }
   for (i=1; i<=nDays; i++)
   {
   document.write("<td align=center>");
      if (i == thisDay)
         document.write("<font color=\"#FB0D01\"  size+=3><b>")
      document.write(i);
      if (i == thisDay)
        document.write("</font></b>")
      column++;
      if (column == 7)
      {
     document.write("<tr>");
         column = 0;
      }
   }
   document.write("</table>");
}
calendar();
document.write();
function shutdown(){
	window.close()
}
function DIV1_onclick() {
}

