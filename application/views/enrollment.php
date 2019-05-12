<script src="<?php echo base_url();?>assets/frontend/js/vendor/jquery-1.12.0.min.js"></script>
<!--Banner Area Start -->
<div class="banner-area-wrapper">
    <div class="banner-area text-center">   
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>Admission Form</h2> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Banner Area End -->

<!-- About Start -->
        <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <?php $attr = array('class' => 'form-horizontal custom-form');?>
            <?php echo form_open('', $attr);?>
                <?php if($this->session->flashdata('message')):?>
                <div style="background:rgb(108, 174, 224);padding: 10px;margin-bottom: 10px;">
                    <?php echo $this->session->flashdata('message');?>
                </div>
                <?php endif;?>

                <!-- <h1>Enrollment Form</h1> -->
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Lastname </label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                    <input class="form-control" type="text" style="width: 293px;" name="lastname" required="" placeholder="Dela Cruz"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Firstname </label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                    <input class="form-control" type="text" style="width: 293px;" name="firstname" required="" placeholder="Juan"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Middlename </label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                    <input class="form-control" type="text" placeholder="(Optional)" style="width: 293px;" name="middlename"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Gender </label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                        <input type="radio" class="" name="gender" value="Male" required="">Male
                        <input type="radio" class="" name="gender" value="Female">Female
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Address </label></div>
                    <div class="col-md-8 col-sm-6 input-column" style="width: 323px;display:flex;flex-wrap: wrap;justify-content: space-between;">
                        <input type="text" name="house_number" class="form-control" style="width: 100px;margin-bottom: 10px;" placeholder="House No.">
                        <input type="text" name="house_street" class="form-control" style="
                          width: calc(100% - 120px);" required="" placeholder="Street">
                        <input type="text" name="house_brgy" class="form-control" style="margin-bottom: 10px;" required="" placeholder="Barangay">
                        <input type="text" name="house_city" class="form-control" required="" placeholder="City/Province">
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="email-input-field">Birth Date </label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                        <input class="form-control" type="date" style="width: 293px;" name="dob" required="">
                    </div>
                </div>
                <div class="form-group">
                <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Contact Number </label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                        <input class="form-control contact" type="text" style="width: 293px;" name="contact" required="" maxlength="13" pattern="^(09|\+639)\d{9}$" onkeypress="return isNumberKey(event)">
                        <script type="text/javascript">function isNumberKey(evt){
                        var charCode = (evt.which) ? evt.which : event.keyCode
                             if (charCode > 31 && (charCode < 48 || charCode > 57))
                            return false;
                            return true;
                        }</script>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="email-input-field">Email</label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                        <input class="form-control" type="email" style="width: 293px;" name="email" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="dropdown-input-field">Grade Level </label></div>
                    <div class="col-sm-4 input-column">
                        <select class="form-control" name="grade_level" required="" style="width: 293px;">
                            <optgroup label="select Grade Level">
                                <option value="Grade 1">Grade 1</option>
                                <option value="Grade 2">Grade 2</option>
                                <option value="Grade 3">Grade 3</option>
                                <option value="Grade 4">Grade 4</option>
                                <option value="Grade 5">Grade 5</option>
                                <option value="Grade 6">Grade 6</option>
                                <option value="Grade 7">Grade 7</option>
                                <option value="Grade 8">Grade 8</option>
                                <option value="Grade 9">Grade 9</option>
                                <option value="Grade 10">Grade 10</option>
                                <option value="Grade 11">Grade 11</option>
                                <option value="Grade 12">Grade 12</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Father's Name </label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                        <input class="form-control" type="text" style="width: 293px;" name="father_name"required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Occupation </label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                    <input class="form-control" type="text" style="width: 293px;" name="father_occupation"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Mobile Number </label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                    <input class="form-control" type="text" style="width: 293px;" name="father_number" maxlength="13" pattern="^(09|\+639)\d{9}$" onkeypress="return isNumberKey(event)">
                    <script type="text/javascript">function isNumberKey(evt){
                        var charCode = (evt.which) ? evt.which : event.keyCode
                             if (charCode > 31 && (charCode < 48 || charCode > 57))
                            return false;
                            return true;
                        }</script>
                </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Mother's Name </label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                    <input class="form-control" type="text" style="width: 293px;" name="mother_name" required=""></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Occupation </label></div>
                    <div class="col-md-8 col-sm-6 input-column">
                        <input class="form-control" type="text" style="width: 293px;" name="mother_occupation">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Mobile Number </label></div>
                    <div class="col-md-8 col-sm-6 input-column"><input class="form-control" type="text" style="width: 293px;" name="mother_number" maxlength="13" pattern="^(09|\+639)\d{9}$" onkeypress="return isNumberKey(event)">
                        <script type="text/javascript">function isNumberKey(evt){
                        var charCode = (evt.which) ? evt.which : event.keyCode
                             if (charCode > 31 && (charCode < 48 || charCode > 57))
                            return false;
                            return true;
                        }</script>
                </div>
                </div>
                <input type="submit" name="submit" class="btn btn-default submit-button" value="Submit Form">
            </form>
        </div>
    </div>
        <!-- About End -->
        
        <script type="text/javascript">
        $("input[name='contact']").on('keyup', function(){
            val = $(this).val();
            if(val == "09" && val.length == 2) {
                $(this).val("+639");
            }
        });
    </script>
    <script type="text/javascript">
        $("input[name='father_number']").on('keyup', function(){
            val = $(this).val();
            if(val == "09" && val.length == 2) {
                $(this).val("+639");
            }
        });
    </script>
    <script type="text/javascript">
        $("input[name='mother_number']").on('keyup', function(){
            val = $(this).val();
            if(val == "09" && val.length == 2) {
                $(this).val("+639");
            }
        });
    </script>


   