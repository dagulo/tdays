<?php
/**
 * Created by PhpStorm.
 * User: Dennis
 * Date: 8/1/2016
 * Time: 11:13 PM
 */

namespace Dagulo\Threedays;


class TdaysFrontController extends TdaysBaseController{

    public function index()
    {
        // check if database has been setup

        //  check if
        $this->layout->content = view( 'front' );
        return $this->layout;
    }

    public function register()
    {
        $this->layout->content = view( 'front.register' );
        return $this->layout;
    }
}

