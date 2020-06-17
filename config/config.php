<?php

return [
    /**
     * Enable or disable the package
     */
    'enable' => true,


    /**
     * this prefix help that the package does not process non-api routes
     */
    'api_prefix' => '/api/',


    /**
     * put your API versions in incremental order
     * example: ['v2.1', 'v2', 'v1'] this way version v2 is a fallback for v2.1
     */
    'api_versions' => []
];
