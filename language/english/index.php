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

define("_MD_XOOPSOTRON_GUIDE",		"<h1 align='center'>Informations � propos de
"._MD_XOOPSOTRON_NAME."</h1>

Ce module enregistre des donn�es statistiques concernant vos r�f�rants en provenance de sites externes ou de moteurs de recherche. Il vous aidera � d�terminer les mots cl�s amploy�s et � suivre les robots des moteurs de recherche.

Pour plus d'informations, lisez les explications suivantes :

<ul><li><a href='#q1'>1) Installation</a></li>
<li><a href='#q2'>2) R�f�rants</a></li>
<li><a href='#q3'>3) Moteurs de recherche</a></li>
<li><a href='#q4'>4) Mots cl�s</a></li>
<li><a href='#q4'>5) Robots</a></li></ul>
<hr />
<a id='q1' name='q1'><h2>1) Installation</h2></a>
Suivez les �tapes suivantes pour installer correctement ce module :
<ol>
<li>1) Editez le fichier 'footer.php' situ� � la racine de votre site Xoops.</li>
<li>2) Inserez le code suivant � la fin du fichier (avant le ?>) : <br />
<div align='center'><textarea  rows='2' cols='300'>include(XOOPS_ROOT_PATH.'/modules/myReferer/record.php');</textarea ></div></li>
<li>3) Rechargez le fichier ainsi modifi�.</li>
</ol>

C'est tout.

Faites attention, lorsque vous mettez � jour votre site Xoops avec une nouvelle mise � jour du Core. V�rifiez si le fichier 'footer.php' est modifi�. Auquel cas, le module ne fonctionnera plus. R�p�tez les op�rations ci-dessus.


<hr />
<a id='q2' name='q2'><h2>2) R�f�rants</h2></a>

Un r�f�rant est, en informatique, une information donn�e � un serveur HTTP indiquant l'URL de la page Web contenant l'hyperlien que le visiteur a suivi. Cela peut �tre un lien sur une page ext�rieure au site, mais �galement un lien sur le m�me site. Ils peuvent ainsi aider � mieux comprendre les centres d'int�r�t de vos visiteurs.

<hr />
<a id='q3' name='q3'><h2>3) Moteurs de recherche</h2></a>

Un moteur de recherche est un logiciel permettant de retrouver des ressources (pages Web, forums Usenet, images, vid�o, etc.) associ�es � des mots quelconques. Certains sites Web offrent un moteur de recherche comme principale fonctionnalit� ; on appelle alors moteur de recherche le site lui-m�me.


<hr />
<a id='q4' name='q4'><h2>4) Mots cl�s</h2></a>

L'internaute entre des mots cl�s dans un moteur de recherche et celui-ci va lui donner la liste des sites correspondant � sa requ�te. Si vous �tes propri�taire d'un site web, votre objectif est d'�tre pr�sent dans les pages des principaux moteurs de recherche afin qu'un maximum de personnes aient connaissance de votre existence. Pour cela, l'id�al serait que votre site apparaisse dans les 20 premiers sites affich�s apr�s une recherche par mots cl�s. C'est la notion du ' scoring '

Les mots cl�s ( keyword ) sont extr�mement importants afin que les surfeurs puissent trouver le chemin de votre site Web.

Vous devez d�terminer quels mots-cl�s les gens utiliseront pour trouver votre site. C'est une d�marche qui n'est pas sans importance. Il faut identifier tous les mots-cl�s li�s � votre soci�t�, son secteur d�activit�, son offre, etc.

Supposons que l'objectif de votre site soit de vendre des logiciels �ducatifs via internet. Les premiers mots cl�s qui viennent imm�diatement � l'esprit sont 'logiciel' et '�ducatif'. Cependant, si quelqu'un tapait ces deux mots lors d'une recherche par mots cl�s, il risquerait de se retrouver par exemple sur le site d�une �cole d�ing�nieurs en informatique, site sans aucun rapport avec le contenu de vos pages. Ainsi, quand quelqu'un utilise ces deux mots cl�s, vous vous retrouvez en comp�tition avec toutes les pages sur internet qui poss�dent les mots 'logiciel' et '�ducatif' dans leur titre et leur document. Vous constatez donc que faire appara�tre votre site en bonne position dans la liste des r�sultats n'est pas une mince affaire.

