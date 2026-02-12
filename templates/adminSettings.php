<?php

declare(strict_types=1);

use OCP\Util;

$appId = OCA\ExternalPortal\AppInfo\Application::APP_ID;
Util::addScript($appId, $appId . '-admin');
Util::addStyle($appId, $appId . '-admin');
?>

<div id="externalportal_prefs"></div>
