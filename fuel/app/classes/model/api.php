<?php
/**
 * APIモデルクラス
 *
 * ユーザーが検索した情報を元に書籍情報の取得する。
 *
 * @author tkaneda
 * @package Model
 */
class Model_Api extends \Orm\Model
{
    /**
     * バリデーション定義
     *
     *
     * @access public
     * @return $val バリデーション結果
     */
    public static function validate()
    {
        $val = Validation::forge();

        return $val;
    }

    /**
     *  WebAPIを利用
     *
     *　検索キーワードに引っかかる書籍情報を
     *  取得しにいく。
     *
     * @access public
     * @return $val バリデーション結果
     */
    public static function fetchBookData($search_word)
    {
        // Google Books API
        $url = 'https://www.googleapis.com/books/v1/volumes?q='.$search_word;

        $ch = curl_init(); //開始

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 証明書の検証を行わない
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // curl_execの結果を文字列で返す

        $response =  curl_exec($ch);
        $result = json_decode($response, true);

        curl_close($ch); //終了

        return $result;
    }

}
