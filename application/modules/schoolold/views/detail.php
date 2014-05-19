<?php
//echo $record;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<table class='table table-condensed table-striped table-bordered table-hover' align='center' width="90%">
	<tr>
		<th>ລຳດັບ</th>
		<th>ຊື່ໂຮງຮຽນ</th>
		<th>ລະຫັດໂຮງຮຽນ</th>
		<th>ແຂວງ</th>
		<th>ເມືອງ</th>
		<th>ບ້ານ</th>
		<th>ຈຳນວນນັກຮຽນ</th>
		<th>ຈຳນວນນັກຮຽນຍິງ</th>
		<th>ໂຮງຮຽນ</th>
		<th>ປະເພດໂຮງຮຽນ</th>
		<th>ເຂດໂຮງຮຽນ</th>	
		<th>ແກ້ໄຂ</th>	
	</tr>
    
    
	<?php
    foreach ($record->result() AS $row){
        $i++;	
		echo "
			<tr align='center'>
				<td>$i</td>
				<td>$row->schoolname</td>
				<td>$row->schoolcode</td>
				<td>$row->provincename</td>
				<td>$row->districtname</td>
				<td>$row->villagename</td>
				<td>$row->totalstudent</td>
				<td>$row->totalfemale</td>
				<td>$row->schoollevel</td>
				<td>$row->schooltype</td>
				<td>$row->schoolarea</td>
				<td><a href='edit/$row->id'><i class='icon-edit'></i></a></td>
			</tr>
			
			
		";
    }
   
	?>
</table>