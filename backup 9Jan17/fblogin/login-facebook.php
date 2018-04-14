<?php

require 'facebook/facebook.php';
require 'config/fbconfig.php';
//require 'config/functions.php';

$facebook = new Facebook(array(
            'appId' => '513229622109520',
            'secret' => '412aa1e900bffe7ba4e1578f4080c4ab',
		 	'channelUrl' => 'http://www.sednainfosystems.com/channel.html',
			'$canvas_page' => 'http://sednainfosystems.com/fblogin/phphome.php/',
            'cookie' => true
        ));

$session = $facebook->getSession();

//echo  '<META http-equiv="refresh" content="0;URL=index.php">';
	echo "<script> alert('login Successfully  $session ')</script>";  



if (!empty($session)) {
    # Active session, let's try getting the user id (getUser()) and user info (api->('/me'))
    try {
        $uid = $facebook->getUser();
        $user = $facebook->api('/me');
    } catch (Exception $e) {
	
    }

    if (!empty($user)) {
	 echo("<script> top.location.href='" . $canvas_page . "'</script>");
        # User info ok? Let's print it (Here we will be adding the login and registering routines)
        echo '<pre>';
        print_r($user);
        echo '</pre><br/>';
        $username = $user['name'];
        $user = new User();
        $userdata = $user->checkUser($uid, 'facebook', $username);
        if(!empty($userdata)){
            session_start();
            $_SESSION['id'] = $userdata['id'];
 $_SESSION['oauth_id'] = $uid;

            $_SESSION['username'] = $userdata['username'];
            $_SESSION['oauth_provider'] = $userdata['oauth_provider'];
            header("Location: phphome.php");
        }
    } else {
        # For testing purposes, if there was an error, let's kill the script
        die("There was an error.");
    }
} else {
    # There's no active session, let's generate one
    $login_url = $facebook->getLoginUrl();
    header("Location: " . $login_url);
}
?>
