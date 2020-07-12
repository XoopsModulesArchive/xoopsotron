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

if (!isset($_POST["op"])) {
    $op = isset($_GET["op"]) ? $_GET["op"] : '';
} else {
    $op = $_POST["op"];
}

if (!isset($_POST["id"])) {
    $id = isset($_GET["id"]) ? $_GET["id"] : '';
} else {
    $id = $_POST["id"];
}

if ( $op == 'del' ) {
	$sql = "	DELETE FROM ".$xoopsDB->prefix("xoopsotron")." 
			WHERE id = '$id' ";
	$xoopsDB->queryF($sql);

// redirect_header("edit.php", 1, _MD_XOOPSOTRON_DELETED);
// exit();
}

if ( $op == 'on' or $op == 'off'  ) {
if ( $op == 'on' ) { $hide = '0'; } else { $hide = '1'; }
	$sql = "UPDATE ".$xoopsDB->prefix("xoopsotron")." 
	SET hide = '$hide' 
	WHERE id = '$id'";
	$xoopsDB->queryF($sql);
}

xoops_cp_header();

include_once ("../include/nav.php");

OpenTable();

	$sql = "SELECT id, cat, item, uid, hide 
		FROM ".$xoopsDB->prefix("xoopsotron")." 
		WHERE id = id
		ORDER BY cat ASC";

	$result = $xoopsDB->queryF($sql);
$count = '';
echo'<div align="center">';
echo '<div align="center"><h1>'._MD_XOOPSOTRON_NAME.'</h1></div>';
echo '<table border="0" cellspacing="2" cellpadding="2" class="outer" width="90%"><tr>';
echo '<th width="5%">N°</th>
	<th width="75%">'._MD_XOOPSOTRON_ITEM.'</th>
	<th width="20%">'._MD_XOOPSOTRON_ADMIN.'</th>';
	while(list( $id, $cat, $item, $uid, $hide ) = $xoopsDB->fetchRow($result))
	{
if ( $hide == '0' ) { $hide = '1'; $hid_nav = 'off'; } else { $hide = '0'; $hid_nav = 'on'; }

if ( $cat != $cat_tmp ) {  
echo '<br /><tr><th align="left" colspan="3" class="even"><font color="blue">'._MD_XOOPSOTRON_CATEGORY.' : '.$cat.'</font></th></tr>'; $count = 1;
} else { $count++; }

$cat_tmp = $cat;

echo '</tr><tr>';
echo '<td align="center" class="odd">'.$count.'</td>';
echo '<td align="left">'.$myts->makeTareaData4Show($item).'</td>';
echo '<td align="center" class="odd">
		<a href="edit.php?op='.$hid_nav.'&id='.$id.'">
		<img src="../images/icon/'.$hid_nav.'.gif" alt="'.$hid_nav.'" title="'.$hid_nav.'" />
		</a>
		<a href="index.php?op=edit&id='.$id.'&cat='.$cat.'">
		<img src="../images/icon/edit.gif" alt="'._EDIT.'" title="'._EDIT.'" />
		</a>
		<a href="edit.php?op=del&id='.$id.'">
		<img src="../images/icon/delete.gif" alt="'._DELETE.'" title="'._DELETE.'" />
		</a>
	</td>';
	}

echo '</tr>';
echo '<th colspan="3" align="right"><a href="index.php"><img src="../images/icon/add.gif" alt="'._ADD.'"></a></th>';
echo'</table>';
echo'<div>';

CloseTable();
	echo "<p/>";
	            OpenTable();
	echo '<div align="right">'._MD_XOOPSOTRON_CREDIT.'<a href="mailto:solo@wolfpackclan.com">Solo</a> ( <a href="http://www.wolfpackclan.com\wolfactory" target="_blank">WolFactory</a> )</div>';
                CloseTable();
xoops_cp_footer();
// include("../include/admin_footer.php");
?>
