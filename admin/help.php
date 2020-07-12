<?php
#######################################################
#  XOOPSOTRON version 1.0 pour Xoops 2.0.x			#
#  									#
#  © 2005, Solo ( www.wolfpackclan.com/wolfactory )	#
#  									#
#  Licence : GPL 							#
#######################################################

include_once( "admin_header.php" );
		xoops_cp_header();
		include_once XOOPS_ROOT_PATH.'/class/xoopsform/grouppermform.php';
		$module_id = $xoopsModule->getVar('mid');
include_once ("../include/nav.php");
$myts =& MyTextSanitizer::getInstance();

$guide = _MD_XOOPSOTRON_GUIDE;
$guide = $myts->makeTareaData4Show($guide);

OpenTable();
echo $guide;
CloseTable();

xoops_cp_footer();
?>
