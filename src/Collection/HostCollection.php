
<?php

namespace Rocketpath\RancherApi\Collection;

use JMS\Serializer\Annotation\Type;
use Rocketpath\RancherApi\Resource\Host;
use Rancher\Exception\ResourceNotFoundException;

/**
 * HostCollection represents a Rancher collection typed as "collection".
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class HostCollection extends AbstractCollection
{
    /**
     * @var Host[]
     *
     * @Type("array<Rocketpath\RancherApi\Resource\Host>")
     */
    private $data;

    /**
     * {@inheritdoc}
     *
     * @return Host[]
     */
    public function all()
    {
        return $this->data;
    }

    /**
     * {@inheritdoc}
     *
     * @return Host
     */
    public function get($id)
    {
        foreach ($this->data as $host) {
            if ($host->getId() === $id) {
                return $host;
            }
        }

        throw new ResourceNotFoundException(sprintf('Host "%s" not found.', $id));
    }
}
