<div class="container">
        <input type="hidden" id="role" value=""/>
<!--   form data entry for membership    -->
                    
                    	

<form name="form" class="form-horizontal" action="<?=  base_url()?>school/submit" method="POST" onsubmit="return validateForm()">
                 <input type='hidden' value="" name='ref_no' />
                 <legend class="text-center">School form</legend>
                 <!---->
                  <div class="row-fluid">
                    <div class="span12">
                      <div class="row-fluid">
                        <div class="span12 bgcolor">
                            <?php //$message?>
                        </div>
                      </div>         
                        <div >
                         <div>
                   <div >
                        <div>
                        <div class="row-fluid">
                        <div class="span12 ">
                          <div class="control-group">
                            <label class="control-label text-error" >ສົກປີ </label>
                            <div class="controls">
                                         <select name="schoolfiscalyear" class="span10" autofocus >
                          <?php
                 foreach ($fiscalyear->result() AS $value){
                  echo "<option value='$value->schoolfiscalyear' >$value->schoolfiscalyear</option>";
                }
                    ?>
                        </select>
                            </div>
                          </div>
                        </div>
                            
                      </div><!--/row-->
                      <div class="row-fluid ">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                           <label class="control-label text-error" >ຊື່ໂຮງຮຽນ</label>
                            <div class="controls">
                                          <input type="text"  name="schoolname" />
                              <!--<span class="help-block">This is inline help</span>-->
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label text-error" >ລະຫັດໂຮງຮຽນ</label>
                            <div class="controls">
                                 <input type="text" class="span7" name="schoolcode"  onkeypress="return isNumberKey(event)" />
                              <!--<span class="help-block">This field has error.</span>-->
                            </div>
                          </div>
                        </div><!--/span-->
                      </div><!--/row-->
                      
                      
                      <div class="row-fluid ">
                        <div class="span3 bgcolor">
                          <div class="control-group">
                           <label class="control-label text-error" >ແຂວງ</label>
                            <div class="controls">
                                          <select name="province" id='province' class="span12">                            
                        <option value="">*****</option>
                             <?php
                 foreach ($province->result() AS $value){
                  echo "<option value='$value->provincecode'>$value->provincename</option>";
                }
                    ?>
                        </select>
                              <!--<span class="help-block">This is inline help</span>-->
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span3 bgcolor">
                          <div class="control-group">
                            <label class="control-label text-error" >ເມືອງ</label>
                            <div class="controls">
                                 <span id='feedback-district'> 
                                    <select name="district" class="span12">
                                        <option value="">*************</option>
                                
                                     </select></span>
                <!--</label>-->
                              <!--<span class="help-block">This field has error.</span>-->
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span3 bgcolor">
                          <div class="control-group">
                            <label class="control-label text-error" >ບ້ານ</label>
                            <div class="controls">
                                <input type="text" name="village"/>
                                <!--<span id="feedback-village">--> 
                        <!--<select name="village" id="village" class="span12">-->
                                         <!--<option value="">*****</option>-->
                           

                        <!--</select>-->
                    <!--</span>-->
                              <!--<span class="help-block">This field has error.</span>-->
                            </div>
                          </div>
                        </div>
                      </div><!--/row-->
                      
                      
                      
                       <legend>1 ປະເພດໂຮງຮຽນ</legend> 
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ໂຮງຮຽນ </label>
                            <div class="controls">
                                           <select name="schoollevel" id='schoollevel'>
                             <?php
                    foreach ($tbschoollevel->result() AS $value){
                        echo "<option value='$value->id'>$value->schoollevel</option>";
                    }           
                             ?>
                                    
                                </select>
                              <!--<span class="help-block">This is inline help</span>-->
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ປະເພດໂຮງຮຽນ</label>
                            <div class="controls">
                                 <select name="schooltype" id='schooltype'>
                                    <?php
                    foreach ($tbschooltype->result() AS $value){
                        echo "<option value='$value->id'>$value->schooltype</option>";
                    }           
                             ?>
                                    
                                </select>
                              <!--<span class="help-block">This field has error.</span>-->
                            </div>
                          </div>
                        </div><!--/span-->
                      </div><!--/row-->

                      <fieldset>
                      <legend>2 ທີ່ຕັ້ງຂອງໂຮງຮຽນ</legend>
                      
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ໂຮງຮຽນຂອງທ່ານຢູ່ໃນເຂດໃດ?</label>
                            <div class="controls">
                                <select name="schoolarea" >
                    <?php
                            foreach ($tbschoolarea->result_array() AS $row1){
                        echo "<option value='$row1[id]'>$row1[schoolarea]</option>";
}
                    ?>
                </select>
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ໂຮງຮຽນຕັ້ງຢູ່ໃສ</label>
                            <div class="controls">
                                <select name="schoollocation">
                                    <?php
                     foreach($tbschoollocation->result() AS $row){
                         echo "<option value='$row->id'>$row->schoollocation</option>";
                     }
                                    ?>
                                    
                                </select>  
                              </div>
                          </div>
                        </div><!--/span-->
                      </div><!--/row-->           
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" > ຫ່າງໄກຈາກຫ້ອງການສຶກສາ?</label>
                            <div class="controls">
                                  <input type="text" name="schooldistance"   onkeypress="return isNumberKey(event)" />Km
                              <!--<input type="text" id="postCode">--> 
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ໃຊ້ເວລາຈັກຊົ່ວໂມງ(ລົດຈັກ)</label>
                            <div class="controls">
                                <input type="text" name="school_des"   onkeypress="return isNumberKey(event)"/>ຊົ່ວໂມງ
                            </div>
                          </div>            

                        </div><!--/span-->
                      </div><!--/row-->
                      </fieldset>          
                    <fieldset>
                      <legend>3 ຜູ້ບໍລິຫານໂຮງຮຽນ</legend>
                      
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ຊື່ແລະນາມສະກຸນອຳນວຍການ</label>
                            <div class="controls">
                             <input type="text" name="schooldirectorname"/>
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ຖ້າຮັບການຊ່ວຍເຫຼືອຈາກ FTI ໃຜຄູ້ມຄອງ</label>
                            <div class="controls">
                                <select name="schoolmanage">
                                    <?php
                       foreach($tbschoolmanage->result() AS $row) {
                           echo "<option value='$row->id'>$row->schoolmanage</option>";
                       }            
                                    ?>
                                </select>
                            </div>
                          </div>
                        </div><!--/span-->
                      </div><!--/row-->           
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >  ເບີໂທ</label>
                            <div class="controls">
                             <input type="text" name="schooldirectorphone" onkeypress="return isNumberKey(event)"/>
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >  ເປັນອຳນວຍການຈັກປີແລ້ວ</label>
                            <div class="controls">
                             <input type="text" name="schooldirectorserviceyear"   onkeypress="return isNumberKey(event)"/>ປີ
                            </div>
                          </div>            

                        </div><!--/span-->
                      </div><!--/row-->
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >  ຜູ້ອຳນວບການຈົບສ້າງຄູລະບົບໃດ</label>
                            <div class="controls">
                                <select name="schooldirectorlevel">
                                    <?php
                      foreach($tbsystem->result() as $row){
                          echo "<option value='$row->id'>$row->systemtype</option>";
                      }
                  ?>
                                </select>
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >   ອຳນວຍການເຄີຍຝຶກອົບຮົມການໃຊ້ປື້ມ
ຄູ່ມືການນຳໃຊ້ເງິນບໍລິຫານໂຮງຮຽນບໍ່</label>
                            <div class="controls">
                              <select name="schooldirectortraining">
                                  <?php
                      foreach($tblogic->result() as $row){
                          echo "<option value='$row->id'>$row->logic</option>";
                      }
                  ?>
                              </select>
                            </div>
                          </div>            

                        </div><!--/span-->
                      </div><!--/row-->
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >  ອຳນວຍການເຄີຍຝຶກອົບຮົມ
ການສ້າງແຜນພັດທະນາໂຮງຮຽນບໍ່</label>
                            <div class="controls">
                              <select name="schooldirectorplan">
                                  <?php
                      foreach($tblogic->result() as $row){
                          echo "<option value='$row->id'>$row->logic</option>";
                      }
                  ?>
                              </select>
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >   ໄດ້ຮັບເງິນຕໍ່ຫົວໜ່ວຍນັກຮຽນຜູ້ລະ</label>
                            <div class="controls">
                              <select name="schoolvoucher">
                                  <?php
                      foreach($tbschoolvoucher->result() as $row){
                          echo "<option value='$row->id'>$row->schoolvoucher</option>";
                      }
                  ?>
                              </select>
                            </div>
                          </div>            

                        </div><!--/span-->
                      </div><!--/row-->
                      
                      
                      </fieldset>       
                

                <fieldset>
                      <legend>4 ບຸກຄະລາກອນ</legend>
                      
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ຈຳນວນຄູທັງໝົດ</label>
                            <div class="controls">
                             <input type="text" name="totalteacher"   onkeypress="return isNumberKey(event)" />ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" > ຍິງ </label>
                            <div class="controls">
                              <input type="text" name="totalteacherwomen" onkeypress="return isNumberKey(event)" />ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                      </div><!--/row-->           
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >   ໃນນັ້ນຄູລັດ </label>
                            <div class="controls">
                             <input type="text" name="totalteachergov"   onkeypress="return isNumberKey(event)" />ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >   ຍິງ</label>
                            <div class="controls">
                           <input type="text" name="totalteachergovwomen"   onkeypress="return isNumberKey(event)" />ຄົນ
                            </div>
                          </div>            

                        </div><!--/span-->
                      </div><!--/row-->
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >   ຄູສັນຍາຈ້າງຈັກຄົນ </label>
                            <div class="controls">
                             <input type="text" name="totalteachernogov"   onkeypress="return isNumberKey(event)" />ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >   ຍິງ</label>
                            <div class="controls">
                            <input type="text" name="totalteachernogovwomen"   onkeypress="return isNumberKey(event)" />ຄົນ
                            </div>
                          </div>            

                        </div><!--/span-->
                      </div><!--/row-->
                      </fieldset>       
                
                <fieldset>
                      <legend>5 ນັກຮຽນ</legend>
                      
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ຈຳນວນນັກຮຽນທັງໝົດ</label>
                            <div class="controls">
                              <input type="text" name="totalstudent"   onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" > ຍິງ </label>
                            <div class="controls">
                              <input type="text" name="totalfemale"   onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                      </div><!--/row-->   
                       <!--Add more-->
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ຈຳນວນນັກຮຽນ ປ. ກຽມ ຫລື ປ.0</label>
                            <div class="controls">
                              <input type="text" name="p0"     onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" > ຍິງ </label>
                            <div class="controls">
                              <input type="text" name="p0f"   onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                      </div><!--/row-->    
                      
                      <div class="row-fluid">
                        <div class="span12 bgcolor">
                          <div class="control-group">
                            <!--<label class="control-label" >-->
                              <strong> ຈຳນວນນັກຮຽນໃນສົກນີ້( ຂໍ້ມູນນັກຮຽນ ປະຈຳສົກປະຈຸບັນ) </strong>
                            <!--</label>-->
                            <div class="controls">
                            </div>
                          </div>
                        </div><!--/span-->
