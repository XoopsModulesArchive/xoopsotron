<?php
#######################################################
#  myReferer version 1.0 pour Xoops 2.0.x			#
#  									#
#  © 2005, Solo ( www.wolfpackclan.com/wolfactory )	#
#  									#
#  Licence : GPL 							#
#######################################################


echo "<a href='../index.php'><img src='../images/xoopsotron_slogo.png' align='right' /></a><br />
<li style='list-style: none; margin: 0; display: inline; '>
<a href='..'  style='padding: 1px 0.5em; margin-left: 1px; border: 1px solid #778; background: #DDE; text-decoration: none;'>
"._MD_XOOPSOTRON_INDEX."</a></li>

<li style='list-style: none; margin: 0; display: inline; '>
<a href='../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=".$xoopsModule -> getVar( 'mid' )."' style='padding: 1px 0.5em; margin-left: 1px; border: 1px solid #778; background: #DDE; text-decoration: none; '>
"._MD_XOOPSOTRON_PREFERENCES."</a></li>

<li style='list-style: none; margin: 0; display: inline; '>
<a href='index.php'  style='padding: 1px 0.5em; margin-left: 1px; border: 1px solid #778; background: #DDE; text-decoration: none;'>
"._MD_XOOPSOTRON_ADMIN."</a></li>

<li style='list-style: none; margin: 0; display: inline; '>
<a href='help.php' style='padding: 1px 0.5em; margin-left: 1px; border: 1px solid #778; background: #DDE; text-decoration: none; '>
"._MD_XOOPSOTRON_HELP."</a></li></ul></div><p /><hr align='center' /><p />";
?>

