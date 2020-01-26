<?php

namespace Rocketpath\RancherApi\Collection;

use JMS\Serializer\Annotation\Type;
use Rocketpath\RancherApi\Exception\ResourceNotFoundException;
use Rocketpath\RancherApi\Resource\Container;

/**
 * ContainerCollection represents a Rancher collection typed as "container".
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class ContainerCollection extends AbstractCollection
{
    /**
     * @var Container[]
     *
     * @Type("array<Rocketpath\RancherApi\Resource\Container>")
     */
    private $data;

    /**
     * Add a new container.
     *
     * @param Container $container
     * @param bool      $startOnCreate
     *
     * @return $this
     */
    public function add(Container $container, $startOnCreate = true)
    {
        $this->client->post($this->getUri(), $container, array('startOnCreate' => $startOnCreate));

        return $this->reload();
    }

    /**
     * {@inheritdoc}
     *
     * @return Container[]
     */
    public function all()
    {
        return $this->data;
    }

    /**
     * {@inheritdoc}
     *
     * @return Container
     */
    public function get($id)
    {
        foreach ($this->data as $container) {
            if ($container->getId() === $id) {
                return $container;
            }
        }

        throw new ResourceNotFoundException(sprintf('Container "%s" not found.', $id));
    }
}
