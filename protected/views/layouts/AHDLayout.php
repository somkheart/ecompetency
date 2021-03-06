<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<title>ระบบ E-Competency สถาบันเทคโนโลยีป้องกันประเทศ (องค์การมหาชน) กระทรวงกลาโหม </title>
<?php
$baseURL = Yii::app()->getBaseUrl(true);
$person_url = "$baseURL/CompetencyAssessor/JsonUser";
$workgroup_url = "$baseURL/Workgroup";
$workgroup_read = "$baseURL/Workgroup/Json";
$workgroup_update = "$baseURL/Workgroup/Update";

$department_read = "";
$department_update = "";

$division_read = "";
$division_update = "";

$position_read = "";
$position_update = "";

$functional_url = "$baseURL/ComptencyFunctional/index";
?>
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
            <ul id="menu">
                <li style="float:right;">
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">ออกจากระบบ</a>
                </li>
                <li style="width:450px;float:right;text-align:right;">เจ้าหน้าที่ AHD : <?php echo Yii::app()->user->getName(); ?></li>
            </ul>
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
                        <div id="assignCombo" hidden="true" style="height: 40px; margin-top: 10px;">
                            <label class="category-label" style="width:70px">กลุ่มงาน :</label>
                            <input id="function" style="width:200px"/>
                        </div>
                        <div id="graphCombo" hidden="true" style="height: 40px; margin-top: 10px;">
                            <label class="category-label" style="width:70px">ฝ่าย:</label>
                            <input id="person" style="width:200px"/>
                        </div>

                        <div id="ContentData"><?php echo $content; ?></div>
                        <div id="centralGrid" hidden="true"></div>
                        <div id="grid" hidden="true"></div>
                        <div id="competencygrid"  hidden="true"></div>
                        <div id="employeeGrid" hidden="true"></div>
                        <div id="dtigroup" hidden="true"></div>
                        <div id="usergrid" hidden="true">
                         <div class="k-toolbar k-grid-toolbar"><input style="" type="button" value="+ เพิ่มเจ้าหน้าที่ใหม่ " class="k-button k-button-icontext k-grid-add-tmp" onclick="window.location = '<?php echo Yii::app()->getBaseUrl(true); ?>/user/create'"/></div>
                        </div>
                        <div id="positiongrid" hidden="true"></div>
                        <div id="managerialgrid" hidden="true"></div>
                        <div id="competencytopic" hidden="true"></div>
                        <div id="functionalgrid" hidden="true">
                            <div class="k-toolbar k-grid-toolbar"><input style="" type="button" value="+ เพิ่มรายการ " class="k-button k-button-icontext k-grid-add" onclick="window.location = '<?php echo Yii::app()->getBaseUrl(true); ?>/comptencyFunctional/create'"/></div>
                        </div>
                        <div id="departmentgrid" hidden="true"></div>
                        <div id="divisiongrid" hidden="true">
                            <div class="k-toolbar k-grid-toolbar"><a class="k-button k-button-icontext k-grid-add-tmp" href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/division/create"><span class="k-icon k-add"></span>เพิ่มส่วนงาน</a></div>
                        </div>
                        <div id="Assessmentgrid" hidden="true">
                            <div class="k-toolbar k-grid-toolbar"><a class="k-button k-button-icontext k-grid-add-tmp" href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/CompetencyAssessment/create"><span class="k-icon k-add"></span>เพิ่มการประเมิน</a></div>
                        </div>
                        <div class="demo-section k-content">
                            <div id="chart" hidden="true" style="width: 80%;height: 60%"></div>
                        </div>
                        <div class="demo-section-xx" id="split" style="height: 500px; width: 100%;" >
                            <div class="box-col" >
                                <span class="k-textbox k-space-left" >
                                    <input type="text" value="Input with icon left" />
                                    <a href="#" class="k-icon k-i-search">&nbsp;</a>
                                </span>
                                <div class="demo-section-tree-employee">
                                    <div id="treeview-employee-left"  ></div>
                                </div>

                            </div>
                            <div class="box-col">
                                <div class="demo-section-tree-employee">
                                    <div id="treeview-employee-right"  ></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <style>
               
                .k-edit-form-container 
                {
                    width: 600px;
                }
            </style>
            <script>
                $(document).ready(function () {
                    $("#menu").kendoMenu();
                    $("#Division_department_id,#Division_group_id").kendoDropDownList();
                    $("#Division_department_id").change(function(){
                      //  alert('test');
                    });
                    
                    $("#Division_group_id").change(function(){
                        var group_id=$(this).val();
                        var url="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/department/ListByGroup/group_id/"+group_id;
                        $("#Division_department_id").kendoDropDownList({
                            dataTextField: "department_name",
                            dataValueField: "department_id",
                            dataSource: new kendo.data.DataSource(
                                        {
                                        batch: true,
                                        transport: {
                                          read:  {
                                                        type: "POST",
                                                        url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/department/ListByGroup/group_id/"+group_id,
                                                        contentType: "application/json; charset=utf-8",
                                                        dataType: "json"
                                          }
                                        },
                                        schema: {
                                          data: "data",
                                          model: { id: "department_id" }
                                        }
                                      })
                        });
                    });
              //  $("#Division_group_id").change();
                });</script>
            <script>
                var compentencyName = "";
                var crudServiceBaseUrl = "";
                var coreCompentency = "Core Competencies (สมรรถนะความสามารถหลัก)";
                var managerialCompentency = "Managerial Competencies (สมรรถนะความสามารถในการบริหาร)";
                var functionalCompentency = "Functional Competencies (สมรรถนะความสามารถตามสายงาน)";
                init();
                $("#split").kendoSplitter({
                    orientation: "horizontal"
                    
                });
                $("#add-assessment").kendoButton();
                function hidegrid()
                {
                    $("#ContentData").hide();
                    $("#centralGrid").hide();
                    $("#grid").hide();
                    $("#employeeGrid").hide();
                    $("#dtigroup").hide();
                    $("#usergrid").hide();
                    $("#positiongrid").hide();
                    $("#competencygrid").hide();
                    $("#managerialgrid").hide();
                    $("#functionalgrid").hide();
                    $("#departmentgrid").hide();
                    $("#divisiongrid").hide();
                    $("#competencytopic").hide();
                    $("#assignCombo").hide();
                    $("#split").hide();
                    $("#chart").hide();
                    $("#graphCombo").hide();
                    $("#Assessmentgrid").hide();
                }
                function init()
                {
                    $('#usergrid').hide();
                    $("#assignCombo").hide();
                    $('#split').hide();
                    $("#usergrid th[data-field=name]").html("รายชื่อเจ้าหน้าที่");
                }
                function onSelect(e) {
                    var selected = this.text(e.node).toString();
                    var grid = $('#grid').data('kendoGrid');
                    var employeeGrid = $('#employeeGrid').data('kendoGrid');
                    var dataSrc = grid.dataSource;
                    var employeeSrc = employeeGrid.dataSource;
                    hidegrid();
                    if (selected == "สำนักบริหาร กลาง") {
                        $('#centralGrid').show();
                        $("#centralGrid th[data-field=name]").html("สำนักบริหารกลาง");
                    }
                    if (selected == "จัดการกลุ่มงาน") {
                        $('#dtigroup').show();
                        $("#dtigroup th[data-field=name]").html("จัดการกลุ่มงาน");
                    }
                    if (selected == "จัดการ ฝ่าย") {
                        $('#departmentgrid').show();
                        $("#departmentgrid th[data-field=name]").html("จัดการฝ่าย");
                    }
                    if (selected == "จัดการ ส่วนงาน") {
                        $('#divisiongrid').show();
                        $("#divisiongrid th[data-field=name]").html("จัดการส่วนงาน");
                    }
                    if (selected == "จัดการ ตำแหน่ง")
                    {
                        $('#positiongrid').show();
                        $("#positiongrid th[data-field=name]").html("จัดการส่วนงาน");
                    }
                    if (selected == "รายชื่อเจ้าหน้าที่") {
                        $('#usergrid').show();
                        $("#usergrid th[data-field=name]").html(coreCompentency);
                    }
                    if (selected == "Core Competencies") {
                        $('#competencygrid').show();
                        $("#competencygrid th[data-field=name]").html(coreCompentency);
                    }
                    else if (selected == "Managerial Competencies") {
                        $('#managerialgrid').show();
                        $("#managerialgrid th[data-field=name]").html(managerialCompentency);
                    }
                    else if (selected == "Functional Competencies") {
                        $("#usergrid").hide();
                        $('#functionalgrid').show();
                        $("#functionalgrid th[data-field=name]").html(managerialCompentency);
                        //  window.location.href = "<?= $functional_url ?>";
                    }
                    else if (selected == "หัวข้อการประเมิน") {
                        $('#competencytopic').show();
                        $("#competencytcompetencytopicopic th[data-field=name]").html(managerialCompentency);
                    }
                    else if (selected == "กำหนดผู้ประเมิน") {
                        $("#Assessmentgrid th[data-field=name]").html("กำหนดผู้ประเมิน");
                        $("#Assessmentgrid").show();
                        //$('#split').show();
                        // window.location.href = "<?php echo $baseURL; ?>/competencyAssessment/index";
                    }
                    else if (selected == "AHD") {
                        $('#grid').show();
                        $("#grid th[data-field=name]").html(functionalCompentency);
                    }
                    else if (selected == "ODC") {
                        $('#grid').hide();
                        $('#employeeGrid').show();
                    }
                    else if (selected == "1.Competency Evalution Result") {
                       // $("#graphCombo").show();
                        //$("#assignCombo").show();
                        $("#chart").show();
                    }

                    var data = dataSrc.read();
                    grid.refresh();
                    var data = employeeSrc.read();
                    employeeGrid.refresh();
                }

                function createChart() {
                    $("#chart").kendoChart({
                        title: {
                            text: "Competency Evalution Result"
                        },
                        legend: {
                            position: "top"
                        },
                        seriesDefaults: {
                            type: "bar"
                        },
                        series: [{
                                data: [3.907, -7.943, 10.848, 9.284, 9.263, 9.801, -25.890, 8.238, -69.552, 99]
                            }, {
                                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                            }],
                        valueAxis: {
                            min: -100,
                            max: 100,
                            labels: {
                                format: "{0}%"
                            },
                            line: {
                                visible: true
                            },
                            axisCrossingValue: [0, -100]
                        },
                        categoryAxes: [{
                                // Default axis, no labels
                            }, {
                                categories: [
                                    "ความเป็นผู้นำ (Leadership)",
                                    "การวางแผนและการปฎิบัติตามแผน",
                                    "ความยึดมั่นใจผลสำเร็จของงาน (Result Oriented)",
                                    "การประสานงานและการทำงานเป็นทีม ( Cooperation & Teamwork )",
                                    "การมีจรรยาบรรณและความซื่อสัตย์ (Ethic & integrity)",
                                    "จิตสำนึกในการบริการ ( Service Mind Oriented )",
                                    "การพัฒนาอย่างต่อเนื่อง (Continuous Improvement)",
                                    "การวางแผนและปฏิบัติตามแผน ( Planning & Oranizing)",
                                    "ความไว้ใจได้ และความน่าเชื่อถือ (Trusted & Reliable)",
                                    "การสอนงานและให้คำปรึกษา (Coaching & Mentoring)"
                                ],
                                line: {
                                    // Optional
                                    visible: false
                                }
                            }],
                        tooltip: {
                            visible: true,
                            format: "{0}%",
                            template: "#= series.name #: #= value #"
                        }
                    });
                }

                $(document).ready(createChart);
                $(document).bind("kendo:skinChange", createChart);
                $(document).ready(function () {
                    //$("#verticalMenu").kendoMenu({orientation: "vertical" });

                    var serviceRoot = "<?php echo Yii::app()->getBaseUrl(true); ?>/dataServing/divisionData.php";
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
                    var personDataSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo $person_url; ?>",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            }
                        },
                        schema:
                                {
                                    data: "data",
                                    model: {
                                        id: "usercode"
                                    }
                                }
                    });
                    var inlineDefault = new kendo.data.HierarchicalDataSource({
                        data: [
                            {text: "จัดการ โครงสร้างองค์กร", expanded: true, items: [
                                    {text: "สำนักบริหาร กลาง"},
                                    {text: "จัดการกลุ่มงาน"},
                                    {text: "จัดการ ฝ่าย"},
                                    {text: "จัดการ ส่วนงาน"},
                                    {text: "จัดการ ตำแหน่ง"}

                                ]},
                            {text: "ข้อมูลเจ้าหน้าที่", expanded: true, items: [
                                    {text: "รายชื่อเจ้าหน้าที่"}
                                ]},
                            {text: "จัดการ Competencies", expanded: true, items: [
                                    {text: "Core Competencies"},
                                    {text: "Managerial Competencies"},
                                    {text: "Functional Competencies"}
                                ]},
                            {text: "การประเมิน", expanded: true, items: [
                                    {text: "หัวข้อการประเมิน"},
                                    {text: "กำหนดผู้ประเมิน"}
                                ]},
                            {text: "รายงาน", expanded: true, items: [
                                    {text: "1.Competency Evalution Result"},
                                    {text: "2.แผนพัฒนาแต่ละบุคคล"},
                                    {text: "3.รายงาน Competency ทั้งหมด"},
                                ]}
                        ]
                    });
                    $("#treeview-left").kendoTreeView({
                      // height:"600px",
                        dataSource: inlineDefault,
                        select: onSelect
                    });
                    $("#horizontal").kendoSplitter({
                        panes: [
                            {collapsible: true, size: "220px"},
                            {collapsible: false}
                        ]
                    }); 
                    var centralSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/division/centraljson",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                            update: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/division/Update",
                            },
                            parameterMap: function (options, operation) {
                                if (operation !== "read" && options.models) {
                                    return {models: kendo.stringify(options.models)};
                                }
                            }

                        },
                        batch: true,
                        pageSize: 20,
                        schema: {
                            data: "data",
                            model: {
                                id: "division_id",
                                fields: {
                                    division_id: {type: "string", editable: false, nullable: false},
                                    division_name: {type: "string"},
                                }
                            }
                        }
                    });
                    
                    var dataSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/workgroup/Json",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                            update: {
                                url: "<?php echo $workgroup_update; ?>",
                            },
                            parameterMap: function (options, operation) {
                                if (operation !== "read" && options.models) {
                                    return {models: kendo.stringify(options.models)};
                                }
                            }
                        },
                        batch: true,
                        pageSize: 20,
                        schema: {
                            data: "data",
                            model: {
                                id: "group_id",
                                fields: {
                                    group_id: {type: "string"},
                                    group_name: {type: "string"}

                                }
                            }
                        }
                    });
                    
                    var positionSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/Position/json",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                            update: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/Position/update",
                                //dataType: "jsonp"
                            },
                            create: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/Position/create",
                                dataType: "jsonp"
                            },
                            parameterMap: function (options, operation) {
                                if (operation !== "read" && options.models) {
                                    return {models: kendo.stringify(options.models)};
                                }
                            }
                        },
                        cache:true,
                        batch: true,
                        schema: {
                            data: "data",
                            model: {
                                id: "position_code",
                                fields: {
                                    position_code: {type: "string", editable: false, nullable: true},
                                    position_name: {type: "string"},
                                    level: {type: "number", validation: {required: true, min: 1}}
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
                    $("#positiongrid").kendoGrid({
                        dataSource: positionSource,
                        pageable: true,
                        //  toolbar: ['create'],
                        columns: [
                            //{field: "index", title: "ลำดับ", width: "80px"},
                            {field: "position_code", title: "รหัส", width: "150px"},
                            {field: "position_name", title: "ตำแหน่ง"},
                         //   {field: "level", title: "ระดับ", width: "100px", attributes: {class: "center"}},
                            {command: ["edit", "destroy"], title: "&nbsp;", width: "200px"}],
                        editable: "inline"
                    });
                    var TopicdataSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/CompetencyTopic/JsonList",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                            create: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/CompetencyTopic/create",
                                dataType: "json"
                            },
                            update: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/CompetencyTopic/update",
                                dataType: "json"
                            },
                            destroy: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/CompetencyTopic/delete",
                            },
                            parameterMap: function (options, operation) {
                                if (operation !== "read" && options.models) {
                                    return {models: kendo.stringify(options.models)};
                                }
                            }
                        },
                        batch: true,
                        schema: {
                            data: "data",
                            model: {
                                id: "topic_id",
                                fields: {
                                    topic_id: {type: "string"},
                                    topic_name: {validation: {required: true}},
                                }
                            }
                        }
                    });
                    $("#competencytopic").kendoGrid({
                        dataSource: TopicdataSource,
                        pageable: true,
                        // height: 550,
                       // toolbar: ["create"],
                        columns: [
                            {field: "topic_name", title: "หัวข้อ"},
                            {command: ["edit", "destroy"], title: "&nbsp;", width: "180px"}],
                        editable: "popup"
                    });

                    var funclistSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/tmpFunction/Read",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                            create: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/tmpFunction/create",
                                dataType: "json"
                            },
                            update: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/tmpFunction/update",
                                dataType: "json"
                            },
                            destroy: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/tmpFunction/delete",
                            },
                            parameterMap: function (options, operation) {
                                if (operation !== "read" && options.models) {
                                    return {models: kendo.stringify(options.models)};
                                }
                            }
                        },
                        batch: true,
                        schema: {
                            data: "data",
                            model: {
                                id: "tmp_id",
                                fields: {
                                    function_name: {type: "string"},
                                    tmp_id:{type:"string"},
                                    dic1: {type: "string", validation: {required: true}},
                                    dic2: {type: "string", validation: {required: true}},
                                    dic3: {type: "string",validation: {required: true}},
                                    dic4: {type: "string", validation: {required: true}},
                                    dic5: {type: "string", validation: {required: true}}

                                }
                            }
                        }
                    });
                    $("#funclist").kendoGrid({
                        dataSource: funclistSource,
                        pageable: true,
                        // height: 550,
                        toolbar: ["create"],
                        columns: [
                            {field: "function_name", title: "Functional Competencies ",width:"300px"},
                            {field: "dic1", title: "ระดับ 1 ", editor: textareaEditor, template: "#= dic1 #"},
                            {field: "dic2", title: "ระดับ 2 ", editor: textareaEditor, template: "#= dic2 #"},
                            {field: "dic3", title: "ระดับ 3 ", editor: textareaEditor, template: "#= dic3 #"},
                            {field: "dic4", title: "ระดับ 4 ", editor: textareaEditor, template: "#= dic4 #"},
                            {field: "dic5", title: "ระดับ 5 ", editor: textareaEditor, template: "#= dic5 #"},
                            {command: ["edit", "destroy"], title: "&nbsp;", width: "180px"}],
                        editable: "popup"
                    });
               
                    var funclistupdateSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/CompetencyFunctionList/Read",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                            parameterMap: function (options, operation) {
                                if (operation !== "read" && options.models) {
                                    return {models: kendo.stringify(options.models)};
                                }
                            }
                        },
                        batch: true,
                        schema: {
                            data: "data",
                            model: {
                                id: "tmp_id",
                                fields: {
                                    function_name: {type: "string"},
                                    dic1: {type: "string" },
                                    dic2: {type: "string"},
                                    dic3: {type: "string"},
                                    dic4: {type: "string"},
                                    dic5: {type: "string", validation: {required: true}}

                                }
                            }
                        }
                    });
                     $("#funclistupdate").kendoGrid({
                        dataSource: funclistupdateSource,
                        pageable: true,
                        // height: 550,
                        toolbar: ["create"],
                        columns: [
                            {field: "function_name", title: "Functional Competencies ",width:"300px"},
                            {field: "dic1", title: "ระดับ 1 ", editor: textareaEditor, template: "#= dic1 #"},
                            {field: "dic2", title: "ระดับ 2 ", editor: textareaEditor, template: "#= dic2 #"},
                            {field: "dic3", title: "ระดับ 3 ", editor: textareaEditor, template: "#= dic3 #"},
                            {field: "dic4", title: "ระดับ 4 ", editor: textareaEditor, template: "#= dic4 #"},
                            {field: "dic5", title: "ระดับ 5 ", editor: textareaEditor, template: "#= dic5 #"},
                            {command: ["edit", "destroy"], title: "&nbsp;", width: "180px"}],
                        editable: "popup"
                    });
                    
                    function textareaEditor(container, options) {
                        $('<textarea data-bind="value: ' + options.field + '" cols="50" rows="15"></textarea>').appendTo(container);
                    }
                    $("#grid").kendoGrid({
                        dataSource: dataSource,
                        pageable: true,
                        height: 550,
                        //  toolbar: ["create"],
                        columns: [
                            {feild: "lastname", title: "นามสกุล"},
                            {field: "name", title: compentencyName},
                            {field: "maxvalue", title: "ระดับที่คาดหวัง", width: "200px"},
                            {command: ["edit", "destroy"], title: "&nbsp;", width: "200px"}],
                        editable: "inline"
                    });
                    $("#employeeGrid").kendoGrid({
                        dataSource: employeeSource,
                        pageable: true,
                        height: 550,
                        ///   toolbar: ["create"],
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
                        dataSource: centralSource,
                        pageable: true,
                        //   height: 550,
                        columns: [
                            //  {field: "index", title: "ลำดับ", width: "50px"},
                            {field: "division_name", title: "รายการ"},
                            {command: ["edit"], title: "&nbsp;", width: "100px"}
                        ],
                        editable: "popup"
                    });
                    centralSource.read();
                    $("#dtigroup").kendoGrid({
                        dataSource: dataSource,
                        pageable: true,
                        columns: [
                            {field: "group_name", title: "ชื่อกลุ่มงาน", width: "700px"},
                            {command: ["edit"], title: "&nbsp;", width: "80px"}
                        ],
                        editable: "inline"
                    });
                    var userDataSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/User/json",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                            update: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/User/update",
                            },
                            parameterMap: function (options, operation) {
                                if (operation !== "read" && options.models) {
                                    return {models: kendo.stringify(options.models)};
                                }
                            }
                        },
                        batch: true,
                        schema: {
                            data: "data",
                            model: {
                                id: "usercode",
                                fields: {
                                    usercode: {type: "string", editable: false, nullable: true},
                                    firstname_th: {type: "string"},
                                    lastname_th: {type: "string"},
                                    position_name: {type: "string"},
                                    email: {type: "string"},
                                }

                            }
                        }
                    });
                    $("#usergrid").kendoGrid({
                        dataSource: userDataSource,
                        pageSize: 20,
                        scrollable: true,
                        sortable: true,
                        pagination: true,
                        filterable: {
                            mode: "row"
                        },
                        //toolbar: ["create"],
                        columns: [
                            {field: "usercode", title: "รหัส", width: "70px"},
                            {field: "firstname_th", title: "ชื่อ", width: "200px"},
                            {field: "lastname_th", title: "นามสกุล", width: "150px"},
                            {field: "position_name", title: "ตำแหน่ง", width: "200px"},
                            {field: "email", title: "อีเมล",width:"150px"},
                            {field: "email", width: "80px", title: "แก้ไข", template: '<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/User/update/usercode/#= usercode #"  style="text-align:center"><span   style="text-align:center" class="k-button">แก้ไข</span></a>'},
                            {command: ["destroy"], title: "ลบ", width: "100px"}
                        ],
                        editable: "popup"
                    });
                    var competencySource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/Competency/CoreCompetencyJson",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                            update: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/Competency/update",
                            }

                        },
                        batch: true,
                        schema: {
                            data: "data",
                            model: {
                                id: "id",
                                fields: {
                                }
                            }
                        }
                    });
                    var managerialSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/Competency/MangerialCompetencyJson",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                        },
                        schema: {
                            data: "data",
                            model: {
                                id: "id",
                                fields: {
                                }
                            }
                        }
                    });

                    var divisionSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/division/AllJson",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                        },
                        schema: {
                            data: "data",
                            model: {
                                id: "id",
                                fields: {
                                }
                            }
                        }
                    });
                    $("#divisiongrid").kendoGrid({
                        dataSource: divisionSource,
                        pageSize: 20,
                        scrollable: true,
                        sortable: true,
                        pagination: true,
                        cache:false,
                        filterable: {
                            mode: "row"
                        },
                        //   toolbar: ["create"],
                        columns: [
                            {field: "index", title: "ลำดับ", width: "80px"},
                            {field: "group_name",title:"กลุ่มงาน",width:"100px"},
                            {field: "department_name",title:"ฝ่าย",width:"220px"},
                            {field: "division_name", title: "ส่วนงาน"},
                            {field: "division_name", title: "แก้ไข", template: '<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/division/update/#= division_id #" class="k-button link">แก้ไข</a>', width: "100px"},
                            {command: ["destroy"], title: "&nbsp;", width: "180px"}
                        ],
                        editable: "popup"
                    });
                    $("#competencygrid").kendoGrid({
                        dataSource: competencySource,
                        pageSize: 20,
                        scrollable: true,
                        sortable: true,
                        pagination: true,
                        filterable: {
                            mode: "row"
                        },
                        //  toolbar: ["create"],
                        columns: [
                            {field: "competency_name", title: "Core Competency"},
                            {command: ["edit"], title: "แก้ไข", width: "100px"}
                        ],
                        editable: "popup"
                    });
                    $("#managerialgrid").kendoGrid({
                        dataSource: managerialSource,
                        pageSize: 20,
                        scrollable: true,
                        sortable: true,
                        pagination: true,
                        filterable: {
                            mode: "row"
                        },
                        //  toolbar: ["create"],
                        columns: [
                            {field: "competency_name", title: "Managerial Competency"},
                            {command: ["edit"], title: "&nbsp;", width: "100px"}
                        ],
                        editable: "popup"
                    });
                    var functionalSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/ComptencyFunctional/JsonList",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                            destroy :{
                               // type:"POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/ComptencyFunctional/delete",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                            parameterMap: function (options, operation) {
                                if (operation !== "read" && options.models) {
                                    return {models: kendo.stringify(options.models)};
                                }
                            }     
                        },
                        batch:true,
                        schema: {
                            data: "data",
                            model: {
                                id: "function_id",
                                fields: {
                                    function_id: {editable: false}
                                }
                            }
                        }
                    });
                    function departmentEditor(container, options)
                    {
                        $('<input required data-text-field="department_name" data-value-field="department_id" data-bind="value:' + options.field + '"/>')
                                .appendTo(container)
                                .kendoDropDownList({
                                    dataSource: {
                                        // type: "json",
                                        transport: {
                                            read: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/department/JsonAll",
                                            dataType: "json"
                                        },
                                        schema: {
                                            data: "data",
                                            model: {id: "department_id"}
                                        }
                                    }
                                });
                    }

                    function categoryDropDownEditor(container, options) {
                        $('<input required data-text-field="CategoryName" data-value-field="CategoryID" data-bind="value:' + options.field + '"/>')
                                .appendTo(container)
                                .kendoDropDownList({
                                    autoBind: false,
                                    dataSource: {
                                        type: "odata",
                                        transport: {
                                            read: "http://demos.telerik.com/kendo-ui/service/Northwind.svc/Categories"
                                          
                                        }
                                    }
                                });
                    }
                    
                    $("#functionalgrid").kendoGrid({
                        dataSource: functionalSource,
                        pageSize: 20,
                        scrollable: true,
                        sortable: true,
                        pagination: true,
                        filterable: {
                            mode: "row"
                        },
                        //   toolbar: ["create"],
                       
                        columns: [
                            {field: "function_name", title: "Functional Competency Topic "},
                            {field: "function_id",title:"รายละเอียด",template:'<a href="<?php echo Yii::app()->getBaseUrl(); ?>/comptencyFunctional/update/#= function_id #"><span class=\"k-button\">แก้ไข</span></a>',width:"100px"},
                            //  {field: "function_status", title: "สถานะ", editor: categoryDropDownEditor, template: '#= function_id #', width: "100px"},
                            // {field: "function_id", title: "รายละเอียด", editable: false, template: '<a href="\<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/ComptencyFunctional/update/#= function_id #" class="k-button link">รายละเอียด</a>', width: "100px"},
                            {command: ["destroy"], title: "&nbsp;", width: "100px"}
                        ],
                        editable: "popup"
                    });
                    var accessSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/CompetencyAssessment/Read",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                        },
                        schema: {
                            data: "data",
                            model: {
                                id: "ass_id",
                                fields: {
                                    fullname:{type:"string",editable:false},
                                    ass_id : {type:"string",editable:false,visibale:false}
                                }
                            }
                        }
                    });
                    $("#Assessmentgrid").kendoGrid({
                        dataSource: accessSource,
                        pageSize: 20,
                        scrollable: true,
                        sortable: true,
                        pagination: true,
                        toolbar: ["create",],
                        filterable: {
                            mode: "row"
                        },
                        //   toolbar: ["create"],
                        columns: [
                            {field: "usercode", title: "รหัสเจ้าหน้าที่", width: "150px"},
                            {field: "fullname", title: "ชื่อ-นามสกุล",width:"200px"},
                            {field: "position_name", title: " ตำแหน่ง ", editor: positionDropDownEditor},
                            {command: ["destroy"], title: "&nbsp;", width: "100px"}
                            //{field: "fullname", title: "ลบ",width:"100px",template:"<a><span class='k-button' >ลบข้อมูล</span></a>"},
                           // {field: "ass_id", title: " เพิ่มผู้ประเมิน ",template:"<a href=''><span   style=\"text-align:center\" class=\"k-button\">เพิ่มผู้ประเมิน</span></a>",editable:false},

                        ],
                        editable: "popup"
                    });
                    function positionDropDownEditor(container, options) {
                        $('<input required data-text-field="PositionName" data-value-field="PositionCode" data-bind="value:' + options.field + '"/>')
                                .appendTo(container)
                                .kendoDropDownList({
                                   // autoBind: true,
                                    dataSource: {
                                        type: "json",
                                        transport: {
                                            read: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/Position/Json"                           
                                        },
                                        schema: {
                                            data: "data",
                                            model: {
                                                id: "position_code",
                                                fields: {
                                                }
                                            }
                                        }
                                    }
                                });
                    }
                    var departmentDatasource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/department/JsonAll",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                            },
                        },
                        batch: true,
                        schema: {
                            data: "data",
                            model: {
                                id: "department_id",
                                fields: {
                                    index: {editable: false},
                                    department_id: {editable: false}
                                }
                            }
                        }
                    });
                    $("#departmentgrid").kendoGrid({
                        dataSource: departmentDatasource,
                        pageSize: 20,
                        scrollable: true,
                        sortable: true,
                        pagination: true,
                        filterable: {
                            mode: "row"
                        },
                        //   toolbar: ["create"],
                        columns: [
                            {field: "index", title: "ลำดับ", width: "80px"},
                            {field: "group_name", title: "กลุ่มงาน"},
                            {field: "department_name", title: "ฝ่าย"},
                            {field: "group_id", width: "100px", title: "แก้ไข", template: '<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/department/update/#= department_id #" class="k-edit k-button k-button-icontext"><span class="k-icon k-edit"></span>Edit</a>'},
                            {command: ["destroy"], title: "&nbsp;", width: "100px"}
                        ],
                        editable: "popup"
                    });

                    $("#person").kendoDropDownList({
                        dataTextField: "fullname",
                        dataValueField: "usercode",
                        dataSource: personDataSource,
                        //s  change: onChange
                    });
                    $("#function").kendoDropDownList({
                        dataTextField: "fullname",
                        dataValueField: "usercode",
                        dataSource: personDataSource,
                        //s  change: onChange
                    });
                    /*
                    $("#treeview-employee-left").kendoTreeView({
                        dragAndDrop: true,
                        dataSource: [
                            {text: "นาวาอากาศตรี จิรเดช เกิดศรี"},
                            {text: "นาวาอากาศโท พันธุ์เทพ แก้วมงคล"},
                            {text: "นาวาอากาศตรี วิชัย แผ้วเกษม"},
                            {text: "นางสาวอุบล ธงสถาพรวัฒนา"},
                            {text: "นายชนาธิป ชื่นมนัส"},
                            {text: "ร้อยโท พันธุ์ศักดิ์ วงศ์อนุ"},
                            {text: "นายสมเกียรติ ไกรสินธุ์"},
                            {text: "นางสาวผกามาศ วงศ์สาย"},
                            {text: "นางสาวรุ้งจะวัน ลายเมฆ"}
                        ]
                    });
                    
                    $("#treeview-employee-right").kendoTreeView({
                        dragAndDrop: true,
                        height: 550,
                        dataSource: [
                            {text: "นาวาอากาศตรี จิรเดช เกิดศรี", expanded: true, items: [
                                    {text: "ผู้บีงคับบัญชาโดยตรง"},
                                    {text: "ผู้บังคับบัญชาโดยอ้อม"},
                                    {text: "เพื่อนร่วมงานคนที่ 1"},
                                    {text: "เพื่อนร่วมงานคนที่ 2"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 1"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 2"}
                                ]},
                            {text: "นาวาอากาศโท พันธุ์เทพ แก้วมงคล", expanded: true, items: [
                                    {text: "ผู้บีงคับบัญชาโดยตรง"},
                                    {text: "ผู้บังคับบัญชาโดยอ้อม"},
                                    {text: "เพื่อนร่วมงานคนที่ 1"},
                                    {text: "เพื่อนร่วมงานคนที่ 2"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 1"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 2"}
                                ]},
                            {text: "นาวาอากาศตรี วิชัย แผ้วเกษม", expanded: true, items: [
                                    {text: "ผู้บีงคับบัญชาโดยตรง"},
                                    {text: "ผู้บังคับบัญชาโดยอ้อม"},
                                    {text: "เพื่อนร่วมงานคนที่ 1"},
                                    {text: "เพื่อนร่วมงานคนที่ 2"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 1"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 2"}]},
                            {text: "นางสาวอุบล ธงสถาพรวัฒนา", expanded: true, items: [
                                    {text: "ผู้บีงคับบัญชาโดยตรง"},
                                    {text: "ผู้บังคับบัญชาโดยอ้อม"},
                                    {text: "เพื่อนร่วมงานคนที่ 1"},
                                    {text: "เพื่อนร่วมงานคนที่ 2"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 1"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 2"}]},
                            {text: "นายชนาธิป ชื่นมนัส", expanded: true, items: [
                                    {text: "ผู้บีงคับบัญชาโดยตรง"},
                                    {text: "ผู้บังคับบัญชาโดยอ้อม"},
                                    {text: "เพื่อนร่วมงานคนที่ 1"},
                                    {text: "เพื่อนร่วมงานคนที่ 2"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 1"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 2"}]},
                            {text: "ร้อยโท พันธุ์ศักดิ์ วงศ์อนุ", expanded: true, items: [
                                    {text: "ผู้บีงคับบัญชาโดยตรง"},
                                    {text: "ผู้บังคับบัญชาโดยอ้อม"},
                                    {text: "เพื่อนร่วมงานคนที่ 1"},
                                    {text: "เพื่อนร่วมงานคนที่ 2"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 1"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 2"}]},
                            {text: "นายสมเกียรติ ไกรสินธุ์", expanded: true, items: [
                                    {text: "ผู้บีงคับบัญชาโดยตรง"},
                                    {text: "ผู้บังคับบัญชาโดยอ้อม"},
                                    {text: "เพื่อนร่วมงานคนที่ 1"},
                                    {text: "เพื่อนร่วมงานคนที่ 2"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 1"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 2"}]},
                            {text: "นางสาวผกามาศ วงศ์สาย", expanded: true, items: [
                                    {text: "ผู้บีงคับบัญชาโดยตรง"},
                                    {text: "ผู้บังคับบัญชาโดยอ้อม"},
                                    {text: "เพื่อนร่วมงานคนที่ 1"},
                                    {text: "เพื่อนร่วมงานคนที่ 2"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 1"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 2"}]},
                            {text: "นางสาวรุ้งจะวัน ลายเมฆ", expanded: true, items: [
                                    {text: "ผู้บีงคับบัญชาโดยตรง"},
                                    {text: "ผู้บังคับบัญชาโดยอ้อม"},
                                    {text: "เพื่อนร่วมงานคนที่ 1"},
                                    {text: "เพื่อนร่วมงานคนที่ 2"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 1"},
                                    {text: "ผู้ใต้บังคับบัญชาคนที่ 2"}]}
                        ]
                    });
                    */
                });
              //  $("#Division_department_id,#Division_group_id").kendoDropDownList();
              //  $("#Division_group_id").change();
                $(".TextButton").kendoButton({
                    // spriteCssClass: "k-icon k-i-refresh"
                });
            </script>
        </div>

    </body>
</html>