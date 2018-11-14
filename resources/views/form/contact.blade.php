<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Home Owners Quote Sheet</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/form/bootstrap.min.css')}}" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/form/style.css')}}" />

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
                            <form name="form_validate" id="form_validate" action="{{url('contact')}}" method="post"> {{csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">DATE</span>
                                            <input name="date" type="date" required>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">CSR</span>
                                            <select id="csr" name="csr" required>
                                                <option value="">Choose</option>
                                                <option value="Wendy" >Wendy</option>
                                                <option value="Heather">Heather</option>
                                                <option value="Miranda">Miranda</option>
                                                <option value="5">Jennifer</option>
                                                <option value="Jennifer">Janice</option>
                                                <option value="Patty">Patty</option>
                                                <option value="Audrey">Audrey</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Client Name</span>
                                            <input type="text" name="clientname" required>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label" required>2nd Named Insured</span>
                                            <input type="text" name="secondname" >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label" required>Phsyical Adress</span>
                                            <input type="text" name="phsyicaladress" >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label" required>Mailing Address</span>
                                            <input type="text" name="mailaddress">
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label" required>E-mail Address</span>
                                            <input type="text" name="emailadress" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">SOURCE OF BUSINESS</span>
                                            <select name="soruceofbusiness" id="soruceofbusiness" required>
                                                <option value="">Choose</option>
                                                <option value="Bradford-Sullivan Pen.Sav">Bradford-Sullivan Pen.Sav</option>
                                                <option value="Catskill Shopper">Catskill Shopper</option>
                                                <option value="Costine Pen.Sav">Costine Pen.Sav</option>
                                                <option value="County Shopper">County Shopper</option>
                                                <option value="Hall of Fame Pen.Sav">Hall of Fame Pen.Sav</option>
                                                <option value="Horseheads Shopper">Horseheads Shopper</option>
                                                <option value="Mulligan's">Mulligan's</option>
                                                <option value="Norwich Pen.Sav">Norwich Pen.Sav</option>
                                                <option value="Rocket Shopper">Rocket Shopper</option>
                                                <option value="Sidney Pen.Sav">Sidney Pen.Sav</option>
                                                <option value="Town & Country Shopper">Town & Country Shopper</option>
                                                <option value="Towne Crier">Towne Crier</option>
                                                <option value="Troy Pen.Sav">Troy Pen.Sav</option>
                                                <option value="Binghamton Press">Binghamton Press</option>
                                                <option value="Towne Crier">Towne Crier</option>
                                                <option value="Referral">Referral</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <span class="form-label">SS Number</span>
                                            <input type="text" name="ssnumber1" required>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">SS Number</span>
                                            <input type="text" name="ssnumber2"required >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Home Phone</span>
                                            <input type="tel" name="homephone"required >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Work/Cell Phone</span>
                                            <input type="tel" name="workphone"required >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Occupation</span>
                                            <input type="text" name="occupation" required >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <span class="form-label">DOB</span>
                                            <input type="text" name="dob1" required  >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">DOB</span>
                                            <input type="text"  name="dob2" required>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <span class="form-label">Place of Employment</span>
                                            <input type="text" name="placeofemployment" required>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <h3><span class="label label-default">Building Information</span></h3>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Primary or Second house</span>
                                            <select name="secondhouse" required>
                                                <option value="">Choose</option>
                                                <option value="1">Primary</option>
                                                <option value="Primary">Secondary</option>
                                                <option value="Seasonal">Seasonal</option>
                                                <option value="Rental">Rental</option>
                                                <option value="Dweling Fire">Dweling Fire</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Year Build</span>
                                            <input type="text" name="yearbuilt" required>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Number of Families</span>
                                            <select name="numberofamilies" required>
                                                <option value="">Choose</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Sq.Footage</span>
                                            <input type="text"  name="sqfootage1" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label"># of acres</span>
                                            <input type="text" name="ofacres1" required>
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">#Floors</span>
                                            <select name="floors" required>
                                                <option value="">Choose</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="4">3</option>
                                                <option value="Big Level">Big Level</option>
                                                <option value="Tri Level">Tri Level</option>
                                                <option value="Split Entry">Split Entry</option>
                                            </select>
                                            <span class="select-arrow"></span>

                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">Construction Type</span>
                                            <select name="constructype" required>
                                                <option value="">Choose</option>
                                                <option value="Frame">Frame</option>
                                                <option value="Brick">Brick</option>
                                                <option value="Mobile">Mobile</option>
                                                <option value="Man.on Found">Man.on Found</option>
                                            </select>
                                            <span class="select-arrow"></span></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">Type of Siding</span>
                                            <select name="sidding" required>
                                                <option value="">Choose</option>
                                                <option value="Aluminum">Aluminum</option>
                                                <option value="Vinly">Vinly</option>
                                                <option value="Wood">Wood</option>
                                                <option value="Stucco">Stucco</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked1" name="defaultUnchecked1" value="Central-Alarms">
                                            <label class="form-control-label" for="defaultUnchecked1">Central Alarms</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked2" name="defaultUnchecked2" value="Smoke-Detectors">
                                            <label class="form-control-label" for="defaultUnchecked2">Smoke Detectors</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked3" name="defaultUnchecked3" value="Fire-Ext">
                                            <label class="form-control-label" for="defaultUnchecked3"> Fire Ext</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked4" name="defaultUnchecked4" value="Dead-Bolts">
                                            <label class="form-control-label" for="defaultUnchecked4"> Dead Bolts</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked5" name="defaultUnchecked5" value="Central-Ait-Cond">
                                            <label class="form-control-label" for="defaultUnchecked5"> Central Ait Cond</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Special Features</span>
                                            <input type="text" name="specialfeatures" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Other</span>
                                            <input type="text" name="other">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <span class="form-label">Do all stair ways have railings</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio1" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio1" value="NO">No</label>
                                        </div>




                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">Roof of Type</span>
                                            <select name="roofoftype" required>
                                                <option value="">Choose</option>
                                                <option value="Composition">Composition</option>
                                                <option value="Shingle">Shingle</option>
                                                <option value="Metal">Metal</option>
                                                <option value="Shake">Shake</option>
                                                <option value="Tile">Tile</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked6" name="defaultUnchecked6" value="Basement">
                                            <label class="form-control-label" for="defaultUnchecked6"> Basement?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">Garage</span>
                                            <select name="garage"required>
                                                <option value="">Choose</option>
                                                <option value="Attached">Attached</option>
                                                <option value="Detached">Detached</option>
                                                <option value="Built in">Built in</option>
                                                <option value="Car Port">Car Port</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <span class="form-label">#of Bays</span>
                                            <select id="ofbays" name="ofbays" required>
                                                <option value="">Choose</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label">Finished? </span>
                                            <select name="finished" id="finished" required>
                                                <option value="">Choose</option>
                                                <option value="10%">10%</option>
                                                <option value="20%">20%</option>
                                                <option value="30%">30%</option>
                                                <option value="40%">40%</option>
                                                <option value="50%">50%</option>
                                                <option value="60%">60%</option>
                                                <option value="70%">70%</option>
                                                <option value="80%">80%</option>
                                                <option value="90%">90%</option>
                                                <option value="100%">100%</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>


                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">Additions</span>
                                            <select name="additions" id="additions" required>
                                                <option value="">Choose</option>
                                                <option value="Porch">Porch</option>
                                                <option value="Deck">Deck</option>
                                                <option value="Sun Room">Sun Room</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Sq Footage?</span>
                                            <input type="text" name="sqfootage2" >
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">Living Room?</span>
                                            <select name="livingroom" required>
                                                <option value="">Choose</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label">Kitchen?</span>
                                            <select name="kitchen" id="kithcen" required>
                                                <option value="">Choose</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked7" name="defaultUnchecked7" value="Laundry">
                                            <label class="form-control-label" for="defaultUnchecked7" >Laundry?</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked8" name="defaultUnchecked8" value="Attic">
                                            <label class="form-control-label" for="defaultUnchecked8" >Attic?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label">Full Bath</span>
                                            <select name="fullbath">
                                                <option value="">Choose</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option>3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label">1/2 Bath</span>
                                            <select name="halfbath">
                                                <option value="">Choose</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked9" name="defaultUnchecked9" value="Dining-Room">
                                            <label class="form-control-label" for="defaultUnchecked9" >Dining Room?</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label"> Number of Bedrooms?</span>
                                            <select name="numberofbedrooms" required>
                                                <option value="">Choose</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label"> Den/Study/Office?</span>
                                            <select name="denstudyoffice">
                                                <option value="">Choose</option>
                                                <option value="Den">Den</option>
                                                <option value="Study">Study</option>
                                                <option value="Office">Office</option>
                                                <option value="Family RM">Family Rm</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">Fireplaces</span>
                                            <select name="fireplaces" required>
                                                <option value="">Choose</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Interior Flooring?</span>
                                            <select name="interiorfloor" required>
                                                <option value="">Choose</option>
                                                <option value="75% Hard Wood, 20% Carpet,5% Tile">75% Hard Wood, 20% Carpet,5% Tile</option>
                                                <option value="80%Carpet,10%Tile, 10%Wood">80%Carpet,10%Tile, 10%Wood</option>
                                                <option value="50% Wood, 50% Carpet">50% Wood, 50% Carpet</option>
                                                <option value="60% Wood, 30% Carpet, 10%Tile">60% Wood, 30% Carpet, 10%Tile</option>
                                                <option value="100% Carpet">100% Carpet</option>
                                                <option value="100% Hard wood">100% Hard wood</option>
                                                <option value="70% Carpet, 30% Vinyl">70% Carpet, 30% Vinyl</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Interior Wall?</span>
                                            <select name="interiorwall" required>
                                                <option value="">Choose</option>
                                                <option value="50%Wallpaper, 50%Paint">50%Wallpaper, 50%Paint</option>
                                                <option value="50%Paneling, 20% Paper, 20% Paint">50%Paneling, 20% Paper, 20% Paint</option>
                                                <option value="70% Paint, 20% Paper">70% Paint, 20% Paper</option>
                                                <option value="60% Wood, 20% Paper, 20% Paint">60% Wood, 20% Paper, 20% Paint</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Primary Heat Type?</span>
                                            <select name="primaryheatype" required>
                                                <option value="">Choose</option>
                                                <option value="Gas">Gas</option>
                                                <option value="Electric">Electric</option>
                                                <option value="Propane">Propane</option>
                                                <option value="Oil">Oil</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <span class="form-label">If oil, where is tank located?</span>
                                            <input type="text" name="ifoilwhereistank" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Secondary Heat Type?</span>
                                            <select name="secondaryheatype" required>
                                                <option value="">Choose</option>
                                                <option value="Gas">Gas</option>
                                                <option value="Electric">Electric</option>
                                                <option value="Prophane">Propane</option>
                                                <option value="Oil">Oil</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Tank Material?</span>
                                            <select name="tankmaterial" required>
                                                <option value="">Choose</option>
                                                <option value="steel">Steel</option>
                                                <option value="aluminum">Aluminum</option>
                                                <option value="fiberglass">Fiberglass</option>
                                                <option value="polymer">Polymer</option>
                                                <option value="doubleplysteel">Double Ply Steel</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">How old is tank?</span>
                                            <input type="text" name="oldtank" >
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked10" name="defaultUnchecked10" value="WoodStove">
                                            <label class="form-control-label" for="defaultUnchecked10" >WoodStove?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked11" name="defaultUnchecked11" value="Trampoline">
                                            <label class="form-control-label" for="defaultUnchecked11" >Trampoline?</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Swimming Pool?</span>
                                            <select name="swimpool">
                                                <option value="">Choose</option>
                                                <option value=" Above Ground Fenced">Above Ground Fenced</option>
                                                <option value="Above Ground No Fenced">Above Ground No Fenced</option>
                                                <option value="in Ground Fenced">in Ground Fenced</option>
                                                <option value="in Ground No Fenced">in Ground No Fenced</option>
                                                <option></option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked12" name="defaultUnchecked12" value="Satellite-Dish">
                                            <label class="form-control-label" for="defaultUnchecked12" >Satellite Dish</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">#of Horses</span>
                                            <input type="text" name="ofhorses" >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">#of Dogs</span>
                                            <input type="text" name="ofdogs">
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">In Home Business</span>
                                            <input type="text" name="inhomebusiness" >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Miles from Fire Station</span>
                                            <input type="text" name="milesfromfire" >
                                        </div>
                                        <span class="form-label">Is there a year round water source within 1000ft</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio2" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio2" value="No">No</label>
                                        </div>

                                        <span class="form-label">Accessible Year Round?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio3" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio3" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Who Rides?</span>
                                            <input type="text" name="whorides" >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Type of Dog(s)</span>
                                            <input type="text" name="typeofdogs" >
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked13" name="defaultUnchecked13" value="Day-Care">
                                            <label class="form-control-label" for="defaultUnchecked13" >Day Care?</label>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Feet from Fire Hydrant</span>
                                            <input type="text" name="feetfromfirehydrant" >
                                        </div>
                                        <span class="form-label">Does the fire dept.have a 3500 gallon capacity?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio4" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio4"value="No">No</label>
                                        </div>
                                        <span class="form-label">Located on a Paved Road?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio5" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio5" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Explain Usage</span>
                                            <input type="text" name="explainusage" >
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked14" name="defaultUnchecked14" value="Biting-history">
                                            <label class="form-control-label" for="defaultUnchecked14" >Biting history?</label>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Number of Kids?</span>
                                            <select name="numberofkids">
                                                <option value="">Choose</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Fire District</span>
                                            <input type="text" name="firedistrict" required >
                                        </div>
                                        <span class="form-label">Are you visible to 6 other homes</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio6" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio6" value="No">No</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <h3><span class="label label-default">Upgrade Information</span></h3>
                                    </div>

                                    <div class="col-sm-2">
                                        <div  class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked15" name="defaultUnchecked15" value="Breaker-Box">
                                            <label class="form-control-label" for="defaultUnchecked15" >Breaker Box</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div  class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked16" name="defaultUnchecked16" value="Fuse-Box">
                                            <label class="form-control-label" for="defaultUnchecked16" >Fuse Box</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div  class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked160" name="defaultUnchecked160" value="Electrical">
                                            <label class="form-control-label" for="defaultUnchecked160" >Electrical</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div  class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked17" name="defaultUnchecked17" value="Plumbing">
                                            <label class="form-control-label" for="defaultUnchecked17" >Plumbing</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div  class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked18" name="defaultUnchecked18" value="Heating">
                                            <label class="form-control-label" for="defaultUnchecked18" >Heating</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div  class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked19" name="defaultUnchecked19" value="Roof">
                                            <label class="form-control-label" for="defaultUnchecked19" >Roof</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label">Year</span>
                                            <input type="text" name="year1" >
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio7" value="Full">Full</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio7" value="Partial">Partial</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label">Year</span>
                                            <input type="text" name="year2" >
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio8" value="Full">Full</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio8" value="Partial">Partial</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label">Year</span>
                                            <input type="text" name="year3">
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio9" value="Full">Full</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio9" value="Partial">Partial</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label">Year</span>
                                            <input type="text" name="year4">
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio10" value="Full">Full</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio10" value="Partial">Partial</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label">Year</span>
                                            <input type="text" name="year5" >
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio11" value="Full">Full</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio11" value="Partial">Partial</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <h3><span class="label label-default">Underwriting Info</span></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="form-label">Are you being Non-Renewed?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio12" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio12" value="No">No</label>
                                        </div>

                                        <div class="form-group">
                                            <span class="form-label">Current Carrier?</span>
                                            <input type="text" name="currentcarrier">
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">If Yes,reason?</span>
                                            <textarea class=""  name="reason" id="" cols="60" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="form-label">Do you have any other property to be insured or liability extended to?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio13" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio13" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="form-label">Have you had any Property or Liability claims at this location in the past 5 yrs?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio14" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio14" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="form-label">Do you need flood insurance?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio15" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio15" value="No">No</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
									<span class="form-label">Many Insurance
										Companies underwrite insurance based on credit combined with claims history, are there any
											current or past credit problems we should be aware of</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio16" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio16" value="No">No</label>
                                        </div>
                                        <div class="radio">
                                            <input type="text" name="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="form-label">Will there be a Mortgagee for this property?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio17" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio17" value="No">No</label>
                                        </div>
                                        <div  class="custom-control custom-checkbox">
                                            <input  type="checkbox" id="defaultUnchecked20" name="defaultUnchecked20" value="Non-smoker">
                                            <label class="form-control-label" for="defaultUnchecked20" >Non-smoker</label>
                                        </div>
                                        <h3><span class="label label-default">Coverages</span></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Remarks</span>
                                            <textarea class=""  name="remark" id="" cols="60" rows="6"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Form</span>
                                            <select name="form">
                                                <option value="">Choose</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span style="margin-right: 60px" class="form-label">Dwelling</span>
                                            <input type="text"  name="dwelling">
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 6px" class="form-label">Other Structures</span>
                                            <input type="text" name="otherstructures" >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Personal Property</span>
                                            <input type="text" name="personalproperty" >
                                        </div>
                                        <div class="form-group">
                                            <span style="margin-right: 40px" class="form-label">Loss of Use</span>
                                            <input type="text" name="losofuse" >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Medical Payments</span>
                                            <input type="text" name="mdeicalpayment" >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Liability Limit</span>
                                            <select name="liability" required>
                                                <option value="">Choose</option>
                                                <option value="100,000">100,000</option>
                                                <option value="300,000">300,000</option>
                                                <option value="500,000">500,000</option>
                                                <option value="1000,000">1000,000</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Deductible Amount</span>
                                            <select name="deductibleamount" required>
                                                <option value="">Choose</option>
                                                <option value="100">100</option>
                                                <option value="250">250</option>
                                                <option value="500">500</option>
                                                <option value="1000">1000</option>
                                                <option value="2500">2500</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Are you interested in an Auto or Life Insurance Quote?</span>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio18" value="Yes">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio18" value="No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Mobile Home Dimensions?</span>
                                            <input type="text" name="mobiehomedimension" >
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Year Built</span>
                                            <input type="text" name="yearbuilt2">
                                        </div>
                                        <span class="form-label">Tied Down?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio19" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio19" value="No">No</label>
                                        </div>
                                        <span class="form-label">Skirted?</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio20" value="Yes">Yes</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio20" value="No">No</label>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Name of Park</span>
                                            <input type="text" name="nameofpark" >
                                        </div>

                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <span class="form-label">Roof Type?</span>
                                                <select name="rooftype1" required>
                                                    <option value="">Choose</option>
                                                    <option value="Metal">Metal</option>
                                                    <option value="Rolled">Rolled</option>
                                                    <option value="Pitched">Pitched</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                            <div class="form-group">
                                                <span class="form-label">Home sits on</span>
                                                <select name="homesitson" required>
                                                    <option value="">Choose</option>
                                                    <option value="Foundation">Foundation</option>
                                                    <option value="Pad">Pad</option>
                                                    <option value="Piers">Piers</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <input type="submit" value="SUBMIT" name="submit" class="tesdiq">

                            </form >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</body>

</html>