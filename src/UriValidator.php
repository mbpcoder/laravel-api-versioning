<?php

namespace MbpCoder\ApiVersioning;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Routing\Matching\UriValidator as LaravelUriValidator;

class UriValidator extends LaravelUriValidator
{
    private $apiVersions;
    private $apiPrefix;
    private $apiEnable;

    public function __construct()
    {
        $this->apiVersions = config('apiVersioning.api_versions');
        $this->apiPrefix = config('apiVersioning.api_prefix');
        $this->apiEnable = config('apiVersioning.enable');
    }

    /**
     * @param Route $route
     * @param Request $request
     * @return bool|false|int
     * @throws \Throwable
     */
    public function matches(Route $route, Request $request)
    {
        $result = false;


        $path = rtrim($request->getPathInfo(), '/') ?: '/';

        /**
         * there is not more than one api version
         * or the apiVersioning is disabled
         * or the route is not for api
         * strncmp work like Illuminate\Support\Str::startsWith in laravel
         */
        if (count($this->apiVersions) < 1 || !$this->apiEnable || strncmp($path, $this->apiPrefix, strlen($this->apiPrefix)) !== 0) {
            return preg_match($route->getCompiled()->getRegex(), rawurldecode($path));
        }

        /**
         * basically it loop through API versions and change the path to support API fallback
         */
        for ($index = 0; $index < count($this->apiVersions); $index++) {
            $result = preg_match($route->getCompiled()->getRegex(), rawurldecode($path));

            /**
             * exit if you find a proportionate route
             */
            if ($result) return $result;

            if (isset($this->apiVersions[$index + 1])) {
                $path = str_replace($this->apiVersions[$index], $this->apiVersions[$index + 1], $path);
            }
        }
        return $result;
    }
}
