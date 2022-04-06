<?php
	session_start();
	include_once ('shop_sc_fns.php');
	do_html_header('www.mspsoft.com ام اس پي سافت بزرگترين منبع پروژه هاي و سورس كدهاي برنامه نويسي',get_categories());
	display_latest();
	do_html_footer();
?>
