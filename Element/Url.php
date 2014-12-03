<?php
namespace PBF\Element;

class Url extends Textbox {
	protected $_attributes = array("type" => "url", "class" => "form-control",);

	public function render() {
		$this->validation[] = new \PBF\Validation\Url;
		parent::render();
	}
}
