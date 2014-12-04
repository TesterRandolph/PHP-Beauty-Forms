<?php
namespace PBF\Element;

class ShowOnly extends \PBF\Element {
	protected $_attributes = array('class' => 'form-control-static');
	protected $textToShow = '';

    public function __construct($label, $textToShow, $properties = array()) {
        $this->textToShow = $textToShow;

        parent::__construct($label, '', $properties);
    }

	public function render() {
        unset($this->_attributes['name']);
		echo '<div',$this->getAttributes(), '>', $this->textToShow, '</div>';
	}
}
