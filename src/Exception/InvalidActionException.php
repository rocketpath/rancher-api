<?php

namespace Rocketpath\RancherApi\Exception;

/**
 * InvalidActionException is thrown when an action does not exist.
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class InvalidActionException extends \RuntimeException implements RancherApiException
{
}
