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

define("_MD_XOOPSOTRON_NAME",		"Xoopsotron");
define("_MD_XOOPSOTRON_PART_01",	"Part 1");
define("_MD_XOOPSOTRON_PART_02",	"Part 2");
define("_MD_XOOPSOTRON_PART_03",	"Part 3");
define("_MD_XOOPSOTRON_PART_04",	"Part 4");
define("_MD_XOOPSOTRON_PART_05",	"Part 5");
define("_MD_XOOPSOTRON_PART_06",	"Part 6");
define("_MD_XOOPSOTRON_UPDATED",	"Database updated!");
define("_MD_XOOPSOTRON_PREFERENCES","Preferences");
define("_MD_XOOPSOTRON_INDEX",	"Index");
define("_MD_XOOPSOTRON_HELP",		"Help");
define("_MD_XOOPSOTRON_ADMIN",	"Admin");
define("_MD_XOOPSOTRON_CATEGORY",	"Item category");
define("_MD_XOOPSOTRON_ITEM",		"Sentence");
define("_MD_XOOPSOTRON_SUBMIT",	"Submit");
define("_MD_XOOPSOTRON_DELETED",	"Item deleted");
define("_MD_XOOPSOTRON_CREDIT",	"Xoopsotron is an original creation of ");

define("_MD_XOOPSOTRON_GUIDE",		"<h1 align='center'>Informations à propos de
"._MD_XOOPSOTRON_NAME."</h1>

Ce module enregistre des données statistiques concernant vos référants en provenance de sites externes ou de moteurs de recherche. Il vous aidera à déterminer les mots clés amployés et à suivre les robots des moteurs de recherche.

Pour plus d'informations, lisez les explications suivantes :

<ul><li><a href='#q1'>1) Installation</a></li>
<li><a href='#q2'>2) Référants</a></li>
<li><a href='#q3'>3) Moteurs de recherche</a></li>
<li><a href='#q4'>4) Mots clés</a></li>
<li><a href='#q4'>5) Robots</a></li></ul>
<hr />
<a id='q1' name='q1'><h2>1) Installation</h2></a>
Suivez les étapes suivantes pour installer correctement ce module :
<ol>
<li>1) Editez le fichier 'footer.php' situé à la racine de votre site Xoops.</li>
<li>2) Inserez le code suivant à la fin du fichier (avant le ?>) : <br />
<div align='center'><textarea  rows='2' cols='300'>include(XOOPS_ROOT_PATH.'/modules/myReferer/record.php');</textarea ></div></li>
<li>3) Rechargez le fichier ainsi modifié.</li>
</ol>

C'est tout.

Faites attention, lorsque vous mettez à jour votre site Xoops avec une nouvelle mise à jour du Core. Vérifiez si le fichier 'footer.php' est modifié. Auquel cas, le module ne fonctionnera plus. Répétez les opérations ci-dessus.


<hr />
<a id='q2' name='q2'><h2>2) Référants</h2></a>

Un référant est, en informatique, une information donnée à un serveur HTTP indiquant l'URL de la page Web contenant l'hyperlien que le visiteur a suivi. Cela peut être un lien sur une page extérieure au site, mais également un lien sur le même site. Ils peuvent ainsi aider à mieux comprendre les centres d'intérêt de vos visiteurs.

<hr />
<a id='q3' name='q3'><h2>3) Moteurs de recherche</h2></a>

Un moteur de recherche est un logiciel permettant de retrouver des ressources (pages Web, forums Usenet, images, vidéo, etc.) associées à des mots quelconques. Certains sites Web offrent un moteur de recherche comme principale fonctionnalité ; on appelle alors moteur de recherche le site lui-même.


<hr />
<a id='q4' name='q4'><h2>4) Mots clés</h2></a>

L'internaute entre des mots clés dans un moteur de recherche et celui-ci va lui donner la liste des sites correspondant à sa requête. Si vous êtes propriétaire d'un site web, votre objectif est d'être présent dans les pages des principaux moteurs de recherche afin qu'un maximum de personnes aient connaissance de votre existence. Pour cela, l'idéal serait que votre site apparaisse dans les 20 premiers sites affichés après une recherche par mots clés. C'est la notion du ' scoring '

Les mots clés ( keyword ) sont extrêmement importants afin que les surfeurs puissent trouver le chemin de votre site Web.

Vous devez déterminer quels mots-clés les gens utiliseront pour trouver votre site. C'est une démarche qui n'est pas sans importance. Il faut identifier tous les mots-clés liés à votre société, son secteur d’activité, son offre, etc.

