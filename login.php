<body style="background-image: radial-gradient(#1a1b19,#232524,black,#367588);
    background-color: #232524;
    background-image: bg1.png;">
<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['e-mail'];
$message=$_REQUEST['message'];
?>
<br>
<br>
<br>
<br>
<center>
<font color="white">
<h1>Hello&nbsp;<?php echo($name);?></h1>
<h2>We sent an e-mail to&nbsp;<?php echo($email);?></h2>
<h3><b><?php echo($message);?>&nbsp;</b>- Thank you for the message..!</h3>
</font>
</center>

