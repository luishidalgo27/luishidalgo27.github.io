<?php
/**
* @package Horme 3 template
* @author Spiros Petrakis
* @copyright Copyright (C) 2015 - 2022 Spiros Petrakis. All rights reserved.
* @license GNU General Public License version 2 or later
*
*/

defined('JPATH_PLATFORM') or die;

if (!class_exists( 'VmConfig' )) require(JPATH_ROOT .'/administrator/components/com_virtuemart/helpers/config.php');

/**
 * Pagination Class.  Provides a common interface for content pagination for the
 * Joomla! Platform.
 *
 * @package     Joomla.Platform
 * @subpackage  HTML
 * @since       11.1
 */
function pagination_list_render($list)
{
	// Reverse output rendering for right-to-left display.

	$html = '<div class="text-center"><ul class="pagination pagination-sm clearfix">';
	$html .= $list['start']['data'];
	$html .= $list['previous']['data'];
	foreach ($list['pages'] as $page)
	{
			$html .= $page['data'];
	}
	$html .= $list['next']['data'];
	$html .= $list['end']['data'];
	$html .= '</ul></div>';

	return $html;
}
/**
 * Method to create an active pagination link to the item
 *
 * @param   JPaginationObject  &$item  The object with which to make an active link.
 *
 * @return   string  HTML link
 *
 * @since    11.1
 */
function pagination_item_active(&$item)
{

	if (!VmConfig::isSite())
	{
		if ($item->base > 0)
		{
			return "<li><a title=\"" . $item->text . "\" onclick=\"document.adminForm." . $this->prefix . "limitstart.value=" . $item->base
				. "; Joomla.submitform();return false;\">" . $item->text . "</a></li>";
		}
		else
		{
			return "<li><a title=\"" . $item->text . "\" onclick=\"document.adminForm." . $this->prefix
				. "limitstart.value=0; Joomla.submitform();return false;\">" . $item->text . "</a></li>";
		}
	}
	else
	{
		return "<li><a title=\"" . $item->text . "\" href=\"" . $item->link . "\">" . $item->text . "</a></li>";
	}
}
/**
 * Method to create an inactive pagination string
 *
 * @param   object  &$item  The item to be processed
 *
 * @return  string
 *
 * @since   11.1
 */
function pagination_item_inactive(&$item)
{

	if (!VmConfig::isSite())
	{
		return "<li><a href=\"#\">" . $item->text . "</a></li>";
	}
	else
	{
		return "<li class=\"disabled\"><a href=\"#\">" . $item->text . "</a></li>";
	}
}