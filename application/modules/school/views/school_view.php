<div class="container">
        <input type="hidden" id="role" value=""/>
<!--   form data entry for membership    -->
                    
                    	

<form name="form" class="form-horizontal" action="<?=  base_url()?>school/submit" method="POST" onsubmit="return validateForm()">
                 <input type='hidden' value="" name='ref_no' />
                 <!--<legend class="text-left">School form</legend>-->
                  <div class='row'>
                        <div class="row-fluid">
                        <div class="span12 ">
                          <div class="control-group">
                              <div class='col-md-1'>
                            <label class="control-label text-error" >ສົກປີ </label>
                              </div>
                              <div class='col-md-5'>
                            <div class="controls">
                                         <select class='form-control' name="schoolfiscalyear" class="span5" autofocus >
                          <?php
                 foreach ($fiscalyear->result() AS $value){
                  echo "<option value='$value->schoolfiscalyear' >$value->schoolfiscalyear</option>";
                }
                    ?>
                                         </select></div>
                            </div>
                          </div>
                        </div>
                        </div>    
                      </div><!--/row-->
                      <br>
                      
                      <div class='row'>
                      <div class="row-fluid ">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                              <div class='col-md-1'>
                                  <label class="control-label text-error" >ຊື່ໂຮງຮຽນ</label>
                              </div>
                              <div class='col-md-3'>
                            <div class="controls">
                                          <input class='form-control' type="text"  name="schoolname" />
                              <!--<span class="help-block">This is inline help</span>-->
                            </div>
                          </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                              <div class='col-md-1'>
                                  <label class="control-label text-error" >ລະຫັດໂຮງຮຽນ</label>
                              </div>
                              <div class='col-md-3'>
                            <div class="controls">
                                 <input class='form-control' type="text" class="span7" name="schoolcode"  onkeypress="return isNumberKey(event)" />
                              <!--<span class="help-block">This field has error.</span>-->
                            </div>
                          </div>
                          </div>
                        </div><!--/span-->
                      </div>
                      </div><br>
                       <!--/row-->
                      
                      <div class="row">
                          
                      
                      <div class="row-fluid ">
                        <div class="span3 bgcolor">
                          <div class="control-group">
                              <div class="col-md-1">
                                  <label class="control-label text-danger" >ແຂວງ</label>
                              </div>
                              <div class="col-md-2">
                            <div class="controls">
                                          <select class='form-control' name="province" id='province' class="span12">                            
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
                      </div></div>
                                                
                        
                        <div class="span3 bgcolor">
                          <div class="control-group">
                              <div class="col-md-1">
                                  <label class="control-label text-danger" >ເມືອງ</label>
                              </div>
                              <div class="col-md-2">
                            <div class="controls">
                                 <span id='feedback-district'> 
                                    <select class='form-control' name="district" class="span12">
                                        <option value="">*************</option>
                                
                                     </select></span>
                <!--</label>-->
                              <!--<span class="help-block">This field has error.</span>-->
                            </div>
                          </div>
                        </div><!--/span-->
                      </div>
                          
                      
                        
                        <div class="span3 bgcolor">
                          <div class="control-group">
                              <div class="col-md-1">  
                                  <label class="control-label text-error" >ບ້ານ</label>
                              </div>
                              <div class="col-md-2">  
                            <div class="controls">
                                <input class='form-control'type="text" name="village"/>
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
                      </div>
                       <br>
                      <fieldset>
                       <legend>1 ປະເພດໂຮງຮຽນ</legend> 
                       <div class='row'>
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                              <div class='col-md-1'>
                            <label class="control-label" >ໂຮງຮຽນ </label>
                              </div>
                              <div class='col-md-2'>
                            <div class="controls">
                                           <select class='form-control' name="schoollevel" id='schoollevel'>
                             <?php
                    foreach ($tbschoollevel->result() AS $value){
                        echo "<option value='$value->id'>$value->schoollevel</option>";
                    }           
                             ?>
                                    
                                </select>
                            </div>
                              <!--<span class="help-block">This is inline help</span>-->
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                              <div class='col-md-1'>
                            <label class="control-label" >ປະເພດໂຮງຮຽນ</label>
                              </div>
                              <div class='col-md-2'>
                            <div class="controls">
                                 <select class='form-control' name="schooltype" id='schooltype'>
                                    <?php
                    foreach ($tbschooltype->result() AS $value){
                        echo "<option value='$value->id'>$value->schooltype</option>";
                    }           
                             ?>
                                    
                                </select>
                            </div>
                              <!--<span class="help-block">This field has error.</span>-->
                            </div>
                          </div>
                        </div><!--/span-->
                      </div><!--/row-->
                       </div>
                       </fieldset>
                       <br>

                      <fieldset>
                      <legend>2 ທີ່ຕັ້ງຂອງໂຮງຮຽນ</legend>
                      
                      <div class='row'>
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                              <div class='col-md-2'>
                            <label class="control-label" >ໂຮງຮຽນຂອງທ່ານຢູ່ໃນເຂດໃດ?</label>
                              </div>
                              <div class='col-md-3'>
                            <div class="controls">
                                <select name="schoolarea" class='form-control' >
                    <?php
                            foreach ($tbschoolarea->result_array() AS $row1){
                        echo "<option value='$row1[id]'>$row1[schoolarea]</option>";
}
                    ?>
                </select>
                            </div>
                            </div>
                          </div>
                        </div><!--/span-->
                      </div>
                      
                        
                        <div class="span6 bgcolor">
                          <div class="control-group">
                              <div class="col-md-2">
                            <label class="control-label" >ໂຮງຮຽນຕັ້ງຢູ່ໃສ</label>
                              </div>
                              <div class="col-md-3">
                              
                            <div class="controls">
                                <select class='form-control' name="schoollocation">
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
                      </div><br>
                      
                      <div class="row">
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                              <div class="col-md-2">
                                  <label class="control-label" > ຫ່າງໄກຈາກຫ້ອງການສຶກສາ?</label>
                              </div>
                              
                            <div class="controls">
                                <div class="col-md-2">
                                  <input class='form-control' type="text" name="schooldistance"   onkeypress="return isNumberKey(event)" />
                                  </div>
                                  <div class='col-md-1'> Km</div>
                              <!--<input type="text" id="postCode">--> 
                             </div>
                         
                        </div><!--/span-->
                      </div>
                        
                        <div class="span6 bgcolor">
                          <div class="control-group">
                              <div class='col-md-2'>
                            <label class="control-label" >ໃຊ້ເວລາຈັກຊົ່ວໂມງ(ລົດຈັກ)</label>
                              </div>
                              
                            <div class="controls">
                                <div class='col-md-2'>
                                <input class='form-control' type="text" name="school_des"   onkeypress="return isNumberKey(event)"/>
                                </div>
                                <div class='col-md-1'>ຊົ່ວໂມງ</div>
                            
                          </div>    
                        </div>
                          

                        </div><!--/span-->
                      </div><!--/row-->
                         </div>
                      <br>
                      
                      </fieldset>          
                    <fieldset>
                      <legend>3 ຜູ້ບໍລິຫານໂຮງຮຽນ</legend>
                      
                      <div class='row'>
                      <div class="row-fluid">
                        <div class="span6 bgcolor">
                          <div class="control-group">
                              <div class='col-md-2'>
                            <label class="control-label" >ຊື່ແລະນາມສະກຸນອຳນວຍການ</label>
                              </div>
                              <div class='col-md-2'>
                            <div class="controls">
                             <input class='form-control' type="text" name="schooldirectorname"/>
                            </div>
                          </div>
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                          <div class="control-group">
                              <div class='col-md-3'>
                            <label class="control-label" >  ເບີໂທ</label>
                              </div>
                              <div class='col-md-2'>
                            <div class="controls">
                             <input class='form-control' type="text" name="schooldirectorphone" onkeypress="return isNumberKey(event)"/>

                            </div>
                          </div>
                        </div><!--/span-->
                      </div><!--/row-->        
                      </div>
                      </div>
                      </div>
                      <br>
                      
                      
                           
                       
                

                    </div><!--/span-->

<!--                    <div class="span4">

                    </div>/span       -->
                  </div><!--/row-->
                  

                      
                  <br>    
                  <div class="row">
                      <div class="col-md-6">
                          <p class="text-right">
                              <label><input type="submit" name='submit' class="btn btn-primary" value="ບັນທຶກ"/>
                    <a class="btn btn-primary" href="javascript:history.back()"/>ຍົກເລິກ</a></label> 
                          </p>
                           
                      </div>
                  </div>
                
</form>
                                   
