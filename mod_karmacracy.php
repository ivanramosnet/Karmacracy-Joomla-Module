<?php
/**
 * Karmacracy module
 *
 * Karmacracy module enables you to show and configure easily Karmacracy widget.
 *
 * @package     Joomla.site
 * @subpackage  mod_karmacracy
 * @author      Iván Ramos <info@ivan.ramos.name>
 * @copyright   Copyright (C) 2013 Iván Ramos Jiménez. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 */

// No direct access
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$menu = $app->getMenu();
$id = $menu->getActive();

$width = $params->get('width');
$c1 = $params->get('c1');
$c2 = $params->get('c2');
$c3 = $params->get('c3');
$c4 = $params->get('c4');
$c5 = $params->get('c5');
$c6 = $params->get('c6');
$c7 = $params->get('c7');
$c9 = $params->get('c9');
$rb = $params->get('rb');
$medio_id = $params->get('medio-id');

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_karmacracy', $params->get('layout', 'default'));
