
<?php

namespace Rocketpath\RancherApi\Collection;

use Rocketpath\RancherApi\Client\ClientAwareInterface;
use Rocketpath\RancherApi\Exception\ColumnNotFoundException;
use Rocketpath\RancherApi\Exception\InvalidActionException;
use Rocketpath\RancherApi\Resource\ResourceInterface;
use Rancher\Exception\ResourceNotFoundException;

/**
 * Interface CollectionInterface is implemented by all Rancher API collection classes.
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
interface CollectionInterface extends ClientAwareInterface
{
    /**
     * Gets all resources.
     *
     * @return ResourceInterface[]
     */
    public function all();

    /**
     * Gets a specified resource.
     *
     * @param string $id
     *
     * @return ResourceInterface
     *
     * @throws ResourceNotFoundException if the resource does not exist.
     */
    public function get($id);

    /**
     * Gets the URI.
     *
     * @return string
     *
     * @throws InvalidActionException if the collection does not have URI.
     */
    public function getUri();

    /**
     * Reloads the information.
     *
     * @return $this
     *
     * @throws InvalidActionException if the collection does not have URI.
     */
    public function reload();

    /**
     * Sorts the resource by a column.
     *
     * @param string $column
     *
     * @return $this
     *
     * @throws ColumnNotFoundException if the column does not exist.
     */
    public function sortBy($column);
}
