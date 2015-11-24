<?php
use yii\helpers\Html;
use hass\extensions\adminlte\ActiveForm;
?>
<?php $form = ActiveForm::begin([
    'enableAjaxValidation' => true,
    'options' => ['enctype' => 'multipart/form-data'],
]); ?>

<div class="box box-solid">
<?php if($model->isNewRecord):?>
    <div class="box-header with-border" >
        创建新用户组
    </div>
<?php endif;?>

	<div class="box-body">
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'description')->textarea() ?>
<?= $form->field($model, 'ruleName')->textarea() ?>
<?= $form->field($model, 'data')->textarea() ?>
	</div>
</div>

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? Yii::t('hass', 'Create') : Yii::t('hass', 'Update'), ['class' => 'btn bg-maroon btn-flat btn-block']) ?>
</div>
<?php ActiveForm::end(); ?>