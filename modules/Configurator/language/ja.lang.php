<?php
$mod_strings['LBL_MANAGE_Zucker Report2CONFIG'] = 'Zucker Report 設定';
$mod_strings['LBL_Zucker Report2CONFIG'] = 'パラメータ設定';
$mod_strings['LBL_Zucker Report2CONFIG_DESC'] = 'Zucker Report 設定';
$mod_strings['LBL_Zucker Report2CONFIG_TITLE'] = 'Zucker Report';
$mod_strings['LBL_Zucker Report2_INDEXINCLUDE'] = 'Zucker Report スタートページ';
$mod_strings['LBL_Zucker Report2_INDEXINCLUDE_HELP'] = 'Select which View is shown when entering the Zucker Report module';
$mod_strings['LBL_Zucker Report2_SCRIPTENABLED'] = 'PHP Script 有効';
$mod_strings['LBL_Zucker Report2_SCRIPTENABLED_HELP'] = 'set this to yes/no, if you want to enable/disable php scripting for report parameters';
$mod_strings['LBL_Zucker Report2_DEBUGENABLED'] = 'Debug Mode 有効';
$mod_strings['LBL_Zucker Report2_DEBUGENABLED_HELP'] = 'set this to yes/no, if you want to enable/disable debug output when running a report';
$mod_strings['LBL_Zucker Report2_CHARSET'] = 'Output Charset';
$mod_strings['LBL_Zucker Report2_CHARSET_HELP'] = 'enter your encoding here (f.e. "UTF-8"), if different from sugar default. see <a target="_blank" href="http://www.php.net/htmlentities">here</a> for supported encodings';
$mod_strings['LBL_Zucker Report2_DEPLOYMENT'] = 'Deployment Mode (JDK)';
$mod_strings['LBL_Zucker Report2_DEPLOYMENT_HELP'] = 'If you have a JDK installed locally, choose "Local JDK". Otherwise you will have to run a Zucker Report On-Demand Server.';
$mod_strings['LBL_Zucker Report2_ONDEMAND'] = 'Zucker Report オンデマンド設定';
$mod_strings['LBL_Zucker Report2_ONDEMANDSERVICE'] = 'オンデマンドサービス Url';
$mod_strings['LBL_Zucker Report2_ONDEMANDSERVICE_HELP'] = 'The Url of your Zucker Report On-Demand Server instance (end with "/")';
$mod_strings['LBL_Zucker Report2_ONDEMANDAPPSECRET'] = 'On-Demand App Secret';
$mod_strings['LBL_Zucker Report2_ONDEMANDAPPSECRET_HELP'] = 'The App Secret of your Zucker Report On-Demand Server instance';
$mod_strings['LBL_Zucker Report2_ONDEMANDSUGARSERVICE'] = 'Zucker Report Webservice Url';
$mod_strings['LBL_Zucker Report2_ONDEMANDSUGARSERVICE_HELP'] = 'The Url of your Zucker Report Webservice as seen from your Zucker Report On-Demand Server instance (if empty, it will point to "&lt;your sugar instance url&gt;/custom/Zucker Report2/service/v4/rest.php"';
$mod_strings['LBL_Zucker Report2_ONDEMANDSUGARUSER'] = 'Sugar ユーザ';
$mod_strings['LBL_Zucker Report2_ONDEMANDSUGARUSER_HELP'] = 'This user will be used by Zucker Report On-Demand to access your Zucker Report Webservice';
$mod_strings['LBL_Zucker Report2_LOCAL'] = 'ローカル JDK 設定';
$mod_strings['LBL_Zucker Report2_LOCALJDKPATH'] = 'ローカル JDK パス';
$mod_strings['LBL_Zucker Report2_LOCALJDKPATH_HELP'] = 'Enter the path to your java executable here, if autodetection doesn\'t work. <br/><em>If you change something here, it is important to include the "%ARGS%" placeholder and the "2>&1" clause at the end</em><ul><li>Windows Environment Default: "javaw %ARGS% 2>&1"</li><li>For Java Web Start installations: "javaws %ARGS% 2>&1"</li><li>Unix Environment Default: "java -Djava.awt.headless=true %ARGS% 2>&1"</li></ul>';
$mod_strings['LBL_Zucker Report2_TESTJAVA'] = 'テスト Java';
$mod_strings['LBL_Zucker Report2_TESTJAVA_HELP'] = 'This button runs Java with your current settings. It should output the current version information for your Java installation.<br/><em>In case there is nothing returned, check your "Local JDK Path" and/or try to switch the "PHP Exec Mode" settings</em>';
$mod_strings['LBL_Zucker Report2_LOCALJDK_EXECMODE'] = 'PHP 実行モード';
$mod_strings['LBL_Zucker Report2_LOCALJDK_EXECMODE_HELP'] = 'There are several possibilities to run an external command (as Java) in PHP. The default option is "exec", but as behaviour is inconsistent between PHP and OS versions, it may be worth a try to swicht to "shell_exec" - especially if Zucker Report doesn\'t show detailed error messages on Report Exception or Report compilation.';
$mod_strings['LBL_Zucker Report2_JDBCURLEXTENSION'] = 'JDBC URL Extension';
$mod_strings['LBL_Zucker Report2_JDBCURLEXTENSION_HELP'] = 'if you get the error "Value \'0000-00-00\' can not be represented as java.sql.Date", then enter "?zeroDateTimeBehavior=convertToNull" here and it may work';

?>
