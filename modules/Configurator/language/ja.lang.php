<?php
$mod_strings['LBL_MANAGE_ZUCKERREPORTS2CONFIG'] = 'ZuckerReports 設定';
$mod_strings['LBL_ZUCKERREPORTS2CONFIG'] = 'パラメータ設定';
$mod_strings['LBL_ZUCKERREPORTS2CONFIG_DESC'] = 'ZuckerReports を管理できます。';
$mod_strings['LBL_ZUCKERREPORTS2CONFIG_TITLE'] = 'ZuckerReports';
$mod_strings['LBL_ZUCKERREPORTS2_INDEXINCLUDE'] = 'ZuckerReportsスタートページ';
$mod_strings['LBL_ZUCKERREPORTS2_INDEXINCLUDE_HELP'] = 'Select which View is shown when entering the ZuckerReports module';
$mod_strings['LBL_ZUCKERREPORTS2_SCRIPTENABLED'] = '有効なPHPスクリプト';
$mod_strings['LBL_ZUCKERREPORTS2_SCRIPTENABLED_HELP'] = 'set this to yes/no, if you want to enable/disable php scripting for report parameters';
$mod_strings['LBL_ZUCKERREPORTS2_DEBUGENABLED'] = 'デバッグモード有効';
$mod_strings['LBL_ZUCKERREPORTS2_DEBUGENABLED_HELP'] = 'set this to yes/no, if you want to enable/disable debug output when running a report';
$mod_strings['LBL_ZUCKERREPORTS2_CHARSET'] = '出力文字コード';
$mod_strings['LBL_ZUCKERREPORTS2_CHARSET_HELP'] = 'enter your encoding here (f.e. "UTF-8"), if different from sugar default. see <a target="_blank" href="http://www.php.net/htmlentities">here</a> for supported encodings';
$mod_strings['LBL_ZUCKERREPORTS2_DEPLOYMENT'] = 'Deployment Mode (JDK)';
$mod_strings['LBL_ZUCKERREPORTS2_DEPLOYMENT_HELP'] = 'If you have a JDK installed locally, choose "Local JDK". Otherwise you will have to run a ZuckerReports On-Demand Server.';
$mod_strings['LBL_ZUCKERREPORTS2_ONDEMAND'] = 'ZuckerReports オンデマンド設定';
$mod_strings['LBL_ZUCKERREPORTS2_ONDEMANDSERVICE'] = 'オンデマンドサービスUrl';
$mod_strings['LBL_ZUCKERREPORTS2_ONDEMANDSERVICE_HELP'] = 'The Url of your ZuckerReports On-Demand Server instance (end with "/")';
$mod_strings['LBL_ZUCKERREPORTS2_ONDEMANDAPPSECRET'] = ' App Secret';
$mod_strings['LBL_ZUCKERREPORTS2_ONDEMANDAPPSECRET_HELP'] = 'The App Secret of your ZuckerReports On-Demand Server instance';
$mod_strings['LBL_ZUCKERREPORTS2_ONDEMANDSUGARSERVICE'] = 'ZuckerReports Webservice Url';
$mod_strings['LBL_ZUCKERREPORTS2_ONDEMANDSUGARSERVICE_HELP'] = 'The Url of your ZuckerReports Webservice as seen from your ZuckerReports On-Demand Server instance (if empty, it will point to "&lt;your sugar instance url&gt;/custom/ZuckerReports2/service/v4/rest.php"';
$mod_strings['LBL_ZUCKERREPORTS2_ONDEMANDSUGARUSER'] = 'Sugarユーザ';
$mod_strings['LBL_ZUCKERREPORTS2_ONDEMANDSUGARUSER_HELP'] = 'This user will be used by ZuckerReports On-Demand to access your ZuckerReports Webservice';
$mod_strings['LBL_ZUCKERREPORTS2_LOCAL'] = 'ローカルJDK設定';
$mod_strings['LBL_ZUCKERREPORTS2_LOCALJDKPATH'] = 'ローカルJDKパス';
$mod_strings['LBL_ZUCKERREPORTS2_LOCALJDKPATH_HELP'] = 'Enter the path to your java executable here, if autodetection doesn\'t work. <br/><em>If you change something here, it is important to include the "%ARGS%" placeholder and the "2>&1" clause at the end</em><ul><li>Windows Environment Default: "javaw %ARGS% 2>&1"</li><li>For Java Web Start installations: "javaws %ARGS% 2>&1"</li><li>Unix Environment Default: "java -Djava.awt.headless=true %ARGS% 2>&1"</li></ul>';
$mod_strings['LBL_ZUCKERREPORTS2_TESTJAVA'] = 'テスト Java';
$mod_strings['LBL_ZUCKERREPORTS2_TESTJAVA_HELP'] = 'This button runs Java with your current settings. It should output the current version information for your Java installation.<br/><em>In case there is nothing returned, check your "Local JDK Path" and/or try to switch the "PHP Exec Mode" settings</em>';
$mod_strings['LBL_ZUCKERREPORTS2_LOCALJDK_EXECMODE'] = 'PHP実行モード';
$mod_strings['LBL_ZUCKERREPORTS2_LOCALJDK_EXECMODE_HELP'] = 'There are several possibilities to run an external command (as Java) in PHP. The default option is "exec", but as behaviour is inconsistent between PHP and OS versions, it may be worth a try to swicht to "shell_exec" - especially if ZuckerReports doesn\'t show detailed error messages on Report Exception or Report compilation.';
$mod_strings['LBL_ZUCKERREPORTS2_JDBCURLEXTENSION'] = 'JDBC URL Extension';
$mod_strings['LBL_ZUCKERREPORTS2_JDBCURLEXTENSION_HELP'] = 'if you get the error "Value \'0000-00-00\' can not be represented as java.sql.Date", then enter "?zeroDateTimeBehavior=convertToNull" here and it may work';

?>
