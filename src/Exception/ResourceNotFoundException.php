<?php

namespace Rocketpath\RancherApi\Exception;

/**
 * ResourceNotFoundException is thrown when a resource does not exist.
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class ResourceNotFoundException extends \RuntimeException implements RancherApiException
{
}
