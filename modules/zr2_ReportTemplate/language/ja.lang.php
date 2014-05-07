<?php

$mod_strings = array_merge(return_module_language("en_us", "zr2_Report"),
	array(
	'LBL_REPORT_TEMPLATE_NEW' => '新しいJasperReports テンプレート',
	'LBL_REPORT' => 'JasperReports',
	'LBL_REPORT_NAME' => 'テンプレート名',
	'LBL_REPORT_FILENAME' => 'テンプレートファイル (*.jrxml)',
	'LBL_REPORT_DESCRIPTION' => '概要',
	'LBL_REPORT_EXPORT_AS' => '許容されている型',
	'LBL_REPORT_ERROR_MESSAGE' => 'エラーメッセージ',
	'LBL_SUBREPORTS' => 'サブレポート',
	'LBL_SUBREPORT' => 'サブレポートをアップロード',
	'LBL_SUBREPORT_HELP' => 'Subreports are saved in own files. For JasperReports to be able to access those files, please upload them here. If you have uploaded a subreport file before, you don\'t have to upload it againg.',
	'LBL_RESOURCES' => 'その他のリソース',
	'LBL_RESOURCE' => 'アップロードリソース',
	'LBL_RESOURCE_HELP' => 'Report pictures and scriptlets are saved in own files. For JasperReports to be able to access those files, please upload them here. If you have uploaded a resource file before, you don\'t have to upload it againg.',

	'ERR_TEMPLATE_INVALID_FILE' => 'Only report design files (*.jrxml) are supported',
	)
);

$mod_list_strings = array (
		  'REPORT_EXPORT_TYPES' =>
		  array (
			'PDF' => 'Adobe PDF (*.pdf)',
			'XLS' => 'Excel (*.xls)',
			'HTML' => 'HTML (*.html)',
			'XML' => 'XML (extern images, *.xml)',
			'XML_EMBED' => 'XML (embedded images, *.xml)',
		  ),
 	);



?>