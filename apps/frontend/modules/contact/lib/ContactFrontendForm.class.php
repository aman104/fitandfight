<?php

class ContactFrontendForm extends sfForm
{

	public function __construct($contact)
	{
		$this->object = $contact;
		parent::__construct();
	}

	public function configure()
	{

		$this->widgetSchema->setNameFormat('contact[%s]');

		$this->widgetSchema['name'] = new sfWidgetFormInput();
		$this->widgetSchema['email'] = new sfWidgetFormInput();
		$this->widgetSchema['phone'] = new sfWidgetFormInput();
		$this->widgetSchema['query'] = new sfWidgetFormTextarea();

		$this->widgetSchema['name']->setLabel('Imię i nazwisko');
		$this->widgetSchema['email']->setLabel('Adres e-mail');
		$this->widgetSchema['phone']->setLabel('Telefon kontaktowy');
		$this->widgetSchema['query']->setLabel('Zapytanie');

		$this->validatorSchema['name'] = new sfValidatorString(array('required' => true));
		$this->validatorSchema['email'] = new sfValidatorEmail(array('required' => true));
		$this->validatorSchema['phone'] = new sfValidatorString(array('required' => false));
		$this->validatorSchema['query'] = new sfValidatorString(array('required' => true));
	}

	public function save()
	{
		$values = $this->getValues();

		$content = $values['query'];
		$content .= '<br /><br />';
		$content .= $values['name'].'<br />';
		$content .= $values['email'].'<br />';
		$content .= $values['phone'];

		Tools::sendEmail($this->object->getEmail(), 'Wiadomość kontaktowa', $content, $values['email']);
		return true;
	}
}