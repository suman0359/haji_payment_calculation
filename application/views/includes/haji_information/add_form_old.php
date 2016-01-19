<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Hajj Management Application</h1>
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
                    <form action="<?php echo base_url() . "haji_info/add"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
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
                                                <input type="radio" value="1" checked="checked" name="pilgrim_type" id="pilgrim_type_pilgrim">
                                                <label for="pilgrim_type_pilgrim">
                                                    Pilgrim
                                                </label>
                                                <input type="radio" value="2" name="pilgrim_type" id="pilgrim_type_guide">
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
                                    <input type="text" placeholder="Insert your Full Name" class="form-control" id="firstname" name="pilgrim_full_name">
                                    <span class="label label-warning nowrap">(As Per Saudi Visa)
                                    </span>
                                    <span class="label label-info nowrap">এটা মুলত ভিসা লজমেন্টের অনুরুপ করা হয়েছে।ভিসা লজমেন্টের সময় ৪ টা অংশ পূরণ করতে হয়। প্রয়োজনে ২য় বা ৩য় অংশে পিতার নাম বা নামের অংশ বিশেষ লিখে পূরণ করুন।</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            First Part <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert First Part Name" class="form-control" id="firstname" name="pilgrim_name_part_one">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            Second Part <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Second Part Name" class="form-control" id="firstname" name="pilgrim_name_part_two">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            Thired Part <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Thired Part Name" class="form-control" id="firstname" name="pilgrim_name_part_three">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            Fourth Part <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Fourth Part Name" class="form-control" id="firstname" name="pilgrim_name_part_four">
                                    </div>
                                </div>

                                <hr/>

                                <h4>2. Father/ Husband Name</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Father or Husband <span class="symbol required"></span>
                                            </label>
                                            <div class="clip-radio radio-primary">
                                                <input type="radio" value="1" name="pilgrim_father_or_husband_type" id="father_or_husband_type_father">
                                                <label for="father_or_husband_type_father">
                                                    Father
                                                </label>
                                                <input type="radio" value="2" name="pilgrim_father_or_husband_type" id="father_or_husband_type_husband">
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
                                            <input type="text" placeholder="Insert your Father's or Husband Name" class="form-control" id="father_or_husband_name" name="pilgrim_father_or_husband_name">
                                        </div>
                                    </div>
                                </div>    

                                <div class="form-group">
                                    <label class="control-label">
                                        3. Mother's Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Mother's Name" class="form-control" id="lastname" name="pilgrim_mothers_name">
                                </div>

                                <hr>

                                <h4>4. Basic Information</h4>

                                <div class="form-group connected-group">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-top: 10px;">
                                                <label class="control-label">
                                                    Date of Birth: <span class="symbol required"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <input type="date" class="form-control" id="pilgrim_date_of_birth" name="pilgrim_date_of_birth">

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Nationality: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Insert your Nationality" class="form-control" id="lastname" name="pilgrim_nationality">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Marital Status <span class="symbol required"></span>
                                            </label>
                                            <div class="clip-radio radio-primary">
                                                <input type="radio" value="" name="pilgrim_marital_status" id="marital_status_married">
                                                <label for="marital_status_married">
                                                    Married
                                                </label>
                                                <input type="radio" value="" name="pilgrim_marital_status" id="marital_status_unmarried">
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
                                                <input type="radio" value="" name="pilgrim_gender" id="gender_female">
                                                <label for="gender_female">
                                                    Female
                                                </label>
                                                <input type="radio" value="" name="pilgrim_gender" id="gender_male">
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
                                            <select name="pilgrim_educational_qualification" id="educational_qualification" class="form-control" >
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
                                            <input type="text" placeholder="Insert Occupation" class="form-control" id="occupation" name="pilgrim_occupation">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Position <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Position" class="form-control" id="position" name="pilgrim_position">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                7. National ID No <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert your National ID No" class="form-control" id="lastname" name="pilgrim_national_id_no">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label">
                                        8. Place of Birth  <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Haji Birth Place" class="form-control" id="lastname" name="pilgrim_place_of_birth">
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
                                                <input type="radio" value="" name="pilgrim_tin_no_status" id="tin_no_yes">
                                                <label for="tin_no_yes">
                                                    YES
                                                </label>
                                                <input type="radio" value="" name="pilgrim_tin_no_status" id="tin_no_no">
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

                                                <input type="text" class="form-control" name="pilgrim_tin_no_number[]" maxlength="3">
                                                <input type="text" class="form-control" name="pilgrim_tin_no_number[]" maxlength="3">
                                                <input type="text" class="form-control" name="pilgrim_tin_no_number[]" maxlength="6">
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
                                                <input type="radio" value="" name="traveling_before_status" id="traveling_before_yes">
                                                <label for="traveling_before_yes">
                                                    YES
                                                </label>
                                                <input type="radio" value="" name="traveling_before_status" id="traveling_before_no">
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
                                                <input type="radio" value="" name="pilgrim_perform_hajj_before_status" id="perform_hajj_before_yes">
                                                <label for="perform_hajj_before_yes">
                                                    YES
                                                </label>
                                                <input type="radio" value="" name="pilgrim_perform_hajj_before_status" id="perform_hajj_before_no">
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
                                                <input type="text" class="form-control" name="pilgrim_perform_hajj_before" maxlength="3">
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
                                                <input type="text" class="form-control" id="lastname" name="pilgrim_identification_mark">
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
                                                <input type="text" class="form-control" id="pilgrim_passport_number" name="pilgrim_passport_number">
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
                                                <input type="text" class="form-control" id="confirm_confirm_passport_no" name="pilgrim_confirm_passport_number">
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
                                                <select name="pilgrim_passport_type" id="passport_type" class="form-control" >
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


                                        <div class="col-md-4">
                                            <input type="date" class="form-control" id="pilgrim_passport_issue_date" name="pilgrim_passport_issue_date">
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
                                        <div class="col-md-4">
                                            <input type="date" class="form-control" id="pilgrim_passport_expire_date" name="pilgrim_passport_expire_date">
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
                                                <select name="pilgrim_place_of_passport_issue" id="pilgrim_place_of_passport_issue" class="form-control" >
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
                                                <input type="text" class="form-control" id="pilgrim_permanent_address_village" name="pilgrim_permanent_address_village">
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
                                            <select name="pilgrim_permanent_address_district" id="pilgrim_permanent_address_district" class="form-control" >
                                                <option value="">DISTRICT SELECT </option>
                                                <?php foreach ($district_list as $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                                <?php } ?>
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
                                            <select name="pilgrim_permanent_address_police_station" id="pilgrim_permanent_address_police_station" class="form-control" >
                                                <option value="">POLICE STATION  </option>
                                                <?php foreach ($police_station_list as $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                                <?php } ?>
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
                                                <input type="text" class="form-control" id="pilgrim_permanent_address_post_code" name="pilgrim_permanent_address_post_code">
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
                                                <input type="text" class="form-control" id="pilgrim_permanent_address_mobile_no" name="pilgrim_permanent_address_mobile_no">
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
                                                <input type="text" class="form-control" id="pilgrim_present_address_village" name="pilgrim_present_address_village">
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
                                            <select name="pilgrim_present_address_district" id="pilgrim_present_address_district" class="form-control" >
                                                <option value="">DISTRICT SELECT </option>
                                                <?php foreach ($district_list as $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                                <?php } ?>
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
                                            <select name="pilgrim_present_address_police_station" id="pilgrim_present_address_police_station" class="form-control" >
                                                <option value="">POLICE STATION  </option>
                                                <?php foreach ($police_station_list as $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                                <?php } ?>
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
                                                <input type="text" class="form-control" id="pilgrim_presenet_address_post_code" name="pilgrim_presenet_address_post_code">
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
                                                <input type="text" class="form-control" id="pilgrim_present_address_mobile_no" name="pilgrim_present_address_mobile_no">
                                            </label>
                                        </div>
                                    </div>

                                </div>

                            </div> <!-- End First Column -->

                            <!-- Second Column --> 
                            <div class="col-md-6">


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="" class="control-label">
                                                <img src="" alt="" id="target" width="300px" height="200px">
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="file" class="form-control" id="select_image" name="pilgrim_profile_photo" onchange="putImage()">
                                        </div>
                                    </div>

                                </div>

                                <hr>

                                <h4>15. From Bangladesh or Soudia Arabia for Emergency communication and Close relative mobile no to get Hajj Related Emergency information by SMS(2 taka charge and VAT for every SMS)</h4>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            Name: <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Clode Relative Name" class="form-control" id="pilgrim_close_relative_name" name="pilgrim_close_relative_name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            Relation <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Second Part Name" class="form-control" id="pilgrim_close_relative_relation" name="pilgrim_close_relative_relation">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            Mobile No: <span class="symbol required"></span>
                                        </label>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="control-label">
                                                        <input type="text" class="form-control" name="pilgrim_close_relative_mobile_no_one">
                                                    </label>

                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="control-label">
                                                        <input type="text" class="form-control" name="pilgrim_close_relative_mobile_no_two" >
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label class="control-label">
                                            Email: <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Fourth Part Name" class="form-control" id="firstname" name="pilgrim_close_relative_email">
                                    </div>

                                </div>

                                <hr>

                                <div class="clearfix"></div>

                                <h4> 17. Child Info (below two years - if any) </h4>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Child Name: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pilgrim_child_name" name="pilgrim_child_name">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <h4>18. Agency Information (Govt. Approved)</h4>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Agency Name: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="pilgrim_agency_name" name="pilgrim_agency_name">

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                License No: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="pilgrim_license_no" name="pilgrim_license_no">

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Package Name: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="pilgrim_package_name" name="pilgrim_package_name">

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Package Amount: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="pilgrim_package_amount" name="pilgrim_package_amount">

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Amount in Words: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8 form-group">                                         
                                        <input type="text" class="form-control" id="pilgrim_package_amount_in_word" name="pilgrim_package_amount_in_word">
                                    </div>

                                </div>

                                <hr>

                                <h4>19. Particulars of the Nominee (in case of death of pilgrim)</h4>

                                <div class="row">
                                    <div class="clip-radio radio-primary">
                                        <input type="radio" value="1" name="pilgrim_nominee_status" id="pilgrim_nominee_status_present_yes">
                                        <label for="pilgrim_nominee_status_present_yes">
                                            Same as Present Address
                                        </label>
                                        <input type="radio" value="2" name="pilgrim_nominee_status_permanent" id="pilgrim_nominee_status_present_no">
                                        <label for="pilgrim_nominee_status_present_no">
                                            Same as Permanent Address
                                        </label>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Name of Nominee: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="pilgrim_name_of_nominee" name="pilgrim_name_of_nominee">

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Relationship: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="pilgrim_noinee_relationship" name="pilgrim_noinee_relationship">

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Address: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="pilgrim_nominee_address" name="pilgrim_nominee_address">

                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <h4>20.ka Others family member (Father, Mother, Husband, wife, child etc) going hajj together? if yes then at least one member ID</h4>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Father or Husband <span class="symbol required"></span>
                                            </label>
                                            <div class="clip-radio radio-primary">
                                                <input type="radio" value="1" name="pilgrim_family_member_id_type" id="pilgrim_family_member_id_type_yes">
                                                <label for="pilgrim_family_member_id_type_yes">
                                                    Yes
                                                </label>
                                                <input type="radio" value="2" name="pilgrim_family_member_id_type" id="pilgrim_family_member_id_type_no">
                                                <label for="pilgrim_family_member_id_type_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert your Father's or Husband Name" class="form-control" id="pilgrim_family_member_id" name="pilgrim_family_member_id">
                                        </div>
                                    </div>
                                </div> 

                                <hr>

                                <h4>21. Health Information</h4>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 10px;">
                                            <label class="control-label">
                                                Blood Group: <span class="symbol required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="pilgrim_blood_group" id="pilgrim_blood_group" class="form-control" >
                                                <option value="">-SELECT-</option>
                                                <option value="A+">A+</option>
                                                <option value="AB+">AB+</option>
                                                <option value="O+">O+</option>
                                                <option value="O+">O-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <h4>Disease</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Services <em>(select at least two)</em> <span class="symbol required"></span>
                                            </label>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="1" name="pilgrim_health_information_of_disease[]" id="disease1">
                                                <label for="disease1">
                                                    No disease
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="2" name="pilgrim_health_information_of_disease[]" id="disease2">
                                                <label for="disease2">
                                                    High blood pressure
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="3" name="pilgrim_health_information_of_disease[]" id="disease3">
                                                <label for="disease3">
                                                    Cardiac
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="4" name="pilgrim_health_information_of_disease[]" id="disease4">
                                                <label for="disease4">
                                                    Mental disease
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="5" name="pilgrim_health_information_of_disease[]" id="disease5">
                                                <label for="disease5">
                                                    Epilepsy
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="6" name="pilgrim_health_information_of_disease[]" id="disease6">
                                                <label for="disease6">
                                                    Asthma
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="7" name="pilgrim_health_information_of_disease[]" id="disease7">
                                                <label for="disease7">
                                                    Diabetics
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="8" name="pilgrim_health_information_of_disease[]" id="disease8">
                                                <label for="disease8">
                                                    Cancer
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="9" name="pilgrim_health_information_of_disease[]" id="disease9">
                                                <label for="disease9">
                                                    Blood secretion brain
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="10" name="pilgrim_health_information_of_disease[]" id="disease10">
                                                <label for="disease10">
                                                    Insulin based diabetics
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="11" name="pilgrim_health_information_of_disease[]" id="disease11">
                                                <label for="disease11">
                                                    Enlarged prostate gland
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="12" name="pilgrim_health_information_of_disease[]" id="disease12">
                                                <label for="disease12">
                                                    Accused kidney disease
                                                </label>
                                            </div>

                                        </div>


                                    </div>
                                </div>

                                <h4>Medicine</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="1" name="pilgrim_health_information_of_medicine[]" id="medicine1">
                                                <label for="medicine1">
                                                    Don't take medicine
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="2" name="pilgrim_health_information_of_medicine[]" id="medicine2">
                                                <label for="medicine2">
                                                    Diabetics tablet
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="3" name="pilgrim_health_information_of_medicine[]" id="medicine3">
                                                <label for="medicine3">
                                                    Insulin
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="4" name="pilgrim_health_information_of_medicine[]" id="medicine4">
                                                <label for="medicine4">
                                                    Cardiac preventive
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="5" name="pilgrim_health_information_of_medicine[]" id="medicine5">
                                                <label for="medicine5">
                                                    Medicine for diploes
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="6" name="pilgrim_health_information_of_medicine[]" id="medicine6">
                                                <label for="medicine6">
                                                    Anti cancer medicine
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="7" name="pilgrim_health_information_of_medicine[]" id="medicine7">
                                                <label for="medicine7">
                                                    Medicine for anti convulsion
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="8" name="pilgrim_health_information_of_medicine[]" id="medicine8">
                                                <label for="medicine8">
                                                    Anti hypertension medicine
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" value="9" name="pilgrim_health_information_of_medicine[]" id="medicine9">
                                                <label for="medicine9">
                                                    High blood pressure preventive
                                                </label>
                                            </div>


                                        </div>


                                    </div>
                                </div>

                                <hr>
                            </div>



                            <h4>সম্মানিত হজ্জ এজেন্সির প্রতিনিধিগনের অবগতির জন্য জানানো যাচ্ছে যে, হজ্জযাত্রীর ছবি ও ১৫ থেকে ২১ নং কলামের তথ্যসহ গাইড মোবাইল নাম্বার পরিবর্তন করলে সরাসরি মুল ডাটাবেইজে সংরক্ষিত হবে।</h4>





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

<!-- </div> -->
<!-- </div> -->


<script>
    function showImage(src, target) {
        var fr = new FileReader();
        fr.onload = function () {
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
