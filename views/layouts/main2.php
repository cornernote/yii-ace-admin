<?php
/**
 * Main layout
 *
 * @var $this CController
 * @var $content
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="language" content="en"/>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body id="top" class="<?php echo $this->id . '-' . $this->action->id; ?>">

<?php echo $content; ?>

</body>
</html>