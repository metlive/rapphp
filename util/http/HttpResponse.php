<?php
/**
 * User: jinghao@duohuo.net
 * Date: 18/12/10
 * Time: 下午3:41
 * Link:  http://magapp.cc
 * Copyright:南京灵衍信息科技有限公司
 */

namespace rap\util\http;


class HttpResponse {

    public $status_code;
    public $headers;
    public $body;


    /**
     * Response _initialize.
     *
     * @param $status_code
     * @param $headers
     * @param $body
     */
    public function __construct($status_code, $headers, $body) {
        $this->status_code = $status_code;
        $this->headers = $headers;
        $this->body = $body;
    }


    public function json() {
       return json_decode($this->body, true);
    }


}