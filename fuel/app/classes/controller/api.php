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
    public function get_search()
    {
        $val = Model_Api::validate();

        $data = array();
        if ( ! $val->run(array('word' => Input::get('word'))))
        {
            foreach ($val->error() as $key => $value)
            {
                $data['error_msg'][$key] = $value->get_message();
            }
	    return Response::forge(View::forge('list/index', $data));
        }

        $api_data[] = Model_Api::fetchBookData(Input::get('word'));
        $data['books'] = $this::formatBookData($api_data);

        return Response::forge(View::forge('list/index', $data));
    }

    /**
     * 書籍情報を整形
     *
     * @access private
     * @return $after_book_data
     */
    private static function formatBookData($book_data)
    {
        $after_book_data = array();

        foreach ($book_data[0]['items'] as $key_num => $data)
        {
            foreach ($data['volumeInfo'] as $key => $value)
            {
                $after_book_data[$key_num][$key] = $value;
            }
        }

        return $after_book_data;
    }
    
}