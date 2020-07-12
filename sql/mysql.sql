CREATE TABLE xoopsotron (
   id int(8) NOT NULL auto_increment,
   cat tinyint(2) unsigned default '0',
   item text,
   uid int(8) NOT NULL default '',
   hide tinyint(2) unsigned default '1',
   PRIMARY KEY (id)
);