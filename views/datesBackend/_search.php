<?php
/**
 * Отображение для _search:
 *
 *   @category YupeView
 *   @package  yupe
 *   @author   Yupe Team <team@yupe.ru>
 *   @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 *   @link     http://yupe.ru
 **/
$form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm', [
        'action'      => Yii::app()->createUrl($this->route),
        'method'      => 'get',
        'type'        => 'vertical',
        'htmlOptions' => ['class' => 'well'],
    ]
);
?>

<fieldset>
    <div class="row">
                    <div class="col-sm-3">
                <?php echo $form->textFieldGroup($model, 'id', array('widgetOptions' => array('htmlOptions' => array('class' => 'popover-help', 'data-original-title' => $model->getAttributeLabel('id'), 'data-content' => $model->getAttributeDescription('id'))))); ?>
            </div>
            <div class="col-sm-3">
                <?php echo $form->dateTimePickerGroup($model,'date_reservation', array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array()), 'prepend'=>'<i class="fa fa-calendar"></i>')); ?>
            </div>
            <div class="col-sm-3">
                <?php echo $form->dateTimePickerGroup($model,'opening_booking', array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array()), 'prepend'=>'<i class="fa fa-calendar"></i>')); ?>
            </div>
            <div class="col-sm-3">
                <?php echo $form->dateTimePickerGroup($model,'closing_booking', array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array()), 'prepend'=>'<i class="fa fa-calendar"></i>')); ?>
            </div>
            <div class="col-sm-3">
                <?php echo $form->textFieldGroup($model, 'maximum_quantity', array('widgetOptions' => array('htmlOptions' => array('class' => 'popover-help', 'data-original-title' => $model->getAttributeLabel('maximum_quantity'), 'data-content' => $model->getAttributeDescription('maximum_quantity'))))); ?>
            </div>
            <div class="col-sm-3">
                <?php echo $form->textFieldGroup($model, 'status', array('widgetOptions' => array('htmlOptions' => array('class' => 'popover-help', 'data-original-title' => $model->getAttributeLabel('status'), 'data-content' => $model->getAttributeDescription('status'))))); ?>
            </div>
    </div>
</fieldset>

    <?php
    $this->widget(
        'bootstrap.widgets.TbButton', [
            'context'     => 'primary',
            'encodeLabel' => false,
            'buttonType'  => 'submit',
            'label'       => '<i class="fa fa-search">&nbsp;</i> ' . Yii::t('booktour', 'Искать Дату'),
        ]
    ); ?>

<?php $this->endWidget(); ?>