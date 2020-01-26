<?php

namespace Rocketpath\RancherApi\Client;

/**
 * Client interface for sending requests to the Rancher API.
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
interface ClientInterface
{
    /**
     * Sends a GET request.
     *
     * @param string $uri
     * @param string $class
     *
     * @return object A $class instance
     */
    public function get($uri);

    /**
     * Sends a POST request.
     *
     * @param string       $uri
     * @param array|object $data
     * @param array        $options
     */
    public function post($uri, $data = null, array $options = array());
}
