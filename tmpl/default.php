<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_social
 *
 * @copyright   Copyright (C) NPEU 2021.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;


$doc = JFactory::getDocument();

?>
<div>
    <?php if ($show_twitter) : ?>
    <p>
        <a class="c-badge c-badge--limit-height--6 twitter" href="https://twitter.com/<?php echo $params->get('twitter'); ?>" rel="external noopener noreferrer" target="_blank">
            <img alt="Twitter" height="60" onerror="this.src='/assets/images/brand-logos/social/twitter.png'; this.onerror=null;" src="/assets/images/brand-logos/social/twitter.svg">
        </a>
    </p>
    <?php endif; ?>
    <?php if ($show_youtube) : ?>
    <p>
        <a class="c-badge c-badge--limit-height--6 youtube" href="https://www.youtube.com/user/<?php echo $params->get('youtube'); ?>" rel="external noopener noreferrer" target="_blank">
            <img alt="YouTube" height="60" onerror="this.src='/assets/images/brand-logos/social/youtube.png'; this.onerror=null;" src="/assets/images/brand-logos/social/youtube.svg">
        </a>
    </p>
    <?php endif; ?>
</div>