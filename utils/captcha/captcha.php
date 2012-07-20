<?php

/**
 * Simple captcha test 
 */
include_once('Captcha.class.php');

session_start();

$captcha = new Captcha();
$captcha->set_image_size(120, 40);
//$captcha->set_font('VeraBd.ttf');
$captcha->set_font_size(20, 20);
$captcha->add_noise(5);
$val = $captcha->gen_value(4);

$_SESSION['code'] = $val;

$captcha->get_image();
 