@component('mail::message')


HOME OWNERS ANSWER SHEET DETAILS

@component('mail::table')
    |        |          |
    | ------------- |:-------------:|
    | **Name of Primary Insured:**{{$text1}}    |**Name of Insured/Occupant2:**    |
    | **Gender:**{{$gender}}   | **Gender**{{$gender1}} |
    | **Relation to Primary:**{{$relation}}   |  |
    | **Martial Status:**{{$martial}}   | **Martial Status**{{$martial1}} |
    | **Date of Birth:**{{$birthday1}}   | **Date of Birth**{{$birthday2}}  |
    | **Social Security No:**{{$social}}    | **Social Security No**{{$social1}} |
    | **Driver License #& Status:**{{$driverlicense}}   | **Driver License #& Status**{{$driverlicense}} |
    | **Occupation:**{{$occupation}}   | **Occupation**{{$occupation1}} |
    | **Yrs.w/ Current Employer:**{{$current}}   | **Yrs.w/ Current Employer**{{$current1}} |
    | **Highest Level of Education:**{{$education}}   | **Highest Level of Education**{{$education}} |
    | **Number of Occupants including Children:**   | **Pets:**{{$optradio2}} |
    | **Does anyone in the household smoke?:**{{$optradio1}}   | **Dog Breeds**{{$dogbreeds}} |
    | **First Name & MI:**{{$firstname}}   | **Date of Birth:**{{$birthday3}}  **Gender:**{{$optradio3}}|
    | **First Name & MI:**{{$firstname1}}   | **Date of Birth:**{{$birthday3}}  **Gender:**{{$optradio4}} |
    | **Mailing Address:**{{$mailingaddress}}   | **Previous Address:**{{$previousaddress}} |
    | **Property Address:**{{$propertyaddress}}   | **Fax:**{{$fax}} |
    | **Home#:**{{$home}}   | **Email Address:**{{$emailaddress}} |
    | **Current Insurance Company:**{{$currentinsurance}}   | **Years Continuous Coverage:**{{$coverage}} |
    | **Expration Date:**{{$exprationdate}}   | **Current Policy No:**{{$currentpolicyno}} |
    | **Policy to insurance same property?:**{{$optradio5}}  | **Cancelled or Non-Renewed in the past 5 years?:**{{$optradio6}} |
    | **Primary Residence?:**{{$optradio7}}   | **Purchase Date:**{{$purchasedate}} |
    | **Original Owner:**{{$optradio8}}   | **Purchase Price:**{{$purchaseprice}} |
    | **Loan:**{{$loan}}   | **Loan Amount:**{{$loanamount}}|
    | **Name & Address of Mortgagee :**{{$mortgage}}   | |
    | **Any claims in 5 years?:**{{$optradio9}}   | **Year Built :**{{$yearbuilt}} |
    | **Construction Type:**{{$constructype}}   | **#of Families:**{{$ofamilies}} |
    | **Sq.Footage:**{{$footage1}}   | {{$defaultUnchecked1}} |
    | {{$defaultUnchecked2}}   |{{$defaultUnchecked3}} |
    | {{$defaultUnchecked4}}   | {{$defaultUnchecked5}}|
    | {{$defaultUnchecked7}} **:Finished:**{{$finish}}  | **{{$defaultUnchecked8}}:**{{$crawis}}|
    | **{{$defaultUnchecked9}}:**{{$slab}}   | **of Bedrooms:**{{$bedrooms}} |
    | **Total # of Rooms:**{{$totalrooms}}   | **of Bathrooms: Full**{{$ofbathrooms}} |
    | **3/4:**{{$full}}   | **1/2:**{{$threeinfour}} |
    | **Is there a pool:**{{$optradio10}}   | {{$defaultUnchecked10}} |
    | {{$defaultUnchecked11}}   | **Is it fenced in?:**{{$optradio11}} |
    | **Deck:**{{$deck}}   | **Porch:**{{$porch}} |
    | {{$defaultUnchecked12}}   | {{$defaultUnchecked13}} |
    | **Garage:**{{$garage}}   | **Car type:**{{$defaultUnchecked14}},{{$defaultUnchecked15}},{{$defaultUnchecked16}},{{$defaultUnchecked17}},{{$defaultUnchecked18}} |
    | **Exterior:** {{$defaultUnchecked19}},{{$defaultUnchecked20}},{{$defaultUnchecked21}},{{$defaultUnchecked22}},{{$defaultUnchecked23}}  | **Type of Roof:**{{$rooftype}}|
    | **Year installed:**{{$yearinstall}}   | **Additional Structures:**{{$additional}} |
    | **Current Heat:**{{$defaultUnchecked24}},{{$defaultUnchecked25}},{{$defaultUnchecked26}},{{$defaultUnchecked27}}   |  |
    | **If Oil- Location of oil tank:**{{$defaultUnchecked28}},{{$defaultUnchecked29}},{{$defaultUnchecked30}},{{$defaultUnchecked31}}   | **Year Updated:**{{$yearupdated}} |
    | **Age of Electric:**{{$electric}}   | **Plumbing:**{{$plumbing}} |
    | **Central Air:**{{$optradio12}}   | |
    | **Country:**{{$country}}  | **Miles to Fire Dept::**{{$milestofiredept}} |
    | **Fire Department::**{{$firedepartment}}  | **Distance to Fire Hydrant:**{{$distancetofirehydrant}} |
    | **Dead-bolt Locks:**{{$optradio13}}   | **Central Burglar Alarm:**{{$optradio16}} |
    | **Smoke Detector:**{{$optradio14}}   | **Local Fire Alarm:**{{$optradio17}} |
    | **Fire Extinguisher:**{{$optradio140}}   | **Central Fire Alarm:** {{$optradio18}}|
    | **Local Burglar Alarm:**{{$optradio15}}   | **Home Sprinkiler System:**{{$optradio19}} |
    | **Building Materials Theft:**{{$optradio20}}   | **Identity Theft Expenses:**{{$optradio27}} |
    | **Silverware Theft:**{{$optradio34}}  | **Business Property:** {{$optradio21}}|
    | **Electronic Data Recovery:**{{$optradio28}}   | **Sprots Equipment:**{{$optradio35}} |
    | **Cameras:**{{$optradio22}}  | **Fair Rental Income:**{{$optradio29}} |
    | **Water Backup:**{{$optradio36}}   | **Earthquake:**{{$optradio23}} |
    | **Jewelery, Watches, Furs:**{{$optradio30}}   | **Extended Premises:**{{$optradio37}} |
    | **Fire Department Charges:**{{$optradio24}}   | **Golf Charts:**{{$optradio31}} |
    | **Yard and Garden:**{{$optradio38}}   | **Green Improvement:**{{$optradio25}} |
    | **Home Day Care:**{{$optradio32}}   | **Flood Insurance:**{{$optradio39}} |
    | **Loss Assessment:**{{$optradio26}}   | **Musical Instruments:**{{$optradio33}} |

@endcomponent
@endcomponent
