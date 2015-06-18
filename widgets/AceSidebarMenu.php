<?php

Yii::import('zii.widgets.CMenu');

/**
 * AceSidebarMenu
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @copyright 2015 Mr PHP
 * @link https://github.com/cornernote/yii-ace-admin
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-ace-admin/master/license.txt
 */
class AceSidebarMenu extends CMenu
{
    public $encodeLabel = false;
    public $activateParents = true;
    public $openCssClass = 'open';
    public $route;

    public function init()
    {
        TbHtml::addCssClass('nav nav-list', $this->htmlOptions);
        TbHtml::addCssClass('submenu', $this->submenuHtmlOptions);

        foreach ($this->items as $k => $v) {
            $icon = isset($v['icon']) ? '<i class="menu-icon ' . $v['icon'] . '"></i>' : '';
            $v['label'] = $icon . '<span class="menu-text"> ' . CHtml::encode($v['label']) . ' </span><b class="arrow"></b>';
            if (!empty($v['items'])) {
                $v['label'] .= '<b class="arrow fa fa-angle-down"></b>';
            }
            $v['url'] = '#';
            TbHtml::addCssClass('dropdown-toggle', $v['linkOptions']);
            $this->items[$k] = $v;
        }

        parent::init();
    }

    /**
     * Recursively renders the menu items.
     * @param array $items the menu items to be rendered recursively
     */
    protected function renderMenuRecursive($items)
    {
        $count = 0;
        $n = count($items);
        foreach ($items as $item) {
            $count++;
            $options = isset($item['itemOptions']) ? $item['itemOptions'] : array();
            $class = array();
            if ($item['active'] && $this->activeCssClass != '') {
                if (!empty($item['items'])) {
                    $class[] = $this->openCssClass;
                }
                $class[] = $this->activeCssClass;
            }
            if ($count === 1 && $this->firstItemCssClass !== null)
                $class[] = $this->firstItemCssClass;
            if ($count === $n && $this->lastItemCssClass !== null)
                $class[] = $this->lastItemCssClass;
            if ($this->itemCssClass !== null)
                $class[] = $this->itemCssClass;
            if ($class !== array()) {
                if (empty($options['class']))
                    $options['class'] = implode(' ', $class);
                else
                    $options['class'] .= ' ' . implode(' ', $class);
            }

            echo CHtml::openTag('li', $options);

            $menu = $this->renderMenuItem($item);
            if (isset($this->itemTemplate) || isset($item['template'])) {
                $template = isset($item['template']) ? $item['template'] : $this->itemTemplate;
                echo strtr($template, array('{menu}' => $menu));
            } else
                echo $menu;

            if (isset($item['items']) && count($item['items'])) {
                echo "\n" . CHtml::openTag('ul', isset($item['submenuOptions']) ? $item['submenuOptions'] : $this->submenuHtmlOptions) . "\n";
                $this->renderMenuRecursive($item['items']);
                echo CHtml::closeTag('ul') . "\n";
            }

            echo CHtml::closeTag('li') . "\n";
        }
    }

    protected function normalizeItems($items, $route, &$active)
    {
        $route = $this->route ? $this->route : $route;
        return parent::normalizeItems($items, $route, $active);
    }


}