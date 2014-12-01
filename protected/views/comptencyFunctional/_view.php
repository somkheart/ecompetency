<?php
/* @var $this ComptencyFunctionalController */
/* @var $data ComptencyFunctional */
?>
           <tr>
               <td ><div style="text-align: center"><?php echo ++$index; ?></div></td>
                <td><?php echo $data->function_name;?></td>
                <td>Active</td>
                <td><a class="function-edit">แก้ไข</a><a class="function-delete">ลบ</a></td>
            </tr>
