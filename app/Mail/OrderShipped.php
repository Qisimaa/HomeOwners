<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->markdown('emails1.orders.shipped',
            [
                'text1'=>$request->text1,
                'gender'=>$request->gender,
                'gender1'=>$request->gender1,
                'martial'=>$request->martial,
                'martial1'=>$request->martial1,
                'birthday'=>$request->birthday,
                'birthday1'=>$request->birthday1,
                'birthday2'=>$request->birthday2,
                'birthday3'=>$request->birthday3,
                'social'=>$request->social,
                'social1'=>$request->social1,
                'driverlicense'=>$request->driverlicense,
                'driverlicense1'=>$request->driverlicense1,
                'occupation'=>$request->occupation,
                'occupation1'=>$request->occupation1,
                'current'=>$request->current,
                'current1'=>$request->current1,
                'education'=>$request->education,
                'education1'=>$request->education1,
                'children'=>$request->children,
                'occupant2'=>$request->occupant2,
                'relation'=>$request->relation,
                'employer2'=>$request->employer2,
                'dogbreeds'=>$request->dogbreeds,
                'firstname'=>$request->firstname,
                'firstname1'=>$request->firstname1,
                'date'=>$request->date,
                'currentpolicyno'=>$request->currentpolicyno,
                'mortgage'=>$request->mortgage,
                'mailingaddress'=>$request->mailingaddress,
                'propertyaddress'=>$request->propertyaddress,
                'homeaddress'=>$request->homeaddress,
                'previousaddress'=>$request->previousaddress,
                'emailaddress'=>$request->emailaddress,
                'fax'=>$request->fax,
                'currentinsurance'=>$request->currentinsurance,
                'exprationdate'=>$request->exprationdate,
                'purchasedate'=>$request->purchasedate,
                'purchaseprice'=>$request->purchaseprice,
                'loan'=>$request->loan,
                'loanamount'=>$request->loanamount,
                'yearbuilt'=>$request->yearbuilt,
                'constructype'=>$request->constructype,
                'ofamilies'=>$request->ofamilies,
                'footage1'=>$request->footage1,
                'finish'=>$request->finish,
                'crawis'=>$request->crawis,
                'slab'=>$request->slab,
                'bedrooms'=>$request->bedrooms,
                'totalrooms'=>$request->totalrooms,
                'ofbathrooms'=>$request->ofbathrooms,
                'full'=>$request->full,
                'threeinfour'=>$request->threeinfour,
                'deck'=>$request->deck,
                'porch'=>$request->porch,
                'garage'=>$request->garage,
                'home'=>$request->home,
                'rooftype'=>$request->rooftype,
                'yearinstall'=>$request->yearinstall,
                'additional'=>$request->additional,
                'yearupdated'=>$request->yearupdated,
                'electric'=>$request->electric,
                'plumbing'=>$request->plumbing,
                'country'=>$request->country,
                'coverage'=>$request->coverage,
                'firedepartment'=>$request->firedepartment,
                'milestofiredept'=>$request->milestofiredept,
                'distancetofirehydrant'=>$request->distancetofirehydrant,
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
                'optradio140'=>$request->optradio140,
                'optradio15'=>$request->optradio15,
                'optradio16'=>$request->optradio16,
                'optradio17'=>$request->optradio17,
                'optradio18'=>$request->optradio18,
                'optradio19'=>$request->optradio19,
                'optradio20'=>$request->optradio20,
                'optradio21'=>$request->optradio21,
                'optradio22'=>$request->optradio22,
                'optradio23'=>$request->optradio23,
                'optradio24'=>$request->optradio24,
                'optradio25'=>$request->optradio25,
                'optradio26'=>$request->optradio26,
                'optradio27'=>$request->optradio27,
                'optradio28'=>$request->optradio28,
                'optradio29'=>$request->optradio29,
                'optradio30'=>$request->optradio30,
                'optradio31'=>$request->optradio31,
                'optradio32'=>$request->optradio32,
                'optradio33'=>$request->optradio33,
                'optradio34'=>$request->optradio34,
                'optradio35'=>$request->optradio35,
                'optradio36'=>$request->optradio36,
                'optradio37'=>$request->optradio37,
                'optradio38'=>$request->optradio38,
                'optradio39'=>$request->optradio39,
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
                'defaultUnchecked17'=>$request->defaultUnchecked17,
                'defaultUnchecked18'=>$request->defaultUnchecked18,
                'defaultUnchecked19'=>$request->defaultUnchecked19,
                'defaultUnchecked20'=>$request->defaultUnchecked20,
                'defaultUnchecked21'=>$request->defaultUnchecked21,
                'defaultUnchecked22'=>$request->defaultUnchecked22,
                'defaultUnchecked23'=>$request->defaultUnchecked23,
                'defaultUnchecked24'=>$request->defaultUnchecked24,
                'defaultUnchecked25'=>$request->defaultUnchecked25,
                'defaultUnchecked26'=>$request->defaultUnchecked26,
                'defaultUnchecked27'=>$request->defaultUnchecked27,
                'defaultUnchecked28'=>$request->defaultUnchecked28,
                'defaultUnchecked29'=>$request->defaultUnchecked29,
                'defaultUnchecked30'=>$request->defaultUnchecked30,
                'defaultUnchecked31'=>$request->defaultUnchecked31,


            ]
            )->to('qisi.salehov@mail.ru')
            ->subject('Homeowners Questionaire');
    }
}
