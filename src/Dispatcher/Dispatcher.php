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

        $data['show_twitter'] = (!empty($params->get('enable_twitter', 0)) && !empty($params->get('twitter')));
        $data['show_youtube'] = (!empty($params->get('enable_youtube', 0)) && !empty($params->get('youtube')));



        /*$data['stuff'] = $this->getHelperFactory()
            ->getHelper('SocialHelper')
            ->getStuff($params, $this->getApplication());*/

        return $data;
    }
}
