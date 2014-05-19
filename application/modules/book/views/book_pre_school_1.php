<ol class="breadcrumb">
    <li><a href="<?=base_url("book")?>">ຂໍ້ມູນປື້ມ</a></li>
  <li class="active"><?=$page_header?></li>
</ol>

<table class="table table-hover table-bordered">
    <tr class="info">
        <th>ລຳດັບ</th>
        <th>ຊື່ໂຮງຮຽນ</th>
        <th>ລະຫັດ<br>ໂຮງຮຽນ</th>
        <th>ແຂວງ</th>
        <th>ເມືອງ</th>
        <th>ບ້ານ</th>
        <th>ຈຳນວນນັກຮຽນ</th>
        <!--<th>ຈຳນວນນັກຮຽນຍິງ</th>-->
        <th>ໂຮງຮຽນ</th>
        <th>ປະເພດໂຮງຮຽນ</th>
        <th>ເຂດໂຮງຮຽນ</th>
        <th>ແກ້ໄຂ</th>
    </tr>
    <?php
        foreach ($school->result() as $row){
            $i++;
            echo "<tr>
                    <td>$i</td>
                    <td>$row->schoolname</td>
                    <td>$row->schoolcode</td>
                    <td>$row->provincename</td>
                    <td>$row->districtname</td>
                    <td>$row->villagename</td>
                    <td>$row->totalstudent</td>
                    <td>$row->schoollevel</td>
                    <td>$row->schooltype</td>
                    <td>$row->schoolarea</td>
                    <td><a href='".base_url("book/form/$row->schoolcode")."' title='ແບບຟອມເກັບກຳສະຖິຕິປື້ມໂຮງຮຽນ".$page_header."' class='btn btn-sm'><span class=\"glyphicon glyphicon-edit\"></span></a></td>
                </tr>";
        }
    ?>
    
    
</table>