# Rancher API

Rancher API is a set of PHP classes for interacting with [Rancher](http://rancher.com/rancher/).

## Installation

Rancher API can be installed via [composer](https://getcomposer.org/):

```bash
composer require Rocketpath/rancher-api
```

__Note__: To use the JMS annotation, you may have to configure your `autoload`. You can find an example in [bootstrap.php.dist](https://github.com/Rocketpath/rancher-api/blob/master/bootstrap.php.dist).

## Usage

```php
use Rocketpath\RancherApi\Client\Client;
use Rocketpath\RancherApi\Resource\Project;

$client = new Client('username', 'secret_key');
$project = $client->get('endpoint', Project::class);
$containers = $project->getContainers();
```

`endpoint` and the API Keys (`username` and `secret_key`) can be found in Rancher settings (`[Rancher URL]/settings/api`).

__Note__: API keys are only available for ***one*** project/environment.

## Links

* [Guzzle documentation](https://guzzle.readthedocs.org/)
* [JMS Serializer documentation](http://jmsyst.com/libs/serializer)
* [Specification for Rancher REST API implementation](https://github.com/rancher/api-spec)
