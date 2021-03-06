<?php
/*
  * Copyright 2007 - 2017 Alexey Yuriev
  *
  * Licensed under the Apache License, Version 2.0 (the "License");
  * you may not use this file except in compliance with the License.
  * You may obtain a copy of the License at
  *
  *    http://www.apache.org/licenses/LICENSE-2.0
  *
  * Unless required by applicable law or agreed to in writing, software
  * distributed under the License is distributed on an "AS IS" BASIS,
  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  * See the License for the specific language governing permissions and
  * limitations under the License.
  */

defined('CORE_INTRAWORK_WS') or die('Отсутствует прямой доступ к файлу');

/**
 * Class cnt_phpinfo
 */
class cnt_phpinfo extends cls_controller {
	//private $user_request;
	//private $validate_result = true;
    protected $feedback_data;

    /**
     * @return array
     */
    public function get_info() {
        $result = array();
        $result["meta_title"] = "Конфигурация PHP";

        return $result;
    }

    /**
     * cnt_phpinfo constructor.
     */
    public function __construct()
	{
	}
	

	public function get_user_request()
	{
	}

    /**
     * @return bool
     */
    public function validate()
    {
        return true;
    }


    /**
     * @param int $render
     * @return mixed|string
     */
    public function display($render = RENDER_DEFAULT)
	{
        ob_start();
        phpinfo();
        $phpinfo = ob_get_contents();
        ob_end_clean();

        if (preg_match('|<body.*?>(.*)</body>|sei', $phpinfo, $arr)) {
            $phpinfo = preg_replace("/<table(.*?)>/i", "<table $1 class='table table-striped table-hover table-condensed'>", $arr[0]);
        }

        return $phpinfo;
	}

    /**
     * @return bool
     */
    public function process()
	{
		$this->get_user_request();

		return true;
	}
}


?>