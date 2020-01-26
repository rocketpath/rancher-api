<?php

namespace Rocketpath\RancherApi\Exception;

/**
 * ColumnNotFoundException is thrown when a column does not exist.
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class ColumnNotFoundException extends \RuntimeException implements RancherApiException
{
}
