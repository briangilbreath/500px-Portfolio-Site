<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Src\Px\PXOAuth;
use App\Src\Px\PXApi;

class PX_Controller extends Controller{

    private $oauth;
    private $api;

    function __construct(){

        //initialize oauth
        $this->oauth = new PXOAuth();
        //build api
        $this->api = new PXApi($this->oauth);
    }

    /**
     * Show home page
     *
     * @param  int  $id
     * @return Response
     */
    public function home(){
        return view('home');
    }

    /**
     * Show photos page
     *
     * @param  int  $id
     * @return Response
     */
    public function photos(){

        $parameters = [
            'sort'              => 'times_viewed',
            'sort_direction'    => 'desc',
            'page'              => 1,
            'image_size'        => 4,
            'rpp'               => 40
        ];

        $data = $this->api->get_photos_from_gallery($parameters, '22728763');

        return view('photography')->with('photos', $data['photos']);
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function gallery($gallery_id){

        $parameters = [
            'sort'              => 'times_viewed',
            'sort_direction'    => 'desc',
            'page'              => 1,
            'image_size'        => 4,
            'rpp'               => 40
        ];

        $data = array(
            'gallery' => $this->api->get_gallery($parameters, $gallery_id)['gallery'],
            'photos'  => $this->api->get_photos_from_gallery($parameters, $gallery_id)['photos'],
        );


        return view('gallery')->with('data', $data);

    }


    /**
     * Show the galleries for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function galleries(){

        $parameters = [
            'sort'              => 'position',
            'sort_direction'    => 'desc',
            'page'              => 1,
            'cover_size'        => 4,
            'rpp'               => 40
        ];

        $data = $this->api->get_galleries($parameters);

        return $data['galleries'];
    }
}
