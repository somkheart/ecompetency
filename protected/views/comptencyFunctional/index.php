<?php
/* @var $this ComptencyFunctionalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Comptency Functionals',
);
/*
$this->menu = array(
    array('label' => 'Create ComptencyFunctional', 'url' => array('create')),
    array('label' => 'Manage ComptencyFunctional', 'url' => array('admin')),
);
 * */

$index = 2;
?>
<h1>Comptency Functionals</h1>
<div id="function-create"><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/comptencyFunctional/create">เริ่มหัวข้อใหม่</a></div>
<div style="padding:5px" ></div>
<table id="function-grid">
    <colgroup>
        <col  style="width:50px" />
        <col />
        <col  style="width:80px"/>
        <col   style="width:170px"/>
    </colgroup>
    <thead>
        <tr>
            <th data-field="make" >ลำดับ</th>
            <th data-field="model">Functional Competency</th>
            <th data-field="year">สถานะ</th>
            <th data-field="category" style="text-align: center">แก้ไข/ลบ</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
        ));
        ?>
    </tbody>
</table>
<script>

    $(document).ready(function () {
        $("#function-grid").kendoGrid({
            sortable: true,
            pageable: true,
        });
        $(".function-edit").kendoButton();
        $(".function-delete").kendoButton();
        $("#function-create").kendoButton();
        $(".previous a,.page a,.next a ").kendoButton();
    });
</script>

