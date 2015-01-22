<?php
$baseURL=Yii::app()->getBaseUrl(true);
$user_id=Yii::app()->user->getId();
?>
<div id="w">
              <script type="text/x-kendo-template" id="template">
                <div class="toolbar">
                <label class="header-label" style="width:400px;">รายชื่อผู้ที่จะทำการประเมิน</label>
                </div>
            </script>
      <table id="grid1">
                <colgroup>
                    <col style="width:50px;   text-align: center;" />
                    <col style="width:100px"/>
                    <col style="width:200px">
                    <col />
                    <col style="width:100px"/>
                </colgroup>
                <thead>
                    <tr>
                        <th data-field="make" >ลำดับ</th>
                        <th data-field="model">รูป</th>
                        <th data-field="year">เจ้าหน้าที่</th>
                        <th data-field="category">ผู้ประเมิน</th>
                        <th data-field="airconditioner">ประเมิน</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $index=1;
                    foreach($model as $items)
                         {
                     //   print_r($items);
                        $usercode=$items["usercode"];
                        $tmpUser=User::model()->findByAttributes(array('usercode'=>$usercode));
                        $tmpObj=CompetencyAccessorType::model()->findByPk($items["assessor_type"]);
                        $assessor_id=$items["assessor_id"];
                        
                    ?>
                    <tr>
                        <td style="text-align: center"><?=$index?></td>
                        <td><img src="<?php echo $baseURL; ?>/photo/<?=$usercode?>.jpg" width="70px" height="70px"></td>
                        <td><?=$usercode?> <?=$tmpUser->firstname_th?> <?=$tmpUser->lastname_th?></td>
                        <td><?php echo $tmpObj->type_name; ?></td>
                        <td><a href='<?php echo $baseURL; ?>/ahd/choice/<?=$assessor_id?>'  class="iconTextButton">เริ่มประเมิน</a></td>
                    </tr>
                         <?php
                                $index++;
                         }
                         
                          ?>
                </tbody>
            </table>
<script>
                $(document).ready(function() {
                     $(".iconTextButton").kendoButton({
                       
                    });
                    $("#grid1").kendoGrid({
                      //  height: 550,
                        sortable: true,   
                        pageable: true,
                       // pagesize:2,
                        toolbar: kendo.template($("#template").html()),
            
                    });
                });
</script>
</div>

            <script>
                $(document).ready(function () {
                    $("#menu").kendoMenu();
                });
            </script>
</div>