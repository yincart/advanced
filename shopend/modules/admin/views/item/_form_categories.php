<?php
$root = StoreCategory::model()->findByPk(2);
$descendants = $root->descendants()->findAll();
?>

<div class="row" style='margin-bottom:10px'>
    <?php echo $form->labelEx($model, 'category_id', array('class' => 'span2 control-label')); ?>
    <div class="span5">
        <?php echo StoreCategory::model()->getSelect($descendants, 'item[store_category_id]'); ?>
    </div>
    <?php //echo $form->error($model, 'category_id'); ?>
</div>
