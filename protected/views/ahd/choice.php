<?php
$baseURL = Yii::app()->getBaseUrl(true);
$user_id = Yii::app()->user->getId();
$competency_url = "$baseURL/Competency/CoreCompetencyJsonAll";
$competency_update = "$baseURL/ahd/save";
$person_url = "$baseURL/CompetencyAssessor/JsonUser";
?>
<form action="<?= $competency_update ?>" method="post">
    <input type="hidden" name="assessor_id" value="<?=$id?>"/>
    <div id="grid"></div>  
    <div style="padding:10px"></div>
    <span style="text-align:center;padding-left: 550px; padding-top: 50px; ">
        <input id="button" type="submit" value="บันทึก" style="width:100px; height:30px"></input>
        <input id="reset" type="reset" value="ยกเลิก"  style="width:100px; height:30px"></input>
    </span>
     <div style="padding:10px"></div>
</form>

<script>
    $(document).ready(function () {
        $("#menu").kendoMenu();
        $("#person").change(function(){
            
        });
    });
    $("#button,#reset").kendoButton({
        enable: true
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
                    dataType: "json",
                    
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
          //  height: 550,
            columns: [
                {field: "competency_type", title: "Competency", groupHeaderTemplate: "#if(value==1){# Core Competency #} else if(value==2) {# Managerial Competency #} else if(value==3) {# Functional Competency #}#"},
                {field: "competency_name", title: "Competencies", headerAttributes: {style: "text-align: center;"}},
                {field: "maxvalue", title: "ระดับที่คาดหวัง", width: "100px", attributes: {style: "text-align: center;"}, headerAttributes: {style: "text-align: center;"}},
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "0.5",
                    title: "0.5",
                    template: '<input type="radio" name="value[#= competency_id #][#=competency_type #]" value="0.5" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "1",
                    title: "1",
                    template: '<input type="radio" name="value[#= competency_id #][#= competency_type #]" value="1" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "1.5",
                    title: "1.5",
                    template: '<input type="radio" name="value[#= competency_id #][#= competency_type #]" value="1.5" />'
                },
                {
                    headerAttributes: {style: "text-align: center;background: yellow;"},
                    attributes: {style: "text-align: center; background: yellow"},
                    width: "35px",
                    field: "2",
                    title: "2",
                    template: '<input type="radio" name="value[#= competency_id #][#= competency_type #]" value="2" />'
                },
                {
                    headerAttributes: {style: "text-align: center; background: yellow;"},
                    attributes: {style: "text-align: center; background: yellow"},
                    width: "35px",
                    field: "2.5",
                    title: "2.5",
                    template: '<input type="radio" name="value[#= competency_id #][#= competency_type #]" value="2.5" />'
                },
                {
                    headerAttributes: {style: "text-align: center; background: yellow"},
                    attributes: {style: "text-align: center; background: yellow"},
                    width: "35px",
                    field: "3",
                    title: "3",
                    template: '<input type="radio" name="value[#= competency_id #][#= competency_type #]" value="3"  checked/>'
                },
                {
                    headerAttributes: {style: "text-align: center;background: yellow;"},
                    attributes: {style: "text-align: center; background: yellow"},
                    width: "35px",
                    field: "3.5",
                    title: "3.5",
                    template: '<input type="radio" name="value[#= competency_id #][#= competency_type #]" value="3.5" />'
                },
                {
                    headerAttributes: {style: "text-align: center;background: yellow;"},
                    attributes: {style: "text-align: center; background: yellow"},
                    width: "35px",
                    field: "4",
                    title: "4",
                    template: '<input type="radio" name="value[#= competency_id #][#= competency_type #]" value="4" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "4.5",
                    title: "4.5",
                    template: '<input type="radio" name="value[#= competency_id #][#= competency_type #]" value="4.5" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "5",
                    title: "5",
                    template: '<input type="radio" name="value[#= competency_id #][#= competency_type #]" value="5" />'
                },
                {field: "comment", title: "ความเห็นเพิ่มเติม Comments *", width: "320px", 
                 headerAttributes: {style: "text-align: center;"}, template: '<input type="text" style="min-width:300px;" name="comment[#= competency_id #][#= competency_type #]"/>'}]

        });
        $("#grid").data("kendoGrid").hideColumn("competency_type");

        $("#person").kendoDropDownList({
            dataTextField: "fullname",
            dataValueField: "usercode",
            dataSource: personDataSource,
             change: function(e) {
                var value = this.value();
                 if(confirm('ยืนยันเปลี่ยนการประเมิน'))
                 window.location.href = "<?php echo Yii::app()->getBaseUrl(); ?>/ahd/choice/"+value; 
                // Use the value of the widget
              }
           
            //s  change: onChange
        });
    });
</script>
</div>
