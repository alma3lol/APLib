<?php
	/**
	 * APLib - A PHP library to create your website smooth, easy & secure
	 *
	 * @package   APLib
	 * @version   0.1
	 * @author    Omar Almalol
	 * @license   MIT License
	 * @copyright 2017-2018
	 * @link      https://github.com/alma3lol/APLib/
	 */

  namespace APLib\Themes;

  /**
   * OmniRadiance - Theme inspiration by Rikon Rahman (https://twitter.com/rikonrahman)
   * URL: https://dribbble.com/shots/2797713-Landing-Page-Design-For-Omni-Radiance
   */
  class OmniRadiance
  {
    /**
     * Include the theme files
     *
     * @return  void
     */
    public static function include()
    {
      \APLib\Response\Header\Link::add(APLibHTML.'Themes/css/omniradiance.css');
    }
  }
?>
