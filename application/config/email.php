<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_user'] = 'promodevweb@gmail.com';
$config['smtp_pass'] = 'tetris2020';
$config['smtp_port'] = 465;
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['newline'] = "\r\n";
*/

$mail_config['smtp_host'] = 'ssl://smtp.gmail.com';
$mail_config['smtp_port'] = '465';
$mail_config['smtp_user'] = 'promodevweb@gmail.com';
$mail_config['_smtp_auth'] = TRUE;
$mail_config['smtp_pass'] = 'tetris2020';
$mail_config['smtp_crypto'] = 'tls';
$mail_config['protocol'] = 'smtp';
$mail_config['mailtype'] = 'html';
$mail_config['send_multipart'] = FALSE;
$mail_config['charset'] = 'utf-8';
$mail_config['wordwrap'] = TRUE;
$config['newline']   = "\r\n";


/*$config['useragent']    = $system_name;
$config['mailpath']     = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
$config['protocol']     = "mail"; //use 'mail' instead of 'sendmail or smtp'
$config['smtp_host']    = "your domain name";
$config['smtp_user']    =  $from;
$config['smtp_pass']    = "*************";
$config['smtp_port']    =  465;
$config['smtp_crypto']  = 'ssl';
$config['smtp_timeout'] = "";
$config['mailtype']     = "html";
$config['charset']      = "utf-8";
$config['newline']      = "\r\n";
$config['wordwrap']     = TRUE;
$config['validate']     = FALSE;
*/
