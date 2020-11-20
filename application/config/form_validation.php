<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'site/contact' => array(
		array(
			'field' => 'name',
			'label' => 'Nom',
			'rules' => 'required'
		),
		array(
			'field' => 'email1',
			'label' => 'E-mail',
			'rules' => array('valid_email', 'required')
		),
		array(
			'field' => 'email2',
			'label' => 'Confirmation E-mail',
			'rules' => array('valid_email', 'required', 'matches[email1]')
		),
		array(
			'field' => 'title',
			'label' => 'Titre',
			'rules' => 'required'
		),
		array(
			'field' => 'message',
			'label' => 'Message',
			'rules' => 'required'
		)
	),
	'site/connexion' => array(
		array(
			'field' => 'username',
			'label' => "Nom d'utilisateur",
			'rules' => 'required'
		),
		array(
			'field' => 'password',
			'label' => 'Mot de passe',
			'rules' => 'required'
		)
	)
);

