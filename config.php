<?php
/**
 * Configuration Should be Written In a single file
 * @global array $GLOBALS['fbconfig']
 * @name $fbconfig
 * @author Mahmud Ahsan
 */
$fbconfig['appid' ] = "";
$fbconfig['api']    = "";
$fbconfig['secret'] = "";

$fbconfig['baseUrl']    =   ""; //"http://thinkdiff.net/demo/newfbconnect1/iframe/isimple";
$fbconfig['appBaseUrl'] =   ""; //"http://apps.facebook.com/thinkdiffdemotwo/";
$fbconfig['pageUrl']    =   ""; //"http://www.facebook.com/thinkdiff.net";
$fbconfig['appPageUrl'] =   "{$fbconfig['pageUrl']}?sk=app_{$fbconfig['appid' ]}";

$tutorialLink           =   "<a href='http://thinkdiff.net/facebook/isimple-graph-api-iframe-base-facebook-page-application-development' target='_blank'>Tutorial: iSimple - Graph API & Iframe base Facebook Page App Development</a>";

?>
