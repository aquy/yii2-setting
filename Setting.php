<?php

namespace aquy\setting;

use yii\base\Exception;
use yii\db\Query;
use yii\base\Component;

class Setting extends Component {

	protected $data = [];

	public function init()
	{
		$items = (new Query())->from('setting')->all();
		foreach ($items as $item){
			if (isset($item['key']) && $item['key']) {
				$this->data[$item['key']] = $item['value'];
			}
		}
		parent::init();
	}

	public function get($key)
	{
		if (array_key_exists($key, $this->data)){
			return $this->data[$key];
		} else {
			throw new Exception('Параметр "' . $key . '" не определен.');
		}
	}

}