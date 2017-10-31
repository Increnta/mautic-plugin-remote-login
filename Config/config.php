<?php
return [
    'name'        => 'Remote login',
    'description' => 'Enables remote login.',
    'version'     => '1.0',
    'author'      => 'Fernando Rubio',

    'routes' => [
	    'public' => [
         'plugin_remotelogin_login' => [
             'path'       => '/remotelogin/{email}',
             'controller' => 'RemoteLoginBundle:Default:login',
	         'method'     => 'POST'
         ]
     ],
    ]
];
