<?php
//  ------------------------------------------------------------------------ 	//
//                XOOPS - PHP Content Management System    				//
//                    Copyright (c) 2004 XOOPS.org                       	//
//                       <http://www.xoops.org/>                              //
//                   										//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)         	//
//                  Xoopsotron v1.0								//
//  ------------------------------------------------------------------------ 	//

function a_xoopsotron_show($options) {
Global $xoopsUser, $xoopsDB;
if (!isset($_POST['item'])) {
    $item = isset($_GET['item']) ? $_GET['item'] : '0';
} else {
    $item = $_POST['item'];
}

if (!isset($_POST['cat'])) {
    $cat = isset($_GET['cat']) ? $_GET['cat'] : '0';
} else {
    $cat = $_POST['cat'];
}

if ( $item AND $cat ) {
	$uid = $xoopsUser->uid();
	$item = trim($item);
	$sql = "INSERT INTO ".$xoopsDB->prefix("xoopsotron") . " 
	VALUES ('', '$cat', '$item', '$uid', '$options[0]')";
	$xoopsDB->queryF($sql);
// redirect_header("index.php", 1, _MD_XOOPSOTRON_UPDATED);
// exit();
}

$counter = $xoopsDB -> queryF( "SELECT COUNT(id) 
			FROM " . $xoopsDB->prefix("xoopsotron")." 
			WHERE hide = 0");
list( $count ) = $xoopsDB->fetchRow($counter );

     $block = array();

$block['count'] = $count;
$block['disp_cat'] =  $options[1];
$block['submit'] = _MB_XOOPSOTRON_SUBMIT;
$block['waiting'] = _MB_XOOPSOTRON_WAITING;
$block['part01'] = _MB_XOOPSOTRON_PART01;
$block['part02'] = _MB_XOOPSOTRON_PART02;
$block['part03'] = _MB_XOOPSOTRON_PART03;
$block['part04'] = _MB_XOOPSOTRON_PART04;
$block['part05'] = _MB_XOOPSOTRON_PART05;
$block['part06'] = _MB_XOOPSOTRON_PART06;

	return $block;
}

function a_xoopsotron_edit($options) {

// Moderation
	$form = _MB_XOOPSOTRON_MODERATE."&nbsp;<input type='radio' id='options[0]' name='options[0]' value='0'";
	if ( $options[0] == 0 ) {
		$form .= " checked='checked'";
	}
	$form .= " />&nbsp;"._YES."&nbsp;<input type='radio' id='options[0]' name='options[0]' value='1'";
	if ( $options[0] == 1 ) {
		$form .= " checked='checked'";
	}
	$form .= " />&nbsp;"._NO."<br />";


// Display categories

	$form .= _MB_XOOPSOTRON_DISPCAT."&nbsp;<input type='radio' id='options[1]' name='options[1]' value='1'";
	if ( $options[1] == 1 ) {
		$form .= " checked='checked'";
	}
	$form .= " />&nbsp;"._YES."&nbsp;<input type='radio' id='options[1]' name='options[1]' value='0'";
	if ( $options[1] == 0 ) {
		$form .= " checked='checked'";
	}
	$form .= " />&nbsp;"._NO."<br />";

return $form;
}

?>