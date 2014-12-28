<?php
/* @var $this CompetencyAssessmentController */
/* @var $model CompetencyAssessment */
/* @var $form CActiveForm */
?>
<script>
    $().ready(function(){
 
        $("#CompetencyAssessment_usercode").blur(function(){
          //  alert("Test");
            
        });
        
         $("#CompetencyAssessment_group_id").change(function ()
        {
                    var group_id=$(this).val();
                    var url = "";
                    url = "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/department/ListByGroup/group_id/" + group_id;
                    var departmentSource = new kendo.data.DataSource({
                    transport:  {
                    read: {
                    url: url,
                            dataType: "json",
                    }
                    },
                            schema: {
                            data: "data"
                            }
                    });
                $("#CompetencyAssessment_department_id").kendoComboBox({
                    dataTextField: "department_name",
                    dataValueField: "department_id",
                    dataSource: departmentSource,
        
                });
            });
            $("#CompetencyAssessment_department_id").change(function(){
                
                  var department_id=$(this).val();
                    var url = "";
                    url = "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/division/DivisionByDaprtment/department_id/" + department_id;
    
                    var divisionSource = new kendo.data.DataSource({
                    transport:  {
                    read: {
                    url: url,
                            dataType: "json",
                    }
                    },
                            schema: {
                            data: "data"
                            }
                    });
                $("#User_division_id").kendoComboBox({
                    dataTextField: "division_name",
                    dataValueField: "division_id",
                    dataSource: divisionSource,
                });
            });
    });
