<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Form Validation</h1>
                    <span class="mainDescription">Client side validation it’s very important if it is used as help for the user to complete with success the submission of a form.</span>
                </div>
                <ol class="breadcrumb">
                    <li>
                        <span>Forms</span>
                    </li>
                    <li class="active">
                        <span>Form Validation</span>
                    </li>
                </ol>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h2>Haji Registration Form</h2>
                    <p>
                        Create one account to manage everything you do with Clip-Two, from your shopping preferences to your Clip-Two activity.
                    </p>
                    <hr>
                    <form action="<?php echo base_url()."haji_info/add"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errorHandler alert alert-danger no-display">
                                    <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                                </div>
                                <div class="successHandler alert alert-success no-display">
                                    <i class="fa fa-ok"></i> Your form validation is successful!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Prilgrim ID <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Prilgrim ID" class="form-control" id="pilgrim_id" name="pilgrim_id">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Pilgrim Type <span class="symbol required"></span>
                                            </label>
                                            <div class="clip-radio radio-primary">
                                                <input type="radio" value="" name="pilgrim_type" id="pilgrim_type_pilgrim">
                                                <label for="pilgrim_type_pilgrim">
                                                    Pilgrim
                                                </label>
                                                <input type="radio" value="" name="pilgrim_type" id="pilgrim_type_guide">
                                                <label for="pilgrim_type_guide">
                                                    Guide
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                

                                <hr>

                                <h4>1. Personal Information </h4>

                                <div class="form-group">
                                    <label class="control-label">
                                        Full Name: (As Per Passport) <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Full Name" class="form-control" id="firstname" name="haji_name">
                                    <span class="label label-warning nowrap">(As Per Saudi Visa)
                                    </span>
                                    <span class="label label-info nowrap">এটা মুলত ভিসা লজমেন্টের অনুরুপ করা হয়েছে।ভিসা লজমেন্টের সময় ৪ টা অংশ পূরণ করতে হয়। প্রয়োজনে ২য় বা ৩য় অংশে পিতার নাম বা নামের অংশ বিশেষ লিখে পূরণ করুন।</span>
                                </div>
                                <row>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            First Part <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert First Part Name" class="form-control" id="firstname" name="first_part_of_name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            Second Part <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Second Part Name" class="form-control" id="firstname" name="second_part_of_name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            Thired Part <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Thired Part Name" class="form-control" id="firstname" name="third_part_of_name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            Fourth Part <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Fourth Part Name" class="form-control" id="firstname" name="fourth_part_of_name">
                                    </div>
                                </row>

                                <hr/>

                                <h4>2. Father/ Husband Name</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Father or Husband <span class="symbol required"></span>
                                            </label>
                                            <div class="clip-radio radio-primary">
                                                <input type="radio" value="" name="father_or_husband_type" id="father_or_husband_type_father">
                                                <label for="father_or_husband_type_father">
                                                    Father
                                                </label>
                                                <input type="radio" value="" name="father_or_husband_type" id="father_or_husband_type_husband">
                                                <label for="father_or_husband_type_husband">
                                                    Husband
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                 <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert your Father's or Husband Name" class="form-control" id="father_or_husband_name" name="father_or_husband_name">
                                        </div>
                                    </div>
                                </div>    

                                <div class="form-group">
                                    <label class="control-label">
                                        3. Mother's Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Mother's Name" class="form-control" id="lastname" name="haji_mothers_name">
                                </div>

                                <hr>

                                <h4>4. Basic Information</h4>

                                <div class="form-group connected-group">
                                    <label class="control-label">
                                        Date of Birth <span class="symbol required"></span>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select name="dd" id="dd" class="form-control" >
                                                <option value="">DD</option>
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="mm" id="mm" class="form-control" >
                                                <option value="">MM</option>
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="YYYY" id="yyyy" name="yyyy" class="form-control">
                                        </div>

                                        <div class="col-md-3">
                                            <input type="text" placeholder="Age" id="age" name="age" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">
                                        Nationality <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Nationality" class="form-control" id="lastname" name="haji_nationality">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Marital Status <span class="symbol required"></span>
                                            </label>
                                            <div class="clip-radio radio-primary">
                                                <input type="radio" value="" name="marital_status" id="marital_status_married">
                                                <label for="marital_status_married">
                                                    Married
                                                </label>
                                                <input type="radio" value="" name="marital_status" id="marital_status_unmarried">
                                                <label for="marital_status_unmarried">
                                                    Unmarried
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Gender <span class="symbol required"></span>
                                            </label>
                                            <div class="clip-radio radio-primary">
                                                <input type="radio" value="" name="gender" id="gender_female">
                                                <label for="gender_female">
                                                    Female
                                                </label>
                                                <input type="radio" value="" name="gender" id="gender_male">
                                                <label for="gender_male">
                                                    Male
                                                </label>
                                            </div>
                                        </div>
                                    </div>            
                                </div>

                                

                                <hr>

                                <h4>6. Academic Information</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Educational Qualification" class="control-lebel">
                                                Educational Qualification <span class="symbol required"></span>
                                            </label>
                                            <select name="educational_qualification" id="educational_qualification" class="form-control" >
                                                <option value="">-SELECT-</option>
                                                <option value="">S.S.C</option>
                                                <option value="01">BELOW S.S.C</option>
                                                <option value="02">H.S.C</option>
                                                <option value="03">BACHELOR</option>
                                                <option value="04">MASTERS</option>
                                                <option value="05">ABOVE MASTERS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Occupation : <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Occupation" class="form-control" id="occupation" name="occupation">
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="control-label">
                                            Position <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Position" class="form-control" id="position" name="position">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                               7. National ID No <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert your National ID No" class="form-control" id="lastname" name="haji_national_id_no">
                                        </div>
                                    </div>
                                </div>
                                  

                                <div class="form-group">
                                    <label class="control-label">
                                        8. Place of Birth  <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Haji Birth Place" class="form-control" id="lastname" name="haji_date_of_birth">
                                </div>

                                <hr>

                                <h4>9. Income Tex Payable</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">
                                                TIN No <span class="symbol required"></span>
                                            </label>
                                            <div class="clip-radio radio-primary">
                                                <input type="radio" value="" name="tin_no" id="tin_no_yes">
                                                <label for="tin_no_yes">
                                                    YES
                                                </label>
                                                <input type="radio" value="" name="tin_no" id="tin_no_no">
                                                <label for="tin_no_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                 &nbsp; <!-- <span class="symbol required"></span> -->
                                            </label>
                                            <div class="form-inline tin_no">
                                        
                                                <input type="text" class="form-control" name="tin_number[]" maxlength="3">
                                                <input type="text" class="form-control" name="tin_number[]" maxlength="3">
                                                <input type="text" class="form-control" name="tin_number[]" maxlength="6">
                                            </div>
                                        </div>
                                    </div>

                                </div> 

                                <h4>10. Traveling Abroad Before ?</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Traveling Before <span class="symbol required"></span>
                                            </label>
                                            <div class="clip-radio radio-primary">
                                                <input type="radio" value="" name="traveling_before" id="traveling_before_yes">
                                                <label for="traveling_before_yes">
                                                    YES
                                                </label>
                                                <input type="radio" value="" name="traveling_before" id="traveling_before_no">
                                                <label for="traveling_before_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                    10.kha: How many country (If Traveled)? <span class="symbol "></span>
                                            </label>
                                            <div class="form-inline">
                                                <input type="text" class="form-control" name="number_of_country_traveling" maxlength="3">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <h4>10. Perform Hajj Before ?</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Perform Hajj Before <span class="symbol required"></span>
                                            </label>
                                            <div class="clip-radio radio-primary">
                                                <input type="radio" value="" name="perform_hajj_before" id="perform_hajj_beforeyes">
                                                <label for="perform_hajj_before_yes">
                                                    YES
                                                </label>
                                                <input type="radio" value="" name="perform_hajj_before" id="perform_hajj_before_no">
                                                <label for="perform_hajj_before_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                    10.gha: Last Year of Performed Hajj ? <span class="symbol "></span>
                                            </label>
                                            <div class="form-inline">
                                                <input type="text" class="form-control" name="number_of_country_traveling" maxlength="3">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div> 

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                11. Identification Mark (if any)<span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <input type="text" class="form-control" id="lastname" name="identification_mark">
                                            </label>
                                        </div>
                                    </div>
                                </div>  

                                <hr>

                                <h4>12. Passport Information</h4>   

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Passport No: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <input type="text" class="form-control" id="passport_no" name="passport_no">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 8px;">
                                            <label class="control-label">
                                                Confirm Passport No: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <input type="text" class="form-control" id="confirm_passport_no" name="confirm_passport_no">
                                            </label>
                                        </div>
                                    </div>
                                </div>  

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Passport Type: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <select name="passport_type" id="passport_type" class="form-control" >
                                                <option value="">-SELECT-</option>
                                                <option value="01">ORDINARY</option>
                                                <option value="02">OFFICIAL</option>
                                                <option value="03">DIPLOMATIC</option>
                                                
                                            </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group connected-group">
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="control-label" style="margin-top: 8px;">
                                                Date of Issue <span class="symbol required"></span>
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <select name="dd" id="dd" class="form-control" >
                                                <option value="">DD</option>
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="mm" id="mm" class="form-control" >
                                                <option value="">MM</option>
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="YYYY" id="yyyy" name="yyyy" class="form-control">
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group connected-group">
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="control-label" style="margin-top: 8px;">
                                                Date of Expire <span class="symbol required"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="dd" id="dd" class="form-control" >
                                                <option value="">DD</option>
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="mm" id="mm" class="form-control" >
                                                <option value="">MM</option>
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="YYYY" id="yyyy" name="yyyy" class="form-control">
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Place Of Passport Issue: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <select name="educational_qualification" id="educational_qualification" class="form-control" >
                                                <option value="">-SELECT-</option>
                                                <option value="01">ORDINARY</option>
                                                <option value="02">OFFICIAL</option>
                                                <option value="03">DIPLOMATIC</option>
                                                
                                            </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <h4>13. Permanent Address (as per Passport)</h4>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Village/House: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <input type="text" class="form-control" id="village" name="village">
                                            </label>
                                        </div>
                                    </div>

                                    </div>

                                    <div class="row">

                                            <div class="col-md-4">
                                                <label class="control-label" style="margin-top: 8px;">
                                                    District <span class="symbol required"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="" class="control-label">
                                                    <select name="dd" id="dd" class="form-control" >
                                                    <option value="">DISTRICT SELECT </option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                                </label>
                                            </div>


                                            <div class="col-md-4">
                                                <label class="control-label" style="margin-top: 8px;">
                                                    Police Station <span class="symbol required"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="" class="control-label">
                                                    <select name="dd" id="dd" class="form-control" >
                                                    <option value="">POLICE STATION  </option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                                </label>
                                            </div>

                                        </div>

                                        <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Post Code: <span class="symbol "></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <input type="text" class="form-control" id="village" name="village">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Telephone/Mobile: <span style="font-size: 10px; color: #999999;">[01XXXXXXXXX ] </span><span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <input type="text" class="form-control" id="mobile_no" name="mobile_no">
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <hr>

                                <h4>14. Present Address</h4>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Village/House: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <input type="text" class="form-control" id="village" name="village">
                                            </label>
                                        </div>
                                    </div>

                                    </div>

                                    <div class="row">

                                            <div class="col-md-4">
                                                <label class="control-label" style="margin-top: 8px;">
                                                    District <span class="symbol required"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="" class="control-label">
                                                    <select name="dd" id="dd" class="form-control" >
                                                    <option value="">DISTRICT SELECT </option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                                </label>
                                            </div>


                                            <div class="col-md-4">
                                                <label class="control-label" style="margin-top: 8px;">
                                                    Police Station <span class="symbol required"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="" class="control-label">
                                                    <select name="dd" id="dd" class="form-control" >
                                                    <option value="">POLICE STATION  </option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                                </label>
                                            </div>

                                        </div>

                                        <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Post Code: <span class="symbol "></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <input type="text" class="form-control" id="village" name="village">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Mobile Call/SMS: <span style="font-size: 10px; color: #999999;">[01XXXXXXXXX ] </span><span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <input type="text" class="form-control" id="present_mobile" name="present_mobile">
                                            </label>
                                        </div>
                                    </div>

                                </div>

                            </div> <!-- End First Column -->

                            <!-- Second Column --> 
                            <div class="col-md-6">
                                

                                <div class="form-group">
                                    <label class="control-label">
                                        Passport ID No <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Passport ID No" class="form-control" id="lastname" name="haji_passport_no">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">
                                        Mobile No <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Passport ID No" class="form-control" id="lastname" name="haji_mobile_no">
                                </div>

                                
                                
                                
                                <div class="form-group">
                                <label for="" class="control-label">
                                    <img src="" alt="" id="target" width="300px" height="200px">
                                </label>
                                    <label class="control-label">
                                        Photo <span class="symbol"></span>
                                    </label>
                                    <input type="file" class="form-control" id="select_image" name="haji_profile_photo" onchange="putImage()">
                                </div>


                                <!-- <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Zip Code <span class="symbol required"></span>
                                            </label>
                                            <input class="form-control" type="text" name="zipcode" id="zipcode">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                City <span class="symbol required"></span>
                                            </label>
                                            <input class="form-control tooltips" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip"  title="" data-placement="top" name="city" id="city">
                                        </div>
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <span class="symbol required"></span>Required Fields
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>
                                    By clicking REGISTER, you are agreeing to the Policy and Terms &amp; Conditions.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-wide pull-right" type="submit">
                                    Register <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: FORM VALIDATION EXAMPLE 1 -->

    </div>
