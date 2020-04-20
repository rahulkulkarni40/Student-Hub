<?php

define('EMAIL_FOR_REPORTS', 'rahul.kulkarni1994@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-default.css" type="text/css" />
<? if (frmd_message()): ?>
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<? else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-default.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>
<form class="formoid-default" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;width:480px" title="My Formoid form" method="post">
	<div class="element-text" ><h2 class="title">Create Account</h2></div>
	<div class="element-input" ><label class="title">Faculty Name</label><input type="text" name="input" /></div>
	<div class="element-input" ><label class="title">Faculty Id</label><input type="text" name="input1" /></div>
	<div class="element-password" ><label class="title">Password</label><input type="password" name="password" value="" /></div>
	<div class="element-password" ><label class="title">Confirm Password</label><input type="password" name="password1" value="" /></div>
	<div class="element-input" ><label class="title">Department</label><input type="text" name="input2" /></div>
	<div class="element-input" ><label class="title">Contact No</label><input type="text" name="input3" /></div>
	<div class="element-email" ><label class="title">Email</label><input type="email" name="email" value="" /></div>
	<div class="element-submit" ><input type="submit" value="Submit"/></div>

</form>
<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-default.js"></script>

<p class="frmd"><a href="http://formoid.com/">Web 2 0 Forms Formoid.com 1.9</a></p>
<!-- Stop Formoid form-->
<? endif; ?>

<?php frmd_end_form(); ?>