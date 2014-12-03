<?php
namespace PBF\Element;

class Email extends Textbox {
	protected $_attributes = array("type" => "email", "class" => "form-control",);

	public function render() {
		$this->validation[] = new \PBF\Validation\Email;
		parent::render();
	}
}
