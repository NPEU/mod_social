<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_social
 *
 * @copyright   Copyright (C) NPEU 2024.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;

?>
<div>
    <?php if ($show_x) : ?>
    <p>
        <a class="c-badge c-badge--limit-height--6 x" href="https://x.com/<?php echo $params->get('x'); ?>" rel="external noopener noreferrer" target="_blank">
            <img alt="x" height="60" onerror="this.src='/assets/images/brand-logos/social/x.png'; this.onerror=null;" src="/assets/images/brand-logos/social/x.svg">
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
    <?php if ($show_bluesky) : ?>
    <p class="l-box">
        <a class="c-badge c-badge--limit-height--6  bluesky" href="https://bsky.app/profile/<?php echo $params->get('bluesky'); ?>" rel="external noopener noreferrer" target="_blank">
            <img alt="Bluesky" height="60" onerror="this.src='/assets/images/brand-logos/social/bluesky.png'; this.onerror=null;" src="/assets/images/brand-logos/social/bluesky.svg">
        </a>
    </p>
        <?php endif; ?>
</div>