<?php

/**
 * トップ画面用コントローラークラス
 *
 * @author tkaneda
 * @package Controller
 */
Class Controller_top extends Controller
{
    public function action_index()
    {
        return Response::forge(View::forge('top/index'));
    }
}