<?php
/* @var $this ComptencyFunctionalController */
/* @var $model ComptencyFunctional */

$this->breadcrumbs=array(
	'Comptency Functionals'=>array('index'),
	$model->function_id=>array('view','id'=>$model->function_id),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List ComptencyFunctional', 'url'=>array('index')),
	array('label'=>'Create ComptencyFunctional', 'url'=>array('create')),
	array('label'=>'View ComptencyFunctional', 'url'=>array('view', 'id'=>$model->function_id)),
	array('label'=>'Manage ComptencyFunctional', 'url'=>array('admin')),
);
 * 
 */
?>
<h1>แก้ไข Functional Competency </h1>
<?php echo CHtml::beginForm(); ?>
<div class="row functioname" style="padding:10px">
    <?php echo CHtml::activeLabel($model, 'function_name'); ?>
    <?php echo CHtml::activeTextField($model, 'function_name', array('size' => 50)); ?>
</div>
<div class="row detail" style="padding:10px">
    <?php echo CHtml::activeLabel($model, 'function_detail'); ?>
    <?php echo CHtml::activeTextArea($model, 'function_detail', array('rows'=>10,'cols'=>100)); ?>
</div>
<table id="edit-sub">
                <colgroup>
         
                    <col style="width:150px"/>
                    <col style="width:150px"/>
                    <col style="width:150px"/>
                    <col style="width:150px" />
                    <col style="width:150px"/>
                    <col style="width:150px"/>
                </colgroup>
                <thead>
                    <tr>
                
                        <th data-field="function_name">Functional</th>
                        <th data-field="dic1">ระดับ 1 </th>   
                        <th data-field="dic2">ระดับ 2 </th>
                        <th data-field="dic3">ระดับ 3</th>
                        <th data-field="dic4">ระดับ 4</th>        
                        <th data-field="dic5">ระดับ 5</th>     
                    </tr>
                </thead>
                <tbody>
                   
                    <?php 
                    foreach($funclist as $item){ ?>
                    <tr>
                     
                        <td><?=$item->flist_name?></td>
                        <td><?=$item->dic1?></td>
                        <td><?=$item->dic2?></td>
                        <td><?=$item->dic3?></td>
                        <td><?=$item->dic4?></td>
                        <td><?=$item->dic5?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>


<div class="row submit"activeTextField style="padding:10px;" style="text-align: center">
<?php echo CHtml::submitButton('บันทึกข้อมูล', array('class' => 'k-button', 'style' => 'text-align:center')); ?>
<?php echo CHtml::submitButton('ยกเลิก', array('class' => 'k-button', 'style' => 'text-align:center')); ?>
</div>
<div class="row cancle">
</div>

<?php echo CHtml::endForm(); ?>
</div><!-- form -->
<script>
    $(document).ready(function()
                {
                    $("#edit-sub").kendoGrid({
                        width:500,
                      //  height: 750,
                        sortable: true
                    });
                });
</script>