<!--                       
<div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" > ຍິງ </label>
                            <div class="controls">
                            </div>
                          </div>
                        </div>/span-->
                      </div><!--/row-->    
                      <!--<p></p>-->
                      
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ຈຳນວນນັກຮຽນໃນສົກນີ້: </label>
                            <div class="controls">
                              <input type="text" name="pp1"    onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" > ຍິງ </label>
                            <div class="controls">
                              <input type="text" name="pp1f"     onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                      </div><!--/row-->    
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ຈຳນວນນັກຮຽນ ປ. ກຽມ ຫລື ປ.0: </label>
                            <div class="controls">
                              <input type="text" name="p0fy"     onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" > ຍິງ </label>
                            <div class="controls">
                              <input type="text" name="p0ff"    onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                      </div><!--/row-->    
                      
                      <!--Ending add-->
                      
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >    ໃນສົກຮຽນນີ້ນັກຮຽນຄ້າງຫ້ອງຈັກຄົນ </label>
                            <div class="controls">
                              <input type="text" name="schoolnotpassed"   onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >   ຍິງ</label>
                            <div class="controls">
                                <input type="text" name="schoolnotpassedgirl"   onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>            

                        </div><!--/span-->
                      </div><!--/row-->
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >   ນັກຮຽນປະລະຈັກຄົນ</label>
                            <div class="controls">
                             <input type="text" name="schooldropout"   onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >   ຍິງ</label>
                            <div class="controls">
                              <input type="text" name="schooldropoutgirl"   onkeypress="return isNumberKey(event)"/>ຄົນ
                            </div>
                          </div>            

                        </div><!--/span-->
                      </div><!--/row-->
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >    ໃນສົກຮຽນນີ້ອັດຕາສ່ວນນັກຮຽນຕໍ່ປຶ້ມແບບຮຽນ  </label>
                            <div class="controls">
                             <input type="text" name="schoolpercent"   onkeypress="return isNumberKey(event)"/>ຄົນ/ 1ຊຸດ
                            </div>
                          </div>
                        </div><!--/span-->
