<?php declare(strict_types = 1);

namespace Mangoweb\Tester\DatabaseCreator\Presets;

use Mangoweb\Tester\Infrastructure\InfrastructureConfigurator;

class NextrasMysqlStackPreset
{
	public static function install(InfrastructureConfigurator $configurator)
	{
		$configurator->addConfig(__DIR__ . '/nextras-mysql.neon');
	}


	public static function installTransactional(InfrastructureConfigurator $configurator)
	{
		$configurator->addConfig(__DIR__ . '/nextras-transactional.neon');
	}
}
