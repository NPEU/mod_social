<?php

namespace NPEU\Module\Social\Site\Dispatcher;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;
use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

/**
 * Dispatcher class for mod_social
 *
 * @since  4.4.0
 */
class Dispatcher extends AbstractModuleDispatcher implements HelperFactoryAwareInterface
{
    use HelperFactoryAwareTrait;

    /**
     * Returns the layout data.
     *
     * @return  array
     */
    protected function getLayoutData(): array
    {
        $data   = parent::getLayoutData();
        $params = $data['params'];

        $data['show_x']       = (!empty($params->get('enable_x', 0)) && !empty($params->get('x')));
        $data['show_youtube'] = (!empty($params->get('enable_youtube', 0)) && !empty($params->get('youtube')));
        $data['show_bluesky'] = (!empty($params->get('enable_bluesky', 0)) && !empty($params->get('bluesky')));



        /*$data['stuff'] = $this->getHelperFactory()
            ->getHelper('SocialHelper')
            ->getStuff($params, $this->getApplication());*/

        return $data;
    }
}
