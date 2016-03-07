<?php

$cfg['blowfish_secret'] = '';

// Servers configuration
$i = 0;

// [1] 
$i++;
$cfg['Servers'][$i] = getDefaultConfig();
$cfg['Servers'][$i]['host'] = '127.0.0.1';

// [2]
// ....




// End of servers configuration
$cfg['QueryHistoryDB']      = true;
$cfg['QueryHistoryMax']     = 25;
$cfg['BrowseMIME']          = true;
$cfg['PDFDefaultPageSize']  = 'A4';

// Directories for saving/loading files from server
$cfg['UploadDir']   = '';
$cfg['SaveDir']     = '';



/**
 *
 */
function getDefaultConfig()
{
    $pma = [];
    $pma['host']            = '127.0.0.1';
    $pma['auth_type']       = 'cookie';
    $pma['connect_type']    = 'tcp';
    $pma['compress']        = false;
    $pma['AllowNoPassword'] = false;

    // Advanced phpMyAdmin features
    // pmadb table  -> examples/config.manyhosts.inc.php
    // import       -> sql/create_tables.sql
    $pma['pmadb']            = 'phpmyadmin';
    $pma['bookmarktable']    = 'pma__bookmark';
    $pma['relation']         = 'pma__relation';
    $pma['table_info']       = 'pma__table_info';
    $pma['table_coords']     = 'pma__table_coords';
    $pma['pdf_pages']        = 'pma__pdf_pages';
    $pma['column_info']      = 'pma__column_info';
    $pma['history']          = 'pma__history';
    $pma['table_uiprefs']    = 'pma__table_uiprefs';
    $pma['tracking']         = 'pma__tracking';
    $pma['userconfig']       = 'pma__userconfig';
    $pma['recent']           = 'pma__recent';
    $pma['users']            = 'pma__users';
    $pma['usergroups']       = 'pma__usergroups';
    $pma['navigationhiding'] = 'pma__navigationhiding';
    $pma['savedsearches']    = 'pma__savedsearches';
    $pma['central_columns']  = 'pma__central_columns';
    //
    $pma['favorite']         = 'pma__favorite';
    return $pam;
}


/*

設定正式環境的背景顏色, 以提醒使用者
vi themes/original/layout.inc.php
    $GLOBALS['cfg']['NaviBackground'] = '#D0EEE0';

vi themes/pmahomme/layout.inc.php 
    $GLOBALS['cfg']['NaviBackground'] = '#e3ffe3';

*/
