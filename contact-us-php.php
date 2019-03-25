<?php

if (isset($_POST['submit'])) {
	# code...
	$msg = 'Name: '.$_POST['name']."\n"
			.'Email: '.$_POST['email']."\n"
			.'Message'.$_POST['message']."\n"
	email('manzim.ruet@gmail.com', 'from page', $msg)

} else {
	header('location: contact-us.php');
	exit(0);
}

?>