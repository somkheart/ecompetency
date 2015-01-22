<?php
/* @var $this CompetencyAssessmentController */
/* @var $model CompetencyAssessment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competency-assessment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
	<div class="row" style="padding:10px">
		<?php echo $form->labelEx($model,'topic_id',array('style'=>'width:200px;')); ?>
                <?php echo $form->dropDownList($model, 'topic_id', CHtml::listData(CompetencyTopic::model()->findAll(), "topic_id", "topic_name"), array('class' => 'k-input', 'style' => 'width:400px')); ?>
		<?php echo $form->error($model,'topic_id'); ?>
	</div>
        <div class="row" style="padding:10px">
            <span >
		<?php echo $form->labelEx($model,'usercode',array('style'=>'width:200px')); ?>
		<?php echo $form->textField($model,'usercode',array('size'=>60,'maxlength'=>100,'style'=>'width:200px')); ?>
		<?php echo $form->error($model,'usercode'); ?>
            </span>
          <span>
		<?php echo $form->labelEx($model,'position_id',array('style'=>'padding-left:30px;width:200px')); ?>
                <?php echo $form->dropDownList($model, 'position_id', CHtml::listData(UserPosition::model()->findAll(), "position_id", "position_name"), array('class' => 'k-input', 'style' => 'width:250px', 'empty' => ' ---- กรุณาเลือกตำแหน่ง ---- ')); ?>
		<?php echo $form->error($model,'position_id'); ?>
          </span>
	</div>
         <div>
             <span>
            <?php echo $form->labelEx($model,'level_id',array('style'=>'padding-left:10px;width:200px  ')); ?>
                <?php echo $form->dropDownList($model, 'level_id', CHtml::listData(CompetencyLevel::model()->findAll(), "level_id", "level_name"), array('class' => 'k-input', 'style' => 'width:200px', 'empty' => ' ---- ระดับ ---- ')); ?>
		<?php echo $form->error($model,'level_id'); ?>
             </span>
             <span>
            <?php echo $form->labelEx($model,'function_id',array('style'=>'padding-left:30px;width:200px')); ?>
                <?php echo $form->dropDownList($model, 'function_id', CHtml::listData(ComptencyFunctional::model()->findAll(), "function_id", "function_name"), array('class' => 'k-input', 'style' => 'width:250px', 'empty' => ' ---- Functional Competency  ---- ')); ?>
		<?php echo $form->error($model,'function_id'); ?>
             </span>
        </div>
        <div style="padding:10px">
        </div>

</div>
<div>
<table id="tablesub">
                <colgroup>
                    <col style="width:50px"/>
                    <col style="width:200px"/>
                    <col />
              
                </colgroup>
                <thead>
                    <tr>
                        <th data-field="index">ลำดับ</th>
                        <th data-field="usercode">รหัสเจ้าหน้าที่(ผุ้ประเมิน)</th>
                        <th data-field="status">สถานะ</th>
                
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><div style="text-align: center">1</div></td>
                        <td><input name="userList" type="textbox" class="k-textbox"></td>
                        <td>ผู้บังคับบัญชาโดยตรง</td>
                   
                    </tr>
                    <tr>
                        <td><div style="text-align: center">2</div></td>
                        <td><input name="userList" type="textbox" class="k-textbox"></td>
                        <td>ผู้บังคับบัญชาโดยอ้อม หรือ ผู้บังคับบัญชาที่สูงขึ้นไปอีกระบบ</td>
                 
                    </tr>
                     <tr>
                        <td><div style="text-align: center">3</div></td>
                        <td><input name="userList" type="textbox" class="k-textbox"></td>
                        <td>เพื่อนรวมงานคนที่ 1 ที่ทำงานร่วมกันเป็นประจำภายในหรือภายนอกหน่วยงานในกลุ่มงานเดียวกัน</td>
                   
                    </tr>
                     <tr>
                        <td><div style="text-align: center">4</div></td>
                        <td><input name="userList" type="textbox" class="k-textbox"></td>
                        <td>เพื่อนรวมงานคนที่ 1 ที่ทำงานร่วมกันเป็นประจำภายในหรือภายนอกหน่วยงานในกลุ่มงานเดียวกัน</td>
                      
                    </tr>
                     <tr>
                        <td><div style="text-align: center">5</div></td>
                        <td><input name="userList" type="textbox" class="k-textbox"></td>
                        <td>ผู้ใต้บังคับบัญชาคนที่ 1 </td>
                  
                    </tr>
                    <tr>
                        <td><div style="text-align: center">6</div></td>
                        <td><input name="userList" type="textbox" class="k-textbox"></td>
                        <td>ผู้ใต้บังคับบัญชาคนที่ 1 </td>
                  
                    </tr>
                </tbody>
            </table>
</div>
<div class="row buttons" style="padding-left:100px;padding:10px">
		<?php echo CHtml::submitButton($model->isNewRecord ? '  บันทึกข้อมูล  ' : 'บันทึก',array('class'=>'k-button','style'=>'text-align:center')); ?>
</div>
<?php $this->endWidget(); ?>
<script>
                $(document).ready(function()
                {
                    $("#tablesub").kendoGrid({
                        width:500,
                      //  height: 750,
                        sortable: true
                    });
                });
 </script>
<script>
    $("#CompetencyAssessment_usercode").kendoMaskedTextBox();
    $(".k-input").kendoDropDownList();
    $("#CompetencyAssessment_position_name").kendoMaskedTextBox();
    $(".k-input").attr("disabled", true);
</script>
<!-- form -->