<?php

namespace Sicaboy\LaravelHttpProxy;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class HttpProxy {

    private $protocol;
    private $host;
    private $port;
    private $options;
    private $cacheEnabled;

    public function __construct($protocol, $host, $port, $options)
    {
        $this->protocol = $protocol;
        $this->host = $host;
        $this->port = $port;
        $this->options = $options;
        $this->cacheEnabled = array_get($this->options, 'cache.enabled', false);
    }

    private function generateUrl($endpoint) {
        if(strpos($endpoint, '/') !== 0) {
            $endpoint .= '/' . $endpoint;
        }
        return $this->protocol . '://' . $this->host . ':' . $this->port . $endpoint;
    }

    public function getProxy() {
        $proxy = null;
        if( $this->cacheEnabled ) {
            $proxy = Cache::get(array_get($this->options, 'cache.key'));
        }
        if( !$proxy ) {
            return $this->refreshProxy();
        }
        return $proxy;
    }

    protected function refreshProxy() {
        $endpoint = '/get/';
        $newProxy = file_get_contents($this->generateUrl($endpoint));
        if( $this->cacheEnabled ) {
            $expiresAt = Carbon::now()->addSeconds(array_get($this->options, 'cache.ttl'));
            Cache::put(array_get($this->options, 'cache.key'), $newProxy, $expiresAt);
        }
        return $newProxy;
    }

}
