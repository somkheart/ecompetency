<?php
/* @var $this ComptencyFunctionalController */
/* @var $model ComptencyFunctional */

$this->breadcrumbs = array(
    'Comptency Functionals' => array('index'),
    'Create',
);
/*
  $this->menu=array(
  array('label'=>'List ComptencyFunctional', 'url'=>array('index')),
  array('label'=>'Manage ComptencyFunctional', 'url'=>array('admin')),
  );
 * 
 */
?>
<h1>เพิ่มรายการประเมิน Functional Competency </h1>

<?php echo CHtml::beginForm(); ?>
<div class="row functioname" style="padding:10px">
    <?php echo CHtml::activeLabel($model, 'function_name'); ?>
    <?php echo CHtml::activeTextField($model, 'function_name', array('size' => 50)); ?>
</div>
<div id="example">
    <table id="functionlist">
        <colgroup>
            <col />
            <col />
            <col  />
            <col  />
            <col />
        </colgroup>
        <thead>
            <tr>
                <th data-field="make">รายการประเมิน</th>
                <th data-field="model">ระดับ 1 </th>
                <th data-field="year">ระดับ 2</th>
                <th data-field="category">ระดับ 3</th>
                <th data-field="airconditioner">ระดับ 4</th>
                <th data-field="airconditioner4">ระดับ 5</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.	ความรู้และทักษะเกี่ยวกับงานสารบรรณ</td>
                <td>•	สามารถดำเนินการทำเรื่องเบิกจ่ายงานจ้างเหมาบริการ ตามที่ได้รับมอบหมายได้</td>
                <td>
        <ui>
            <li>สามารถดำเนินการธุรการเกี่ยวกับการจัดหางานบริการต่างๆ ตามที่ได้รับมอบหมายได้</li>
            <li>สามารถกำกับติดตามการทำงานของผู้รับจ้างเหมาบริการได้</li>
        </ui>
</td>
                <td>Saloon</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td>2.  ความรู้และทักษะเกี่ยวกับงานสาธารณูปโภค</td>
                <td>
                    •	สามารถดำเนินการธุรการเกี่ยวกับการจัดหางานบริการต่างๆ ตามที่ได้รับมอบหมายได้
                    •	สามารถกำกับติดตามการทำงานของผู้รับจ้างเหมาบริการได้
                </td>
                <td>2002</td>
                <td>Saloon</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
        </tbody>
    </table>

    <script>
        $(document).ready(function () {
            $("#functionlist").kendoGrid({
                //  height: 550,
                sortable: true,

 
            });
        });
    </script>
</div>
<div class="row submit"activeTextField style="padding:10px;" style="text-align: center">
    <?php echo CHtml::submitButton('บันทึกข้อมูล'); ?>
    <?php echo CHtml::submitButton('ยกเลิก'); ?>
</div>
<div class="row cancle">
</div>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
