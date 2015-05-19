<?php

Config::inst()->update('SecureFileExtension', 'access_config', array(
	'Apache' => 'getApacheConfig',
	'IIS' => 'getIISConfig'
));