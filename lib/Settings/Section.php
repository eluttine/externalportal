<?php

declare(strict_types=1);

namespace OCA\ExternalPortal\Settings;

use OCP\IL10N;
use OCP\IURLGenerator;
use OCP\Settings\IIconSection;

/** @psalm-suppress UnusedClass */
class Section implements IIconSection {
	private IL10N $l;
	private IURLGenerator $url;

	public function __construct(IURLGenerator $url, IL10N $l) {
		$this->url = $url;
		$this->l = $l;
	}

	public function getIcon(): string {
		return $this->url->imagePath('externalportal', 'externalportal-dark.svg');
	}

	public function getID(): string {
		return 'externalportal';
	}

	public function getName(): string {
		return $this->l->t('External portal');
	}

	public function getPriority(): int {
		return 56; // externalsites is 55
	}
}
