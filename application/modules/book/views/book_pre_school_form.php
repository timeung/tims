<?php
    foreach ($schooldetail->result() as $row){
        $schoolcode= $row->schoolcode;
        $schoolname=$row->schoolname;
        $villagename=$row->villagename;
        $district=$row->districtname;
        $districtcode=$row->districtcode;
        $province=$row->provincename;
        $provincecode=$row->provincecode;
        $tel=$row->schooldirectorphone;
        $distance=$row->schooldistance;
        $directorname=$row->schooldirectorname;
        $id=$row->id;
    }
?>


<ol class="breadcrumb">
  <li><a href="<?=base_url("book")?>">ຂໍ້ມູນປື້ມ</a></li>
  <li class="active"><?=$page_header?></li>
</ol>
<p><a href="javascript:history.back()" class="btn btn-primary btn-sm">&larr; Back</a></p>
<!--school Information--> 
<div class="row">
    <div class="col-md-6">
        <div class="text-warning">
    <blockquote>ຂໍ້ມູນກ່ຽວກັບໂຮງຮຽນ </blockquote>
</div>

    </div>
    <div class="col-md-6">
        <p class="text-right text-warning">ສົກສຶກສາ: <?=$row->schoolfiscalyear?></p>
    </div>
</div>


<div class="row">
    <div class="col-md-3 text-right">
        ຊື່ໂຮງຮຽນ
    </div>
    <div class="col-md-3">
        <input type="text" value="<?=$schoolname?>" readonly class="form-control"/>
    </div>
    <div class="col-md-3 text-right">
        ລະຫັດໂຮງຮຽນ
    </div>
    <div class="col-md-3">
        <input type="text" value="<?=$schoolcode?>" readonly class="form-control"/>
    </div>
</div>
<div class="row">
    <div class="col-md-3 text-right">
        ຕັ້ງຢູ່ບ້ານ
    </div>
    <div class="col-md-3">
        <input type="text" value="<?=$villagename?>" readonly class="form-control"/>
    </div>
    <div class="col-md-3 text-right">
        ລະຫັດບ້ານ
    </div>
    <div class="col-md-3">
        <input type="text" value="" readonly class="form-control"/>
    </div>
</div>

<div class="row">
    <div class="col-md-3 text-right">
        ເມືອງ
    </div>
    <div class="col-md-3">
        <input type="text" value="<?=$district?>" readonly class="form-control"/>
    </div>
    <div class="col-md-3 text-right">
        ລະຫັດເມືອງ
    </div>
    <div class="col-md-3">
        <input type="text" value="<?=$districtcode?>" readonly class="form-control"/>
    </div>
</div>
<div class="row">
    <div class="col-md-3 text-right">
        ແຂວງ
    </div>
    <div class="col-md-3">
        <input type="text" value="<?=$province?>" readonly class="form-control"/>
    </div>
    <div class="col-md-3 text-right">
        ລະຫັດແຂວງ
    </div>
    <div class="col-md-3">
        <input type="text" value="<?=$provincecode?>" readonly class="form-control"/>
    </div>
</div>
<div class="row">
    <div class="col-md-3 text-right">
        ໄລຍະທາງແຕ່ເມືອງຫາໂຮງຮຽນ
    </div>
    <div class="col-md-3">
        <input type="text" value="<?=$distance?>" readonly class="form-control"/>
    </div>
    <div class="col-md-3 text-right">
        ເບີໂທໂຮງຮຽນ
    </div>
    <div class="col-md-3">
        <input type="text" value="<?=$tel?>" readonly class="form-control"/>
    </div>
</div>
<div class="row">
    <div class="col-md-3 text-right">
        ຊື່ອຳນວຍການ
    </div>
    <div class="col-md-3">
        <input type="text" value="<?=$directorname?>" readonly class="form-control"/>
    </div>
    <div class="col-md-3 text-right">
        ມືຖື
    </div>
    <div class="col-md-3">
        <input type="text" value="<?=$tel?>" readonly class="form-control"/>
    </div>
</div>
<!--End school Information-->
<br>

<input type="hidden" id="idschool" value="<?=$id?>"/>
 <div class="container">
<ul class="nav nav-tabs">
  <li class="active"><a href="#tab_a" data-toggle="tab"><u>ຈນ ຫ້ອງຮຽນ</u></a></li>
  <li><a href="#tab_b" data-toggle="tab">ຈນ ຄູສອນ</a></li>
  <li><a href="#tab_c" data-toggle="tab">ຈນ ນັກຮຽນ (ປະຈຸບັນ)</a></li>
  <li><a href="#tab_d" data-toggle="tab">ຈນ ນັກຮຽນ (ຕົວເລກຄາດຄະເນ ສົກຕໍ່ໄປ)</a></li>
