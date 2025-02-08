<?php
/*
  vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  Codificación: UTF-8
  +----------------------------------------------------------------------+
  | Issabel version 1.6-3                                               |
  | http://www.issabel.org                                               |
  +----------------------------------------------------------------------+
  | Copyright (c) 2006 Palosanto Solutions S. A.                         |
  +----------------------------------------------------------------------+
  | The contents of this file are subject to the General Public License  |
  | (GPL) Version 2 (the "License"); you may not use this file except in |
  | compliance with the License. You may obtain a copy of the License at |
  | http://www.opensource.org/licenses/gpl-license.php                   |
  |                                                                      |
  | Software distributed under the License is distributed on an "AS IS"  |
  | basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See  |
  | the License for the specific language governing rights and           |
  | limitations under the License.                                       |
  +----------------------------------------------------------------------+
  | The Initial Developer of the Original Code is PaloSanto Solutions    |
  +----------------------------------------------------------------------+
  | Modifications and enhancements by Ramtin Rahmani Nejad               |
  | For more information, visit https://netadminplus.com                 |
  +----------------------------------------------------------------------+
  $Id: paloControlPanelStatus.class.php, Thu 08 Apr 2021 05:37:16 PM EDT, nicolas@issabel.com
*/
global $arrConfModule;
global $arrConf;
$arrConfModule['module_name'] = 'control_panel';
$arrConfModule['templates_dir'] = 'themes';
$arrConfModule['dsn_conn_database'] = "sqlite3:///$arrConf[issabel_dbdir]/control_panel_design.db";
?>