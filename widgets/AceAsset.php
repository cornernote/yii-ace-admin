<?php

/**
 * AceAsset
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @copyright 2015 Mr PHP
 * @link https://github.com/cornernote/yii-ace-admin
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-ace-admin/master/license.txt
 */
class AceAsset extends CWidget
{

    /**
     *
     */
    public function init()
    {
        $this->publishAssets();
    }

    /**
     * function to publish and register assets on page
     */
    public function publishAssets()
    {
        $baseUrl = Yii::app()->assetManager->publish(Yii::getPathOfAlias('vendor') . '/cornernote/ace-admin-theme/assets', true, -1, YII_DEBUG);
        $cs = Yii::app()->getClientScript();

        $cs->registerCSSFile($baseUrl . '/fonts/fonts.googleapis.com.css');
        $cs->registerCSSFile($baseUrl . '/css/ace.min.css', 'screen, projection');
        $cs->registerScriptFile($baseUrl . '/js/ace-extra.min.js', CClientScript::POS_HEAD);
        $cs->registerScriptFile($baseUrl . '/js/ace.min.js');
    }

}