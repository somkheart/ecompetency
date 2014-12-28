<?php
$baseURL = Yii::app()->getBaseUrl(true);
$user_id = Yii::app()->user->getId();
$competency_url = "$baseURL/Competency/CoreCompetencyJsonAll";
$competency_update = "$baseURL/Competency/choice/save";
$person_url = "$baseURL/CompetencyAssessor/JsonUser";
?>
<form action="<?= $competency_update ?>">
    <div id="gridd"></div>  
    <table role="grid" id="grid" style="height: auto;">
        <colgroup>
            <col class="k-group-col"><col>
            <col style="width:100px">
            <col style="width:35px">
            <col style="width:35px">
            <col style="width:35px">
            <col style="width:35px">
            <col style="width:35px">
            <col style="width:35px">
            <col style="width:35px">
            <col style="width:35px">
            <col style="width:35px">
            <col style="width:35px">
            <col style="width:320px">
        </colgroup>
        <tbody role="rowgroup">
            <tr class="k-grouping-row">
                <td colspan="14" aria-expanded="true">
                <p class="k-reset">
                <a class="k-icon k-i-collapse" href="#" tabindex="-1"></a> Core Competency </p>
                </td>
            </tr>
            <tr data-uid="62e72708-7d38-4c40-8363-c96add450705" role="row">
                <td class="k-group-cell">&nbsp;</td><td style="display:none" role="gridcell">1</td>
                <td role="gridcell">ความยึดมั่นใจผลสำเร็จของงาน (Result Oriented)</td>
                <td style="text-align: center;" role="gridcell">3</td><td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="2checkbox" value="enable" "=""></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="2.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="3checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="3.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="4checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                <td role="gridcell"><input type="text" style="min-width:300px;"></td></tr>
            <tr class="k-alt" data-uid="3d40ce07-3452-41f3-b87f-dd48b3e69f94" role="row">
                <td class="k-group-cell">&nbsp;</td><td style="display:none" role="gridcell">1</td>
                <td role="gridcell">การมีจรรยาบรรณและความซื่อสัตย์ (Ethic &amp; integrity)</td>
                <td style="text-align: center;" role="gridcell">3</td>
                <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="2checkbox" value="enable" "=""></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="2.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="3checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="3.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="4checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                <td role="gridcell"><input type="text" style="min-width:300px;"></td>
            </tr><tr data-uid="11dacf73-7dc5-4550-b630-4ac3c71983e9" role="row">
                <td class="k-group-cell">&nbsp;</td><td style="display:none" role="gridcell">1</td>
                <td role="gridcell">จิตสำนึกในการบริการ ( Service Mind Oriented )</td>
                <td style="text-align: center;" role="gridcell">3</td>
                <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="2checkbox" value="enable" "=""></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="2.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="3checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="3.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="4checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                <td role="gridcell"><input type="text" style="min-width:300px;"></td>
            </tr>
            <tr class="k-alt" data-uid="d18dafa6-eb09-43e7-8795-894c2136c42c" role="row">
                <td class="k-group-cell">&nbsp;</td><td style="display:none" role="gridcell">1</td>
                <td role="gridcell">การพัฒนาอย่างต่อเนื่อง (Continuous Improvement)</td>
                <td style="text-align: center;" role="gridcell">3</td>
                <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="2checkbox" value="enable" "=""></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="2.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="3checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="3.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="4checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                <td role="gridcell"><input type="text" style="min-width:300px;"></td>
            </tr>
            <tr data-uid="e9dadb06-c92b-4364-bec6-79c752877f07" role="row">
                <td class="k-group-cell">&nbsp;</td>
                <td style="display:none" role="gridcell">1</td>
                <td role="gridcell">การประสานงานและการทำงานเป็นทีม ( Cooperation &amp; Teamwork )</td>
                <td style="text-align: center;" role="gridcell">3</td>
                <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="2checkbox" value="enable" "=""></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="2.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="3checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="3.5checkbox" value="enable"></td>
                <td style="text-align: center; background: yellow" role="gridcell"><input type="radio" name="4checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                <td role="gridcell"><input type="text" style="min-width:300px;"></td>
            </tr>
                <tr class="k-grouping-row">
                    <td colspan="14" aria-expanded="true">
                        <p class="k-reset"><a class="k-icon k-i-collapse" href="#" tabindex="-1"></a> Managerial Competency </p>
                    </td>
                </tr>
                <tr data-uid="1ed97249-f1f3-43e9-bb99-35c6c0abad36" role="row">
                    <td class="k-group-cell">&nbsp;</td>
                    <td style="display:none" role="gridcell">2</td>
                    <td role="gridcell">การวางแผนและปฏิบัติตามแผน ( Planning &amp; Oranizing)</td>
                    <td style="text-align: center;" role="gridcell">3</td>
                    <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2checkbox" value="enable" "=""></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="4checkbox" value="enable"></td>
                    <td role="gridcell">
                        <input type="radio" name="4.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="text" style="min-width:300px;"></td>
                </tr><tr class="k-alt" data-uid="afb43c5f-23fc-4c10-b642-e4a6c016a54a" role="row">
                    <td class="k-group-cell">&nbsp;</td><td style="display:none" role="gridcell">2</td>
                    <td role="gridcell">ความไว้ใจได้ และความน่าเชื่อถือ (Trusted &amp; Reliable)</td>
                    <td style="text-align: center;" role="gridcell">3</td>
                    <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2checkbox" value="enable" "=""></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="4checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="text" style="min-width:300px;"></td>
                </tr><tr data-uid="ec59c79f-1ef0-4ed7-9d15-a71eb3d885ec" role="row">
                    <td class="k-group-cell">&nbsp;</td>
                    <td style="display:none" role="gridcell">2</td>
                    <td role="gridcell">การสอนงานและให้คำปรึกษา (Coaching &amp; Mentoring)</td>
                    <td style="text-align: center;" role="gridcell">3</td>
                    <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2checkbox" value="enable" "="">
                    </td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="4checkbox" value="enable">
                    </td>
                    <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable">
                    </td>
                    <td role="gridcell">
                        <input type="radio" name="5checkbox" value="enable">
                    </td>
                    <td role="gridcell">
                        <input type="text" style="min-width:300px;">
                    </td>
                </tr>
                <tr class="k-alt" data-uid="d9f41f73-652a-4a77-a213-79dbf762d361" role="row">
                    <td class="k-group-cell">&nbsp;</td>
                    <td style="display:none" role="gridcell">2</td>
                    <td role="gridcell">การบริหารการเปลี่ยนแปลง (Change Management)</td>
                    <td style="text-align: center;" role="gridcell">3</td>
                    <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2checkbox" value="enable" "=""></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="4checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="text" style="min-width:300px;"></td></tr>
                <tr data-uid="1046c166-2f83-432e-a045-d52b35d1aae1" role="row">
                    <td class="k-group-cell">&nbsp;</td><td style="display:none" role="gridcell">2</td>
                    <td role="gridcell">การมีกรอบความคิดอย่างมีหลักการ (Rational Thinking)</td>
                    <td style="text-align: center;" role="gridcell">3</td>
                    <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2checkbox" value="enable" "=""></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="4checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="text" style="min-width:300px;"></td>
                </tr>
                <tr class="k-alt" data-uid="f03eea22-ffdc-495c-8c10-1324aa4f5411" role="row">
                    <td class="k-group-cell">&nbsp;</td>
                    <td style="display:none" role="gridcell">2</td>
                    <td role="gridcell">การบริหารงานตามหลักธรรมาภิบาล (Good Governance)</td><td style="text-align: center;" role="gridcell">3</td>
                    <td role="gridcell">
                        <input type="radio" name="0.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2checkbox" value="enable" "=""></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="4checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="text" style="min-width:300px;"></td>
                </tr>
                <tr data-uid="dc4b3d06-9104-434c-aa50-347cf6e366c1" role="row">
                    <td class="k-group-cell">&nbsp;</td>
                    <td style="display:none" role="gridcell">2</td>
                    <td role="gridcell">ความคิดริเริ่ม (Initiative)</td>
                    <td style="text-align: center;" role="gridcell">3</td>
                    <td role="gridcell">
                        <input type="radio" name="0.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2checkbox" value="enable" "=""></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="4checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="text" style="min-width:300px;"></td>
                </tr>
                <tr class="k-grouping-row">
                    <td colspan="14" aria-expanded="true">
                        <p class="k-reset"><a class="k-icon k-i-collapse" href="#" tabindex="-1"></a> Functional Competency </p>
                    </td>
                </tr>
                <tr data-uid="75e93c28-7f9e-4712-97a7-781cda529421" role="row">
                    <td class="k-group-cell">&nbsp;</td>
                    <td style="display:none" role="gridcell">3</td>
                    <td role="gridcell">ความรู้และทักษะเกียวกับการติดตามวิเคราะห์และประเมินผลการดำเนินงาน</td>
                    <td style="text-align: center;" role="gridcell">3</td>
                    <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2checkbox" value="enable" "=""></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="2.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="3.5checkbox" value="enable"></td>
                    <td style="text-align: center; background: yellow" role="gridcell">
                        <input type="radio" name="4checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                    <td role="gridcell"><input type="text" style="min-width:300px;"></td>
                </tr>
                    <tr class="k-alt" data-uid="504811ca-23df-4124-992e-7011bca8c6f5" role="row">
                        <td class="k-group-cell">&nbsp;</td>
                        <td style="display:none" role="gridcell">3</td>
                        <td role="gridcell">ความรู้และทักษะเกียวกับการบริหารความเสี่ยง</td>
                        <td style="text-align: center;" role="gridcell">3</td>
                        <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                        <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                        <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="2checkbox" value="enable" "=""></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="2.5checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="3checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="3.5checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="4checkbox" value="enable"></td>
                        <td role="gridcell">
                            <input type="radio" name="4.5checkbox" value="enable">
                        </td>
                        <td role="gridcell">
                            <input type="radio" name="5checkbox" value="enable">
                        </td>
                        <td role="gridcell">
                            <input type="text" style="min-width:300px;">
                        </td>
                    </tr>
                    <tr data-uid="5876a4a8-2d4f-40e0-a1f5-2d99b80a16eb" role="row">
                        <td class="k-group-cell">&nbsp;</td>
                        <td style="display:none" role="gridcell">3</td>
                        <td role="gridcell">ความรู้และทักษะเกียวกับการดำเนินงานตามแนวทางการควบคุมภายใน</td>
                        <td style="text-align: center;" role="gridcell">3</td><td role="gridcell">
                            <input type="radio" name="0.5checkbox" value="enable"></td>
                        <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                        <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="2checkbox" value="enable" "=""></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="2.5checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="3checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="3.5checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="4checkbox" value="enable"></td>
                        <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                        <td role="gridcell"><input type="radio" name="5checkbox" value="enable"></td>
                        <td role="gridcell"><input type="text" style="min-width:300px;"></td></tr>
                    <tr class="k-alt" data-uid="d23bf5b1-899b-4436-987d-31ee3f62049b" role="row">
                        <td class="k-group-cell">&nbsp;</td>
                        <td style="display:none" role="gridcell">3</td>
                        <td role="gridcell">ทักษะการประสานงาน (Interpersonal Skill)</td>
                        <td style="text-align: center;" role="gridcell">3</td>
                        <td role="gridcell"><input type="radio" name="0.5checkbox" value="enable"></td>
                        <td role="gridcell"><input type="radio" name="1checkbox" value="enable"></td>
                        <td role="gridcell"><input type="radio" name="1.5checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="2checkbox" value="enable" "=""></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="2.5checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="3checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="3.5checkbox" value="enable"></td>
                        <td style="text-align: center; background: yellow" role="gridcell">
                            <input type="radio" name="4checkbox" value="enable"></td>
                        <td role="gridcell"><input type="radio" name="4.5checkbox" value="enable"></td>
                <td role="gridcell">
                    <input type="radio" name="5checkbox" value="enable"></td><td role="gridcell"><input type="text" style="min-width:300px;"></td></tr></tbody></table>
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
                    template: '<input type="radio" name="0.5checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "1",
                    title: "1",
                    template: '<input type="radio" name="1checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "1.5",
                    title: "1.5",
                    template: '<input type="radio" name="1.5checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;background: yellow;"},
                    attributes: {style: "text-align: center; background: yellow"},
                    width: "35px",
                    field: "2",
                    title: "2",
                    template: '<input type="radio" name="2checkbox" value="enable"" />'
                },
                {
                    headerAttributes: {style: "text-align: center; background: yellow;"},
                    attributes: {style: "text-align: center; background: yellow"},
                    width: "35px",
                    field: "2.5",
                    title: "2.5",
                    template: '<input type="radio" name="2.5checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center; background: yellow"},
                    attributes: {style: "text-align: center; background: yellow"},
                    width: "35px",
                    field: "3",
                    title: "3",
                    template: '<input type="radio" name="3checkbox" value="enable" />',
                },
                {
                    headerAttributes: {style: "text-align: center;background: yellow;"},
                    attributes: {style: "text-align: center; background: yellow"},
                    width: "35px",
                    field: "3.5",
                    title: "3.5",
                    template: '<input type="radio" name="3.5checkbox"  value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;background: yellow;"},
                    attributes: {style: "text-align: center; background: yellow"},
                    width: "35px",
                    field: "4",
                    title: "4",
                    template: '<input type="radio" name="4checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "4.5",
                    title: "4.5",
                    template: '<input type="radio" name="4.5checkbox" value="enable" />'
                },
                {
                    headerAttributes: {style: "text-align: center;"},
                    width: "35px",
                    field: "5",
                    title: "5",
                    template: '<input type="radio" name="5checkbox" value="enable" />'
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
