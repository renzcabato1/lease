@extends('layouts.header')
@section('css')
    <link href="{{ asset('login_css/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="wrapper wrapper-content">
        <div class='row'>
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h3 style="color: #FFF">Tenant Details</h3>
                    </div>
                    <div class="ibox-content">
                        <form method='post' action='{{url('/tenants')}}' onsubmit='show();'  enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><u><b>Basic Information</b></u></h4>
                                </div>
                            </div>
                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-6">
                                    <label>Trade Name</label>
                                    <input type="text" class="form-control" name="trade_name"
                                        placeholder="Enter Trade Name"  />
                                </div>
                                <div class="col-md-6">
                                    <label>Company</label>
                                    <input type="text" class="form-control" name="company" placeholder="Enter Company"
                                         />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Category</label>
                                    <select class="form-control m-b" name="category" >
                                        <option>Select Category</option>
                                        <option>Food</option>
                                        <option>Wellness</option>
                                        <option>Storage</option>
                                        <option>Office</option>
                                        <option>Hardware</option>
                                        <option>Specialty</option>
                                        <option>Service</option>
                                        <option>Passion</option>
                                        <option>Amusement</option>
                                        <option>Furniture</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Status</label>
                                    <select class="form-control m-b" name="status" >
                                        <option>Select Status</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><u><b>Customer Information</b></u></h4>
                                </div>
                            </div>
                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-6">
                                    <label>Account ID</label>
                                    <input type="text" class="form-control" name="account_id"
                                        placeholder="Enter Account ID"  />
                                </div>
                                <div class="col-md-6">
                                    <label>Record Type</label>
                                    <input type="text" class="form-control" name="record_type" placeholder="Enter Record Type"
                                         />
                                </div>
                            </div>
                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-6">
                                    <label>Personal Title</label>
                                    <input type="text" class="form-control" name="personal_title"
                                        placeholder="Enter Personal Title" />
                                </div>
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" />
                                </div>
                            </div>
                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-6">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" name="middle_name"
                                        placeholder="Enter Middle Name (Optional)"/>
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" />
                                </div>
                            </div>
                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-6">
                                    <label>Personal Suffix</label>
                                    <input type="text" class="form-control" name="personal_suffix"
                                        placeholder="Enter Personal Suffix">
                                </div>
                                <div class="col-md-6">
                                    <label>Customer Group</label>
                                    <input type="text" class="form-control" name="customer_group" placeholder="Enter Customer Group" />
                                </div>
                            </div>
                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-6">
                                    <label>Classification Group</label>
                                    <input type="text" class="form-control" name="classification_group"
                                        placeholder="Enter Classification Group" />
                                </div>
                                <div class="col-md-6">
                                    <label>TIN No.</label>
                                    <input type="text" class="form-control" name="tin_no" placeholder="Enter Tin No." />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><u><b>Personal Information</b></u></h4>
                                </div>
                            </div>
                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-6">
                                    <label>Gender</label>
                                    <select class="form-control m-b" name="gender" >
                                        <option>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>I prefer not to say</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Marital Status</label>
                                    <select class="form-control m-b" name="marital_status" >
                                        <option>Select Marital Status</option>
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Widowed</option>
                                        <option>Seperated</option>
                                        <option>Divorced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-6">
                                    <label>Age</label>
                                    <input type="date" class="form-control" name="age" placeholder="Enter Age" />
                                </div>
                                <div class="col-md-6">
                                    <label>Citizenship</label>
                                    <input type="text" class="form-control" name="citizenship"
                                        placeholder="Enter Citizenship" />
                                </div>
                            </div>
                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-6">
                                    <label>Country</label>
                                    <select class="form-control m-b" name="country" >
                                        <option>Select Country</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                        <option>American Samoa</option>
                                        <option>Andorra</option>
                                        <option>Angola</option>
                                        <option>Anguilla</option>
                                        <option>Antartica</option>
                                        <option>Antigua &amp; Barbuda</option>
                                        <option>Argentina</option>
                                        <option>Armenia</option>
                                        <option>Aruba</option>
                                        <option>Australia</option>
                                        <option>Austria</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                        <option>Belarus</option>
                                        <option>Belgium</option>
                                        <option>Belize</option>
                                        <option>Benin</option>
                                        <option>Bermuda</option>
                                        <option>Bhutan</option>
                                        <option>Bolivia</option>
                                        <option>Bosnia &amp; Herzegovina</option>
                                        <option>Botswana</option>
                                        <option>Brazil</option>
                                        <option>British India Ocean Terrirory</option>
                                        <option>British Virgin Islands</option>
                                        <option>Brunei</option>
                                        <option>Bulgaria</option>
                                        <option>Burkina Faso</option>
                                        <option>Burundi</option>
                                        <option>Cambodia</option>
                                        <option>Cameroon</option>
                                        <option>Canada</option>
                                        <option>Cape Verde Islands</option>
                                        <option>Cayman Islands</option>
                                        <option>Central African Republic</option>
                                        <option>Chad</option>
                                        <option>Chile</option>
                                        <option>China</option>
                                        <option>Christmas Island</option>
                                        <option>Cocos Islands</option>
                                        <option>Colombia</option>
                                        <option>Comoros</option>
                                        <option>Cook Islands</option>
                                        <option>Costa Rica</option>
                                        <option>Croatia</option>
                                        <option>Cuba</option>
                                        <option>Curacao </option>
                                        <option>Cyprus - North</option>
                                        <option>Cyprus - South</option>
                                        <option>Czech Republic</option>
                                        <option>Democratic Republic of Congo</option>
                                        <option>Denmark</option>
                                        <option>Djibouti</option>
                                        <option>Dominica</option>
                                        <option>Dominican Republic</option>
                                        <option>East Timor</option>
                                        <option>Ecuador</option>
                                        <option>Egypt</option>
                                        <option>El Salvador</option>
                                        <option>Equatorial Guinea</option>
                                        <option>Eritrea</option>
                                        <option>Estonia</option>
                                        <option>Ethiopia</option>
                                        <option>Falkland Islands</option>
                                        <option>Faroe Islands</option>
                                        <option>Fiji</option>
                                        <option>Finland</option>
                                        <option>France</option>
                                        <option>French Guiana</option>
                                        <option>French Polynesia</option>
                                        <option>Gabon</option>
                                        <option>Gambia</option>
                                        <option>Georgia</option>
                                        <option>Germany</option>
                                        <option>Ghana</option>
                                        <option>Gibraltar</option>
                                        <option>Greece</option>
                                        <option>Greenland</option>
                                        <option>Grenada</option>
                                        <option>Guadeloupe</option>
                                        <option>Guam</option>
                                        <option>Guatemala</option>
                                        <option>Guernsey</option>
                                        <option>Guinea</option>
                                        <option>Guinea-Bissau</option>
                                        <option>Guyana</option>
                                        <option>Haiti</option>
                                        <option>Honduras</option>
                                        <option>Hong Kong</option>
                                        <option>Hungary</option>
                                        <option>Iceland</option>
                                        <option>India</option>
                                        <option>Indonesia</option>
                                        <option>Iran</option>
                                        <option>Iraq</option>
                                        <option>Ireland</option>
                                        <option>Isle of Man</option>
                                        <option>Israel</option>
                                        <option>Italy</option>
                                        <option>Ivory Coast</option>
                                        <option>Jamaica</option>
                                        <option>Japan</option>
                                        <option>Jersey</option>
                                        <option>Jordan</option>
                                        <option>Kazakhstan</option>
                                        <option>Kenya</option>
                                        <option>Kiribati</option>
                                        <option>Kosovo</option>
                                        <option>Kuwait</option>
                                        <option>Kyrgyzstan</option>
                                        <option>Laos</option>
                                        <option>Latvia</option>
                                        <option>Lebanon</option>
                                        <option>Lesotho</option>
                                        <option>Liberia</option>
                                        <option>Libya</option>
                                        <option>Liechtenstein</option>
                                        <option>Lithuania</option>
                                        <option>Luxembourg</option>
                                        <option>Macao</option>
                                        <option>Macedonia</option>
                                        <option>Madagascar</option>
                                        <option>Malawi</option>
                                        <option>Malaysia</option>
                                        <option>Maldives</option>
                                        <option>Mali</option>
                                        <option>Malta</option>
                                        <option>Marshall Islands</option>
                                        <option>Martinique</option>
                                        <option>Mauritania</option>
                                        <option>Mayotte</option>
                                        <option>Mexico</option>
                                        <option>Micronesia</option>
                                        <option>Moldova</option>
                                        <option>Monaco</option>
                                        <option>Mongolia</option>
                                        <option>Montengro</option>
                                        <option>Montserrat</option>
                                        <option>Morocco</option>
                                        <option>Mozambique</option>
                                        <option>Myanmar</option>
                                        <option>Namibia</option>
                                        <option>Nauru</option>
                                        <option>Nepal</option>
                                        <option>Netherlands</option>
                                        <option>Netherlands Antilles</option>
                                        <option>New Caledonia</option>
                                        <option>New Zealand</option>
                                        <option>Nicaragua</option>
                                        <option>Niger</option>
                                        <option>Nigeria</option>
                                        <option>Niue</option>
                                        <option>North Korea</option>
                                        <option>Norfolk Islands</option>
                                        <option>Northern Marianas</option>
                                        <option>Norway</option>
                                        <option>Oman</option>
                                        <option>Pakistan</option>
                                        <option>Palau</option>
                                        <option>Palestine</option>
                                        <option>Panama</option>
                                        <option>Papua New Guinea</option>
                                        <option>Paraguay</option>
                                        <option>Peru</option>
                                        <option>Philippines</option>
                                        <option>Pitcairn</option>
                                        <option>Poland</option>
                                        <option>Portugal</option>
                                        <option>Puerto Rico</option>
                                        <option>Qatar</option>
                                        <option>Republic of the Congo</option>
                                        <option>Reunion</option>
                                        <option>Romania</option>
                                        <option>Russia</option>
                                        <option>Rwanda</option>
                                        <option>Saint Barthelemy</option>
                                        <option>Saint Helena</option>
                                        <option>Saint Kitts &amp; Nevis</option>
                                        <option>Saint Lucia</option>
                                        <option>Suriname</option>
                                        <option>Saint Martin</option>
                                        <option>Saint Saint Pierre and Miquelon</option>
                                        <option>Saint Vincent and the Grenadines</option>
                                        <option>Samoa</option>
                                        <option>San Marino</option>
                                        <option>Sao Tome &amp; Principe</option>
                                        <option>Saudi Arabia</option>
                                        <option>Senegal</option>
                                        <option>Serbia</option>
                                        <option>Seychelles</option>
                                        <option>Sierra Leone</option>
                                        <option>Singapore</option>
                                        <option>Sint Maarten</option>
                                        <option>Slovakia</option>
                                        <option>Slovenia</option>
                                        <option>Solomon Islands</option>
                                        <option>Somalia</option>
                                        <option>South Africa</option>
                                        <option>South Korea</option>
                                        <option>South Sudan</option>
                                        <option>Spain</option>
                                        <option>Sri Lanka</option>
                                        <option>Sudan</option>
                                        <option>Suriname</option>
                                        <option>Svalbard &amp; Jan Mayen</option>
                                        <option>Swaziland</option>
                                        <option>Sweden</option>
                                        <option>Switzerland</option>
                                        <option>Syria</option>
                                        <option>Taiwan</option>
                                        <option>Tajikistan</option>
                                        <option>Tanzania</option>
                                        <option>Thailand</option>
                                        <option>Togo</option>
                                        <option>Tonga</option>
                                        <option>Trinidad &amp; Tobago</option>
                                        <option>Tunisia</option>
                                        <option>Turkey</option>
                                        <option>Turkmenistan</option>
                                        <option>Turks &amp; Caicos Islands</option>
                                        <option>Tuvalu</option>
                                        <option>Uganda</option>
                                        <option>Ukraine</option>
                                        <option>United Arab Emirates</option>
                                        <option>United Kingdom</option>
                                        <option>United States</option>
                                        <option>Uruguay</option>
                                        <option>Uzbekistan</option>
                                        <option>Vanuatu</option>
                                        <option>Vatican City</option>
                                        <option>Venezuela</option>
                                        <option>Vietnam</option>
                                        <option>Wallis &amp; Futuna</option>
                                        <option>Yemen</option>
                                        <option>Zambia</option>
                                        <option>Zimbabwe</option>
                        </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Language</label>
                                    <input type="text" class="form-control" name="language" placeholder="Enter Language" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><u><b>Misc. Information</b></u></h4>
                                </div>
                            </div>
                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-6">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" name="company_name"
                                        placeholder="Enter Company Name" />
                                </div>
                                <div class="col-md-6">
                                    <label>Company Address</label>
                                    <input type="text" class="form-control" name="company_address"
                                        placeholder="Enter Company Address" />
                                </div>
                            </div>

                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-3">
                                    <label>Name & Description</label>
                                    <input type="text" class="form-control" name="address_desc"
                                        placeholder="Enter Name & Description" />
                                </div>
                                <div class="col-md-3">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address"
                                        placeholder="Enter Address" />
                                </div>
                                <div class="col-md-3">
                                    <label>Purpose</label>
                                    <input type="text" class="form-control" name="address_purpose"
                                        placeholder="Enter Purpose" />
                                </div>
                                <div class="col-md-3">
                                    <label>Primary</label>
                                    <select class="form-control m-b" name="address_primary" >
                                        <option>Select One</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-3">
                                    <label>Contact Description</label>
                                    <input type="text" class="form-control" name="contact_desc"
                                        placeholder="Enter Contact Description" />
                                </div>
                                <div class="col-md-3">
                                    <label>Contact Type</label>
                                    <input type="text" class="form-control" name="contact_type"
                                        placeholder="Enter Contact Type" />
                                </div>
                                <div class="col-md-3">
                                    <label>Contact No.</label>
                                    <input type="text" class="form-control" name="contact_no"
                                        placeholder="Enter Contact No." />
                                </div>
                                <div class="col-md-3">
                                    <label>Contact Address</label>
                                    <input class="form-control m-b" name="contact_address"
                                    placeholder="Enter Contact Address"  />
                                </div>
                            </div>

                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-3">
                                    <label>Contact Extension</label>
                                    <input type="text" class="form-control" name="contact_ext"
                                        placeholder="Enter Contact Extension" />
                                </div>
                                <div class="col-md-3">
                                    <label>Primary</label>
                                    <select class="form-control m-b" name="contact_primary" >
                                        <option>Select One</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h4><u><b>Unit Information</b></u></h4>
                                </div>
                            </div>

                            <div class="row mb-10" style="margin-bottom: 20px;">
                                <div class="col-md-3">
                                    <label>Prev. Unit</label>
                                    <input type="text" class="form-control" name="prev_unit"
                                        placeholder="Enter Prev. Unit" />
                                </div>
                                <div class="col-md-3">
                                    <label>New Unit</label>
                                    <input type="text" class="form-control" name="new_unit"
                                        placeholder="Enter New Unit" />
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="col-md-12">
                                    <button type='submit'  class="btn btn-primary" >Submit</button>
                                </div>
                            </div>
                        </form>
                        {{-- @endforeach --}}

                    </div>
                </div>
            </div>

        @endsection