</script>
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
		<?php echo $form->labelEx($model,'topic_id'); ?>
                <?php echo $form->dropDownList($model, 'topic_id', CHtml::listData(CompetencyTopic::model()->findAll(), "topic_id", "topic_name"), array('class' => 'k-input', 'style' => 'width:300px', 'empty' => ' ---- กรุณาเลือกหัวข้อการประเมิน ---- ')); ?>
		<?php echo $form->error($model,'topic_id'); ?>
	</div>
        <div class="row" style="padding:10px">
            <span>
		<?php echo $form->labelEx($model,'usercode'); ?>
		<?php echo $form->textField($model,'usercode',array('size'=>60,'maxlength'=>100,'style'=>'width:200px')); ?>
		<?php echo $form->error($model,'usercode'); ?>
            </span>
	</div>
        <div class="row" style="padding:10px">
            <span>
		<?php echo $form->labelEx($model,'position_id'); ?>
                <?php echo $form->dropDownList($model, 'position_id', CHtml::listData(UserPosition::model()->findAll(), "position_id", "position_name"), array('class' => 'k-input', 'style' => 'width:200px', 'empty' => ' ---- กรุณาเลือกตำแหน่ง ---- ')); ?>
		<?php echo $form->error($model,'position_id'); ?>
            </span>
            <span>
                <?php echo $form->labelEx($model,'level',array('style'=>'padding-left:50px')); ?>
		<?php echo $form->textField($model,'level'); ?>
                <?php echo $form->error($model,'level'); ?>
            </span> 
        </div>

	<div class="row" style="padding:10px">
            <span>
		<?php echo $form->labelEx($model,'group_id'); ?>
                <?php echo $form->dropDownList($model, 'group_id', CHtml::listData(Workgroup::model()->findAll(), "group_id", "group_name"), array('class' => 'k-input', 'style' => 'width:200px', 'empty' => ' ---- กรุณาเลือกกลุ่มงาน ---- ')); ?>
		<?php echo $form->error($model,'group_id'); ?>
            </span>
            <span>
		<?php echo $form->labelEx($model,'department_id',array('style'=>'padding-left:50px')); ?>
                <?php echo $form->dropDownList($model, 'department_id', CHtml::listData(Department::model()->findAll(), "department_id", "department_name"), array('class' => 'k-input', 'style' => 'width:200px', 'empty' => ' กรุณาเลือกฝ่าย')); ?>
		<?php echo $form->error($model,'department_id'); ?>
            </span>
            <span>
		<?php echo $form->labelEx($model,'division_id',array('style'=>'padding-left:50px')); ?>
                <?php echo $form->dropDownList($model, 'division_id', CHtml::listData(Division::model()->findAll(), "division_id", "division_name"), array('class' => 'k-input', 'style' => 'width:150px', 'empty' => '  กรุณาเลือกส่วนงาน   ')); ?>
		<?php echo $form->error($model,'division_id'); ?>
            </span>
	</div>
        <div class="row" style="padding:10px;">
            <span>
                <?php echo $form->labelEx($model,'core_flag'); ?>
                <?php echo $form->checkBox($model, 'core_flag'); ?>
		<?php echo $form->error($model,'core_flag'); ?>
            </span>
              <span>
                <?php echo $form->labelEx($model,'manage_flag',array('style'=>'padding-left:220px')); ?>
                <?php echo $form->checkBox($model, 'manage_flag'); ?>
		<?php echo $form->error($model,'manage_flag'); ?>
            </span>
            <span>
	    <?php echo $form->labelEx($model,'function_id',array('style'=>'padding-left:240px')); ?>
	    <?php echo $form->dropDownList($model, 'function_id', CHtml::listData(ComptencyFunctional::model()->findAll(), "function_id", "function_name"), array('class' => 'k-input', 'style' => 'width:150px', 'empty' => ' ---- ฟังก์ชัน ----     ')); ?>
            <?php echo $form->error($model,'status'); ?>
            </span>
	</div>
        <div class="row" style="padding:10px;display: none">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->radioButton($model,'status',array('1','2')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

        <div class="row" id="sub-grid">
	</div>
	<div class="row buttons" style="padding-left:100px;padding:10px">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'เพิ่ม' : 'บันทึก',array('class'=>'k-button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<script>
        $(document).ready(function () {
                    $("#sub-grid").kendoGrid({
                        dataSource: {
                           data: [
                            { Index:1,Usercode: "571007", FullName: "นายสมเกียรติ ไกรสินธุ์",AssessorCode:"571007  นายสมเกียรติ ไกรสินธุ์",AssessorType:"1" },
                            { Index:2,Usercode: "571007", FullName: "x",AssessorCode:"571007",AssessorType:"1" },
                            { Index:3,Usercode: "571007", FullName: "x",AssessorCode:"571007",AssessorType:"1" },
                            { Index:4,Usercode: "571007", FullName: "x",AssessorCode:"571007",AssessorType:"1" },
                            { Index:5,Usercode: "571007", FullName: "x",AssessorCode:"571007",AssessorType:"1" },
                            { Index:6,Usercode: "571007", FullName: "x",AssessorCode:"571007",AssessorType:"1" },
                            { Index:7,Usercode: "571007", FullName: "x",AssessorCode:"571007",AssessorType:"1" },
                          ],
                          fields:[
                             // Index : {editable:false}
                          ]
                        },
                        editable:true,
                      //  groupable: true,
                        sortable: true,
                       // toolbar :["create"],
                        pageable: {
                            refresh: true,
                            pageSizes: true,
                            buttonCount: 5
                        },
                        columns: [
                        {
                            field: "Index",
                            title: "ลำดับ",
                            width: 50
                        }, 
                        {
                            field: "Usercode",
                            title: "รหัสผู้ประเมิน",
                            width: 100
                        }, 
                        {
                            field: "FullName",
                            title: "ชื่อ - นามสกุล ",
                            width: 200
                     
                        }, {
                            field: "AssessorCode",
                            title: "ผู้ประเมิน"
                        }, {
                            field: "AssessorType",
                            title:"สถานผู้ประเมิน",
                            width: 150,
                            groupHeaderTemplate: "#if(value==1){# Core Competency #} else if(value==2) {# Managerial Competency #} else if(value==3) {# Functional Competency #}#"
                
                        }]
                    });
                });
   
    $("#CompetencyAssessment_level").kendoDropDownList();
    $("#CompetencyAssessment_usercode").kendoMaskedTextBox();
    $(".k-input").kendoDropDownList();
    $("#CompetencyAssessment_position_name").kendoMaskedTextBox();
     $(".k-input").attr("disabled", true);
</script>
<!-- form -->