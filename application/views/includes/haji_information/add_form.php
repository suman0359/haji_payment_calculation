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
                                <div class="form-group">
                                    <label class="control-label">
                                        Haji Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Full Name" class="form-control" id="firstname" name="haji_name">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Haji Father's Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Haji Father's Name" class="form-control" id="lastname" name="haji_fathers_name">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Haji Mother's Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Haji Mother's Name" class="form-control" id="lastname" name="haji_mothers_name">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Nationality <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Nationality" class="form-control" id="lastname" name="haji_nationality">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Present Address <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Present Address" class="form-control" id="lastname" name="haji_present_address">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Permanent Address <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Permanent Address" class="form-control" id="lastname" name="haji_permanent_address">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Haji Birth Place <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your Haji Birth Place" class="form-control" id="lastname" name="haji_date_of_birth">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        National ID No <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert your National ID No" class="form-control" id="lastname" name="haji_national_id_no">
                                </div>

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
                                    </div>
                                </div>
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
                                <div class="form-group">
                                    <label class="control-label">
                                        Photo <span class="symbol"></span>
                                    </label>
                                    <input type="file" class="form-control" id="lastname" name="haji_profile_photo">
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