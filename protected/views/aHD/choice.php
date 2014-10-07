<?php
$baseURL=Yii::app()->getBaseUrl(true);
$user_id=Yii::app()->user->getId();
$competency_url="$baseURL/Competency/CoreCompetencyJsonAll";
$person_url="$baseURL/CompetencyAssessor/JsonUser";
?>
<div id="grid"></div>  
 <script>
                $(document).ready(function () {
                    $("#menu").kendoMenu();
                });
            </script>
</div>
<script type="text/x-kendo-template" id="template">
<div class="toolbar" style="float:right">
<label class="category-label" style="width:150px">บุคคลที่ต้องการประเมิน:</label>
<input id="person" style="width:200px"/>
</div>
</script>
<script>
    var compentencyName = "";
    var crudServiceBaseUrl = "";
    var coreCompentency = "Core Competencies (สมรรถนะความสามารถหลัก)";
    var managerialCompentency = "Managerial Competencies (สมรรถนะความสามารถในการบริหาร)";
    var functionalCompentency = "Functional Competencies (สมรรถนะความสามารถตามสายงาน)";
    var grid = $('#grid').data('kendoGrid');
    $(document).ready(function () {
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
        var dataSource = new kendo.data.DataSource({
            transport: {
                read: {
                    type: "POST",
                    url: "<?php echo $competency_url; ?>",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json"
                }
            },
            schema: {
                data: "data",
                model: {
                    id: "competency_id",
                    fields: {
                        name: {validation: {required: true}},
                        maxvalue: {type: "number", validation: {min: 0, required: true}},
                        competency_type: {type: "number", title: "Competency"}
                    }
                }
            },
            group: {
                field: "competency_type"
            }
        });

        $("#grid").kendoGrid({
            dataSource: dataSource,
            toolbar: kendo.template($("#template").html()),
            pageable: true,
            height: 550,
            columns: [
                {field: "competency_type", title: "Competency", groupHeaderTemplate: "#if(value==1){# Core Competency #} else if(value==2) {# Managerial Competency #} else if(value==3) {# Functional Competency #}#"},
                {field: "competency_name", title: "Competencies", headerAttributes: {style: "text-align: center;"}},
                {field: "maxvalue", title: "ระดับที่คาดหวัง", width: "100px", attributes: {style: "text-align: center;"}, headerAttributes: {style: "text-align: center;"}},
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "0.5",
                    title: "0.5",
                    template: '<input type="checkbox" name="0.5checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "1",
                    title: "1",
                    template: '<input type="checkbox" name="1checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "1.5",
                    title: "1.5",
                    template: '<input type="checkbox" name="1.5checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "2",
                    title: "2",
                    template: '<input type="checkbox" name="2checkbox" value="enable"" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "2.5",
                    title: "2.5",
                    template: '<input type="checkbox" name="2.5checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center; background: yellow"},
                    attributes: {style: "text-align: center; background: yellow"},
                    width: "35px",
                    field: "3",
                    title: "3",
                    template: '<input type="checkbox" name="3checkbox" value="enable" />',
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "3.5",
                    title: "3.5",
                    template: '<input type="checkbox" name="3.5checkbox"  value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "4",
                    title: "4",
                    template: '<input type="checkbox" name="4checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "4.5",
                    title: "4.5",
                    template: '<input type="checkbox" name="4.5checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "5",
                    title: "5",
                    template: '<input type="checkbox" name="5checkbox" value="enable" />'
                },
                {field: "comment", title: "ความเห็นเพิ่มเติม Comments *", width: "320px", headerAttributes: {style: "text-align: center;"}, template: '<input type="text" style="min-width:300px;"/>'}]

        });
        $("#grid").data("kendoGrid").hideColumn("competency_type");

        var personData = [
            {text: "Black", value: "1"},
            {text: "Orange", value: "2"},
            {text: "Grey", value: "3"}
        ];

        $("#person").kendoDropDownList();
        $("#person").kendoDropDownList({
            dataTextField: "fullname",
            dataValueField: "usercode",
            dataSource: personDataSource,
          //s  change: onChange
        });
    });
</script>
</div>
