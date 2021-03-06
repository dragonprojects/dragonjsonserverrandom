<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerRandom
 */

/**
 * @return array
 */
return [
    'dragonjsonserverrandom' => [
        'password' => [
            'length'  => 16,
            'charset' => 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789',
        ],
    ],
    'dragonjsonserver' => [
        'apiclasses' => [
            '\DragonJsonServerRandom\Api\Random' => 'Random',
        ],
    ],
	'service_manager' => [
		'invokables' => [
            '\DragonJsonServerRandom\Service\Random' => '\DragonJsonServerRandom\Service\Random',
		],
	],
];
