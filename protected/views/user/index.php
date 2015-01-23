<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);
/*
$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
 * 
 */
$pre_html = '   <table id="grid">
                <colgroup>
                    <col />
                    <col />
                    <col style="width:110px" />
                    <col style="width:120px" />
                    <col style="width:130px" />
                </colgroup>
                <thead>
                    <tr>
                        <th data-field="index">ลำดับ</th>
                        <th data-field="name">ชื่อ นามสกุล </th>
                        <th data-field="position"></th>
                        <th data-field="division">Category</th>
                        <th data-field="edit">Air Conditioner</th>
                    </tr>
                </thead>'
;
$post_html = '</tbody></table>';
?>

<h1>Users</h1>
<?php
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
    
	'itemView'=>'_view',
)); ?>