</ul>
<div class="tab-content">
        <div class="tab-pane active" id="tab_a">
                <div class="col-md-6">
                            <table class="table table-bordered table-condensed table-striped table-hover">
                                <tr align="center">
                                    <th>ປ 1</th>
                                    <th>ປ 2</th>
                                    <th>ປ 3</th>
                                    <th>ປ 4</th>
                                    <th>ປ 5</th>
                                    <th>ລວມ</th>
                                </tr>
                                <tr align="center">
                                    <td><input type="text" class="form-control txt-right" id="c1" value="<?=$row->c1?>" style="width: 50px" onblur="get_Value()" onkeypress="return isNumberKey(event)"/></td>
                                    <td> <input type="text" class="form-control txt-right" id="c2" value="<?=$row->c2?>" style="width: 50px" onblur="get_Value()" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" id="c3" value="<?=$row->c3?>" style="width: 50px" onblur="get_Value()" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" id="c4" value="<?=$row->c4?>" style="width: 50px" onblur="get_Value()" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" id="c5" value="<?=$row->c5?>" style="width: 50px" onblur="get_Value()" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <div class="feedback"><input type="text" class="form-control txt-right" value="<?=$row->c1+$row->c2+$row->c3+$row->c4+$row->c5?>" style="width: 60px" readonly/>  </div>  </td>
                                </tr>
                            </table>
                </div>

        </div>
    
    
        <div class="tab-pane" id="tab_b">
                <div class="col-md-6">
                            <table class="table table-bordered table-condensed table-striped table-hover">
                                <tr>
                                    <th>ປ 1</th>
                                    <th>ປ 2</th>
                                    <th>ປ 3</th>
                                    <th>ປ 4</th>
                                    <th>ປ 5</th>
                                    <th>ລວມ</th>
                                </tr>
                                <tr align="center">
                                    <td><input type="text" class="form-control txt-right" value="<?=$row->t1?>" id="t1" onblur="get_teacher()" style="width: 50px" onkeypress="return isNumberKey(event)"/></td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->t2?>" id="t2" onblur="get_teacher()" style="width: 50px"onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->t3?>" id="t3" onblur="get_teacher()" style="width: 50px" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->t4?>"id="t4" onblur="get_teacher()" style="width: 50px" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->t5?>"id="t5" onblur="get_teacher()" style="width: 50px" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <div class="feedback_teacher"><input type="text" class="form-control txt-right" value="<?=$row->t1+$row->t2+$row->t3+$row->t4+$row->t5?>" style="width: 60px" readonly/> </div>   </td>
                                </tr>
                            </table>
                </div>
        </div>
        <div class="tab-pane" id="tab_c">
                <div class="col-md-6">
                            <table class="table table-bordered table-condensed table-striped table-hover">
                                <tr>
                                    <th>ປ 1</th>
                                    <th>ປ 2</th>
                                    <th>ປ 3</th>
                                    <th>ປ 4</th>
                                    <th>ປ 5</th>
                                    <th>ລວມ</th>
                                </tr>
                               <tr align="center">
                                    <td><input type="text" class="form-control txt-right" value="<?=$row->s1?>" id="s1" onblur="get_std()" style="width: 50px;" onkeypress="return isNumberKey(event)"/></td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->s2?>" id="s2" onblur="get_std()" style="width: 50px" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->s3?>" id="s3" onblur="get_std()" style="width: 50px" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->s4?>" id="s4" onblur="get_std()" style="width: 50px" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->s5?>" id="s5" onblur="get_std()" style="width: 50px" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td><div class="feedback_std"> <input type="text" class="form-control txt-right" value="<?=$row->s1+$row->s2+$row->s3+$row->s4+$row->s5?>" style="width: 60px" readonly/>  </div>  </td>
                                </tr>
                            </table>
                </div>
        </div>
        <div class="tab-pane" id="tab_d">
                <div class="col-md-6">
                            <table class="table table-bordered table-condensed table-striped table-hover">
                                <tr>
                                    <th>ປ 1</th>
                                    <th>ປ 2</th>
                                    <th>ປ 3</th>
                                    <th>ປ 4</th>
                                    <th>ປ 5</th>
                                    <th>ລວມ</th>
                                </tr>
                               <tr align="center">
                                    <td><input type="text" class="form-control txt-right" value="<?=$row->ss1?>" id="ss1" style="width: 50px" onblur="get_stdss()" onkeypress="return isNumberKey(event)"/></td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->ss2?>" id="ss2"  style="width: 50px" onblur="get_stdss()" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->ss3?>" id="ss3" style="width: 50px" onblur="get_stdss()" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->ss4?>" id="ss4" style="width: 50px" onblur="get_stdss()" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td> <input type="text" class="form-control txt-right" value="<?=$row->ss5?>" id="ss5" style="width: 50px" onblur="get_stdss()" onkeypress="return isNumberKey(event)"/>    </td>
                                    <td><div class="feedback_stdss"> <input type="text" class="form-control txt-right" value="<?=$row->ss1+$row->ss2+$row->ss3+$row->ss4+$row->ss5?>" style="width: 60px" readonly/>  </div>  </td>
                                </tr>
                            </table>
                </div>
        </div>
</div><!-- tab content -->
</div><!-- end of container -->
 <!--Book Information-->
