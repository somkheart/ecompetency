<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/styles/kendo.common.min.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/styles/kendo.default.min.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/styles/kendo.dataviz.min.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/styles/kendo.dataviz.default.min.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles/default.css" rel="stylesheet"/>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/js/angular.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoUI/js/kendo.all.min.js"></script>
    </head>
    <body>
        <div id="example">
            <div class="leftImage"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/styles/header.png" height="110" ></div>
            <div id="horizontal" style="height: 500px; width: 100%;" data-role="splitter">
                <div id="left-pane">
                    <div class="pane-content">
                        <div class="demo-section k-header">
                            <div id="treeview-left"></div>
                        </div>
                    </div>

                </div> 
                <div id="right-pane">
                    <div class="pane-content">
                        <div id="right-pane">
                            <div id="ContentData"><?php echo $content; ?></div>
                            <div id="centralGrid" hidden="true"></div>
                            <div id="grid"  hidden="true"></div>
                            <div id="employeeGrid" hidden="true"></div>
                            <div id="dtigroup" hidden="true"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var compentencyName = "";
                var crudServiceBaseUrl = "";
                var coreCompentency = "Core Competencies (สมรรถนะความสามารถหลัก)";
                var managerialCompentency = "Managerial Competencies (สมรรถนะความสามารถในการบริหาร)";
                var functionalCompentency = "Functional Competencies (สมรรถนะความสามารถตามสายงาน)";

                function onSelect(e) {
                    var selected = this.text(e.node).toString();
                    var grid = $('#grid').data('kendoGrid');
                    var employeeGrid = $('#employeeGrid').data('kendoGrid');
                    var dataSrc = grid.dataSource;
                    var employeeSrc = employeeGrid.dataSource;
                    if (selected == "สำนักบริหาร กลาง") {
                        $('#centralGrid').show();
                        $("#centralGrid th[data-field=name]").html("สำนักบริหารกลาง");
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                    }
                    if (selected == "จัดการกลุ่มงาน") {
                        $('#dtigroup').show();
                        $("#dtigroup th[data-field=name]").html("จัดการกลุ่มงาน");
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                    }
                    if (selected == "จัดการ ฝ่าย") {
                        $('#grid').show();
                        $("#grid th[data-field=name]").html("จัดการฝ่าย");
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                    }
                    if (selected == "จัดการ ส่วนงาน") {
                        $('#grid').show();
                        $("#grid th[data-field=name]").html("จัดการส่วนงาน");
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                    }
                    if (selected == "รายชื่อเจ้าหน้าที่") {
                        $('#employeeGrid').show();
                        $("#employeeGrid th[data-field=name]").html(coreCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                    }
                    if (selected == "Core Competencies") {
                        $('#grid').show();
                        $("#grid th[data-field=name]").html(coreCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                    }
                    else if (selected == "Managerial Competencies") {
                        $('#grid').show();
                        $("#grid th[data-field=name]").html(managerialCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/managerialCompetenciesData.php";
                    }
                    else if (selected == "Functional Competencies") {
                        $('#grid').show();
                        $("#grid th[data-field=name]").html(managerialCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/managerialCompetenciesData.php";
                    }
                    else if (selected == "หัวข้อการประเมิน") {
                        $('#grid').show();
                        $("#grid th[data-field=name]").html(managerialCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/managerialCompetenciesData.php";
                    }
                     else if (selected == "กำหนดผู้ประเมิน") {
                        $('#grid').show();
                        $("#grid th[data-field=name]").html(managerialCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/managerialCompetenciesData.php";
                    }
                    else if (selected == "AHD") {
                        $('#grid').show();
                        $("#grid th[data-field=name]").html(functionalCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/funtionalCompetenciesData.php?function=" + selected;
                    }
                    else if (selected == "ODC") {
                        $('#grid').hide();
                        $('#employeeGrid').show();

                        employeeSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/employeeData.php?employee_division=" + selected;
                    }
                    var data = dataSrc.read();
                    grid.refresh();

                    var data = employeeSrc.read();
                    employeeGrid.refresh();

                }
                $(document).ready(function() {
                    //$("#verticalMenu").kendoMenu({orientation: "vertical" });

                    var serviceRoot = "http://localhost/eCompetency/dataServing/divisionData.php";
                    homogeneous = new kendo.data.HierarchicalDataSource({
                        transport: {
                            read: {
                                url: serviceRoot,
                                dataType: "jsonp"
                            }
                        },
                        schema: {
                            model: {
                                id: "division_id",
                                hasChildren: "HasEmployees"
                            }
                        }
                    });

//                    $("#treeview-left").kendoTreeView({
//                        dataSource: homogeneous,
//                        dataTextField: "division_code"
//                    });
                    var inlineDefault = new kendo.data.HierarchicalDataSource({
                        data: [
                            {text: "จัดการ โครงสร้างองค์กร",expanded:true,items: [
                                    {text: "สำนักบริหาร กลาง"},
                                    {text: "จัดการกลุ่มงาน"},
                                    {text: "จัดการ ฝ่าย"},
                                    {text: "จัดการ ส่วนงาน"}
                                ]},
                            {text: "ข้อมูลเจ้าหน้าที่",expanded:true, items: [
                                    {text: "รายชื่อเจ้าหน้าที่"}
                                ]},
                            {text: "จัดการ Competencies",expanded:true, items: [
                                    {text: "Core Competencies"},
                                    {text: "Managerial Competencies"},
                                    {text: "Functional Competencies"}
                                ]},
                            {text: "การประเมิน",expanded:true, items: [
                                    {text: "หัวข้อการประเมิน"},
                                    {text: "กำหนดผู้ประเมิน"}
                                ]},
                            {text: "รายงาน",expanded:true, items: [
                                    {text: "1.Competency Evalution Result"},
                                    {text: "2.แผนพัฒนาแต่ละบุคคล"},
                                    {text: "3.รายงาน Competency ทั้งหมด"},
                                ]}
                        ]
                    });

                    $("#treeview-left").kendoTreeView({
                        dataSource: inlineDefault,
                        select: onSelect
                    });

                    $("#horizontal").kendoSplitter({
                        panes: [
                            {collapsible: true, size: "220px"},
                            {collapsible: false}
                        ]
                    });

                    var dataSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: crudServiceBaseUrl,
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                        },
                        schema: {
                            data: "data",
                            model: {
                                id: "id",
                                fields: {
                                    name: {validation: {required: true}},
                                    maxvalue: {type: "number", validation: {min: 0, required: true}}

                                }

                            }
                        }
                    });

                  

                    var employeeSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: crudServiceBaseUrl,
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                        },
                        schema: {
                            data: "data",
                            model: {
                                id: "id",
                                fields: {
                                    name: {validation: {required: true}},
                                    maxvalue: {type: "number", validation: {min: 0, required: true}}

                                }

                            }
                        }
                    });
                    
                      $("#grid").kendoGrid({
                        dataSource: dataSource,
                        pageable: true,
                        height: 550,
                        toolbar: ["create"],
                        columns: [
                            {feild:"lastname",title:"นามสกุล"},
                            {field: "name", title: compentencyName},
                            {field: "maxvalue", title: "ระดับที่คาดหวัง", width: "200px"},
                            {command: ["edit", "destroy"], title: "&nbsp;", width: "200px"}],
                        editable: "inline"
                    });
     
                    $("#employeeGrid").kendoGrid({
                        dataSource: employeeSource,
                        pageable: true,
                        height: 550,
                        toolbar: ["create"],
                        columns: [
                            {field: "employee_id", title: "รหัสเจ้าหน้าที่", width: "100px"},
                            {field: "title", title: "คำนำหน้าชื่อ", width: "200px"},
                            {field: "firstname", title: "ชื่อ", width: "200px"},
                            {field: "lastname", title: "นามสกุล", width: "100px"},
                            {field: "employee_division", title: "ส่วนงาน", width: "150px"},
                            {field: "level", title: "ระดับ", width: "50px"},
                            {command: ["edit", "destroy"], title: "&nbsp;"}],
                        editable: "popup"
                    });
                    
                    $("#centralGrid").kendoGrid({
                        dataSource: dataSource,
                        pageable: true,
                        height: 550,
                        toolbar: ["create"],
                        columns: [
                            {field: "DeptName", title: "รายการ", width: "500px"},
                            {command: ["edit", "destroy"], title: "&nbsp;", width: "200px"}
                        ],
                           // editable: "inline",
                            editable: "inner"
                    });
                    $("#dtigroup").kendoGrid({
                        dataSource: dataSource,
                        pageable: true,
                        height: 550,
                        toolbar: ["create"],
                        columns: [
                            {field: "group_id", title: "รหัสเจ้าหน้าที่", width: "100px"},
                            {command: ["edit", "destroy"], title: "&nbsp;", width: "200px"}
                        ],
                           // editable: "inline",
                            editable: "popup"
                    });
                });
            </script>
        </div>

    </body>
</html>
