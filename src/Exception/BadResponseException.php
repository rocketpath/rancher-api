<?php

namespace Rocketpath\RancherApi\Exception;

/**
 * BadResponseException is thrown when an HTTP error occurs.
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class BadResponseException extends \RuntimeException implements RancherApiException
{
}
