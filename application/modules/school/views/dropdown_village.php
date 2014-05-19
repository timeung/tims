<select name="village" id="village">
    <?php
    foreach ($village->result() AS $value){
        echo "<option value='$value->villagecode'> $value->villagename</option>";
    }
    
    ?>
</select>