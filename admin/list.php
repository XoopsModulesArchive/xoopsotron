<?
#######################################################
#  myReferer version 1.0 pour Xoops 2.0.x			#
#  									#
#  © 2005, Solo ( www.wolfpackclan.com/wolfactory )	#
#  									#
#  Licence : GPL 							#
#######################################################

if ( $op == 'del' ) {
	$sql = "	DELETE FROM ".$xoopsDB->prefix("xoopsotron")." 
			WHERE id = '$id' ";
	$xoopsDB->queryF($sql);
}

if ( $op == 'on' or $op == 'off'  ) {
if ( $op == 'on' ) { $hide = '0'; } else { $hide = '1'; }
	$sql = "UPDATE ".$xoopsDB->prefix("xoopsotron")." 
	SET hide = '$hide' 
	WHERE id = '$id'";
	$xoopsDB->queryF($sql);
}

OpenTable();

	$result = "SELECT id, cat, item, uid, hide 
		FROM ".$xoopsDB->prefix("xoopsotron")." 
		WHERE id = id
		ORDER BY cat ASC";
$list = $xoopsDB->queryF($result);
$count = '';
echo'<div align="center">';
echo'<h1>'._MD_XOOPSOTRON_LIST.'</h1>';
echo '<table border="0" cellspacing="0" cellpadding="5" class="outer" width="90%"><tr>';
echo '<th width="5%">N°</th>
	<th width="65%">'._MD_XOOPSOTRON_ITEM.'</th>
	<th width="10%">'._MD_XOOPSOTRON_SUBMITER.'</th>
	<th width="20%">'._MD_XOOPSOTRON_ADMIN.'</th>';
	while(list( $id, $cat, $item, $uid, $hide ) = $xoopsDB->fetchRow($list))
	{
if ( $hide == '0' ) { $hide = '1'; $hid_nav = 'off'; } else { $hide = '0'; $hid_nav = 'on'; }

if ( $cat != $cat_tmp ) {  
echo '<tr><th align="left" colspan="4" class="even"><font color="blue">'._MD_XOOPSOTRON_CATEGORY.' : '.$cat.'</font></th></tr>'; $count = 1;
} else { $count++; }

$cat_tmp = $cat;
if ( $uid ) {$user = '<a href="../../../userinfo.php?uid='.$uid.'" target="_blank">'.XoopsUser::getUnameFromId($uid).'</a>'; } else { $user = XoopsUser::getUnameFromId($uid); } 
echo '</tr><tr>';
echo '<td align="center" class="odd">'.$count.'</td>';
echo '<td align="left">'.$myts->makeTareaData4Show($item).'</td>';
echo '<td align="left">'.$user.'</td>';
echo '<td align="center" class="odd">
		<a href="index.php?op='.$hid_nav.'&id='.$id.'">
		<img src="../images/icon/'.$hid_nav.'.gif" alt="'.$hid_nav.'" title="'.$hid_nav.'" />
		</a>
		<a href="index.php?op=edit&id='.$id.'&cat='.$cat.'">
		<img src="../images/icon/edit.gif" alt="'._EDIT.'" title="'._EDIT.'" />
		</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
		<a href="index.php?op=del&id='.$id.'">
		<img src="../images/icon/delete.gif" alt="'._DELETE.'" title="'._DELETE.'" />
		</a>
	</td>';
	}

echo '</tr>';
echo'</table>';
echo'<div>';
CloseTable();
?>
