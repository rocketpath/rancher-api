<?php

namespace Rocketpath\RancherApi\Collection;

use JMS\Serializer\Annotation\Type;
use Rocketpath\RancherApi\Client\ClientAwareTrait;
use Rocketpath\RancherApi\Exception\ColumnNotFoundException;
use Rocketpath\RancherApi\Exception\InvalidActionException;

/**
 * AbstractCollection is an abstract implementation of the CollectionInterface.
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
abstract class AbstractCollection implements CollectionInterface
{
    use ClientAwareTrait;

    /**
     * @var string[]
     *
     * @Type("array<string, string>")
     */
    protected $links = array();

    /**
     * @var string[]
     *
     * @Type("array<string,string>")
     */
    private $sortLinks = array();

    /**
     * {@inheritdoc}
     */
    public function getUri()
    {
        if (!isset($this->links['self'])) {
            throw new InvalidActionException('Impossible to retrieve the URI.');
        }

        return $this->links['self'];
    }

    /**
     * {@inheritdoc}
     */
    public function reload()
    {
        return $this->client->get($this->getUri(), static::class);
    }

    /**
     * {@inheritdoc}
     */
    public function sortBy($column)
    {
        if (!isset($this->sortLinks[$column])) {
            throw new ColumnNotFoundException(sprintf('Column "%s" not found.', $column));
        }

        return $this->client->get($this->sortLinks[$column], static::class);
    }
}
