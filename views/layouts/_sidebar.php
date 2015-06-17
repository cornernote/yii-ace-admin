<?php
/**
 * @var $this CController
 */

$controller = Yii::app()->controller;
?>

<?php if (!Yii::app()->user->isGuest): ?>
    <div id="sidebar" class="sidebar sidebar-fixed responsive">
        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i>', array('/'), array('class' => 'btn btn-success')); ?>
                <?php echo CHtml::link('<i class="ace-icon fa fa-book"></i>', array('/'), array('class' => 'btn btn-info')); ?>
                <?php echo CHtml::link('<i class="ace-icon fa fa-users"></i>', array('/'), array('class' => 'btn btn-warning')); ?>
                <?php echo CHtml::link('<i class="ace-icon fa fa-signal"></i>', array('/'), array('class' => 'btn btn-danger')); ?>
            </div>
            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <?php echo CHtml::link('', array('/'), array('class' => 'btn btn-success')); ?>
                <?php echo CHtml::link('', array('/'), array('class' => 'btn btn-info')); ?>
                <?php echo CHtml::link('', array('/'), array('class' => 'btn btn-warning')); ?>
                <?php echo CHtml::link('', array('/'), array('class' => 'btn btn-danger')); ?>
            </div>
        </div>

        <ul class="nav nav-list">
            <li class="">
                <a href="<?= Yii::app()->homeUrl ?>">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="<?php echo ($controller->id == 'admin') ? 'open active' : '' ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text">
                        Users
                    </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?php echo $controller->id == 'admin' && $controller->action->id == 'create' ? 'active' : '' ?>">
                        <?php
                        echo CHtml::link('<i class="menu-icon fa fa-caret-right"></i> Create User', array('/user/admin/create'));
                        echo '<b class="arrow"></b>';
                        ?>
                    </li>
                </ul>
            </li>

            <?php
            //$this->widget('ace.widgets.AceSidebarMenu', array(
            //    'items' => MenuItem::model()->findByPk(1)->getItems($depthLimit),
            //));
            ?>


        </ul>
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
        <script>
            try {
                ace.settings.check('sidebar', 'collapsed');
            } catch (e) {
            }
        </script>
    </div>
<?php endif; ?>
