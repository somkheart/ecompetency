<?php
$baseURL=Yii::app()->getBaseUrl(true);
$user_id=Yii::app()->user->getId();
?>
<div id="grid"></div>

            <script type="text/x-kendo-template" id="template">
                <div class="toolbar">
                <label class="header-label" style="width:400px;">รายชื่อผู้ที่จะทำการประเมิน</label>
                </div>
            </script>
            <script>
                var selected = "ODC";
                var grid = $('#grid').data('kendoGrid');
                $(document).ready(function () {
                    var employeeSource = new kendo.data.DataSource({
                        transport: {
                            read: {
                                type: "POST",
                                url: "<?php echo "$baseURL/CompetencyAssessor/JsonList/usercode/$user_id"; ?>",
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
                        dataSource: employeeSource,
                        toolbar: kendo.template($("#template").html()),
                        pageable: true,
                      //  height: 550,
                        columns: [
                            {field: "index", title: "ลำดับ", width: "30px"},
                            {field: "usercode", title: "รหัสเจ้าหน้าที่", width: "50px"},
                            {field: "firstname_th", title: "ชื่อ", width: "100px"},
                            {field: "assessor_name", title: "สถานะผู้ประเมิน",width:"400px"},
                            {field: 'ประเมิน',template:"<a href='<?php echo $baseURL; ?>/ahd/choice/usercode/${usercode}' >ประเมิน</a>",width:"40px"},


                        ]
                    });

                });
                  
    
            </script>
            <script>
                $(document).ready(function () {
                    $("#menu").kendoMenu();
                });
            </script>
</div>