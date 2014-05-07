<?php

$mod_strings = array_merge(return_module_language("en_us", "zr2_Report"),
	array(
	  'LBL_MODULE_NAME' => 'クエリ テンプレート',
	  'LBL_MODULE_TITLE' => 'クエリ テンプレート',
	  'LBL_QUERY_SQL' => 'SQL',
	  'LBL_QUERY_SQL_HELP' => 'Please enter the SQL query for this report. To include parameter selection, enter a "$" followed by the parameter name, and the value will be inserted at this position on report execution.<br/><br/>The following placeholders are supported as well: <br/><b>$SUGAR_USER_ID</b> - contains the ID of the currently logged on user<br/><b>$SUGAR_USER_NAME</b> - contains the name of the currently logged on user<br/><b>$SUGAR_SESSION_ID</b> - contains the ID of the current session',
	  
	'LBL_QUERY_ONDEMAND_COLUMN_DELIMITER' => 'カラムセパレータ',
	'LBL_QUERY_ONDEMAND_ROW_DELIMITER' => '行セパレータ',
	'LBL_QUERY_ONDEMAND_INCLUDE_HEADER' => 'ヘッダを含む',
	)
);

$mod_list_strings = array_merge(return_mod_list_strings_language("en_us", "zr2_Report"),
	array (
		  'QUERY_EXPORT_TYPES' =>
		  array (
			'CSV' => 'カンマ区切り (*.csv)',
			'HTML' => 'HTML (*.html)',
			'SIMPLEHTML' => 'シンプル HTML (*.html)',
			'TABLE' => 'インラインテーブル',
		  ),
		  'COL_DELIMS' =>
		  array (
			',' => 'カンマ (,)',
			';' => 'セミコロン (;)',
			'tab' => 'Tab (\t)',
			'.' => 'ドット (.)',
		  ),
		  'ROW_DELIMS' =>
		  array (
			'newline' => '改行 (\n)',
		  ),
	)
);

?>