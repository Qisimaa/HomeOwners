<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class newMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->markdown('email',
            ['date'=>$request->date,
            'csr'=>$request->csr,
            'secondname'=>$request->secondname,
            'secondhouse'=>$request->secondhouse,
            'clientname'=>$request->clientname,
            'phsyicaladress'=>$request->phsyicaladress,
            'mailaddress'=>$request->mailaddress,
            'soruceofbusiness'=>$request->soruceofbusiness,
            'dob1'=>$request->dob1,
            'dob2'=>$request->dob2,
            'other'=>$request->other,
            'ssnumber1'=>$request->ssnumber1,
            'specialfeatures'=>$request->specialfeatures,
            'ssnumber2'=>$request->ssnumber2,
            'homephone'=>$request->homephone,
            'placeofemployment'=>$request->secondhouse,
            'workphone'=>$request->workphone,
            'occupation'=>$request->occupation,
            'yearbuilt'=>$request->yearbuilt,
            'numberofamilies'=>$request->numberofamilies,
            'sqfootage'=>$request->sqfootage,
            'ofacres1'=>$request->ofacres1,
            'defaultUnchecked1'=>$request->defaultUnchecked1,
            'defaultUnchecked2'=>$request->defaultUnchecked2,
            'defaultUnchecked3'=>$request->defaultUnchecked3,
            'defaultUnchecked4'=>$request->defaultUnchecked4,
            'defaultUnchecked5'=>$request->defaultUnchecked5,
            'defaultUnchecked6'=>$request->defaultUnchecked6,
            'defaultUnchecked7'=>$request->defaultUnchecked7,
            'defaultUnchecked8'=>$request->defaultUnchecked8,
            'defaultUnchecked9'=>$request->defaultUnchecked9,
            'defaultUnchecked10'=>$request->defaultUnchecked10,
            'defaultUnchecked11'=>$request->defaultUnchecked11,
            'defaultUnchecked12'=>$request->defaultUnchecked12,
            'defaultUnchecked13'=>$request->defaultUnchecked13,
            'defaultUnchecked14'=>$request->defaultUnchecked14,
            'defaultUnchecked15'=>$request->defaultUnchecked15,
            'defaultUnchecked16'=>$request->defaultUnchecked16,
            'defaultUnchecked160'=>$request->defaultUnchecked160,
            'defaultUnchecked17'=>$request->defaultUnchecked17,
            'defaultUnchecked18'=>$request->defaultUnchecked18,
            'defaultUnchecked19'=>$request->defaultUnchecked19,
            'defaultUnchecked20'=>$request->defaultUnchecked20,
            'floors'=>$request->floors,
            'roofoftype'=>$request->roofoftype,
            'constructype'=>$request->constructype,
            'sidding'=>$request->sidding,
            'optradio1'=>$request->optradio1,
            'optradio2'=>$request->optradio2,
            'optradio3'=>$request->optradio3,
            'optradio4'=>$request->optradio4,
            'optradio5'=>$request->optradio5,
            'optradio6'=>$request->optradio6,
            'optradio7'=>$request->optradio7,
            'optradio8'=>$request->optradio8,
            'optradio9'=>$request->optradio9,
            'optradio10'=>$request->optradio10,
            'optradio11'=>$request->optradio11,
            'optradio12'=>$request->optradio12,
            'optradio13'=>$request->optradio13,
            'optradio14'=>$request->optradio14,
            'optradio15'=>$request->optradio15,
            'optradio16'=>$request->optradio16,
            'optradio17'=>$request->optradio17,
            'optradio18'=>$request->optradio18,
            'optradio19'=>$request->optradio19,
            'optradio20'=>$request->optradio20,
            'ofbays'=>$request->ofbays,
            'garage'=>$request->garage,
            'additons'=>$request->additons,
            'finished'=>$request->finished,
            'additions'=>$request->additions,
            'sqfootage2'=>$request->sqfootage2,
            'livingroom'=>$request->livingroom,
            'kitchen'=>$request->kitchen,
            'fullbath'=>$request->fullbath,
            'halfbath'=>$request->halfbath,
            'numberofbedrooms'=>$request->numberofbedrooms,
            'denstudyoffice'=>$request->denstudyoffice,
            'fireplaces'=>$request->fireplaces,
            'interiorfloor'=>$request->interiorfloor,
            'interiorwall'=>$request->interiorwall,
            'secondaryheatype'=>$request->secondaryheatype,
            'primaryheatype'=>$request->primaryheatype,
            'ifoilwhereistank'=>$request->ifoilwhereistank,
            'tankmaterial'=>$request->tankmaterial,
            'oldtank'=>$request->oldtank,
            'swimpool'=>$request->swimpool,
            'feetfromfirehydrant'=>$request->feetfromfirehydrant,
            'firedistrict'=>$request->firedistrict,
            'currentcarrier'=>$request->currentcarrier,
            'ofhorses'=>$request->ofhorses,
            'ofdogs'=>$request->ofdogs,
            'inhomebusiness'=>$request->inhomebusiness,
            'milesfromfile'=>$request->milesfromfile,
            'whorides'=>$request->whorides,
            'typeofdogs'=>$request->typeofdogs,
            'explainusage'=>$request->explainusage,
            'numberofkids'=>$request->numberofkids,
            'year1'=>$request->year1,
            'year2'=>$request->year2,
            'year3'=>$request->year3,
            'year4'=>$request->year4,
            'year5'=>$request->year5,
            'reason'=>$request->reason,
            'remark'=>$request->remark,
            'form'=>$request->form,
            'text'=>$request->text,
            'dwelling'=>$request->dwelling,
            'otherstructures'=>$request->otherstructures,
            'personalproperty'=>$request->personalproperty,
            'losofuse'=>$request->losofuse,
            'mdeicalpayment'=>$request->mdeicalpayment,
            'liability'=>$request->liability,
            'deductibleamount'=>$request->deductibleamount,
            'yearbuilt2'=>$request->yearbuilt2,
            'nameofpark'=>$request->nameofpark,
            'remark'=>$request->remark,
            'rooftype1'=>$request->rooftype1,
            'homesitson'=>$request->homesitson,
            'mobiehomedimension'=>$request->mobiehomedimension,

            ]
        )->to('qisi.salehov@mail.ru')
            ->subject('Homeowners Quote Sheet');
    }
}
