<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Page_Controller extends Controller{



    function __construct(){
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
     * Show technology page
     *
     * @param  int  $id
     * @return Response
     */
    public function technology($technology_id = null){

      $portfolio = $technology_id ?? 'intro';
      $data = array(
          'portfolio' => $portfolio,
      );


      return view('technology')->with('data', $data);
    }



}
