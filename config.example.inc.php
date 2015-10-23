<?php

$cfg['blowfish_secret'] = '';

/* Servers configuration */
$i = 0;

// [1] 
$i++;
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;

// Advanced phpMyAdmin features
// pmadb table  -> examples/config.manyhosts.inc.php
// import       -> sql/create_tables.sql
$cfg['Servers'][$i]['pmadb']            = 'phpmyadmin';
$cfg['Servers'][$i]['bookmarktable']    = 'pma__bookmark';
$cfg['Servers'][$i]['relation']         = 'pma__relation';
$cfg['Servers'][$i]['table_info']       = 'pma__table_info';
$cfg['Servers'][$i]['table_coords']     = 'pma__table_coords';
$cfg['Servers'][$i]['pdf_pages']        = 'pma__pdf_pages';
$cfg['Servers'][$i]['column_info']      = 'pma__column_info';
$cfg['Servers'][$i]['history']          = 'pma__history';
$cfg['Servers'][$i]['table_uiprefs']    = 'pma__table_uiprefs';
$cfg['Servers'][$i]['tracking']         = 'pma__tracking';
$cfg['Servers'][$i]['userconfig']       = 'pma__userconfig';
$cfg['Servers'][$i]['recent']           = 'pma__recent';
$cfg['Servers'][$i]['users']            = 'pma__users';
$cfg['Servers'][$i]['usergroups']       = 'pma__usergroups';
$cfg['Servers'][$i]['navigationhiding'] = 'pma__navigationhiding';
$cfg['Servers'][$i]['savedsearches']    = 'pma__savedsearches';
$cfg['Servers'][$i]['central_columns']  = 'pma__central_columns';
//
$cfg['Servers'][$i]['favorite']         = 'pma__favorite';


// End of servers configuration
$cfg['QueryHistoryDB'] = true;
$cfg['QueryHistoryMax'] = 25;
$cfg['BrowseMIME'] = true;
$cfg['PDFDefaultPageSize'] = 'A4';

// Directories for saving/loading files from server
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';




/*

設定正式環境的背景顏色, 以提醒使用者
vi themes/original/layout.inc.php
    $GLOBALS['cfg']['NaviBackground'] = '#D0EEE0';

vi themes/pmahomme/layout.inc.php 
    $GLOBALS['cfg']['NaviBackground'] = '#e3ffe3';

*/
