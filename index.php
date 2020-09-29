<?php
include_once 'config/init.php';
?>
<?php 
$template=new Template('templates/mainpage.php');

$template->title='Latest jobs';
echo $template; 