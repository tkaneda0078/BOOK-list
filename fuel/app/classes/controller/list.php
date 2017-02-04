<?php
/**
 * Created by PhpStorm.
 * User: takahiro
 * Date: 2017/02/04
 * Time: 18:35
 */

Class Controller_list extends Controller
{
    public function action_index()
    {
        return Response::forge(View::forge('list/index'));
    }
}