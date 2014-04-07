<?php
/* @var $this SearchtagController */
/* @var $model Searchtag */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'searchtag-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'searchTagId'); ?>
		<?php echo $form->textField($model,'searchTagId'); ?>
		<?php echo $form->error($model,'searchTagId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'searchtag'); ?>
		<?php echo $form->textField($model,'searchtag',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'searchtag'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->