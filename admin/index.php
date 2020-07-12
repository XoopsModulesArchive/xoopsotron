<?
#######################################################
#  myReferer version 1.0 pour Xoops 2.0.x			#
#  									#
#  © 2005, Solo ( www.wolfpackclan.com/wolfactory )	#
#  									#
#  Licence : GPL 							#
#######################################################

include("admin_header.php");
$myts =& MyTextSanitizer::getInstance();
// Get all datas
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

if (!isset($_POST['op'])) {
    $op = isset($_GET['op']) ? $_GET['op'] : '0';
} else {
    $op = $_POST['op'];
}

if (!isset($_POST['id'])) {
    $id = isset($_GET['id']) ? $_GET['id'] : '0';
} else {
    $id = $_POST['id'];
}

$text=''; 
$cat_tmp = '';
$select_01 = ''; 
$select_02 = ''; 
$select_03 = ''; 
$select_04 = ''; 
$select_05 = ''; 
$select_06 = ''; 

// 0perate changes
if ( $item AND $cat AND $op == 'edited' ) {
	$item = trim($item);
	$sql = "UPDATE ".$xoopsDB->prefix("xoopsotron")." 
	SET cat = '$cat', item = '$item'
	WHERE id = '$id'";
 	$xoopsDB->queryF($sql);
redirect_header("index.php", 1, _MD_XOOPSOTRON_UPDATED);
exit();
}

if ( $item AND $cat AND $op != 'edit' ) {
	$item = trim($item);
	$sql = "INSERT INTO ".$xoopsDB->prefix("xoopsotron") . " 
	VALUES ('', '$cat', '$item', '$uid', '1')";
	$xoopsDB->queryF($sql);
// redirect_header("index.php", 1, _MD_XOOPSOTRON_UPDATED);
// exit();
}

if ( $op == 'del' ) {
	$sql = "DELETE FROM ".$xoopsDB->prefix("xoopsotron")." 
		  WHERE id = '$id' ";
	$xoopsDB->queryF($sql);

// redirect_header("index.php", 1, _MD_XOOPSOTRON_DELETED);
// exit();
}

if ( $op == 'on' or $op == 'off'  ) {
if ( $op == 'on' ) { $hide = '0'; } else { $hide = '1'; }
	$sql = "UPDATE ".$xoopsDB->prefix("xoopsotron")." 
	SET hide = '$hide' 
	WHERE id = '$id'";
	$xoopsDB->queryF($sql);
}



// Get current datas
if ( $op == 'edit' ) {
	$sql = "SELECT item 
	FROM ".$xoopsDB->prefix("xoopsotron")." 
	WHERE id = '$id'";
	$result01 = $xoopsDB->queryF($sql);
while(list( $item ) = $xoopsDB->fetchRow($result01))
	{
	if ( $cat == 1 ) { $select_01 = ' checked'; } 
	if ( $cat == 2 ) { $select_02 = ' checked'; } 
	if ( $cat == 3 ) { $select_03 = ' checked'; } 
	if ( $cat == 4 ) { $select_04 = ' checked'; } 
	if ( $cat == 5 ) { $select_05 = ' checked'; } 
	if ( $cat == 6 ) { $select_06 = ' checked'; } 

	$text = $item;
	$op = 'edited';
	}

// redirect_header("index.php", 1, _MD_XOOPSOTRON_UPDATED);
// exit();
}


// Display editor
xoops_cp_header();
include_once ("../include/nav.php");

if ( $xoopsModuleConfig['part01'] ) { $title01 = $xoopsModuleConfig['part01'];  } else { $title01 = _MD_XOOPSOTRON_PART_01; }
if ( $xoopsModuleConfig['part02'] ) { $title02 = $xoopsModuleConfig['part02'];  } else { $title02 = _MD_XOOPSOTRON_PART_02; }
if ( $xoopsModuleConfig['part03'] ) { $title03 = $xoopsModuleConfig['part03'];  } else { $title03 = _MD_XOOPSOTRON_PART_03; }
if ( $xoopsModuleConfig['part04'] ) { $title04 = $xoopsModuleConfig['part04'];  } else { $title04 = _MD_XOOPSOTRON_PART_04; }
if ( $xoopsModuleConfig['part05'] ) { $title05 = $xoopsModuleConfig['part05'];  } else { $title05 = _MD_XOOPSOTRON_PART_05; }
if ( $xoopsModuleConfig['part06'] ) { $title06 = $xoopsModuleConfig['part06'];  } else { $title06 = _MD_XOOPSOTRON_PART_06; }
$uid = $xoopsUser->uid();

OpenTable();
echo '<div align="center">';
echo '<h1>'._MD_XOOPSOTRON_NAME.'</h1>';
echo '<form action="index.php" method=post>';
echo '<table border="0" width="600"><tr>';

echo '<td><b>1) <u>'._MD_XOOPSOTRON_CATEGORY.'</u></b>';
echo '</td><td>';
echo '<b>2) <u>'._MD_XOOPSOTRON_ITEM.'</u></b>';
echo '</td></tr><tr><td align="left">';
echo '<form>
<INPUT type="radio" name="cat" value="1"'.$select_01.'>&nbsp;'.$title01.'</input><br />
<INPUT type="radio" name="cat" value="2"'.$select_02.'>&nbsp;'.$title02.'</input><br />
<INPUT type="radio" name="cat" value="3"'.$select_03.'>&nbsp;'.$title03.'</input><br />
<INPUT type="radio" name="cat" value="4"'.$select_04.'>&nbsp;'.$title04.'</input><br />
<INPUT type="radio" name="cat" value="5"'.$select_05.'>&nbsp;'.$title05.'</input><br />
<INPUT type="radio" name="cat" value="6"'.$select_06.'>&nbsp;'.$title06.'</input><br />
';
echo '<INPUT type="hidden" name="op" value="'.$op.'"></input>';
echo '<INPUT type="hidden" name="id" value="'.$id.'"></input>';
echo '<INPUT type="hidden" name="uid" value="'.$uid.'"></input>';
echo'</td><td>';
// echo '<form action="index.php?op='.$op.'" method=post>';
echo '<div align="center">';
echo '<textarea name="item" rows="7" cols="150">'.$text;
echo '</textarea>';
echo'</td><tr></table>';
echo '<p /><input type="submit" name="" value="'._MD_XOOPSOTRON_SUBMIT.'">';
echo '&nbsp;<input type="reset" name="" value="'._MD_XOOPSOTRON_RESET.'">';
// echo '</form>';
echo'</div>';


CloseTable();
echo '<p/>';
include("list.php");
echo '<p/>';
OpenTable();
echo '<div align="right">'._MD_XOOPSOTRON_CREDIT.'<a href="mailto:solo@wolfpackclan.com">Solo</a> ( <a href="http://www.wolfpackclan.com\wolfactory" target="_blank">WolFactory</a> )</div>';
CloseTable();
xoops_cp_footer();
?>
