<?php
/**
 * Created by PhpStorm.
 * User: smartnet
 * Date: 08.08.17
 * Time: 18:05
 */

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * Главное меню в области Navbar
     *
     * @param FactoryInterface $factory
     * @param array $options
     * @return \Knp\Menu\ItemInterface
     */
    public function mainMenu(FactoryInterface $factory, array $options) {

        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav justify-content-center');

        $menu->addChild('Сотрудник', ['route' => 'employer']);
        $menu['Сотрудник']->setAttribute('class', 'nav-item');
        $menu['Сотрудник']->setLinkAttribute('class', 'nav-link');

        $menu->addChild('Руководитель', ['route' => 'manager']);
        $menu['Руководитель']->setAttribute('class', 'nav-item');
        $menu['Руководитель']->setLinkAttribute('class', 'nav-link');

        $menu->addChild('Аналитик', ['route' => 'analitic']);
        $menu['Аналитик']->setAttribute('class', 'nav-item');
        $menu['Аналитик']->setLinkAttribute('class', 'nav-link');

        return $menu;
    }

    /**
     * Рабочее меню Сотрудника в левой колонке
     *
     * @param FactoryInterface $factory
     * @param array $options
     * @return \Knp\Menu\ItemInterface
     */
    public function emplMenu(FactoryInterface $factory, array $options) {

        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav flex-column');

        $menu->addChild('1-я команда', ['route' => 'employer_command',
            'routeParameters' =>
                ['command' => 'first']]);
        $menu['1-я команда']->setAttribute('class', 'nav-item');
        $menu['1-я команда']->setLinkAttribute('class', 'nav-link');


        $menu->addChild('2-я команда', ['route' => 'employer_command',
            'routeParameters' =>
                ['command' => 'second']]);
        $menu['2-я команда']->setAttribute('class', 'nav-item');
        $menu['2-я команда']->setLinkAttribute('class', 'nav-link');

        $menu->addChild('3-я команда', ['route' => 'employer_command',
            'routeParameters' =>
                ['command' => 'third']]);
        $menu['3-я команда']->setAttribute('class', 'nav-item');
        $menu['3-я команда']->setLinkAttribute('class', 'nav-link');

        return $menu;
    }

    /**
     * Рабочее меню Руководителя в левой колонке
     *
     * @param FactoryInterface $factory
     * @param array $options
     * @return \Knp\Menu\ItemInterface
     */
    public function managerMenu(FactoryInterface $factory, array $options) {

        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav flex-column');

        $menu->addChild('Первая', ['route' => 'manager_command',
            'routeParameters' =>
                ['command' => 'first']
            ]);
        $menu['Первая']->setAttribute('class', 'nav-item');
        $menu['Первая']->setLinkAttribute('class', 'nav-link');


        $menu->addChild('Вторая', ['route' => 'manager_command',
            'routeParameters' =>
                ['command' => 'second']]);
        $menu['Вторая']->setAttribute('class', 'nav-item');
        $menu['Вторая']->setLinkAttribute('class', 'nav-link');

        $menu->addChild('Третья', ['route' => 'manager_command',
            'routeParameters' =>
                ['command' => 'third']
            ]);
        $menu['Третья']->setAttribute('class', 'nav-item');
        $menu['Третья']->setLinkAttribute('class', 'nav-link');

        return $menu;
    }

    /**
     * Рабочее меню Аналитика в левой колонке
     *
     * @param FactoryInterface $factory
     * @param array $options
     * @return \Knp\Menu\ItemInterface
     */
    public function analitMenu(FactoryInterface $factory, array $options) {

        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav flex-column');

        $menu->addChild('Раз', ['route' => 'analitic_command',
            'routeParameters' =>
                ['command' => 'first']]);
        $menu['Раз']->setAttribute('class', 'nav-item');
        $menu['Раз']->setLinkAttribute('class', 'nav-link');


        $menu->addChild('Два', ['route' => 'analitic_command',
            'routeParameters' =>
                ['command' => 'second']]);
        $menu['Два']->setAttribute('class', 'nav-item');
        $menu['Два']->setLinkAttribute('class', 'nav-link');

        $menu->addChild('Три', ['route' => 'analitic_command',
            'routeParameters' =>
                ['command' => 'third']]);
        $menu['Три']->setAttribute('class', 'nav-item');
        $menu['Три']->setLinkAttribute('class', 'nav-link');

        return $menu;
    }
}