<?php

//  ------------------------------------------------------------------------ 	//
//                XOOPS - PHP Content Management System    				//
//                    Copyright (c) 2004 XOOPS.org                       	//
//                       <http://www.xoops.org/>                              //
//                   										//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)         	//
//                  xoopsotron v1.0								//
//  ------------------------------------------------------------------------ 	//

$modversion['name'] = _MI_XOOPSOTRON_NAME;
$modversion['version'] = 1.0;
$modversion['description'] = _MI_XOOPSOTRON_DSC;
$modversion['credits'] = "WolFactory (www.wolfpackclan.com/wolfactory)";
$modversion['author'] = "Solo";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "images/xoopsotron_slogo.png";
$modversion['dirname'] = "xoopsotron"; 

// sql tables
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][0] = "xoopsotron";

// Templates
$modversion['templates'][1]['file'] = 'xoopsotron_index.html';
$modversion['templates'][1]['description'] = "";

// Admin
// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Main
$modversion['hasMain'] = 1;

// Blocks
$modversion['blocks'][1]['file'] = "block.php";
$modversion['blocks'][1]['name'] = _MI_XOOPSOTRON_BLOCNAME;
$modversion['blocks'][1]['description'] = "";
$modversion['blocks'][1]['show_func'] = 'a_xoopsotron_show';
$modversion['blocks'][1]['edit_func'] = 'a_xoopsotron_edit';
$modversion['blocks'][1]['options'] = '';
$modversion['blocks'][1]['template'] = 'xoopsotron_block.html';

// Options
$modversion['config'][1]['name'] = 'banner';
$modversion['config'][1]['title'] = '_MI_XOOPSOTRON_BANNER';
$modversion['config'][1]['description'] = '_MI_XOOPSOTRON_BANNER_DSC';
$modversion['config'][1]['formtype'] = 'yesno';
$modversion['config'][1]['valuetype'] = 'int';
$modversion['config'][1]['default'] = 1;

$modversion['config'][2]['name'] = 'text';
$modversion['config'][2]['title'] = '_MI_XOOPSOTRON_TEXT';
$modversion['config'][2]['description'] = '_MI_XOOPSOTRON_TEXT_DSC';
$modversion['config'][2]['formtype'] = 'textarea';
$modversion['config'][2]['valuetype'] = 'text';
$modversion['config'][2]['default'] = _MI_XOOPSOTRON_WELCOME;

$modversion['config'][3]['name'] = 'part01';
$modversion['config'][3]['title'] = '_MI_XOOPSOTRON_PART01';
$modversion['config'][3]['description'] = '_MI_XOOPSOTRON_PART01_DSC';
$modversion['config'][3]['formtype'] = 'textbox';
$modversion['config'][3]['valuetype'] = 'text';
$modversion['config'][3]['default'] = '';

$modversion['config'][4]['name'] = 'part02';
$modversion['config'][4]['title'] = '_MI_XOOPSOTRON_PART02';
$modversion['config'][4]['description'] = '_MI_XOOPSOTRON_PART02_DSC';
$modversion['config'][4]['formtype'] = 'textbox';
$modversion['config'][4]['valuetype'] = 'text';
$modversion['config'][4]['default'] = '';

$modversion['config'][5]['name'] = 'part03';
$modversion['config'][5]['title'] = '_MI_XOOPSOTRON_PART03';
$modversion['config'][5]['description'] = '_MI_XOOPSOTRON_PART03_DSC';
$modversion['config'][5]['formtype'] = 'textbox';
$modversion['config'][5]['valuetype'] = 'text';
$modversion['config'][5]['default'] = '';

$modversion['config'][6]['name'] = 'part04';
$modversion['config'][6]['title'] = '_MI_XOOPSOTRON_PART04';
$modversion['config'][6]['description'] = '_MI_XOOPSOTRON_PART04_DSC';
$modversion['config'][6]['formtype'] = 'textbox';
$modversion['config'][6]['valuetype'] = 'text';
$modversion['config'][6]['default'] = '';

$modversion['config'][7]['name'] = 'part05';
$modversion['config'][7]['title'] = '_MI_XOOPSOTRON_PART05';
$modversion['config'][7]['description'] = '_MI_XOOPSOTRON_PART05_DSC';
$modversion['config'][7]['formtype'] = 'textbox';
$modversion['config'][7]['valuetype'] = 'text';
$modversion['config'][7]['default'] = '';

$modversion['config'][8]['name'] = 'part06';
$modversion['config'][8]['title'] = '_MI_XOOPSOTRON_PART06';
$modversion['config'][8]['description'] = '_MI_XOOPSOTRON_PART06_DSC';
$modversion['config'][8]['formtype'] = 'textbox';
$modversion['config'][8]['valuetype'] = 'text';
$modversion['config'][8]['default'] = '';

