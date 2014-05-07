<?php

$mod_strings = array_merge (return_module_language("en_us", "zr2_Report"),
	array (
	//module
	'LBL_MODULE_NAME' => 'レポートパラメータ',
	'LBL_MODULE_TITLE' => 'レポートパラメータ',

	'LBL_PARAM_NEW' => '新しいレポートパラメータ',
	'LBL_PARAM_FRIENDLYNAME' => 'パラメータプロンプト',
	'LBL_PARAM_DEFAULTNAME' => '初期パラメータ名',
	'LBL_PARAM_DEFAULTVALUE' => '初期値',
	'LBL_PARAM_DESCRIPTION' => '概要',
	'LBL_PARAM_RANGE' => '選択',
	'LBL_PARAM_RANGE_LIST' => 'ユーザ定義 リスト',
	'LBL_PARAM_RANGE_LIST_HELP' => 'Please enter the values for the list, separater by a colon (",").',
	'LBL_PARAM_RANGE_DROPDOWN' => 'ドロップダウンリスト',
	'LBL_PARAM_RANGE_INPUT' => '直接入力',
	'LBL_PARAM_RANGE_SQL' => 'ユーザ定義クエリ',
	'LBL_PARAM_RANGE_SQL_HELP' => 'Please enter the SQL query for building the parameter selection list when executing the report. The value of the first column of the resultset will be handed to the report, the value of the second column will be shown to the user for selection.',
	'LBL_PARAM_RANGE_SQL_TEST' => 'Test SQL-クエリ',
	'LBL_PARAM_RANGE_SCRIPT' => 'PHP Script',
	'LBL_PARAM_RANGE_SCRIPT_DISABLED' => 'PHP Scripting has been disabled. Please enable it in the ZuckerReports Administration section.',
	'LBL_PARAM_RANGE_SCRIPT_HELP' => 'Please enter any PHP code you want. Finish with a "return"-statement.',
	'LBL_PARAM_RANGE_OPTIONS' => 'パラメータ設定',
	'LBL_PARAM_PANEL_SQL' => 'SQLパラメータ',
	'LBL_PARAM_PANEL_LIST' => 'ユーザ定義リストパラメータ',
	'LBL_PARAM_PANEL_DROPDOWN' => 'ドロップダウンリストパラメータ',
	'LBL_PARAM_PANEL_SCRIPT' => 'PHP Scriptパラメータ',
	'LBL_PARAM_PANEL_SCRIPT_DISABLED' => 'PHP Scriptパラメータ',
	)
);
?>
