<?php
/**
 * @var $this CController
 * @var string $content
 */

!empty($viewPath) || $viewPath = '//../../../vendor/cornernote/yii-ace-admin/views/layouts';
!empty($viewNavbar) || $viewNavbar = $viewPath . '/_navbar';
!empty($viewSidebar) || $viewSidebar = $viewPath . '/_sidebar';
!empty($viewFooter) || $viewFooter = $viewPath . '/_footer';
!empty($viewContent) || $viewContent = $viewPath . '/_content';

Yii::setPathOfAlias('ace', Yii::getPathOfAlias('vendor') . '/cornernote/yii-ace-admin');
$this->widget('ace.widgets.AceAsset');
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="UTF-8">
    <title><?php echo CHtml::encode($this->pageTitle . ' :: ' . Yii::app()->name); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
</head>
<body id="top" class="no-skin <?php echo $this->id . '-' . $this->action->id; ?>">

<?php $this->renderPartial($viewNavbar); ?>

<div class="main-container" id="main-container">

    <?php $this->renderPartial($viewSidebar); ?>

    <?php $this->renderPartial($viewContent, array('content' => $content)); ?>

    <?php $this->renderPartial($viewFooter); ?>

</div>


</body>
</html>

