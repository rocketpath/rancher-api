<?php

namespace Rocketpath\RancherApi\Resource;

use JMS\Serializer\Annotation\Type;
use Rocketpath\RancherApi\Collection\ContainerCollection;
use Rocketpath\RancherApi\Collection\HostCollection;
use Rocketpath\RancherApi\Collection\ServiceCollection;
use Rocketpath\RancherApi\Collection\EnvironmentCollection;
use Rocketpath\RancherApi\Resource\Project;
use Rocketpath\RancherApi\Resource\Container;

/**
 * Project represents a Rancher resource typed as "project".
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class Rancher {

  /**
   * @var Client
   *
   * @Type("Client")
   */
  private $client;

  public function __construct($client) {
    $this->client = $client;
  }

  public function getAuthConfigs() {
    $links = $this->client->getLinks();
    return $this->client->get($links->authConfigs);
  }

  public function getCatalogs() {
    $links = $this->client->getLinks();
    return $this->client->get($links->catalogs);
  }

  public function getCloudCredentials() {
    $links = $this->client->getLinks();
    return $this->client->get($links->cloudCredentials);
  }

  public function getClusterAlertGroups() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusterAlertGroups);
  }

  public function getClusterAlertRules() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusterAlertRules);
  }

  public function getClusterAlerts() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusterAlerts);
  }

  public function getClusterCatalogs() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusterCatalogs);
  }

  public function getClusterLoggings() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusterLoggings);
  }

  public function getClusterMonitorGraphs() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusterMonitorGraphs);
  }

  public function getClusterRegistrationTokens() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusterRegistrationTokens);
  }

  public function getClusterRoleTemplateBindings() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusterRoleTemplateBindings);
  }

  public function getClusterScans() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusterScans);
  }

  public function getClusterTemplateRevisions() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusterTemplateRevisions);
  }

  public function getClusterTemplates() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusterTemplates);
  }

  public function getClusters() {
    $links = $this->client->getLinks();
    return $this->client->get($links->clusters);
  }

  public function getComposeConfigs() {
    $links = $this->client->getLinks();
    return $this->client->get($links->composeConfigs);
  }

  public function getDynamicSchemas() {
    $links = $this->client->getLinks();
    return $this->client->get($links->dynamicSchemas);
  }

  public function getEtcdBackups() {
    $links = $this->client->getLinks();
    return $this->client->get($links->etcdBackups);
  }

  public function getFeatures() {
    $links = $this->client->getLinks();
    return $this->client->get($links->features);
  }

  public function getGlobalDnsProviders() {
    $links = $this->client->getLinks();
    return $this->client->get($links->globalDnsProviders);
  }

  public function getGlobalDnses() {
    $links = $this->client->getLinks();
    return $this->client->get($links->globalDnses);
  }

  public function getGlobalRoleBindings() {
    $links = $this->client->getLinks();
    return $this->client->get($links->globalRoleBindings);
  }

  public function getGlobalRoles() {
    $links = $this->client->getLinks();
    return $this->client->get($links->globalRoles);
  }

  public function getGroupMembers() {
    $links = $this->client->getLinks();
    return $this->client->get($links->groupMembers);
  }

  public function getGroups() {
    $links = $this->client->getLinks();
    return $this->client->get($links->groups);
  }

  public function getKontainerDrivers() {
    $links = $this->client->getLinks();
    return $this->client->get($links->kontainerDrivers);
  }

  public function getLdapConfigs() {
    $links = $this->client->getLinks();
    return $this->client->get($links->ldapConfigs);
  }

  public function getListenConfigs() {
    $links = $this->client->getLinks();
    return $this->client->get($links->listenConfigs);
  }

  public function getManagementSecrets() {
    $links = $this->client->getLinks();
    return $this->client->get($links->managementSecrets);
  }

  public function getMonitorMetrics() {
    $links = $this->client->getLinks();
    return $this->client->get($links->monitorMetrics);
  }

  public function getMultiClusterAppRevisions() {
    $links = $this->client->getLinks();
    return $this->client->get($links->multiClusterAppRevisions);
  }

  public function getMultiClusterApps() {
    $links = $this->client->getLinks();
    return $this->client->get($links->multiClusterApps);
  }

  public function getNodeDrivers() {
    $links = $this->client->getLinks();
    return $this->client->get($links->nodeDrivers);
  }

  public function getNodePools() {
    $links = $this->client->getLinks();
    return $this->client->get($links->nodePools);
  }

  public function getNodeTemplates() {
    $links = $this->client->getLinks();
    return $this->client->get($links->nodeTemplates);
  }

  public function getNodes() {
    $links = $this->client->getLinks();
    return $this->client->get($links->nodes);
  }

  public function getNotifiers() {
    $links = $this->client->getLinks();
    return $this->client->get($links->notifiers);
  }

  public function getPodSecurityPolicyTemplateProjectBindings() {
    $links = $this->client->getLinks();
    return $this->client->get($links->podSecurityPolicyTemplateProjectBindings);
  }

  public function getPodSecurityPolicyTemplates() {
    $links = $this->client->getLinks();
    return $this->client->get($links->podSecurityPolicyTemplates);
  }

  public function getPreferences() {
    $links = $this->client->getLinks();
    return $this->client->get($links->preferences);
  }

  public function getPrincipals() {
    $links = $this->client->getLinks();
    return $this->client->get($links->principals);
  }

  public function getProjectAlertGroups() {
    $links = $this->client->getLinks();
    return $this->client->get($links->projectAlertGroups);
  }

  public function getProjectAlertRules() {
    $links = $this->client->getLinks();
    return $this->client->get($links->projectAlertRules);
  }

  public function getProjectAlerts() {
    $links = $this->client->getLinks();
    return $this->client->get($links->projectAlerts);
  }

  public function getProjectCatalogs() {
    $links = $this->client->getLinks();
    return $this->client->get($links->projectCatalogs);
  }

  public function getProjectLoggings() {
    $links = $this->client->getLinks();
    return $this->client->get($links->projectLoggings);
  }

  public function getProjectMonitorGraphs() {
    $links = $this->client->getLinks();
    return $this->client->get($links->projectMonitorGraphs);
  }

  public function getProjectNetworkPolicies() {
    $links = $this->client->getLinks();
    return $this->client->get($links->projectNetworkPolicies);
  }

  public function getProjectRoleTemplateBindings() {
    $links = $this->client->getLinks();
    return $this->client->get($links->projectRoleTemplateBindings);
  }

  public function getProjects($options = array()) {
    $links = $this->client->getLinks();
    $projects_data = $this->client->get($links->projects, $options);

    $projects = array();
    if (!empty($projects_data->data)) {
      foreach ($projects_data->data as $project) {
        $projects[] = new Project($this->client, $project->name, $project->id, $project->description, $project->createdTS, $project->state, $project->links);
      }
    }

    return $projects;
  }

  public function getRkeAddons() {
    $links = $this->client->getLinks();
    return $this->client->get($links->rkeAddons);
  }

  public function getRkeK8sServiceOptions() {
    $links = $this->client->getLinks();
    return $this->client->get($links->rkeK8sServiceOptions);
  }

  public function getRkeK8sSystemImages() {
    $links = $this->client->getLinks();
    return $this->client->get($links->rkeK8sSystemImages);
  }

  public function getRoleTemplates() {
    $links = $this->client->getLinks();
    return $this->client->get($links->roleTemplates);
  }

  public function getRoot() {
    $links = $this->client->getLinks();
    return $this->client->get($links->root);
  }

  public function getSelf() {
    $links = $this->client->getLinks();
    return $this->client->get($links->self);
  }

  public function getSettings() {
    $links = $this->client->getLinks();
    return $this->client->get($links->settings);
  }

  public function getSubscribe() {
    $links = $this->client->getLinks();
    return $this->client->get($links->subscribe);
  }

  public function getTemplateVersions() {
    $links = $this->client->getLinks();
    return $this->client->get($links->templateVersions);
  }

  public function getTemplates() {
    $links = $this->client->getLinks();
    return $this->client->get($links->templates);
  }

  public function getTokens() {
    $links = $this->client->getLinks();
    return $this->client->get($links->tokens);
  }

  public function getUsers() {
    $links = $this->client->getLinks();
    return $this->client->get($links->users);
  }
}
