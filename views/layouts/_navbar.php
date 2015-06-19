<?php
/**
 * @var $this CController
 */
?>

<div id="navbar" class="navbar navbar-default navbar-fixed-top">

    <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only"><?= Yii::t('app', 'Toggle sidebar'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header pull-left">
            <a href="<?= Yii::app()->homeUrl ?>" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    <?= Yii::app()->name ?>
                </small>
            </a>
        </div>

        <?php /* ?>
        <div class="navbar-buttons navbar-header pull-left" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
                        Products
                    </a>
                    <ul class="dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-check"></i>
                            4 Tasks to complete
                        </li>

                        <li class="dropdown-content">
                            <?php $this->widget('zii.widgets.CMenu', array(
                                'items' => MenuItem::model()->findByPk(1)->getItems($depthLimit),
                                'htmlOptions' => array('class' => 'dropdown-menu dropdown-navbar'),
                            )); ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <?php */ ?>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">

            <ul class="nav ace-nav">

                <li class="light-blue">

                    <?php if (!Yii::app()->user->isGuest) { ?>
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img src="//www.gravatar.com/avatar/<?php echo md5(Yii::app()->user->user->email); ?>?d=wavatar" alt="<?php echo Yii::app()->user->user->username; ?>" class="nav-user-photo" width="40" height="40">
                            <span class="user-info">
								<small>Welcome,</small> <?= Yii::app()->user->user->username ?>
    						</span>
                            <i class="ace-icon fa fa-caret-down"></i>

                        </a>
                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('/account/index'); ?>"><i class="ace-icon fa fa-user"></i> Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('/account/logout'); ?>" data-method="post"><i class="ace-icon fa fa-power-off"></i> Sign out</a>
                            </li>
                        </ul>
                    <?php } ?>

                </li>
            </ul>

        </div>
    </div>
</div>