<!--                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >   ຍິງ</label>
                            <div class="controls">
                              <select id="country"></select>
                            </div>
                          </div>            

                        </div>/span-->
                      </div><!--/row-->
                      </fieldset>
<fieldset>
                      <legend>6 ການສະໜັບສະໜູນຈາກພາຍນອກ</legend>
                      
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ຮັບການຊ່ວຍເຫຼືອຈາກ</label>
                            <div class="controls">
                                <select name="schooldonor">
                                    <?php foreach($tbschooldonor->result() AS $row){
                      echo "<option value='$row->id'>$row->schooldonor</option>";                  
                                    }
?>
                                </select>
                            </div>
                          </div>
                        </div><!--/span-->
                         <div class="span6 bgcolor">
                          <div class="control-group">
                            <label class="control-label" >ອື່ນໆ</label>
                            <div class="controls">
                                <input type="text" name="other"/>
                            </div>
                          </div>
                        </div>
                      </div><!--/row-->           
                      
                      </fieldset>

                    </div><!--/span-->

<!--                    <div class="span4">

                    </div>/span       -->
                  </div><!--/row-->
                  <center> 
                <label><input type="submit" name='submit' class="btn btn-primary" value="ບັນທຶກ"/>
                    <a class="btn btn-primary" href="javascript:history.back()"/>ຍົກເລິກ</a></label>  
                </center>
                  </form>
</div>