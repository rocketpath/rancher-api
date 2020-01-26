<?php

namespace Rocketpath\RancherApi\Client;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\ClientInterface as HttpClientInterface;
use GuzzleHttp\Exception\ClientException;
use Rocketpath\RancherApi\Exception\BadResponseException;
use Rocketpath\RancherApi\Exception\InvalidAuthenticationInformationException;
use Rocketpath\RancherApi\Exception\ResourceNotFoundException;
use Rocketpath\RancherApi\Resource\Rancher;
use Psr\Http\Message\ResponseInterface;

/**
 * Client for sending requests to the Rancher API.
 *
 * @author Dimitris Pagkratis <dimitris.pagkratis@rocket-path.com>
 */
class Client implements ClientInterface {
  /**
   * @var string
   */
  private $username;

  /**
   * @var HttpClientInterface
   */
  private $httpClient;

  /**
   * @var string
   */
  private $secretKey;

  /**
   * @var array
   */
  private $links;

  /**
   * Constructor.
   *
   * @param string $username
   * @param string $secretKey
   */
  public function __construct($username, $secretKey) {
    $this->httpClient = new HttpClient();
    $this->username = $username;
    $this->secretKey = $secretKey;
  }

  /**
   * {@inheritdoc}
   */
  public function init($uri) {
    try {
      $response = $this->request('GET', $uri)->getBody();

      $json = json_decode($response->getContents());
      $this->links = $json->links;

      return $json;
    } catch (ClientException $exception) {
      switch ($exception->getCode()) {
        case 401:
          throw new InvalidAuthenticationInformationException('Authentication information is invalid.');

        case 404:
          throw new ResourceNotFoundException(sprintf('Resource "%s" not found.', $uri), 404, $exception);

        default:
          throw new BadResponseException($exception->getMessage(), $exception->getCode(), $exception);
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function get($uri, $options = array()) {
    try {
      $response = $this->request('GET', $uri, $options)->getBody();
      $json = json_decode($response->getContents());

      return $json;
    } catch (ClientException $exception) {
      switch ($exception->getCode()) {
        case 401:
          throw new InvalidAuthenticationInformationException('Authentication information is invalid.');

        case 404:
          throw new ResourceNotFoundException(sprintf('Resource "%s" not found.', $uri), 404, $exception);

        default:
          throw new BadResponseException($exception->getMessage(), $exception->getCode(), $exception);
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function post($uri, $data = null, array $options = array()) {
    if (is_array($data)) {
      $options = array_merge($data, $options);
      $data = new \StdClass();
    }

    $this->request('post', $uri, array(
      'body' => $this->serializer->serialize($data, 'json', SerializationContext::create()->setAttribute('options', $options))
    ));
  }

  /**
   * @param HttpClientInterface $httpClient
   *
   * @return $this
   */
  public function setHttpClient(HttpClientInterface $httpClient) {
    $this->httpClient = $httpClient;

    return $this;
  }

  /**
   * @param string $method
   * @param string $uri
   * @param array  $options
   *
   * @return ResponseInterface
   */
  private function request($method, $uri, array $params = array()) {
    $options['auth'] = array($this->username, $this->secretKey);
    if (!empty($params)) {
      $options['query'] = $params;
    }

    $request = $this->httpClient->request($method, $uri, $options);
    return $request;
  }

  public function getLinks() {
    return $this->links;
  }

  public function getRancher() {
    $rancher = new Rancher($this);
    return $rancher;
  }
}
