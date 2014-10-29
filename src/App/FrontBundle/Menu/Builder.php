<?php

/*
 * 
 * (c) Nicolas LUDOVIC
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 */

/**
 * Description of Builder
 *
 * @author nicolas
 */
namespace App\FrontBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Accueil', array('route' => 'homepage'));
        $menu->addChild('A propos', array('route' => 'homepage'));

        return $menu;
    }
}
