<?php

namespace Rocketpath\RancherApi\Client;

/**
 * Interface ClientAwareInterface is implemented by classes that depends on a Client.
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
interface ClientAwareInterface
{
    /**
     * Sets the Client.
     *
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client);
}
