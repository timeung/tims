<select name="district" onchange="Selected_Dis();" id="district" class="form-control">
    <option>*****************</option>
    <?php
    foreach ($district->result() AS $value){
        echo "<option value='$value->districtcode'> $value->districtname</option>";
    }
    
    ?>
</select>