$modversion['config'][9]['name'] = 'moderate';
$modversion['config'][9]['title'] = '_MI_XOOPSOTRON_DISPLAY';
$modversion['config'][9]['description'] = '_MI_XOOPSOTRON_DISPLAY_DSC';
$modversion['config'][9]['formtype'] = 'yesno';
$modversion['config'][9]['valuetype'] = 'int';
$modversion['config'][9]['default'] = 0;

$modversion['config'][9]['name'] = 'display';
$modversion['config'][9]['title'] = '_MI_XOOPSOTRON_DISPLAY';
$modversion['config'][9]['description'] = '_MI_XOOPSOTRON_DISPLAY_DSC';
$modversion['config'][9]['formtype'] = 'yesno';
$modversion['config'][9]['valuetype'] = 'int';
$modversion['config'][9]['default'] = 0;

$modversion['config'][10]['name'] = 'textbox_size';
$modversion['config'][10]['title'] = '_MI_XOOPSOTRON_TEXTBOXSIZE';
$modversion['config'][10]['description'] = '_MI_XOOPSOTRON_TEXTBOXSIZE_DSC';
$modversion['config'][10]['formtype'] = 'textbox';
$modversion['config'][10]['valuetype'] = 'text';
$modversion['config'][10]['default'] = '12|60';

/*
$modversion['config'][3]['name'] = 'order';
$modversion['config'][3]['title'] = '_MI_XOOPSOTRON_ORDER';
$modversion['config'][3]['description'] = '_MI_XOOPSOTRON_ORDER_DSC';
$modversion['config'][3]['formtype'] = 'select';
$modversion['config'][3]['valuetype'] = 'text';
$modversion['config'][3]['default'] = 'visit';
$modversion['config'][3]['options'] = array( '_MI_XOOPSOTRON_ORDER_VISIT' => 'visit', '_MI_XOOPSOTRON_ORDER_REF' => 'referer', '_MI_XOOPSOTRON_ORDER_DATE' => 'date' );

$modversion['config'][4]['name'] = 'perpage';
$modversion['config'][4]['title'] = '_MI_XOOPSOTRON_PERPAGE';
$modversion['config'][4]['description'] = '_MI_XOOPSOTRON_PERPAGE_DSC';
$modversion['config'][4]['formtype'] = 'select';
$modversion['config'][4]['valuetype'] = 'int';
$modversion['config'][4]['default'] = 30;
$modversion['config'][4]['options'] = array( '10' => 10, '20' => 20, '30' => 30, '40' => 40, '50' => 50, '100' => 100  );

$modversion['config'][6]['name'] = 'tag_pop';
$modversion['config'][6]['title'] = '_MI_XOOPSOTRON_TAG_POP';
$modversion['config'][6]['description'] = '_MI_XOOPSOTRON_TAG_POP_DSC';
$modversion['config'][6]['formtype'] = 'textbox';
$modversion['config'][6]['valuetype'] = 'int';
$modversion['config'][6]['default'] = 50;

$modversion['config'][7]['name'] = 'referer';
$modversion['config'][7]['title'] = '_MI_XOOPSOTRON_REFERER';
$modversion['config'][7]['description'] = '_MI_XOOPSOTRON_DESCRIPTION';
$modversion['config'][7]['formtype'] = 'yesno';
$modversion['config'][7]['valuetype'] = 'int';
$modversion['config'][7]['default'] = 1;

$modversion['config'][8]['name'] = 'engine';
$modversion['config'][8]['title'] = '_MI_XOOPSOTRON_ENGINE';
$modversion['config'][8]['description'] = '_MI_XOOPSOTRON_DESCRIPTION';
$modversion['config'][8]['formtype'] = 'yesno';
$modversion['config'][8]['valuetype'] = 'int';
$modversion['config'][8]['default'] = 1;

$modversion['config'][9]['name'] = 'robots';
$modversion['config'][9]['title'] = '_MI_XOOPSOTRON_ROBOTS';
$modversion['config'][9]['description'] = '_MI_XOOPSOTRON_DESCRIPTION';
$modversion['config'][9]['formtype'] = 'yesno';
$modversion['config'][9]['valuetype'] = 'int';
$modversion['config'][9]['default'] = 1;

$modversion['config'][10]['name'] = 'keywords';
$modversion['config'][10]['title'] = '_MI_XOOPSOTRON_KEYWORDS';
$modversion['config'][10]['description'] = '_MI_XOOPSOTRON_DESCRIPTION';
$modversion['config'][10]['formtype'] = 'yesno';
$modversion['config'][10]['valuetype'] = 'int';
$modversion['config'][10]['default'] = 1;
*/
?>