<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$baseURL = Yii::app()->getBaseUrl(true);
$person_url = "$baseURL/CompetencyAssessor/JsonUser";
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
                <li style="width:500px; float:right;">เจ้าหน้าที่ AHD :<?php echo Yii::app()->user->getName(); ?></li>
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
                            <label class="category-label" style="width:70px">ส่วนงาน:</label>
                            <input id="function" style="width:200px"/>
                        </div>
                        <div id="graphCombo" hidden="true" style="height: 40px; margin-top: 10px;">
                            <label class="category-label" style="width:70px">ชิ่อ:</label>
                            <input id="person" style="width:200px"/>
                        </div>
                        <div id="ContentData"><?php echo $content; ?></div>
                        <div id="centralGrid" hidden="true"></div>
                        <div id="grid" hidden="true"></div>
                        <div id="competencygrid"  hidden="true"></div>
                        <div id="employeeGrid" hidden="true"></div>
                        <div id="dtigroup" hidden="true"></div>
                        <div id="usergrid" hidden="true"></div>
                        <div id="positiongrid" hidden="true"></div>
                        <div id="managerialgrid" hidden="true"></div>
                        <div id="competencytopic" hidden="true"></div>
                        <div id="functionalgrid" hidden="true"></div>
                        <div id="departmentgrid" hidden="true"></div>
                        <div id="divisiongrid" hidden="true"></div>
                        <div class="demo-section k-content">
                            <div id="chart" hidden="true"></div>
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
            <script>
                        $(document).ready(function() {
                $("#menu").kendoMenu();
                });            </script>
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
                        function hidegrid()
                        {
                        $("#ContentData").hide();
                                $("#centralGrid").hide();
                                $("#grid").hide();
                                centralGrid
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
                        }
                function init()
                {
                $('#usergrid').show();
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
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                }
                if (selected == "จัดการกลุ่มงาน") {
                $('#dtigroup').show();
                        $("#dtigroup th[data-field=name]").html("จัดการกลุ่มงาน");
                        dataSrc.transport.options.read.url = "http://localhost/ecompetency/index.php/workgroup/json";
                        //dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                }
                if (selected == "จัดการ ฝ่าย") {
                $('#departmentgrid').show();
                        $("#departmentgrid th[data-field=name]").html("จัดการฝ่าย");
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                }
                if (selected == "จัดการ ส่วนงาน") {
                $('#divisiongrid').show();
                        $("#divisiongrid th[data-field=name]").html("จัดการส่วนงาน");
                        dataSrc.transport.options.read.url = "http://localhost/ecompetency/index.php/division/AllJson";
                }
                if (selected == "จัดการ ตำแหน่ง")
                {
                $('#positiongrid').show();
                        $("#positiongrid th[data-field=name]").html("จัดการส่วนงาน");
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                }
                if (selected == "รายชื่อเจ้าหน้าที่") {
                $('#usergrid').show();
                        $("#usergrid th[data-field=name]").html(coreCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                }
                if (selected == "Core Competencies") {
                $('#competencygrid').show();
                        $("#competencygrid th[data-field=name]").html(coreCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/coreCompetenciesData.php";
                }
                else if (selected == "Managerial Competencies") {
                $('#managerialgrid').show();
                        $("#managerialgrid th[data-field=name]").html(managerialCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/managerialCompetenciesData.php";
                }
                else if (selected == "Functional Competencies") {
                $('#functionalgrid').show();
                        $("#functionalgrid th[data-field=name]").html(managerialCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/managerialCompetenciesData.php";
                }
                else if (selected == "หัวข้อการประเมิน") {
                $('#competencytopic').show();
                        $("#competencytopic th[data-field=name]").html(managerialCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/managerialCompetenciesData.php";
                }
                else if (selected == "กำหนดผู้ประเมิน") {
                $("#grid th[data-field=name]").html(managerialCompentency);
                        dataSrc.transport.options.read.url = "http://localhost/eCompetency/dataServing/managerialCompetenciesData.php";
                        $("#assignCombo").show();
                        $('#split').show();
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
                else if (selected == "1.Competency Evalution Result") {
                $("#graphCombo").show();
                        $("#assignCombo").show();
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

                        data: [3.907, - 7.943, 10.848, 9.284, 9.263, 9.801, - 25.890, 8.238, - 69.552, 6.855]
                        }, {
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                        }],
                        valueAxis: {
                        min: - 70,
                                max: 20,
                                labels: {
                                format: "{0}%"
                                },
                                line: {
                                visible: false
                                },
                                axisCrossingValue: [0, - 70]
                        },
                    
                        categoryAxes: [{
                        // Default axis, no labels
                        }, {
                        categories: ["ความเป็นผู้นำ (Leadership)", "การวางแผนและการปฎิบัติตามแผน", 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011],
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
                        $(document).ready(function() {
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
                        var TopicdataSource = new kendo.data.DataSource({
                        transport: {
                        read: {
                        type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/CompetencyTopic/JsonList",
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
                        var positionSource = new kendo.data.DataSource({
                        transport: {
                        read: {
                        type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/Position/json",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                        },
                                create: {
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/Position/create",
                                        dataType: "jsonp"
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
                        toolbar: ['create'],
                        columns: [
                        {field: "index", title: "ลำดับ", width: "80px"},
                        {field: "position_code", title: "รหัส", width: "150px"},
                        {field: "position_name", title: "ตำแหน่ง"},
                        {field: "level", title: "ระดับ", width: "100px", attributes: {class: "center"}},
                        {command: ["edit", "destroy"], title: "&nbsp;", width: "200px"}],
                        editable: "inline"
                });
                        $("#competencytopic").kendoGrid({
                dataSource: TopicdataSource,
                        pageable: true,
                        height: 550,
                        toolbar: ["create"],
                        columns: [
                        {field: "index", title: "ลำดับ", width: "80px"},
                        {field: "topic_name", title: "หัวข้อ"},
                        {field: "status", title: "สถานะ", width: "200px"},
                        {command: ["edit", "destroy"], title: "&nbsp;", width: "200px"}],
                        editable: "inline"
                });
                        $("#grid").kendoGrid({
                dataSource: dataSource,
                        pageable: true,
                        height: 550,
                        toolbar: ["create"],
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
                dataSource: centralSource,
                        pageable: true,
                        height: 550,
                        // toolbar: ["create"],
                        columns: [
                        {field: "index", title: "ลำดับ", width: "50px"},
                        {field: "division_name", title: "รายการ"},
                        {command: ["edit", "destroy"], title: "&nbsp;", width: "200px"}
                        ],
                        // editable: "inline",
                        editable: "inner"
                });
                        $("#dtigroup").kendoGrid({
                dataSource: dataSource,
                        pageable: true,
                        // height: 550,
                        // toolbar: ["create"],
                        columns: [
                        {field: "index", title: "ลำดับ", width: "50px"},
                        {field: "group_name", title: "ชื่อกลุ่มงาน", width: "700px"},
                        {command: ["edit"], title: "&nbsp;", width: "80px"}
                        ],
                        // editable: "inline",
                        editable: "popup"
                });
                        var userDataSource = new kendo.data.DataSource({
                        transport: {
                        read: {
                        type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/User/json",
                                contentType: "application/json; charset=utf-8",
                                dataType: "json"
                        },
                        },
                                schema: {
                                data: "data",
                                        model: {
                                        fields: {
                                        usercode: {type: "string"},
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
                        toolbar: ["create"],
                        columns: [
                        {field: "usercode", title: "รหัส", width: "150px"},
                        {field: "firstname_th", title: "ชื่อ", width: "200px"},
                        {field: "lastname_th", title: "นามสกุล", width: "150px"},
                        {field: "position_name", title: "ตำแหน่ง", width: "200px"},
                        {field: "email", title: "อีเมล"},
                        {command: ["edit", "destroy"], title: "&nbsp;", width: "180px"}
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
                        var departmentDatasource = new kendo.data.DataSource({
                        transport: {
                        read: {
                        type: "POST",
                                url: "<?php echo Yii::app()->getBaseUrl(true); ?>/index.php/department/JsonAll",
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
                        filterable: {
                        mode: "row"
                        },
                        //   toolbar: ["create"],
                        columns: [
                        {field: "index", title: "ลำดับ", width: "80px"},
                        {field: "division_name", title: "ส่วนงาน"},
                        {command: ["edit", "destroy"], title: "&nbsp;", width: "180px"}
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
                        toolbar: ["create"],
                        columns: [
                        {field: "competency_name", title: "Core Competency"},
                        {command: ["edit", "destroy"], title: "&nbsp;", width: "180px"}
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
                        toolbar: ["create"],
                        columns: [
                        {field: "competency_name", title: "Managerial Competency"},
                        {command: ["edit", "destroy"], title: "&nbsp;", width: "180px"}
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
                        $("#functionalgrid").kendoGrid({
                dataSource: functionalSource,
                        pageSize: 20,
                        scrollable: true,
                        sortable: true,
                        pagination: true,
                        filterable: {
                        mode: "row"
                        },
                        toolbar: ["create"],
                        columns: [
                        {field: "function_name", title: "Functional Competency Topic "},
                        {command: ["edit", "destroy"], title: "&nbsp;", width: "180px"}
                        ],
                        editable: "popup"
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
                        {command: ["edit", "destroy"], title: "&nbsp;", width: "180px"}
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
                });
            </script>
        </div>

    </body>
</html>
<?php echo "URL" . Yii::app()->getBaseUrl(true); ?>