<ol class="breadcrumb">
    <li><a href="<?=base_url("book")?>">ຂໍ້ມູນປື້ມ</a></li>
  <li class="active"><?=$page_header?></li>
</ol>
<div class="row">
    <div class="col-md-2">
        <p>ແຂວງ</p>
    </div>
    <div class="col-md-2">
        <!--<select class="form-control" id="book-province">-->
            <?php
//            foreach ($province->result() as $list){
//                echo "<option value='$list->provincecode'"; if($this->uri->segment(3)==$list->provincecode) echo " SELECTED "; echo">$list->provincename</option>";
//            }
            ?>
             <!--</select>-->
    </div>
    <div class="col-md-3">
        <p>ເມືອງ</p>
        
        
    </div>
    <div class="col-md-3">
        <!--<select class="form-control">-->
            <?php
            
//            foreach ($distict->result() as $list_d){
//                echo "<option value='$list_d->districtcode' >$list_d->districtname</option>";
//            }
            ?>
             <!--</select>-->
    </div>
</div>
<table class="table table-hover table-bordered">
    <tr class="info">
        <th>ລຳດັບ</th>
        <th>ຊື່ໂຮງຮຽນ</th>
        <th>ລະຫັດ<br>ໂຮງຮຽນ</th>
        <th>ແຂວງ</th>
        <th>ເມືອງ</th>
        <th>ບ້ານ</th>
        <th>ຈນ<br>ນັກຮຽນ</th>
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
                    <td><small>$row->schoolname</small></td>
                    <td>$row->schoolcode</td>
                    <td><small>$row->provincename</small></td>
                    <td><small>$row->districtname</small></td>
                    <td><small>$row->villagename</small></td>
                    <td align='right'>$row->totalstudent</td>
                    <td><small>$row->schoollevel</small></td>
                    <td><small>$row->schooltype</small></td>
                    <td><small>$row->schoolarea</small></td>
                    <td><a href='".base_url("book/form/$row->schoolcode")."' title='ແບບຟອມເກັບກຳສະຖິຕິປື້ມໂຮງຮຽນ".$page_header."' class='btn btn-sm'><span class=\"glyphicon glyphicon-edit\"></span></a></td>
                </tr>";
        }
    ?>
    
    
</table>