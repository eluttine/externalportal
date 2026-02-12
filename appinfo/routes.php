<?php

declare(strict_types=1);
return [
	'resources' => [],
	'routes' => [
		[
			'name' => 'config#setAdminConfig',
			'url' => '/admin-config',
			'verb' => 'PUT',
		],
		['name' => 'config#getConfig', 'url' => '/config', 'verb' => 'GET'],
	],
];
