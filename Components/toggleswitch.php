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

  namespace APLib;

  /**
   * ToggleSwitch - A jQuery plugin implementation class
   */
  class ToggleSwitch
  {

    /**
     * Create a new ToggleSwitch checkbox
     *
     * @param   string  $id       a unique ID for the new checkbox [Default: EMPTY]
     * @param   bool    $checked  whether or not the checkbox is checked [Default: false]
     *
     * @return  string
     */
    public static function New($id  =  '', $checked  =  false)
    {
      $id       =  ($id  !=  '') ? $id : \APLib\Extras::RandomString();
      $checked  =  ($checked) ? " checked='checked'" : '';
      \APLib\Response\Body\JavaScript::add("$('#{$id}').toggleSwitch();");
      return "<input type='checkbox'{$checked} id='{$id}' />";
    }
  }
?>
