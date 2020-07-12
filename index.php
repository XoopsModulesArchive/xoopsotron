<?php
//  ------------------------------------------------------------------------ 	//
//                XOOPS - PHP Content Management System    				//
//                    Copyright (c) 2004 XOOPS.org                       	//
//                       <http://www.xoops.org/>                              //
//                   										//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)         	//
//                  myReferer v1.0								//
//  ------------------------------------------------------------------------ 	//

// General settings
include_once("header.php");
include_once(XOOPS_ROOT_PATH."/header.php");
$xoopsOption['template_main'] = 'xoopsotron_index.html';
$myts =& MyTextSanitizer::getInstance();
$max = '40';

// Module Banner
if ( $xoopsModuleConfig['banner'] ) {
 $banner = '<img src="images/banner.gif" alt="'.$xoopsModule -> getVar('name').'">'; 
 } else {
 $banner = '';}

// Admin link
if ( $xoopsUser && $xoopsUser->isAdmin($xoopsModule->mid()) ) {
     $admin = '<a href="admin/index.php"><img src="images/icon/add.gif" alt="'._EDIT.'"></a> |
 <a href="../system/admin.php?fct=preferences&amp;op=showmod&amp;mod='.$xoopsModule -> getVar( "mid" ).'">
<img src="images/icon/edit.gif" alt="'._PREFERENCES.'"></a>'; } else { $admin = ''; }
$xoopsTpl->assign("admin", 		$admin);

// Various Header informations
$xoopsTpl->assign("banner", 		$banner);
$xoopsTpl->assign("title", 		$myts->makeTareaData4Show( $xoopsModule -> getVar('name') ));
$xoopsTpl->assign("text", 		$myts->makeTareaData4Show( $xoopsModuleConfig['text'] ));
$xoopsTpl->assign("text_box", 	_XOOPSOTRON_TEXTBOX);
$xoopsTpl->assign("text_submit", 	_XOOPSOTRON_SUBMIT);
$xoopsTpl->assign("display", 		$xoopsModuleConfig['display']);
$xoopsTpl->assign("title01", 		$xoopsModuleConfig['part01']);
$xoopsTpl->assign("title02", 		$xoopsModuleConfig['part02']);
$xoopsTpl->assign("title03", 		$xoopsModuleConfig['part02']);
$xoopsTpl->assign("title04", 		$xoopsModuleConfig['part04']);
$xoopsTpl->assign("title05", 		$xoopsModuleConfig['part05']);
$xoopsTpl->assign("title06", 		$xoopsModuleConfig['part06']);

// Textarea size
$size = explode('|', $xoopsModuleConfig['textbox_size'] );
$sizes = count($size);
if ( !$sizes ) { $size[0] = 12; $size[1] = 60; }
$xoopsTpl->assign("text_box_h", 		$size[0] );
$xoopsTpl->assign("text_box_w", 		$size[1] );


// Part 1
	$sql = "SELECT item
		FROM ".$xoopsDB->prefix("xoopsotron")." 
		WHERE item != '' AND hide = '1' AND cat = '1'";

	$result = $xoopsDB->queryF($sql);
$count_01 = '0';
	while(list( $item ) = $xoopsDB->fetchRow($result))
	{
	$xoopsotron = array();
$count_01++;
// Compile results of query
	$xoopsotron['title'] = $xoopsModuleConfig['part01'];
	$xoopsotron['item'] = $item;
	$xoopsotron['item_short'] = substr($item, 0, $max).'...';
	$xoopsTpl->append('xoopsotron_01', $xoopsotron);
	unset($xoopsotron);
	}

if ( $count_01 ) { 
$chaine_01 = "	i = document.forme.JC1.selectedIndex ;
	chaine1 = document.forme.JC1.options[i].value ;";
$chaines_01 = "chaine1 ";
$math_01 = "	i = Math.random() ;
	i = Math.floor(".$count_01."*i) ;
	document.forme.JC1.selectedIndex = i ;";
  }



// Part 2
	$sql = "SELECT item
		FROM ".$xoopsDB->prefix("xoopsotron")." 
		WHERE item != '' AND hide = '1' AND cat = '2'";

	$result = $xoopsDB->queryF($sql);
$count_02 = '0';
	while(list( $item ) = $xoopsDB->fetchRow($result))
	{
	$xoopsotron = array();
$count_02++;
// Compile results of query
	$xoopsotron['item'] = $item;
	$xoopsotron['item_short'] = substr($item, 0, $max).'...';
	$xoopsTpl->append('xoopsotron_02', $xoopsotron);
	unset($xoopsotron);
	}
if ( $count_02 ) { 
$chaine_02 = "	i = document.forme.JC2.selectedIndex ;
	chaine2 = document.forme.JC2.options[i].value ;";
$chaines_02 = "+ ' ' + chaine2 ";
$math_02 = "	i = Math.random() ;
	i = Math.floor(".$count_02."*i) ;
	document.forme.JC2.selectedIndex = i ;";
  }





// Part 3
	$sql = "SELECT item
		FROM ".$xoopsDB->prefix("xoopsotron")." 
		WHERE item != '' AND hide = '1' AND cat = '3'";

	$result = $xoopsDB->queryF($sql);
$count_03 = '0';
	while(list( $item ) = $xoopsDB->fetchRow($result))
	{
	$xoopsotron = array();
$count_03++;
// Compile results of query
	$xoopsotron['title'] = $xoopsModuleConfig['part03'];
	$xoopsotron['item'] = $item;
	$xoopsotron['item_short'] = substr($item, 0, $max).'...';
	$xoopsTpl->append('xoopsotron_03', $xoopsotron);
	unset($xoopsotron);
	}
if ( $count_03 ) { 
$chaine_03 = "	i = document.forme.JC3.selectedIndex ;
	chaine3 = document.forme.JC3.options[i].value ;";
$chaines_03 = "+ ' ' + chaine3 ";
$math_03 = "	i = Math.random() ;
	i = Math.floor(".$count_03."*i) ;
	document.forme.JC3.selectedIndex = i ;";
  }





// Part 4
	$sql = "SELECT item
		FROM ".$xoopsDB->prefix("xoopsotron")." 
		WHERE item != '' AND hide = '1' AND cat = '4'";

	$result = $xoopsDB->queryF($sql);
$count_04 = '0';
	while(list( $item ) = $xoopsDB->fetchRow($result))
	{
	$xoopsotron = array();
$count_04++;
// Compile results of query
	$xoopsotron['title'] = $xoopsModuleConfig['part04'];
	$xoopsotron['item'] = $item;
	$xoopsotron['item_short'] = substr($item, 0, $max).'...';
	$xoopsTpl->append('xoopsotron_04', $xoopsotron);
	unset($xoopsotron);
	}
if ( $count_04 ) { 
$chaine_04 = "	i = document.forme.JC4.selectedIndex ;
	chaine4 = document.forme.JC4.options[i].value ;";
$chaines_04 = "+ ' ' + chaine4 ";
$math_04 = "	i = Math.random() ;
	i = Math.floor(".$count_04."*i) ;
	document.forme.JC4.selectedIndex = i ;";
  }





// Part 5
	$sql = "SELECT item
		FROM ".$xoopsDB->prefix("xoopsotron")." 
		WHERE item != '' AND hide = '1' AND cat = '5'";

	$result = $xoopsDB->queryF($sql);
$count_05 = '0';
	while(list( $item ) = $xoopsDB->fetchRow($result))
	{
	$xoopsotron = array();
$count_05++;
// Compile results of query
	$xoopsotron['title'] = $xoopsModuleConfig['part05'];
	$xoopsotron['item'] = $item;
	$xoopsotron['item_short'] = substr($item, 0, $max).'...';
	$xoopsTpl->append('xoopsotron_05', $xoopsotron);
	unset($xoopsotron);
	}
if ( $count_05 ) { 
$chaine_05 = "	i = document.forme.JC5.selectedIndex ;
	chaine5 = document.forme.JC5.options[i].value ;";
$chaines_05 = "+ ' ' + chaine5 ";
$math_05 = "	i = Math.random() ;
	i = Math.floor(".$count_05."*i) ;
	document.forme.JC5.selectedIndex = i ;";
  }




// Part 6
	$sql = "SELECT item
		FROM ".$xoopsDB->prefix("xoopsotron")." 
		WHERE item != '' AND hide = '1' AND cat = '6'";

	$result = $xoopsDB->queryF($sql);
$count_06 = '0';
	while(list( $item ) = $xoopsDB->fetchRow($result))
	{
	$xoopsotron = array();
$count_06++;
// Compile results of query
	$xoopsotron['title'] = $xoopsModuleConfig['part06'];
	$xoopsotron['item'] = $item;
	$xoopsotron['item_short'] = substr($item, 0, $max).'...';
	$xoopsTpl->append('xoopsotron_06', $xoopsotron);
	unset($xoopsotron);
	}
if ( $count_06 ) { 
$chaine_06 = "	i = document.forme.JC6.selectedIndex ;
	chaine6 = document.forme.JC6.options[i].value ;";
$chaines_06 = "+ ' ' + chaine6";
$math_06 = "	i = Math.random() ;
	i = Math.floor(".$count_06."*i) ;
	document.forme.JC6.selectedIndex = i ;";
  }

$chaining = $chaines_01." ".$chaines_02." ".$chaines_03." ".$chaines_04." ".$chaines_05." ".$chaines_06;

// script
$script = "
<script language=Javascript>
<!--- Script aléatoire
function Xoopsotron()
	{
	chaine = '' ;
	".$chaine_01."
	".$chaine_02."
	".$chaine_03."
	".$chaine_04."
	".$chaine_05."
	".$chaine_06."


	chaine = ".$chaining.";

	document.forme.texte.value = chaine ;
	}

function hasard()
{
	if (navigator.appCodeName == 'Mozilla' && eval(navigator.appVersion.substring(0,3)) >= 3)
	{
	".$math_01."
	".$math_02."
	".$math_03."
	".$math_04."
	".$math_05."
	".$math_06."

	Xoopsotron() ;
	}
	else
	{
	alert('') ;
	}
}
//------->
</script>";

$xoopsTpl->assign("script", 		$script);

include_once(XOOPS_ROOT_PATH."/footer.php");
?>

