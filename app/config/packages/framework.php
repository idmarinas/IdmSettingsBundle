<?php
/**
 * Copyright 2024-2025 (C) IDMarinas - All Rights Reserved
 *
 * Last modified by "IDMarinas" on 02/01/2025, 21:58
 *
 * @project IDMarinas Settings Bundle
 * @see https://github.com/idmarinas/settings-bundle
 *
 * @file framework.php
 * @date 02/01/2025
 * @time 20:33
 *
 * @author Iván Diaz Marinas (IDMarinas)
 * @license BSD 3-Clause License
 *
 * @since 1.0.0
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $container) {
	$container->extension('framework', [
		'secret'                => 'test',
		'test'                  => true,
		'http_method_override'  => false,
		'handle_all_throwables' => true,
		'php_errors'            => [
			'log' => true,
		],
		'form'                  => false,
	]);
};
