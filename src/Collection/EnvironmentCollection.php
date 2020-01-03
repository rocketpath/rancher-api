<?php

namespace Rocketpath\RancherApi\Collection;

use JMS\Serializer\Annotation\Type;
use Rocketpath\RancherApi\Resource\Environment;
use Rocketpath\RancherApi\Exception\ResourceNotFoundException;

/**
 * Class EnvironmentCollection
 *
 * Represents a Rancher collection typed as "environment".
 *
 * @package Rocketpath\RancherApi\Collection
 */
class EnvironmentCollection extends AbstractCollection
{
    /**
     * @var Environment[]
     *
     * @Type("array<Rocketpath\RancherApi\Resource\Environment>")
     */
    private $data;

    /**
     * Adds a new environment (aka stack)
     *
     * @param Environment $environment
     * @param bool $startOnCreate
     *
     * @return $this
     */
    public function add(Environment $environment, $startOnCreate = true)
    {
        $this->client->post($this->getUri(), $environment, array('startOnCreate' => $startOnCreate));

        return $this->reload();
    }

    /**
     * {@inheritdoc}
     *
     * @return Environment[]
     */
    public function all()
    {
        return $this->data;
    }

    /**
     * {@inheritdoc}
     *
     * @return Environment
     */
    public function get($id)
    {
        foreach ($this->data as $host) {
            if ($host->getId() === $id) {
                return $host;
            }
        }

        throw new ResourceNotFoundException(sprintf('Environment "%s" not found.', $id));
    }
}

