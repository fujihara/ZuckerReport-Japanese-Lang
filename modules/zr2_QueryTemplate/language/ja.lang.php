<?php

$mod_strings = array_merge(return_module_language("en_us", "zr2_Report"),
	array(
	  'LBL_MODULE_NAME' => '�N�G�� �e���v���[�g',
	  'LBL_MODULE_TITLE' => '�N�G�� �e���v���[�g',
	  'LBL_QUERY_SQL' => 'SQL',
	  'LBL_QUERY_SQL_HELP' => 'Please enter the SQL query for this report. To include parameter selection, enter a "$" followed by the parameter name, and the value will be inserted at this position on report execution.<br/><br/>The following placeholders are supported as well: <br/><b>$SUGAR_USER_ID</b> - contains the ID of the currently logged on user<br/><b>$SUGAR_USER_NAME</b> - contains the name of the currently logged on user<br/><b>$SUGAR_SESSION_ID</b> - contains the ID of the current session',
	  
	'LBL_QUERY_ONDEMAND_COLUMN_DELIMITER' => '�J�����Z�p���[�^',
	'LBL_QUERY_ONDEMAND_ROW_DELIMITER' => '�s�Z�p���[�^',
	'LBL_QUERY_ONDEMAND_INCLUDE_HEADER' => '�w�b�_���܂�',
	)
);

$mod_list_strings = array_merge(return_mod_list_strings_language("en_us", "zr2_Report"),
	array (
		  'QUERY_EXPORT_TYPES' =>
		  array (
			'CSV' => '�J���}��؂� (*.csv)',
			'HTML' => 'HTML (*.html)',
			'SIMPLEHTML' => '�V���v�� HTML (*.html)',
			'TABLE' => '�C�����C���e�[�u��',
		  ),
		  'COL_DELIMS' =>
		  array (
			',' => '�J���} (,)',
			';' => '�Z�~�R���� (;)',
			'tab' => 'Tab (\t)',
			'.' => '�h�b�g (.)',
		  ),
		  'ROW_DELIMS' =>
		  array (
			'newline' => '���s (\n)',
		  ),
	)
);

?>