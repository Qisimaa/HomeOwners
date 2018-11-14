
@component('mail::message')


    Homeowners Questionnaire


@component('mail::table')
    |         |                            |                    |
    | --------   |-------------             | --------              |
    | **Date:** {{$date}}  | **CSR:**{{$csr}}       | **Source3 of bussines:**{{$soruceofbusiness}}    |
    | **Client Name:**{{$clientname}}   | **SS Number:**{{$ssnumber1}}      | **Dob:**{{$dob1}}     |
    | **2nd Named Insured:**{{$secondname}}   | **SS Number:**{{$ssnumber2}}       | **Dob:**{{$dob1}}    |
    | **Phsyical Address:**{{$phsyicaladress}}  | **Home Phone:**{{$homephone}}       |     |
    | **Mailing Address:**{{$mailaddress}}   | **Work/Cell Phone:**{{$workphone}}       |     |
    | **Email Addeess:**{{$mailaddress}}  | **Ocupation:**{{$occupation}}      | **Place of Employment:**{{$placeofemployment}}    |
    | **Primary of Second House:**{{$secondhouse}}   | **Number of Families:**{{$numberofamilies}}      | **#of acres:**{{$ofacres1}}    |
    | **Year Built:**{{$yearbuilt}}   | **Sq.Footage:**{{$sqfootage}}      | **#Floors**{{$floors}}     |
    | **Construction Type:**{{$constructype}}   | **Type of Sidding:**{{$sidding}}        | {{$defaultUnchecked1}},{{$defaultUnchecked2}},{{$defaultUnchecked3}},{{$defaultUnchecked4}},{{$defaultUnchecked5}} |
    | **Special Features:**{{$specialfeatures}}   | **Other:**{{$other}}       | **Do all stairs ways have railings:**{{$optradio1}}   |
    | **Roof of Type:**{{$roofoftype}}  | **Garage:**{{$garage}}     | **#of Bays:**{{$ofbays}}     |
    | {{$defaultUnchecked20}}    | **Finished:**{{$finished}}       | **Additions:**{{$additions}}    |
    | **Sq Footage:** {{$sqfootage2}}  | **Living Room:**{{$livingroom}}       | **Kitchen:**{{$kitchen}}     |
    | **1/2 Bath:**{{$halfbath}}  |{{$defaultUnchecked7}}         | **Number of Beedroms:**{{$numberofbedrooms}}     |
    | **Den/Study/Office:**{{$denstudyoffice}}  | **Fireplaces:**{{$fireplaces}}      | **Interioring Flooring:**{{$interiorfloor}}  |
    | **Interior Wall:**{{$interiorwall}}   | **Primary Heat Type:**{{$primaryheatype}}       | **if oil,where is tank located:**{{$ifoilwhereistank}}     |
    | **Secondary Heat Type:**{{$secondaryheatype}}  | **Tank Material:**{{$tankmaterial}}        | **How old is tank:**{{$oldtank}}    |
    | {{$defaultUnchecked10}}    | {{$defaultUnchecked11}},{{$defaultUnchecked12}}          | **Swimming Pool:**{{$swimpool}}    |
    | **#of Horses:**{{$ofhorses}} | **Who Rides:**{{$whorides}}       | **Explain Usage:**{{$explainusage}}    |
    | **#of Dogs:**{{$ofdogs}}   | **Type of Dogs:**{{$typeofdogs}}       | {{$defaultUnchecked14}}   |
    | **In Home Business:**{{$inhomebusiness}}   | {{$defaultUnchecked13}}       | **Number of Kids:**{{$numberofkids}}    |
    | **Miles from Fire Station:**{{$milesfromfile}}  | **Feet from Fire Hydrant:**{{$feetfromfirehydrant}}      | **Fire District:**{{$firedistrict}}   |
    | **Is there a year round water source within 1000ft:**{{$optradio2}}   | **Does the fire dept have a 3500 gallon capacity:** {{$optradio4}}     |      **Are you visible to 6 other homes:**{{$optradio6}}   |
    | **Accessible Year Round:**{{$optradio3}}   | **Located on Paved Road :**{{$optradio5}}        |      |
    | {{$defaultUnchecked15}}   | {{$defaultUnchecked16}}        | {{$defaultUnchecked160}}     |
    | **Year:**{{$year1}},{{$optradio7}}  | **Year :**{{$year2}},{{$optradio8}}        | **Year :**{{$year3}},{{$optradio9}}     |
    | {{$defaultUnchecked17}}   | {{$defaultUnchecked18}}        | {{$defaultUnchecked19}}     |
    | **Year:**{{$year4}},{{$optradio10}}  | **Year :**{{$year5}},{{$optradio11}}        |  |
    | **Are you being Non-Renewed:**{{$optradio12}}   | **If Yes Reason :**{{$reason}}        | ** Current Carier:**{{$currentcarrier}}     |
    | **Do you have any other property to be insured or liability extended to:**{{$optradio13}}   | **Do you need floor insurance :**{{$optradio15}}        | ** Will there be a Mortgagee for this property:**{{$optradio17}}     |
    | **Have you had any Property or Liability claims at this location in the past 5 years:**{{$optradio14}}   | {{$defaultUnchecked20}}        | ** Remark:**{{$remark}}     |
    | **Many Insurance Companies underwrite insurance based on credit combined with claims history, are there any current or past credit problems we should be aware of:**{{$optradio16}},{{$text}}   | **Dwelling :**{{$dwelling}}        | ** Form:**{{$form}}     |
    | **Other Structures:**{{$otherstructures}}   | **Mobile Home Dimension :**{{$mobiehomedimension}}        | ** Personal Property:**{{$personalproperty}}     |
    | **Tied Down:**{{$optradio18}}   | **Loss of Use :**{{$losofuse}}        | ** Medical Payments:**{{$mdeicalpayment}}     |
    | **Skirted:**{{$optradio19}}   | **Liability Limit :**{{$liability}}        | ** Deductible Amount:**{{$deductibleamount}}     |
    | **Name of Park:**{{$nameofpark}}   | **Roof of Type :**{{$rooftype1}}        | ** Home Sits on :**{{$homesitson}}     |
    | **Are you interested in Auto or Life insurance Quote:**{{$optradio20}}   |       |   |

@endcomponent
@endcomponent

