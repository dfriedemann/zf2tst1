<?php
namespace  Album\Form;

use  Zend\Form\Form;

class AblumForm extends Form
{
	public function __construct($name = null)
	{
		parent::__construct('album');
		$this->setAttribute('method', 'post');
		$this->add(array(
				'name' => 'id',
				'type' => 'Hidden',
		));
		$this->add(array(
				'name'	=>	'title',
				'type'	=>	'Text',
				'options'	=>	array(
						'label'	=> 'Titel',
				),
		));
		$this->add(array(
				'name'	=> 	'artist',
				'type'	=>	'Text',
				'options'	=> array(
						'lable' => 'Artist',
				),
		));
		$this->add(array(
				'name'	=>	'submit',
				'type'	=>	'submit',
				'attributes'	=> array(
						'value'	=> 'Go',
						'id'	=> 'submitbutton', 
				),
		));
				
	}
}