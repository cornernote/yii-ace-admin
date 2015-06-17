<?php

Yii::import('zii.widgets.CMenu');

/**
 * AceNavbarMenu
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @copyright 2015 Mr PHP
 * @link https://github.com/cornernote/yii-ace-admin
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-ace-admin/master/license.txt
 */
class AceNavbarMenu extends CMenu
{

//    public $encodeLabel = false;
//
//    public function init()
//    {
//        TbHtml::addCssClass('nav ace-nav', $this->htmlOptions);
//
//        foreach ($this->items as $k => $v) {
//            $icon = isset($v['icon']) ? '<i class="ace-icon ' . $v['icon'] . '"></i>' : '';
//            $v['label'] = $icon . ' ' . CHtml::encode($v['label']);
//            if (!empty($v['items'])) {
//                foreach ($v['items'] as $kk => $vv) {
//                    TbHtml::addCssClass('dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close', $vv['htmlOptions']);
//                    $v['items'][$kk] = $vv;
//                }
//            }
//            $v['url'] = '#';
//            TbHtml::addCssClass('grey', $v['itemOptions']);
//            $this->items[$k] = $v;
//        }
//        parent::init();
//    }

}