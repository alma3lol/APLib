<?php
	/**
	 * APLib - A PHP library to create your website smooth, easy & secure
	 *
	 * @package   APLib
	 * @version   0.1
	 * @author    Omar Almalol
	 * @license   MIT License
	 * @copyright 2017-2019
	 * @link      https://github.com/alma3lol/APLib/
	 */

	namespace APLib;

	/**
	* ResponsiveSlides - Simple & lightweight responsive slider plugin (in 1kb): http://responsiveslides.com/
	*/
	class ResponsiveSlides
	{

		/**
     * Create a silder
     *
     * @param   string  $content  php code to obfuscate (including PHP tags '<?php & ?>')
     * @param   string  $key      a key to obfuscate with [Default: NOTTHING]
     *
     * @return  string/null
     */
    public static function slider($images, $config  =  'auto: true, pagination: true, nav: true, fade: 500')
    {
			if(!is_array($images)) return ''; ?>
			<div class="rslides">
<?php
			foreach($images as $image)
			{
				echo "				<img src='{$image['src']}'";
				if(isset($image['alt'])) echo " alt='{$image['alt']}'";
				echo " />\r\n";
				if(isset($image['caption'])) echo "				<p class='caption'>{$image['caption']}</p>\r\n";
			} ?>
			</div>
<?php
			\APLib\Response\Body\JavaScript::add("$('.rslides').responsiveSlides({ {$config} })");
    }
	}
?>
