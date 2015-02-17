<?php

class KeywordController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    /**
    * @param $campaign_name キャンペーン名
    * @param $ad_group_name 広告グループ名
    * @param $component_type コンポーネントの種類
    * @param $send_flg 配信設定
    * @param $send_status 配信状況
    * @param $match_type マッチタイプ
    * @param $keywords キーワード
    * @param $custom_url カスタムURL
    * @param $ad_group_cost 入札価格
    * @param $ad_ads_name 広告名
    * @param $ad_ads_title 広告タイトル
    * @param $ad_ads_note01 説明文１
    * @param $ad_ads_note02 説明文２
    * @param $display_url 表示URL
    * @param $link_url リンク先URL
    * @param $campaign_budget キャンペーン予算（日額）
    * @param $start_day キャンペーン開始日
    * @param $device_type デバイス
    * @param $send_to 配信先
    * @param $sp_budget_ratio スマートフォン入札価格調整率（%）
    * @param $ad_ads_type 広告タイプ
    * @param $career キャリア
    * @param $priority_device 優先デバイス
    * @param $campaign_id キャンペーンID
    * @param $ad_group_id 広告グループID
    * @param $keywords_id キーワードID
    * @param $ad_ads_id 広告ID
    * @param $err_msg エラーメッセージ
    */

    private $campaign_name;
    private $ad_group_name;
    private $component_type;
    private $send_flg;
    private $send_status;
    private $match_type;
    private $keywords;
    private $custom_url;
    private $ad_group_cost;
    private $ad_ads_name;
    private $ad_ads_title;
    private $ad_ads_note01;
    private $ad_ads_note02;
    private $display_url;
    private $link_url;
    private $campaign_budget;
    private $start_day;
    private $device_type;
    private $send_to;
    private $sp_budget_ratio;
    private $ad_ads_type;
    private $career;
    private $priority_device;
    private $campaign_id;
    private $ad_group_id;
    private $keywords_id;
    private $ad_ads_id;
    private $err_msg;


    public function __construct(){
        $this->campaign_name = $campaign_name;
        $this->ad_group_name = $ad_group_name;
        $this->component_type = $component_type;
        $this->send_flg = 'オン';
        $this->send_status = null;
        $this->match_type = $match_type;
        $this->keywords = $keywords;
        $this->custom_url = null;
        $this->ad_group_cost = $ad_group_cost;
        $this->ad_ads_name = null;
        $this->ad_ads_title = null;
        $this->ad_ads_note01 = null;
        $this->ad_ads_note02 = null;
        $this->display_url = null;
        $this->link_url = null;
        $this->campaign_budget = null;
        $this->start_day = null;
        $this->device_type = "PC|モバイル|スマートフォン";
        $this->send_to = null;
        $this->sp_budget_ratio = null;
        $this->ad_ads_type = null;
        $this->career = null;
        $this->priority_device = null;
        $this->campaign_id = null;
        $this->ad_group_id = null;
        $this->keywords_id = null;
        $this->ad_ads_id = null;
        $this->err_msg = null;
    }






    /**
    * @param campaign_name キャンペーン名
    *
    */
    public function postIndex()
    {

    }



}
