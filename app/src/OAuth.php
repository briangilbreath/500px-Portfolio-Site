<?php
namespace App\src;

use GuzzleHttp\Client;
use GuzzleHttp\Subscriber\Oauth\Oauth1;


class OAuth{


    function __construct($consumer_key, $consumer_secret, $base_url){

        $oauth = new Oauth1([
            'consumer_key'      => $consumer_key,
            'consumer_secret'   => $consumer_secret
        ]);

        $this->client = new Client([ 'base_url' => $base_url, 'defaults' => ['auth' => 'oauth']]);
        $this->client->getEmitter()->attach($oauth);

    }

}
