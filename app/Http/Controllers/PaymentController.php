<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Auth;
use Session;

class PaymentController extends Controller
{

    public function pay(Request $request){
        $api = new \Instamojo\Instamojo(
          config('services.instamojo.api_key'),
          config('services.instamojo.auth_token'),
          config('services.instamojo.url')
        );

        try {
          $response = $api->paymentRequestCreate([
            'purpose' => 'NEILS Conference 2020',
            'amount' => Auth::user()->calculateFee(),
            'buyer_name' => Auth::user()->firstname .' '. Auth::user()->lastname,
            'send_email' => true,
            'email' => Auth::user()->email,
            'phone' => Auth::user()->phone,
            'redirect_url' => route('payment.success'),
            'webhook' => route('payment.webhook')
          ]);

          header('Location: '.$response['longurl']);
          exit();
        } catch (\Exception $e) {
          print('Error: ' .$e->getMessage());
        }
    }


    public function response(Request $request){
     try {
        $api = new \Instamojo\Instamojo(
            config('services.instamojo.api_key'),
            config('services.instamojo.auth_token'),
            config('services.instamojo.url')
        );

        $response = $api->paymentRequestStatus(request('payment_request_id'));

        if( !isset($response['payments'][0]['status']) ) {
           dd('payment failed');
        } else if($response['payments'][0]['status'] != 'Credit') {
             dd('payment failed');
        }
      }catch (\Exception $e) {
         dd('payment failed');
     }

    $payment = new Payment;
    $payment->paymentId = $response['payments'][0]['payment_id'];
    $payment->amount = $response['payments'][0]['amount'];
    $payment->buyer_name = $response['payments'][0]['buyer_name'];
    $payment->buyer_phone = $response['payments'][0]['buyer_phone'];
    $payment->buyer_email = $response['payments'][0]['buyer_email'];
    $payment->fees = $response['payments'][0]['fees'];
    $payment->paymentRequestId = $response['id'];
    $payment->save();

    $user = Auth::user();
    $user->regno = 1000 + $payment->id;
    $user->status = 'PAID';
    $user->payment_id = $payment->id;
    $user->save();

    Session::flash('message', 'Payment successful.');
    return redirect()->route('payment.success');
  }


  public function webhook(){
    //
  }



  public function success(){
    return view('registrations.success');
  }

  public function failure(){
    return view('registrations.success');
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
