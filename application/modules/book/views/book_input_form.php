<p><a href="javascript:history.back()" class="btn btn-primary btn-sm">&larr; Back</a></p>
<?php
    foreach($book->result() as $row){
        $description= $row->description;
        $p1=$row->p1;
        $p2=$row->p2;
        $p3=$row->p3;
        $p4=$row->p4;
        $p5=$row->p5;
    }
    $id=$this->uri->segment(3);
    $schoolcode=$this->uri->segment(4);
?>
<div class="container">
    
<div class="row">
    <div class="col-md-6">
        <h2><?=$description?></h2>
    </div>
</div>
<?php echo form_open("book/save/$id/$schoolcode"); ?>    
<div class="row">
    <div class="col-md-6">
    <table class="table table-bordered table-condensed table-striped table-hover">
        <tr>
            <th>ປ1</th>
            <th>ປ2</th>
            <th>ປ3</th>
            <th>ປ4</th>
            <th>ປ5</th>
        </tr>
        <tr>
                 <td><input type="text" name="p1" value="<?=$p1?>" class="form-control txt-right" style="width: 50px;"/></td>
                 <td><input type="text" name="p2" value="<?=$p2?>" class="form-control txt-right" style="width: 50px;"/></td>
                 <td><input type="text" name="p3" value="<?=$p3?>" class="form-control txt-right" style="width: 50px;"/></td>
                 <td><input type="text" name="p4" value="<?=$p4?>" class="form-control txt-right" style="width: 50px;"/></td>
                 <td><input type="text" name="p5" value="<?=$p5?>" class="form-control txt-right" style="width: 50px;"/></td>
        </tr>
        </table>
        <!--<input type="" class=" "/>-->
        <button type="submit" class="btn btn-success">
                <span class="glyphicon glyphicon-save"></span> Submit</button>
       </div>

</div>
    <?php echo form_close();?>
    </div>
