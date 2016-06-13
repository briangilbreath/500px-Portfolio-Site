<?php

namespace App\Src\Px;

class PXApi{

    public $api;

    //get oauth instance
    function __construct(PXOauth $auth){
        //set client to api
        $this->api = $auth->oauth->client;
    }


    /**
     * Save query in cache key
     * @return object of data from api, cached for 10 min in key
     */
    function cached_query($cache_key, $api_path, $parameters = array()){

        $cache_time = 10;

        if (\Cache::has($cache_key)) {

            //retrieve cache query
            $this->json = \Cache::get($cache_key);

        }else{

            //run query
            $this->json = $this->api->get($api_path, array(
                'query' => $parameters
            ))->json();

            //cache it
            \Cache::store('file')->put($cache_key, $this->json, $cache_time);
        }

        return $this->json;

    }


    /**
     * Get photos for a single gallery
     * @return photo objects
     */
    function get_photos_from_gallery($parameters, $gallery_id){

        $cache_key = 'pictures_'.$gallery_id;
        $api_path = 'users/10450195/galleries/'.$gallery_id.'/items';

        return $this->cached_query($cache_key, $api_path, $parameters);

    }


    /**
     * Get info on one gallery
     * @return object with info on gallery
     */
    function get_gallery($parameters, $gallery_id){
        $cache_key = 'gallery_'.$gallery_id;
        $api_path = 'users/10450195/galleries/'.$gallery_id;

        return $this->cached_query($cache_key, $api_path, $parameters);
    }


    /**
     * Get listing of galleries
     * @return gallery objects
     */
    function get_galleries($parameters){

        $cache_key = 'galleries';
        $api_path = 'users/10450195/galleries';

        return $this->cached_query($cache_key, $api_path, $parameters);

    }

}
