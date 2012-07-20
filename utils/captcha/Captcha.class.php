<?php

/**
 * Generate and display the CAPTCHA image.
 */
class Captcha
{

	/**
	 * Charachters to use in the captcha image.
	 * Some common chars are not on the list (e.g. l and 1, 0 and O)
	 * @var string
	 */
	private $_chars = '23456789abcdefhijkmnpqrstuvwxyz';

	/**
	 * The width of the captcha image
	 * @var integer
	 */
	private $_width = 240;

	/**
	 * The height of the captcha image
	 * @var unknown_type
	 */
	private $_height = 60;

	/**
	 * The length of the code
	 * @var integer
	 */
	private $_length = 6;

	/**
	 * Generated captcha string
	 * @var string
	 */
	private $_value = '';

	/**
	 * The noice in percent - should be less that 20, otherwise the image will be very hard to read
	 * @var integer
	 */
	private $_noise = 10;

	/**
	 * The minimum and maximum size of the font in pixels. 'auto' will try to calculate it based on the width of the image, and the length of the code
	 * @var array
	 */
	private $_fontsize = array('min' => 'auto', 'max' => 'auto');

	/**
	 * The path and filename for the font file
	 * @var string
	 */
	private $_font;

	/**
	 * Constructor
	 * @return null
	 */
	public function __construct()
	{
		$this->_font = dirname(__FILE__) . '/Captcha/Vera.ttf';
	}

	/**
	 * Set captcha image size
	 * @param integer $width
	 * @param integer $height
	 * @return null
	 */
	public function set_image_size($width, $height)
	{
		$width = intval($width);
		if ($width < 60) {
			throw new Exception('The width of the image should be at least 60px');
		}
		if ($height < 20) {
			throw new Exception('The height of the image should be at least 20px');
		}
		$this->_width = $width;
		$this->_height = $height;
	}

	/**
	 * Set the minimum and maximum font size. If you wish fontsize to be exact set equal min and max values
	 * @param mixed $min - integer or 'auto'
	 * @param mixed $max - integer or 'auto'
	 * @return null
	 */
	public function set_font_size($min = 'auto', $max = 'auto')
	{
		if (($min == 'auto') || (is_integer($min))) {
			$this->_fontsize['min'] = $min;
		} else {
			throw new Exception('Minimum Font Size should be set to integer value or \'auto\'');
		}
		if (($max == 'auto') || (is_integer($max))) {
			$this->_fontsize['max'] = $max;
		} else {
			throw new Exception('Maximum Font Size should be set to integer value or \'auto\'');
		}
	}

	/**
	 *
	 * @param string $filename
	 * @return unknown_type
	 */
	public function set_font($filename)
	{
		if (!file_exists($filename)) {
			if (!file_exists(dirname(__FILE__) . '/Captcha/' . $filename)) {
				throw new Exception('The font file does not exists!');
			}
			else
				$this->_font = dirname(__FILE__) . '/Captcha/' . $filename;
		}
		else {
			$this->_font = $filename;
		}
	}

	/**
	 * Generates the new code
	 * @param integer $length
	 * @return string
	 */
	public function gen_value($length = 6)
	{
		$lenght = intval(6);
		if ($length < 1) {
			throw new Exception('The length of the text should be at least 1 char');
		}
		$this->_length = $length;
		$val = '';
		$c = strlen($this->_chars) - 1;
		for ($i = 0; $i < $length; $i++) {
			$val .= substr($this->_chars, mt_rand(0, $c), 1);
		}
		$this->_value = $val;
		return $this->_value;
	}

	/**
	 * Adds some 'noise' to the captcha image.
	 * @param integer $percent - 0 for no noise
	 * @return null
	 */
	public function add_noise($percent)
	{
		$this->_noise = $percent;
	}

	/**
	 * Generates and displays the image
	 * @return null
	 */
	public function get_image()
	{
		if (!$this->_value) {
			$this->gen_value();
		}
		$length = $this->_length;

		$image = imagecreatetruecolor($this->_width, $this->_height);

		//$bg = imagecolorallocate($image, mt_rand(128, 255), mt_rand(128, 255), mt_rand(128, 255));
		$bg = imagecolorallocate($image, 255, 255, 255);
		$fg = imagecolorallocate($image, mt_rand(0, 128), mt_rand(0, 128), mt_rand(0, 128));
		imagefill($image, $this->_width / 2, $this->_height / 2, $bg);

		// Padding - offset of the text
		$xStart = mt_rand($this->_width / 20, $this->_width / 5);
		$xEnd = $this->_width - $xStart;
		$yStart = $this->_height * 0.5;
		$yEnd = $this->_height * 0.8;

		// font size
		if ($this->_fontsize['min'] == 'auto') {
			$fsmin = min($this->_width / $length, $this->_height) * 0.6;
		} else {
			$fsmin = $this->_fontsize['min'];
		}
		if ($this->_fontsize['max'] == 'auto') {
			$fsmax = min($this->_width / $length, $this->_height) * 0.8;
		} else {
			$fsmax = $this->_fontsize['max'];
		}

		for ($i = 0; $i < $length; $i++) {
			imagefttext($image, mt_rand($fsmin, $fsmax), mt_rand(-15, 15) /* Angle */, $xStart + (($xEnd - $xStart) * $i / $length) + mt_rand(-5, 5), mt_rand($yStart, $yEnd), $fg, $this->_font, substr($this->_value, $i, 1));
		}

		if ($this->_noise) {
			// Add some noise to the image.
			for ($i = 0; $i < $this->_noise; $i++) {
				$color = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
				for ($j = 0; $j < $this->_width * $this->_height / 100; $j++) {
					imagesetpixel($image, mt_rand(0, $this->_width), mt_rand(0, $this->_height), $color);
				}
			}
		}

		header('Content-type: ' . 'image/png');
		imagepng($image);
		imagedestroy($image);
	}

}