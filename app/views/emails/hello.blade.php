<!--This is a blade template that goes in email message to site administrator-->
<?php

$name = Input::get('name');
$email = Input::get ('email');
$message = Input::get ('message');
$date_time = date("F j, Y, g:i a");
$userIpAddress = Request::getClientIp();
?> 
 
<h4 style="color: green;">Here's a new contact request from our website: </h4>
 
<p>
Name: <?php echo ($name); ?> <br>
Email address: <?php echo ($email);?> <br>
Date: <?php echo($date_time);?><br>
User IP address: <?php echo($userIpAddress);?><br>
Message: <?php echo ($message);?><br>

</p>