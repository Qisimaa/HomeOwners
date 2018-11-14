<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Homeowners Questionnaire</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/form/bootstrap.min.css')}}" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/form/style1.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
<div class="col-lg-4">
    <div class="col-lg-2"></div>
    <div class="col-lg-6">
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    @if(Session::has('flash_message_success'))
                        <div class="alert alert-success" role="alert">{!!Session('flash_message_success')!!}</div>
                    @endif
                    <div class="row">
                        <div class="booking-form">
                            <div class="form-header">
                                <h1>Home Owners Quote Sheet</h1>
                            </div>
                            <form method="get" action="{{url('contact1')}}">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <span style="margin-right: 100px" class="form-label">Name of Primary Insured</span>
                                            <input  type="text" name="text1" required>
                                        </div>
                                        <div class="form-group">
                                            <span  class="form-label">Gender</span>
                                            <select name="gender" required>
                                                <option>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 176px" class="form-label">Martial Status</span>
                                            <input type="text" name="martial" required >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 185px" class="form-label">Date of Birth</span>
                                            <input type="date" name="birthday" required >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 137px" class="form-label">Social Security No.:</span>
                                            <input type="text" name="social" required >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 90px" class="form-label">Driver's License # & Status</span>
                                            <input type="text" name="driverlicense" required>
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 192px" class="form-label">Occupation</span>
                                            <input type="text" name="occupation" required>
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 108px" class="form-label">Yrs.w/ Current Employer</span>
                                            <input type="text" name="current" required >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 91px" class="form-label">Highest Level of Education</span>
                                            <input type="text" name="education" required>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Number of Occupants including Children</span>
                                            <input type="text" name="children" required>
                                        </div>

                                        <span class="form-label">Does anyone in the household smoke?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio1" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio1" value="No">No</label>
                                        </div></div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <span style="margin-right: 75px" class="form-label">Name of Insured/Occupant 2:</span>
                                            <input  type="text" name="occupant2">
                                        </div>
                                        <div class="form-group">
                                            <span  class="form-label">Gender</span>
                                            <select name="gender1" required>
                                                <option>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">Relationship to Primary</span>
                                            <input style="width: 130px; "  type="text" name="relation" required>
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 176px" class="form-label">Martial Status</span>
                                            <input type="text" name="martial1" >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 185px" class="form-label">Date of Birth</span>
                                            <input type="date" name="birthday1" required >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 137px" class="form-label">Social Security No.:</span>
                                            <input type="text" name="social1" required >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 90px" class="form-label">Driver's License # & Status</span>
                                            <input type="text"name="driverlicense1" required>
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 192px" class="form-label">Occupation</span>
                                            <input type="text" name="occupation1" required >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 108px" class="form-label">Yrs.w/ Current Employer</span>
                                            <input type="text" name="current1" required>
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 91px" class="form-label">Highest Level of Education</span>
                                            <input type="text" name="education1" required>
                                        </div>
                                        <span class="form-label">Pets?</span>
                                        <span style="margin-left: 150px;" class="form-label">Dog Breeds</span>
                                        <input type="text" name="dogbreeds" required>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio2" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio2" value="No">No</label>
                                        </div>


                                        <div class="form-group">

                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <h3><span class="label label-default">Other Occupant Information</span></h3>
                                    </div>
                                    <div class="col-sm-12">
                                        <table >
                                            <thead>
                                            <tr>
                                                <th>First Name & MI
                                                    (Last Name, if different from policyholder)</th>
                                                <th>Gender</th>
                                                <th>Date of
                                                    Birth</th>
                                                <th>First Name & MI
                                                    (Last Name, if different from policyholder)</th>
                                                <th>Gender</th>
                                                <th>Date of
                                                    Birth</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input type="text" name="firstname" required></td>
                                                <td>
                                                    <label><input type="radio" name="optradio3" value="Male">Male</label>
                                                    <label><input type="radio" name="optradio3" value="Female">Female</label>
                                                </td>
                                                <td><input type="date" name="birthday2" required></td>
                                                <td><input type="text" name="firstname1" required></td>

                                                <td>
                                                    <label><input type="radio" name="optradio4" value="Male">Male</label>
                                                        <label><input type="radio" name="optradio4" value="Female">Female</label>
                                                    </td>
                                                <td><input type="date" name="birthday3" required></td>
                                                    </td>
                                            </tr>

                                            </tbody>
                                        </table>


                                    </div>

                                    <div class="col-sm-12">
                                        <h3><span class="label label-default">Residence/Contact Information</span></h3>
                                    </div>



                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span style="margin-right: 10px" class="form-label">Mailing Address</span>
                                            <input type="text" name="mailingaddress" required>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Property Address</span>
                                            <input type="text" name="propertyaddress" required>
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 70px" class="form-label">Home #</span>
                                            <input type="text" name="home" required >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Previous Address</span>
                                            <input type="text" name="previousaddress" required >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 85px" class="form-label">Fax#</span>
                                            <input type="text" name="fax" >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 18px" class="form-label">E-mail Address</span>
                                            <input type="text" name="emailadress" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <h3><span class="label label-default">Current Insurance</span></h3>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Cureent Insurance Company</span>
                                            <input type="text" name="currentinsurance" >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 90px" class="form-label">Expiration Date</span>
                                            <input type="text" name="expirationdate" >
                                        </div>
                                        <span  class="form-label">Policy to insurance same property?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio5" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio5" value="N0">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Years Continuous Coverage</span>
                                            <input type="text" name="coverage" >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 62px" class="form-label"> Current Policy No:</span>
                                            <input type="text" name="currentpolicyno" >
                                        </div>
                                        <span class="form-label">Cancelled or Non-Renewed in the past 5 years?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio6" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio6" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <h3><span class="label label-default">Property Details</span></h3>
                                    </div>
                                    <div class="col-sm-6">

                                        <span class="form-label">Primary Residence?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio7" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio7" value="No">No</label>
                                        </div>
                                        <span class="form-label">Original Owner</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio8" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio8" value="No">No</label>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Name & Address of Mortgagee</span>
                                            <input type="text" name="mortgage" >
                                        </div>
                                        <span class="form-label">Any claims in 5 years?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio9" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio9" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span style="margin-right: 4px" class="form-label">Purchase Date</span>
                                            <input type="date" name="purchasedate">
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Purchase Price</span>
                                            <input type="text" name="purchaseprice">
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 70px" class="form-label">Loan</span>
                                            <input type="text" name="loan" >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 10px" class="form-label">Loan Amount:</span>
                                            <input type="text" name="loanamount" >
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <span class="form-label">Year Built</span>
                                            <input type="text"  name="yearbuilt">
                                            <span class="form-label">Construction Type:</span>
                                            <input type="text" name="constructype" >
                                            <span class="form-label">#of Families</span>
                                            <input type="text" name="ofamilies" >
                                            <span class="form-label">SqFootage</span>
                                            <input type="text" name="footage1" >
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <span class="form-label">Style</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked1" name="defaultUnchecked1" value="Colonial">
                                            <label class="form-control-label" for="defaultUnchecked1" >Colonial</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked2" name="defaultUnchecked2" value="Ranch">
                                            <label class="form-control-label" for="defaultUnchecked2" >Ranch</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked3" name="defaultUnchecked3" value="Cape">
                                            <label class="form-control-label" for="defaultUnchecked3" >Cape</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked4" name="defaultUnchecked4" value="Condo/Townhouse">
                                            <label class="form-control-label" for="defaultUnchecked4" >Condo/Townhouse</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked5" name="defaultUnchecked5" value="Row Home">
                                            <label class="form-control-label" for="defaultUnchecked5" >Row Home</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-12">
                                        <br>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <span class="form-label">Type of Foundation</span>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked7" name="defaultUnchecked7" value="Basement">
                                            <label class="form-control-label" for="defaultUnchecked7" >Basement</label>
                                            <span class="form-label">Finished</span>
                                            <input type="text" name="finish" >

                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked8" name="defaultUnchecked8" value="Crawispace">
                                            <label class="form-control-label" for="defaultUnchecked8" >Crawispace</label>
                                            <input type="text" name="crawis" >

                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked9" name="defaultUnchecked9" value="Sab">
                                            <label class="form-control-label" for="defaultUnchecked9" >Slab</label>
                                            <input type="text" name="slab">
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <br>
                                        <div class="form-group">
                                            <span class="form-label"># of Bedrooms</span>
                                            <input type="text"name="bedrooms" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <br>
                                        <div class="form-group">
                                            <span class="form-label">Total # of Rooms</span>
                                            <input type="text" name="totalrooms" required >
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <span class="form-label"># of Bathrooms</span>
                                            <input type="text" name="ofbathrooms" >
                                            <span class="form-label">Full</span>
                                            <input type="text" name="full" >
                                            <span class="form-label">3/4</span>
                                            <input type="text" name="threeinfour" >
                                            <span class="form-label">1/2</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="form-label">Is there a pool</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio10" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio10" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div  class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked10" name="defaultUnchecked10" value="Inground">
                                            <label class="form-control-label" for="defaultUnchecked10" >Inground</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div  class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked11" name="defaultUnchecked11" value="Above">
                                            <label class="form-control-label" for="defaultUnchecked11" >Above</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="form-label">Is it fenced in?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio11" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio11" value="No">No</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Deck</span>
                                            <input type="text" name="deck" required>
                                            <span class="">Sq.Ft</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Porch</span>
                                            <input type="text" name="porch" required>
                                            <span class="">Sq.Ft</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div  class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked12" name="defaultUnchecked12" value="Open">
                                            <label class="form-control-label" for="defaultUnchecked12" >Open</label>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked13" name="defaultUnchecked13" value="Screened In">
                                            <label class="form-control-label" for="defaultUnchecked13" >Screened In</label>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <span class="form-label">Garage</span>
                                            <input type="text" name="garage" required>
                                            <span class="">Car</span>
                                            <span class="">Type</span>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked14" name="defaultUnchecked14" value="Built-in">
                                            <label  style="margin-right: 20px;" class="form-control-label" for="defaultUnchecked14" >Built-In</label>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked15" name="defaultUnchecked15" value="Attached">
                                            <label  style="margin-right: 20px;" class="form-control-label" for="defaultUnchecked15" >Attached</label>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked16" name="defaultUnchecked16" value="Detached" >
                                            <label  style="margin-right: 20px;" class="form-control-label" for="defaultUnchecked16" >Detached</label>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked17" name="defaultUnchecked17" value="Basement">
                                            <label  style="margin-right: 20px;"class="form-control-label" for="defaultUnchecked17" >Basement</label>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked18" name="defaultUnchecked18" value="Carport">
                                            <label class="form-control-label" for="defaultUnchecked18" >Carport</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <span class="form-label">Exterior</span>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked19" name="defaultUnchecked19" value="Vinly">
                                            <label   class="form-control-label" for="defaultUnchecked19" >Vinly</label>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked20" name="defaultUnchecked20" value="Wood">
                                            <label class="form-control-label" for="defaultUnchecked20" >Wood</label>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked21" name="defaultUnchecked21" value="Stucco">
                                            <label  class="form-control-label" for="defaultUnchecked21" >Stucco</label>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked22" name="defaultUnchecked22" value="Brick">
                                            <label  class="form-control-label" for="defaultUnchecked22" >Brick</label>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked23" name="defaultUnchecked23" value="Carport">
                                            <label style="margin-right: 30px" class="form-control-label" for="defaultUnchecked23" >Carport</label>

                                            <span class="form-label">Type of Roof/Material</span>
                                            <input type="text" name="rooftype" >
                                            <span class="form-label">Year Installed</span>
                                            <input type="date" name="yearinstall" >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Additional Stuctures</span>
                                            <input type="text" name="additional" >
                                            <span class="form-label">Sq.Ft</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <span style="margin-right: 30px;" class="form-label">Current Heat</span>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked24" name="defaultUnchecked24" value="Gas">
                                            <label style="margin-right: 30px;"  class="form-control-label" for="defaultUnchecked24" >Gas</label>

                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked25" name="defaultUnchecked25" value="Electric">
                                            <label style="margin-right: 30px;" class="form-control-label" for="defaultUnchecked25" >Electric</label>

                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked26" name="defaultUnchecked26" value="Oil">
                                            <label  style="margin-right: 30px;" class="form-control-label" for="defaultUnchecked26" >Oil</label>

                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked27" name="defaultUnchecked27" value="Prophane">
                                            <label style="margin-right: 30px;"  class="form-control-label" for="defaultUnchecked27" >Prophane</label>

                                            <span class="form-label">Year Updated</span>
                                            <input type="date" name="yearupdated">
                                            <br>
                                            <span style="margin-right: 30px;" class="form-label">If Oil- Location of oil tank</span>
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked28" name="defaultUnchecked28" value="Above ground">
                                            <label style="margin-right: 30px;"  class="form-control-label" for="defaultUnchecked28" >Above ground</label>

                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked29" name="defaultUnchecked29" value="Below ground" >
                                            <label style="margin-right: 30px;"  class="form-control-label" for="defaultUnchecked29" >Below ground</label>


                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked30"name="defaultUnchecked30" value="On a cement pad">
                                            <label style="margin-right: 30px;"  class="form-control-label" for="defaultUnchecked30" >On a cement pad</label>


                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked31" name="defaultUnchecked31" value="Basement">
                                            <label style="margin-right: 30px;"  class="form-control-label" for="defaultUnchecked31" >Basement</label>
                                            <br>
                                            <span style="margin-right: 50px;" class="form-label">Age of:</span>
                                            <span  class="form-label">Electric</span>
                                            <input type="text" name="electric" >
                                            <span  class="form-label">Plumbing</span>
                                            <input type="text"  name="plumbing" style="margin-right: 50px;">

                                                <span  style="margin-right: 50px;" class="form-label">Central Air:</span>
                                                <label><input type="radio" name="optradio12" value="Yes">Yes</label>
                                                <label><input type="radio" name="optradio12" value="No">No</label>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span style="margin-right: 52px"  class="form-label">Country:</span>
                                            <input type="text" name="country">
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Fire Department:</span>
                                            <input type="text" name="firedepartment" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span style="margin-right: 44px" class="form-label">Miles to Fire Dept:</span>
                                            <input type="text" name="milestofiredept" >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Distance to Fire Hydrant:</span>
                                            <input type="text" name="distancetofirehydrant" >
                                        </div>
                                    </div>




                                    <div class="col-sm-12">
                                        <h3><span class="label label-default">Protective Devices</span></h3>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="radio">
                                            <span class="form-label" style="margin-right: 50px">Dead-bolt Locks</span>
                                            <label><input style="float: right" type="radio" name="optradio13" value="Yes">Yes</label>
                                            <label><input style="float: right" type="radio" name="optradio13" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span class="form-label" style="margin-right: 52px">Smoke Detector</span>
                                            <label><input  type="radio" name="optradio14" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio14" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span class="form-label" style="margin-right: 45px">Fire Extinguisher</span>
                                            <label><input type="radio" name="optradio140" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio140" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span class="form-label" style="margin-right: 26px">Local Burglar Alarm</span>
                                            <label><input type="radio" name="optradio15" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio15" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="radio">
                                            <span style="margin-right: 55px" class="form-label">Central Burglar Alarm</span>
                                            <label><input type="radio" name="optradio16" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio16" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span style="margin-right: 90px" class="form-label">Local Fire Alarm</span>
                                            <label><input type="radio" name="optradio17" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio17" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span style="margin-right: 80px" class="form-label">Central Fire Alarm</span>
                                            <label><input type="radio" name="optradio17" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio18" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span style="margin-right: 40px" class="form-label">Home Sprinkiler System</span>
                                            <label><input type="radio" name="optradio19" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio19" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <h3><span class="label label-default">Additional Coverages</span></h3>
                                    </div>
                                    <div class="col-sm-3">

                                        <div class="radio">
                                            <span style="margin-right:8px" class="form-label">Building Materials Theft</span>
                                            <label><input type="radio" name="optradio20" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio20" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span style="margin-right: 42px" class="form-label">Business Property</span>
                                            <label><input type="radio" name="optradio21" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio21" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span style="margin-right: 106px" class="form-label">Cameras</span>
                                            <label><input type="radio" name="optradio22" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio22" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span style="margin-right: 90px" class="form-label">Earthquake</span>
                                            <label><input type="radio" name="optradio23" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio23" value="No">No</label>
                                        </div>
                                        <div class="radio">
                                            <span  class="form-label">Fire Department Charges</span>
                                            <label><input type="radio" name="optradio24" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio24" value="No">No</label>
                                        </div>
                                        <div class="radio">
                                            <span style="margin-right: 35px" class="form-label">Green Improvement</span>
                                            <label><input type="radio" name="optradio25" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio25" value="No">No</label>
                                        </div>
                                        <div class="radio">
                                            <span style="margin-right: 50px" class="form-label">Loss Assessment</span>
                                            <label><input type="radio" name="optradio26" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio26" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">

                                        <div class="radio">
                                            <span style="margin-right: 12px" class="form-label">Identity Theft Expenses</span>
                                            <label><input type="radio" name="optradio27" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio27" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span  class="form-label">Electronic Data Recovery</span>
                                            <label><input type="radio" name="optradio28" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio28" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span style="margin-right: 45px" class="form-label"> Fair Rental Income</span>
                                            <label><input type="radio" name="optradio29" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio29" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span style="margin-right: 10px" class="form-label">Jewelery, Watches, Furs</span>
                                            <label><input type="radio" name="optradio30" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio30" value="No">No</label>
                                        </div>
                                        <div class="radio">
                                            <span style="margin-right: 105px" class="form-label">Golf Carts</span>
                                            <label><input type="radio" name="optradio31" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio31" value="No">No</label>
                                        </div>
                                        <div class="radio">
                                            <span style="margin-right: 70px" class="form-label">Home Day Care</span>
                                            <label><input type="radio" name="optradio32" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio32" value="No">No</label>
                                        </div>
                                        <div class="radio">
                                            <span style="margin-right: 40px" class="form-label">Musical Instruments</span>
                                            <label><input type="radio" name="optradio33" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio33" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">

                                        <div class="radio">
                                            <span style="margin-right: 60px" class="form-label">Silverware Theft</span>
                                            <label><input type="radio" name="optradio34" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio34" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span style="margin-right: 48px" class="form-label">Sprots Equipment</span>
                                            <label><input type="radio" name="optradio35" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio35" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span style="margin-right: 76px" class="form-label">Water Backup</span>
                                            <label><input type="radio" name="optradio36" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio36" value="No">No</label>
                                        </div>

                                        <div class="radio">
                                            <span style="margin-right: 40px" class="form-label">Extended Premises</span>
                                            <label><input type="radio" name="optradio37" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio37" value="No">No</label>
                                        </div>
                                        <div class="radio">
                                            <span style="margin-right: 58px" class="form-label">Yard and Garden</span>
                                            <label><input type="radio" name="optradio38" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio38" value="No">No</label>
                                        </div>
                                        <div class="radio">
                                            <span style="margin-right: 60px" class="form-label">Flood Insurance</span>
                                            <label><input type="radio" name="optradio39" value="Yes">Yes</label>
                                            <label><input type="radio" name="optradio39" value="No">No</label>
                                        </div>
                                    </div>


                                </div>
                                <input type="submit" value="SUBMIT" name="submit" class="tesdiq">


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<script src="{{asset('js/form/matrix.form_validation.js')}}"></script>
</body>

</html>