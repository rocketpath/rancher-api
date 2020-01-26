<?php

namespace Rocketpath\RancherApi\Client;

/**
 * Trait ClientAwareTrait is used by classes that implements ClientAwareInterface.
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
trait ClientAwareTrait
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * Sets the Client.
     *
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }
}
