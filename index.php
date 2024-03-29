<!--

Copyright (C) 2010  Leandro Vázquez Cervantes (leandro[-at-]leandro[-dot-]org)
Copyright (C) 2010  Octavio Benedí Sánchez (octaviobenedi[-at-]gmail[-dot-]com)
Copyright (C) 2010  Verónica Pazos (verocorella[-at-]gmail[-dot-]com)

GNU LESSER GENERAL PUBLIC LICENSE

Version 3, 29 June 2007

Copyright © 2007 Free Software Foundation, Inc. <http://fsf.org/>

Everyone is permitted to copy and distribute verbatim copies of this license document, but changing it is not allowed.

This version of the GNU Lesser General Public License incorporates the terms and conditions of version 3 of the GNU General Public License, supplemented by the additional permissions listed below.

version 0.3g Leandro  18 NOV 2012
AGPL to LGPL v3 change

-->

<?php
require "inc/functions.inc.php";
require "inc/Mustache.php";

check_lang();

$m = new Mustache();

$obj = new stdClass();
$obj->TITLE   = TITLE;
$obj->BLOG    = BLOG;
$obj->VERSION = VERSION;
$obj->VERSION_LINK   = VERSION_LINK;
$obj->OTHER_TOOLS_LINK = OTHER_TOOLS_LINK;

$obj->BTN_ADD_TASK = BTN_ADD_TASK;
$obj->BTN_ADD_COL  = BTN_ADD_COL;
$obj->BTN_DEL_COL  = BTN_DEL_COL;


$obj->COLUMN_1    = COLUMN_1;
$obj->COLUMN_2    = COLUMN_2;
$obj->COLUMN_3    = COLUMN_3;
$obj->COLUMN_NAME = COLUMN_NAME;
$obj->COLUMN_WIP  = COLUMN_WIP;
$obj->UNLIMITED   = UNLIMITED;

$obj->WHAT_IS_TEXT= WHAT_IS_TEXT;
$obj->BUTTON_TEXT = BUTTON_TEXT;

$obj->JOIN    = JOIN;
$obj->COPY    = COPY;

$template = file_get_contents('html/index.html');
echo $m->render($template, $obj);
