<html>
<head>
<title></title>
 <script type="text/javascript">
function mobval()
{
     var txt1=document.getElementById('phone');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('phone').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
		 {
          txt1.value="";
         $('#mobNumbMsg').show();
         }
         else
         {
           $('#mobNumbMsg').hide();
         }
}
function emailvalidate()
{
	var x=document.getElementById('email').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{ 
	 
	$('#emailMsg').show();
	
  	}else{
		$('#emailMsg').hide();
	}
}
</script>
<style>
   table {
           background-color:#FFFFFF;
            width:350px;
            height:100px;
        
            box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            -o-box-shadow: 0 0 10px rgba(0,0,0,0.6);
            border-radius:20px;
        }
        th {
            background-color:#FECB39;
            padding:15px;
           border-top-left-radius: 20px;
           border-top-right-radius:20px;
        }
        td {
             padding:15px;
        }
		
		#btn{
  margin: 0 auto;
  width:100px;
  height:35px;
  font-weight: bold;
  background-color: #FECB39;
  border: 1px solid transparent;
  text-decoration:none;
  color: #ffffff;
 cursor: pointer;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#btn:hover {
  background-color: #ffffff;
  color: #146b85;
   font-size:20px;
  border-color: #000000;
  text-decoration:none;
}

 
 </style>
	</head><!--/head-->

<body >
<!--/header-->
<!----Start header banner----->
 
<!----End header banner----->
<!----Start Main Contents---------->
 <div class="container-fluid"> 
 <div class="container" style=""><br><br><br>
<form action="mail.php" method="POST">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Phone</p> <input type="text" name="phone">
<p>Dropdown Box</p>
<select name="dropdown" size="1">
<option value="Option1">Option1</option>
<option value="Option2">Option2</option>
<option value="Option3">Option3</option>
<option value="Option4">Option4</option>
</select>
<br />
<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form><br><center><span style="color:#DB5353;font-weight:bold;"><?php echo $message; ?></span></center><br>
 </div><br>
 </div>
<!----End Main Contents---------->
 
<!--/#bottom-->
    

    
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>