<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
 
 
 // NEEED TO LOOK AT :http://docs.joomla.org/Custom_error_pages

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$test = $this->error->getcode();

if ($this->error->getcode() == '404') 
	{
    header("HTTP/1.0 404 Not Found");
	}
	else
	{
	print_r ($test);
	}
	

 ?>

