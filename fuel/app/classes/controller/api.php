<?php

/**
 * APIコントローラークラス
 *
 * @author tkaneda
 * @package Controller
 */
Class Controller_Api extends Controller
{
    /**
     * WebAPIから書籍情報を取得
     *
     * @access public
     */
    public function post_search()
    {
        $book_data = Model_Api::fetchBookData(Input::post('word'));

        return Response::forge(View::forge('list/index'));
    }
}