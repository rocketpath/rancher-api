<?php

namespace Rocketpath\RancherApi\Exception;

/**
 * BadResponseException is thrown when an HTTP error occurs.
 *
 * @author Morgan Auchede <morgan.auchede@gmail.com>
 */
class BadResponseException extends \RuntimeException implements RancherApiException
{
}
