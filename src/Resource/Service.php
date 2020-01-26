<?php

namespace Rocketpath\RancherApi\Resource;

use JMS\Serializer\Annotation\Type;

/**
 * Service represents a Rancher resource typed as "service".
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class Service extends AbstractResource
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $name;

    /**
     * Gets the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'service';
    }
}
