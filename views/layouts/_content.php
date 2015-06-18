<?php
/**
 * @var $this CController
 */
?>


<div class="main-content">
    <?php if ($this->breadcrumbs) { ?>
        <div class="breadcrumbs breadcrumbs-fixed">
            <?php echo TbHtml::breadcrumbs($this->breadcrumbs); ?>
        </div>
    <?php } ?>

    <div class="page-content">

        <div class="page-header">
            <h1>
                <?php echo $this->pageTitle; ?>
            </h1>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <?php
                echo Yii::app()->user->multiFlash();
                echo $content;
                ?>
            </div>
        </div>

    </div>
</div>
