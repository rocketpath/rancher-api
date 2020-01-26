<?php

namespace Rocketpath\RancherApi\Resource;

use Rocketpath\RancherApi\Collection\ContainerCollection;
use Rocketpath\RancherApi\Collection\HostCollection;
use Rocketpath\RancherApi\Collection\ServiceCollection;
use Rocketpath\RancherApi\Collection\EnvironmentCollection;

/**
 * Project represents a Rancher resource typed as "project".
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class Project {
  /**
   * @var string
   *
   * @Type("string")
   */
  private $description;

  /**
   * @var string
   *
   * @Type("string")
   */
  private $name;

  /**
   * @var string
   *
   * @Type("string")
   */
  private $id;

  /**
   * @var string
   *
   * @Type("string")
   */
  private $status;

  /**
   * @var int
   *
   * @Type("int")
   */
  private $created;

  /**
   * @var array
   */
  private $links;

  public function __construct($client = NULL, $name = '', $id = '', $description = '', $created = '', $status = '', $links = array()) {
    $this->name = $name;
    $this->id = $id;
    $this->description = $description;
    $this->created = $created;
    $this->status = $status;
    $this->links = (array) $links;
    $this->client = $client;
  }

  /**
   * Gets the name.
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Gets the description.
   *
   * @return string
   */
  public function getDescription() {
    return $this->description;
  }

  /**
   * Gets the containers.
   *
   * @return ContainerCollection
   */
  public function getPods($options = array()) {
    return $this->client->get($this->links['pods'], $options);
  }

  /**
   * Gets the hosts.
   *
   * @return HostCollection
   */
  public function getWorkloads($options = array()) {
    return $this->client->get($this->links['workloads'], $options);
  }

  /**
   * Gets the hosts.
   *
   * @return HostCollection
   */
  public function getServices($options = array()) {
    return $this->client->get($this->links['services'], $options);
  }

  /**
   * Gets the hosts.
   *
   * @return HostCollection
   */
  public function getDeployments($options = array()) {
    return $this->client->get($this->links['deployments'], $options);
  }
}