</div>


<script>
    function showImage(src, target) {
    var fr = new FileReader();
    fr.onload = function(){
        target.src = fr.result;
    }
    fr.readAsDataURL(src.files[0]);
}

function putImage() {
    var src = document.getElementById("select_image");
    var target = document.getElementById("target");
    showImage(src, target);
}

</script>

<style type="text/css">
        .file-input-wrapper {
            height: 30px;
            margin: 2px;
            overflow: hidden;
            position: relative;
            width: 118px;
            background-color: #fff;
            cursor: pointer;
        }
        .file-input-wrapper > input[type="file"] {
            font-size: 40px;
            position: absolute;
            top: 0;
            right: 0;
            opacity: 0;
            cursor: pointer;
        }
        .file-input-wrapper > .btn-file-input {
            background-color: #494949;
            border-radius: 4px;
            color: #fff;
            display: inline-block;
            height: 34px;
            margin: 0 0 0 -1px;
            padding-left: 0;
            width: 121px;
            cursor: pointer;
        }
        .file-input-wrapper:hover > .btn-file-input {
            //background-color: #494949;
        }
        </style>

        <body>
            <div class="file-input-wrapper">
              <button class="btn-file-input">SELECT FILES</button>
              <input type="file" name="image" id="image" value="" />      
            </div>
            <span id="img_text" style="float: right;
            margin-right: -80px;
            margin-top: -14px;"></span>
    </body>

        <script>
            (function($){       
                $('input[type="file"]').bind('change',function(){           
                    $("#img_text").html($('input[type="file"]').val());
                });
            })(jQuery)
        </script>