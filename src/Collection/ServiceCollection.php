<?php

namespace Rocketpath\RancherApi\Collection;

use JMS\Serializer\Annotation\Type;
use Rocketpath\RancherApi\Resource\Service;
use Rancher\Exception\ResourceNotFoundException;

/**
 * ServiceCollection represents a Rancher collection typed as "service".
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class ServiceCollection extends AbstractCollection
{
    /**
     * @var Service[]
     *
     * @Type("array<Rocketpath\RancherApi\Resource\Service>")
     */
    private $data;

    /**
     * {@inheritdoc}
     *
     * @return Service[]
     */
    public function all()
    {
        return $this->data;
    }

    /**
     * {@inheritdoc}
     *
     * @return Service
     */
    public function get($id)
    {
        foreach ($this->data as $host) {
            if ($host->getId() === $id) {
                return $host;
            }
        }

        throw new ResourceNotFoundException(sprintf('Service "%s" not found.', $id));
    }
}