<div class="text-warning">
 <blockquote>ຂໍ້ມູນກ່ຽວກັບປື້ມ</blockquote>
 </div>
 <div class="container">
                <div class="col-md-6">
                            <table class="table table-bordered table-condensed table-striped table-hover table-responsive">
                                <?php
                                
                    foreach($get_book->result() as $book){
                        $bookcode=$book->bookcode;
                        $bookid=$book->id;
                        $x=$book->x;
                        $i++;
                        echo "<tr ";if (!is_numeric($bookcode)) echo " class='info'"; echo">
                                                                <td> $book->description</td>
                    <td>"; if(is_numeric($bookcode)){ if($x=="x") echo "X"; else echo $book->p1; } else echo "ປ1";  echo"</td>
                                                               <td>"; if(is_numeric($bookcode)) { if($x=="x") echo "X"; else echo $book->p2; } else echo "ປ2";  echo"</td>
                                                                   <td>"; if(is_numeric($bookcode)) echo $book->p3;   else echo "ປ3";  echo"</td>
                                                                       <td>"; if(is_numeric($bookcode)) echo $book->p4;  else echo "ປ4";  echo"</td>
                                                                           <td>"; if(is_numeric($bookcode)) echo $book->p5;   else echo "ປ5";  echo"</td>
                                                                               <td>"; if(is_numeric($bookcode)) echo"<a href='".base_url("book/form_edit_book/$bookcode/$schoolcode")."'><i class='glyphicon glyphicon-edit'></i></a>";  else echo "";  echo"</td>
                                                            </tr> ";
                    }
                ?>

                            </table>
                </div>
<div class="col-md-6">
    <table class="table table-bordered table-condensed table-striped table-hover table-responsive">
                                <?php
                    foreach($get_book_last->result() as $book2){
                        $bookcode2=$book2->bookcode;
                        $x2=$book2->x;
                        echo "<tr ";if (!is_numeric($bookcode2)) echo " class='info'"; echo">
                                    <td>$book2->description</td>
                                    <td>";if(is_numeric($bookcode2)) {if($x2=="x") echo "X";  else echo $book2->p1;} else echo "ປ1";echo"</td>
                                    <td>";if(is_numeric($bookcode2)) { if($x2=="x") echo "X";} else echo "ປ2";echo"</td>
                                    <td>";if(is_numeric($bookcode2)) { if($x2=="x" && $bookcode2!=32 && $bookcode2!=25) echo "X";}else echo "ປ3"; echo"</td>
                                    <td>";if(is_numeric($bookcode2)) { if($x2=="x" && $bookcode2!=32 && $bookcode2!=25) echo "X";}else echo "ປ4"; echo"</td>
                                    <td>"; if(is_numeric($bookcode2)) {if($x2=="x" && $bookcode2!=32 && $bookcode2!=25) echo "X";}else echo "ປ5"; echo"</td>
                                </tr>";
                    }
                ?>
                                
    </table>
    <table class="table table-bordered table-condensed table-striped table-hover table-responsive">
        <tr>
            <th></th>
            <th colspan="2">ປ1</th>
            <th colspan="2">ປ2</th>
            <th colspan="2">ປ3</th>
            <th colspan="2">ປ4</th>
            <th colspan="2">ປ5</th>
        </tr>
            <?php
                            foreach ($get_sum_book->result() as $sum){
                                $bookcode3=$sum->bookcode;
                                echo "<tr ";if (!is_numeric($bookcode3)) echo " class='info'"; echo">
                                                                                <td>$sum->description</td>
                                                                                <td>";if(is_numeric($bookcode3)){echo $sum->t1;} else echo "ຄູ";echo"</td>
                                                                                <td>";if(is_numeric($bookcode3)){echo $sum->p1;} else echo "ປື້ມ";echo"</td>
                                                                                    <td>";if(is_numeric($bookcode3)){echo $sum->t2;} else echo "ຄູ";echo"</td>
                                                                                <td>";if(is_numeric($bookcode3)){echo $sum->p2;} else echo "ປື້ມ";echo"</td>
                                                                               <td>";if(is_numeric($bookcode3)){echo $sum->t3;} else echo "ຄູ";echo"</td>
                                                                                <td>";if(is_numeric($bookcode3)){echo $sum->p3;} else echo "ປື້ມ";echo"</td>
                                                                                    <td>";if(is_numeric($bookcode3)){echo $sum->t4;} else echo "ຄູ";echo"</td>
                                                                                <td>";if(is_numeric($bookcode3)){echo $sum->p4;} else echo "ປື້ມ";echo"</td>
                                                                                    <td>";if(is_numeric($bookcode3)){echo $sum->t5;} else echo "ຄູ";echo"</td>
                                                                                <td>";if(is_numeric($bookcode3)){echo $sum->p5;} else echo "ປື້ມ";echo"</td>
                                                                            </tr>";
                            }
            ?>
    </table>
    <a href="" class="btn-success btn"><i class="glyphicon glyphicon-save"></i> Complete</a>
</div>
</div>
 <!--end of container--> 



