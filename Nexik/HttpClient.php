<?php
namespace Nexik;

use Goutte\Client;

class HttpClient
{
    public function request($url, $method = 'GET', $parameters = array())
    {
        if (strpos($url, '/') === 0) {
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $url;
        }

        $client = new Client();
        $client->request($method, $url, $parameters);

        return $client->getResponse()->getContent();
    }
}
