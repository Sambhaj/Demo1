<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Display Instagram Posts On Website - LEVEL 1 - Live Demo</title>
 
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 <?php
// use this instagram access token generator http://instagram.pixelunion.net/
$access_token="5911977382.1677ed0.4e21cb255d764d80b112276227bdb769";
$photo_count=9;
     
$json_link="https://api.instagram.com/v1/users/self/media/recent/?";
$json_link.="access_token={$access_token}&count={$photo_count}";
?>
<style>
.item_box{
    height:500px;
}
 
.photo-thumb{
    width:100%;
    height:auto;
    float:left; 
    border: thin solid #d1d1d1;
    margin:0 1em .5em 0;
    float:left; 
}
</style>
</head>
<body>
 
<div class="container">
<div class="row">
 
<!-- Instagram feed will be here -->
 
</div>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 
 
 <div class="col-lg-12">
    <div class="page-header">
        <h1>Display Instagram Feed On Website - LEVEL 1 - Live Demo</h1>
    </div>
</div>
 
 
 
 
</body>

</html>