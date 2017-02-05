<?php

/**
 * 一覧画面用コントローラークラス
 *
 * @author tkaneda
 * @package Controller
 */
Class Controller_list extends Controller
{
    public function action_index()
    {
        return Response::forge(View::forge('list/index'));
    }
}