<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



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


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>&#10070; Welcome to Our Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]>
	<script type="text/javascript" src="supersleight-min.js"></script>
    <link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>

<body>
<div id="main"><!-- Main starts here -->
<div id="header"><!-- Header starts here -->
	<table width="900px" border="0" cellpadding="0" cellspacing="0">
	<tr><td valign="middle"><img src="images/logo.png" /></td><td><h3>Welcome to User Homepage</h3></td>
	<td align="right" valign="top">
	
	</td>
	</tr></table>
</div><!-- Header ends here -->
<div id="navigation"><?php
session_start();
if(isset($_SESSION['auname']))
{
$nm=$_SESSION['auname'];
//echo "$nm";
}
else
{
echo  '<META http-equiv="refresh" content="0;URL=index.php">';
}

if(isset($_POST['logout']))     
{
session_destroy();
   echo  '<META http-equiv="refresh" content="0;URL=index.php">';                           
}

?>
<form action="admbirth_day.php" method="post">
<ul>
	<li class="first"><a href="adminhome.php" title="">Home</a></li>
	<li><a href="aboutus.php" title="">About Us</a></li>
	<li><a href="history.php" title="">History</a></li>
	<li><a href="litrature.php" title="">Litreature</a></li>
	<li><a href="spiritual.php" title="">Spiritual</a></li>
	<li><a href="https://photos.app.goo.gl/64XC9nOZNadfGGGL2" target="_blank"title="">Photo Gallery</a><img src="images/new.gif" width="25px"></li>
	<li><a href="contactus.php" title="">Contact Us</a></li>
	<li><input type="submit" style="background:transparent; border:none; font-size:14px; font-weight:bold; color:#FFFFFF;" name="logout"  value="Log Out" /> &nbsp;&nbsp;&nbsp;Welcome : <?php echo "$nm"; ?></li>	
</ul></form>
</div>
<div id="contentHolder"><!-- Content Holder starts here -->
<div id="content"><!-- Content starts here -->
<div id="back">


<div class="clear"></div>

<div  align="center"><br />
<br />

    
	<h2>Delete Toppers</h2>
    <?php
require_once('db.php');
?>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/base/jquery-ui.css" type="text/css" media="all" />
          <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#pd").datepicker();
        });  </script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Toppers</title>
</head>

<body>


<form action="deletesansmaran.php" id="form1" method="post">
<div style="overflow:scroll; height:700px; width:620px">
<?php 

	
$sql  = "SELECT `smid` as nid, `smtext` as hed, `smdate` as nws FROM `tbsansmaran`";

$rs1 = mysql_query($sql);
$rs = mysql_query($sql);
$row1 = mysql_fetch_array($rs1);
$mnm= $row1['nid'];

if($mnm <> "")
{
		echo "<table width='600' border='1'  cellspacing='0' id='tb1'>
		<tr class='head'>
		<th width='90px'><input type='checkbox' name='chkmain' onclick = 'checkAll(this);' />Check All   </th>
		<th width='210px'>Sansmaran Text</th>		
		<th width='210px'>Date</th>

		</tr>";

if($rs === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($rs))
  {
  
  list($username, $message, $message_date)=$row;


   echo "<tr>";

   echo"<td width='3px' style='padding:5px;vertical-align:top;'><input type='checkbox' name='chkchild[]' onclick = 'Check_Click(this)' value='" . $username . "' /></td>";

  echo "<td style='padding:5px;vertical-align:top;'>" . $message . "</td>";
  echo "<td style='padding:5px;vertical-align:top;'>" . $message_date . "</td>"; 	

  echo "</tr>";
  }

echo "</table>";
}
else
{
echo "No Message in inbox";
}



if(isset($_POST['Delete']))  
{

foreach($_POST['chkchild'] as $value)
{
$qry="Delete from tbsansmaran where smid='$value'";
	 if (!mysql_Query($qry,$dsn))                       //check query execured or not
	  {
	  echo "$qry";die('Error: ' . mysql_error());
  	   }
      else
      {   } 
}
  echo "<script> alert('Sansmaan list Deleted Successfully')</script>"; 
	echo  '<META http-equiv="refresh" content="0;URL=adminhome.php">';                           
}

if(isset($_POST['Submit']))                           //check post back event
{


	

}

?>
</div>
<br />
<br />

<input type="submit" value="Delete" name="Delete" />

</form>
<table><tr><td width="10px"></td></tr></table>
</body>

	<div class="space1"></div>
</div>


<div class="clear"></div>
<!--<div class="bottomImg"><img src="images/bottomBg.png" alt="" /></div>-->
</div>
</div><!-- Content ends here -->
</div><!-- Content Holder ends here -->

<!--<div class="bottomImg"><img src="images/02.png" alt="" /></div> -->

<div id="footer"><!-- Footer starts here -->
<!--<div lang="copy">&copy; Copyright 2014</div> -->
<div class="design">&copy; Copyright 2014 |<a href="http://sednainfosystems.com">Powered by SEDNA</a></div>
<div class="clear"></div>
</div><!-- Footer ends here -->
</div><!-- Main ends here --><?php 
mysql_close($dsn);
?>
</body>
</html>