Vous devez donc trouver d'autres mots cl�s qui caract�risent le contenu de votre site, en plus des mots 'logiciel' et '�ducatif'. Les mots 'enfant', 'apprendre' ou encore 'jeux �ducatifs' sont adapt�s.
Vous vous �tes maintenant d�marqu� des sites qui ne contiennent que les mots logiciel et �ducatif. Maintenant, vous devez assembler certains de ces mots de mani�re � �largir le champ des mots cl�s gr�ce auxquels on trouvera votre site.
Par exemple, il est possible qu'une personne recherche 'logiciel pour enfant' ou 'apprendre aux enfants'. La liste peut �tre longue, mais de mani�re g�n�rale, vous ferez en sorte que vos assemblages ne contiennent pas plus de trois mots. Chaque assemblage de mots cl�s doit �tre s�par�s par une virgule. La plupart des gens n'utilisent qu'un, deux ou trois mots pour leur recherche. Ils n'ajouteront des mots que si la recherche s'av�re infructueuse, mais le plus souvent, ils changeront tous les mots pour en choisir de nouveaux.

Les moteurs de recherche accorderont un score plus �lev� � votre page si les mots cl�s apparaissent dans votre document dans le m�me ordre que celui d�termin� par l'utilisateur. Par exemple, si une personne effectue une recherche sur 'logiciels pour enfants', une page contenant les mots 'logiciels pour enfants de 8 � 12 ans' obtiendra un score meilleur qu'une page contenant les mots 'des enfants �g�s entre 8 et 12 ans peuvent �tre int�ress�s par ces logiciels'.

Les mots-cl�s sont utilis�s dans les titres, les m�ta-tags et le texte de vos pages.

Ne r�p�tez pas les m�mes mots cl�s de trop nombreuses fois car beaucoup de moteurs de recherche qui prennent en compte les balises <META> ignorent de telles r�p�titions et vont parfois jusqu�� arr�ter leur travail d'indexation ou m�me � les sanctionner.

Les META-tags que vous ins�rerez en t�te de votre document html sont des �l�ments essentiels de la promotion de votre site. La plupart des moteurs de recherche qui indexent les pages du web p�n�treront dans le document html de votre site et en extrairont des informations. Si vous avez utilis� des META-tags, les informations qu'ils contiennent seront enregistr�es par les moteurs et ensuite affich�es aux utilisateurs lors d'une recherche par mots cl�s. Cela vous permet de contr�ler la description de votre site.

Si le moteur ne trouve pas de META-tags, il se contentera de prendre les premi�res lignes de votre texte et les affichera comme description, ce qui n'est peut-�tre pas souhaitable.

Il existe plusieurs sortes de m�ta-tags nous traitons ici: description et keywords.

Le m�ta-tag ' description ' permet de fournir une description de votre site aux diff�rents moteurs de recherche. Il se pr�sente de la mani�re suivante :

<META NAME='description' CONTENT='description de votre site...'>

Le m�ta-tag ' keywords ' permet de fournir une liste de mots-cl�s aux moteurs de recherche. Il se pr�sente de la mani�re suivante :

<META NAME='keywords' CONTENT='mot-cl� 1, mot-cl� 2, ...'>


<hr />
<a id='q5' name='q5'><h2>5) <b>Robots</b></h2></a>

Un robot d'indexation (en anglais web crawler ou web spider) est un logiciel qui explore automatiquement le World Wide Web. Il est g�n�ralement con�u pour collecter les ressources (pages Web, images, vid�o, documents Word ou PDF ou PostScript, etc.) index�es par un moteur de recherche. Cependant, certains robots servent � archiver les ressources ou � collecter des adresses �lectroniques auxquelles envoyer des pourriels.
Pour d�couvrir de nouvelles ressources, un robot proc�de en suivant r�cursivement les hyperliens trouv�s � partir d'une page pivot. Par la suite, il est avantageux de m�moriser l'URL de chaque ressource r�cup�r�e et d'adapter la fr�quence des visites � la fr�quence observ�e de mise � jour de la ressource. Toutefois, de nombreuses ressources �chappent � cette exploration r�cursive, car seuls des hyperliens cr��s � la demande, donc introuvables par un robot, permettent d'y acc�der. Cet ensemble de ressources inexplor� est parfois appel� Web profond.
Un fichier robots.txt plac� dans la racine d'un site Web permet de donner aux robots une liste de ressources � ignorer. Cette convention permet de r�duire la charge du serveur Web et d'�viter des ressources sans int�r�t.


Bon Xoops,

Solo

<div align='right'>myReferer est une creation de Solo (Solo71) de la <a href='www.wolfpackclan.com/wolfactory'>wolFactory</a>. - (c) Juillet 2005</a>
");
?>

