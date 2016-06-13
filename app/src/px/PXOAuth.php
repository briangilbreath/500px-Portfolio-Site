<?php

namespace App\Src\Px;

use App\Src\OAuth;
use GuzzleHttp\Client;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class PXOAuth{

    public $oauth;

    function __construct(){

        $this->oauth = new Oauth(
            getenv('500PX_KEY'),
            getenv('500PX_SECRET'),
            'https://api.500px.com/v1/'
        );

    }




}
