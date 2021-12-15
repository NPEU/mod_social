<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_social
 *
 * @copyright   Copyright (C) NPEU 2021.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;

// Include the social functions only once
JLoader::register('ModSocialHelper', __DIR__ . '/helper.php');

#$thing = trim($params->get('thing'));

#$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

$show_twitter = (!empty($params->get('enable_twitter', 0)) && !empty($params->get('twitter')));
$show_youtube = (!empty($params->get('enable_youtube', 0)) && !empty($params->get('youtube')));

require JModuleHelper::getLayoutPath('mod_social', $params->get('layout', 'default'));