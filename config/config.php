<?php

return array(
	"servers" => array (
        # Contains a valid default config
	    "general" => array(
		    "clusterManager" => true,
		    "apiName" => "",
		    "fullApiKey" => "",
		    "readApiKey" => "",
		    "host" => "",
		    "port" => "10081"
	    )
    ),
    "settings" => array (
        'loglevel' => \Zend\Log\Logger::DEBUG        
    )
);