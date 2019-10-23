<?php

namespace AppBundle\Admin;

use Sulu\Bundle\AdminBundle\Admin\Admin;
use Sulu\Bundle\AdminBundle\Navigation\Navigation;
use Sulu\Bundle\AdminBundle\Navigation\NavigationItem;
use Sulu\Component\Security\Authorization\SecurityCheckerInterface;

/**
 * Sulu AppAdmin.
 */
class AppAdmin extends Admin
{
    /**
     * AppAdmin constructor.
     *
     * @param SecurityCheckerInterface $securityChecker
     * @param string $title
     */
    public function __construct(SecurityCheckerInterface $securityChecker, $title)
    {
        // set root navigation
        $rootNavigationItem = new NavigationItem($title);

        // parent navigation
        $navigation = new NavigationItem('navigation.modules');

        // set navigation
        $this->setNavigation(new Navigation($rootNavigationItem));
    }

    /**
     * {@inheritdoc}
     */
    public function getJsBundleName()
    {
        return 'app/admin';
    }
}
