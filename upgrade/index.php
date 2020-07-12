<?php

include '../../../mainfile.php';

echo '<html><head><title>Upgrade Module</title></head><body>
<img src="upgrade.gif" align="left" /><center>';

if (isset($HTTP_POST_VARS['submit'])) {

	if (!$xoopsDB->queryFromFile('./upgrade.sql')) {
		echo 'File upgrade.sql not found!';
	}
	echo '<p />Upgrade<br />
- 1) delete "/upgrade/" directory and its content from your server!<br />
- 2) update your module in the Xoops admin -> Click on OK!<br />
	<p />
	<form action="../../system/admin.php?fct=modulesadmin&op=update&module=myReferer" method="post">
	<input type="submit" name="submit" value="OK" />
	</form>';
	echo $xoopsLogger->dumpQueries();

} else {
	echo '<h1>Upgrade Module</h1><p />Press the button below to upgrade your module<br />
<form action="index.php" method="post">
<input type="submit" name="submit" value="OK" />
</form>';
}

echo '</center></body></html>';
?>