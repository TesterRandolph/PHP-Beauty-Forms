<?php
namespace PBF\Element;

class Textarea extends \PBF\Element {
	protected $_attributes = array("rows" => "5", "class" => "form-control",);

	public function render() {
        echo "<textarea", $this->getAttributes("value"), ">";
        if(!empty($this->_attributes["value"]))
            echo $this->filter($this->_attributes["value"]);
        echo "</textarea>";
    }
}
