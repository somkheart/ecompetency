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
                            <div id="admingrid"  hidden="true"></div>     
                            <div id="ahdgrid"  hidden="true"></div>  
                            <div id="usergrid"  hidden="true"></div> 
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var compentencyName = "";
                var crudServiceBaseUrl = "";
                var admintopic = "รายชื่อ Admin";
                var ahdtopic = "รายชื่อเจ้าหน้าที่ AHD";
                var usertopic = "รายชื่อเจ้าหน้าที่";

                function hidegrid()
                {
                    $("#admingrid").hide();
                    $("#ahdgrid").hide();
                    $("#usergrid").hide();
                }
                function onSelect(e) {
                    hidegrid();
                    var selected = this.text(e.node).toString();
                    var usergrid = $('#usergrid').data('kendoGrid');

                    if (selected == "รายชื่อ Admin") {
                        $('#admingrid').show();
                        $("#admingrid th[data-field=name]").html(admintopic);
                        //adminSrc.transport.options.read.url = "http://localhost/ecompetency/index.php/admin/json";

                    } else if (selected == "รายชื่อ AHD")
                    {
                        $('#ahdgrid').show();
                        $("#ahdgrid th[data-field=name]").html(ahdtopic);
                        //  ahdSrc.transport.options.read.url = "http://localhost/ecompetency/index.php/admin/json";
                    }
                    else if (selected == "รายชื่อ เจ้าหน้าที่")
                    {
                        $('#usergrid').show();
                        $("#usergrid th[data-field=name]").html(usertopic);
                        // userSrc.transport.options.read.url = "http://localhost/ecompetency/index.php/User/json";
                    }

                }
                $(document).ready(function() {
                    //$("#verticalMenu").kendoMenu({orientation: "vertical" });
                    var serviceRoot = "";
                    homogeneous = new kendo.data.HierarchicalDataSource({
                        transport: {
                            read: {
                                url: serviceRoot,
                                dataType: "jsonp"
                            }
                        },
                        schema: {
                            model: {
                                id: "usercode",
                                // hasChildren: "HasEmployees"
                            }
                        }
                    });
                    var inlineDefault = new kendo.data.HierarchicalDataSource({
                        data: [
                            {text: "จัดการผู้ใช้งาน", expanded: true, items: [
                                    {text: "รายชื่อ Admin"},
                                    {text: "รายชื่อ AHD"},
                                    {text: "รายชื่อ เจ้าหน้าที่"},
                                ]},
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
                    var ADMINataSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "http://localhost/ecompetency/index.php/admin/AdminJson",
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
                    var AHDDataSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "http://localhost/ecompetency/index.php/admin/AHDJson",
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
                    var userDataSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "http://localhost/ecompetency/index.php/User/json",
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
                    $("#admingrid").kendoGrid({
                        dataSource: ADMINataSource,
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
                        editable: "inline"
                    });
                    $("#ahdgrid").kendoGrid({
                        dataSource: AHDDataSource,
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
                        editable: "inline"
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
                        editable: "inline"
                    });

                });
            </script>
        </div>

    </body>
</html>
