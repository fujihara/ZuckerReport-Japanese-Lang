<?php

$mod_strings = array_merge(return_module_language("ja", "zr2_Report"),
	array(
	  'LBL_MODULE_NAME' => 'クエリテンプレート',
	  'LBL_MODULE_TITLE' => 'クエリテンプレート',
	  'LBL_QUERY_SQL' => 'SQL',
	  'LBL_QUERY_SQL_HELP' => 'レポートを抽出するクエリを入力してください。 クエリにパラメータを使用する場合、 "$"＋パラメータ名を入力します。<br/><b>$SUGAR_USER_ID</b> - ログインユーザID<br/><b>$SUGAR_USER_NAME</b> - ログインユーザ名<br/><b>$SUGAR_SESSION_ID</b> - セッションID',
	  
	'LBL_QUERY_ONDEMAND_COLUMN_DELIMITER' => 'カラムセパレータ',
	'LBL_QUERY_ONDEMAND_ROW_DELIMITER' => '行セパレータ',
	'LBL_QUERY_ONDEMAND_INCLUDE_HEADER' => 'ヘッダ行を含む',
	)
);

$mod_list_strings = array_merge(return_mod_list_strings_language("en_us", "zr2_Report"),
	array (
		  'QUERY_EXPORT_TYPES' =>
		  array (
			'CSV' => 'カンマ区切り(*.csv)',
			'HTML' => 'HTML (*.html)',
			'SIMPLEHTML' => 'シンプルHTML (*.html)',
			'TABLE' => 'インラインテーブル',
		  ),
		  'COL_DELIMS' =>
		  array (
			',' => 'カンマ (,)',
			';' => 'セミコロン (;)',
			'tab' => 'タブ (\t)',
			'.' => 'ドット (.)',
		  ),
		  'ROW_DELIMS' =>
		  array (
			'newline' => '改行 (\n)',
		  ),
	)
);

?>