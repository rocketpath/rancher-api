
<?php

namespace Rocketpath\RancherApi\Exception;

/**
 * InvalidAuthenticationInformationException is thrown when the API credentials ("access key" and "secret key") are invalids.
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class InvalidAuthenticationInformationException extends BadResponseException implements RancherApiException
{
}
