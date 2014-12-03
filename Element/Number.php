<?php
namespace PBF\Element;

class Number extends Textbox {
	protected $_attributes = array("type" => "number", "class" => "form-control",);

	public function render() {
		$this->validation[] = new \PBF\Validation\Numeric;
		parent::render();
	}
}
