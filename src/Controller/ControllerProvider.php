<?php

declare(strict_types=1);

/**
 * @author Pavel Janda <me@paveljanda.com>
 * @copyright Copyright (c) 2020, Pavel Janda
 */

namespace Doctor\DI\PSR\Controller;

use DI\Container;
use Doctor\Rest\Controller\Controller;
use Doctor\Rest\Controller\ControllerProviderInterface;

final class ControllerProvider implements ControllerProviderInterface
{

	private Container $container;


	public function __construct(Container $container)
	{
		$this->container = $container;
	}


	public function getByClass(string $class): Controller
	{
		return $this->container->get($class);
	}
}