Supposons que l'objectif de votre site soit de vendre des logiciels éducatifs via internet. Les premiers mots clés qui viennent immédiatement à l'esprit sont 'logiciel' et 'éducatif'. Cependant, si quelqu'un tapait ces deux mots lors d'une recherche par mots clés, il risquerait de se retrouver par exemple sur le site d’une école d’ingénieurs en informatique, site sans aucun rapport avec le contenu de vos pages. Ainsi, quand quelqu'un utilise ces deux mots clés, vous vous retrouvez en compétition avec toutes les pages sur internet qui possèdent les mots 'logiciel' et 'éducatif' dans leur titre et leur document. Vous constatez donc que faire apparaître votre site en bonne position dans la liste des résultats n'est pas une mince affaire.

Vous devez donc trouver d'autres mots clés qui caractérisent le contenu de votre site, en plus des mots 'logiciel' et 'éducatif'. Les mots 'enfant', 'apprendre' ou encore 'jeux éducatifs' sont adaptés.
Vous vous êtes maintenant démarqué des sites qui ne contiennent que les mots logiciel et éducatif. Maintenant, vous devez assembler certains de ces mots de manière à élargir le champ des mots clés grâce auxquels on trouvera votre site.
Par exemple, il est possible qu'une personne recherche 'logiciel pour enfant' ou 'apprendre aux enfants'. La liste peut être longue, mais de manière générale, vous ferez en sorte que vos assemblages ne contiennent pas plus de trois mots. Chaque assemblage de mots clés doit être séparés par une virgule. La plupart des gens n'utilisent qu'un, deux ou trois mots pour leur recherche. Ils n'ajouteront des mots que si la recherche s'avère infructueuse, mais le plus souvent, ils changeront tous les mots pour en choisir de nouveaux.

Les moteurs de recherche accorderont un score plus élevé à votre page si les mots clés apparaissent dans votre document dans le même ordre que celui déterminé par l'utilisateur. Par exemple, si une personne effectue une recherche sur 'logiciels pour enfants', une page contenant les mots 'logiciels pour enfants de 8 à 12 ans' obtiendra un score meilleur qu'une page contenant les mots 'des enfants âgés entre 8 et 12 ans peuvent être intéressés par ces logiciels'.

Les mots-clés sont utilisés dans les titres, les méta-tags et le texte de vos pages.

Ne répétez pas les mêmes mots clés de trop nombreuses fois car beaucoup de moteurs de recherche qui prennent en compte les balises <META> ignorent de telles répétitions et vont parfois jusqu’à arrêter leur travail d'indexation ou même à les sanctionner.

Les META-tags que vous insérerez en tête de votre document html sont des éléments essentiels de la promotion de votre site. La plupart des moteurs de recherche qui indexent les pages du web pénétreront dans le document html de votre site et en extrairont des informations. Si vous avez utilisé des META-tags, les informations qu'ils contiennent seront enregistrées par les moteurs et ensuite affichées aux utilisateurs lors d'une recherche par mots clés. Cela vous permet de contrôler la description de votre site.

Si le moteur ne trouve pas de META-tags, il se contentera de prendre les premières lignes de votre texte et les affichera comme description, ce qui n'est peut-être pas souhaitable.

Il existe plusieurs sortes de méta-tags nous traitons ici: description et keywords.

Le méta-tag ' description ' permet de fournir une description de votre site aux différents moteurs de recherche. Il se présente de la manière suivante :

<META NAME='description' CONTENT='description de votre site...'>

Le méta-tag ' keywords ' permet de fournir une liste de mots-clés aux moteurs de recherche. Il se présente de la manière suivante :

<META NAME='keywords' CONTENT='mot-clé 1, mot-clé 2, ...'>


<hr />
<a id='q5' name='q5'><h2>5) <b>Robots</b></h2></a>

Un robot d'indexation (en anglais web crawler ou web spider) est un logiciel qui explore automatiquement le World Wide Web. Il est généralement conçu pour collecter les ressources (pages Web, images, vidéo, documents Word ou PDF ou PostScript, etc.) indexées par un moteur de recherche. Cependant, certains robots servent à archiver les ressources ou à collecter des adresses électroniques auxquelles envoyer des pourriels.
Pour découvrir de nouvelles ressources, un robot procède en suivant récursivement les hyperliens trouvés à partir d'une page pivot. Par la suite, il est avantageux de mémoriser l'URL de chaque ressource récupérée et d'adapter la fréquence des visites à la fréquence observée de mise à jour de la ressource. Toutefois, de nombreuses ressources échappent à cette exploration récursive, car seuls des hyperliens créés à la demande, donc introuvables par un robot, permettent d'y accéder. Cet ensemble de ressources inexploré est parfois appelé Web profond.
Un fichier robots.txt placé dans la racine d'un site Web permet de donner aux robots une liste de ressources à ignorer. Cette convention permet de réduire la charge du serveur Web et d'éviter des ressources sans intérêt.


Bon Xoops,

Solo

<div align='right'>myReferer est une creation de Solo (Solo71) de la <a href='www.wolfpackclan.com/wolfactory'>wolFactory</a>. - (c) Juillet 2005</a>
");
?>

