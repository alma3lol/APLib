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

	namespace APLib\Response\Header;

	/**
	* Meta - Meta Data class
	*/
	class Meta Extends \APLib\Container
	{

		/**
		 * @var  array  $items  an array to contain JavaScript functions
		 */
		protected static $items  =  array();

    /**
		 * Add an item to contined items
		 *
		 * @param   string  $item  item to add
		 *
		 * @return  void
		 */
    public static function add($properties)
		{
      if(!is_array($properties) || sizeof($properties) == 0) return;
      $meta     =  "<meta ";
      foreach($properties as $property)
      {
        $meta  .=  "{$property[0]}=\"{$property[1]}\" ";
      }
      $meta    .=  "/>";
			array_push(static::$items, $meta);
		}

    /**
		 * Remove an item from the contained items
		 *
		 * @param   string/null  $item  item to remove
		 *
		 * @return  void
		 */
		public static function remove($properties  =  null)
		{
			if($properties  ==  null)
			{
				array_pop(static::$items);
			}
			else
			{
        if(!is_array($properties) || sizeof($properties) == 0) return;
        $meta     =  "<meta ";
        foreach($properties as $property)
        {
          $meta  .=  "{$property[0]}=\"{$property[1]}\" ";
        }
        $meta    .=  "/>";
				for($i=0; $i < sizeof(static::$items); $i++)
				{
					if(static::$items[$i]  ==  $meta)
					{
						array_splice(static::$items, $i, 1);
						break;
					}
				}
			}
		}
	}
?>
