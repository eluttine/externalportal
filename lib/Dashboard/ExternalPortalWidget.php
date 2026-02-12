<?php

declare(strict_types=1);

namespace OCA\ExternalPortal\Dashboard;

use OCA\ExternalPortal\AppInfo\Application;
use OCP\Dashboard\IWidget;
use OCP\IAppConfig;

class ExternalPortalWidget implements IWidget {
	private IAppConfig $appConfig;

	/** @psalm-suppress PossiblyUnusedMethod */
	public function __construct(IAppConfig $appConfig) {
		$this->appConfig = $appConfig;
	}

	/**
	 * @return string Unique id that identifies the widget, e.g. the app id
	 */
	public function getId(): string {
		return 'externalportal';
	}

	/**
	 * @return string User facing title of the widget
	 */
	public function getTitle(): string {
		$widgetTitle = $this->appConfig->getValueString(
			Application::APP_ID,
			'widgetTitle',
			'External portal',
		);
		return $widgetTitle ?: 'External portal';
	}

	/**
	 * @return int Initial order for widget sorting
	 *             in the range of 10-100, 0-9 are reserved for shipped apps
	 */
	public function getOrder(): int {
		return 0;
	}

	/**
	 * @return string css class that displays an icon next to the widget title
	 */
	public function getIconClass(): string {
		return 'icon-externalportal';
	}

	/**
	 * @return string|null The absolute url to the apps own view
	 */
	public function getUrl(): ?string {
		return null;
	}

	/**
	 * Execute widget bootstrap code like loading scripts and providing initial state
	 */
	public function load(): void {
		\OCP\Util::addScript('externalportal', 'externalportal-dashboard');
		\OCP\Util::addStyle('externalportal', 'externalportal-dashboard');
	}
}
