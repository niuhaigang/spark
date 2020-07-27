<?php
namespace App\Api\Web;
use PhalApi\Api;

/**
 * 首页内容接口
 */
class Index extends Api {
    /**
     * 默认接口服务
     * @desc 默认接口服务，当未指定接口服务时执行此接口服务
     * @return string title 标题
     * @return string content 内容
     * @return string version 版本，格式：X.X.X
     * @return int time 当前时间戳
     * @exception 400 非法请求，参数传递错误
     */
    public function getIndexData() {
        $indexData = array(
            'welcome' => array(
                'main' => '欢 迎 前 来 交 流',
                'word' => array('理想', '情感', '代码')
            ),
            'saying' => array(
                'saying' => '问天何寿，问地何极，生何欢，死何苦… 苍生何辜？情为何物？',
                'name' => '沧月'
            )
        );
        return $indexData;
    }
}
