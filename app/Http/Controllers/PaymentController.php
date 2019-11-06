<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use Session;

class PaymentController extends Controller
{

    public function pay(Request $request){
      if(config('app.payment_status') == 'TEST'){
        //Still Testing
        $api = new \Instamojo\Instamojo(
            config('services.testinstamojo.api_key'),
            config('services.testinstamojo.auth_token'),
            config('services.testinstamojo.url')
        );
      }else{
        //Live
        $api = new \Instamojo\Instamojo(
            config('services.instamojo.api_key'),
            config('services.instamojo.auth_token'),
            config('services.instamojo.url')
        );
      }

        try {
          $response = $api->paymentRequestCreate([
            'purpose' => config('app.payment_status') == 'TEST' ? 'Test Account' : 'NEILS Conference 2020',
            'amount' => Auth::user()->calculateFee(),
            'buyer_name' => Auth::user()->firstname .' '. Auth::user()->lastname,
            'send_email' => true,
            'email' => Auth::user()->email,
            'phone' => Auth::user()->phone,
            'redirect_url' => route('payment.response'),
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

       if(config('app.payment_status') == 'TEST'){
         //Still Testing
         $api = new \Instamojo\Instamojo(
             config('services.testinstamojo.api_key'),
             config('services.testinstamojo.auth_token'),
             config('services.testinstamojo.url')
         );
       }else{
         //Live
         $api = new \Instamojo\Instamojo(
             config('services.instamojo.api_key'),
             config('services.instamojo.auth_token'),
             config('services.instamojo.url')
         );
       }


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
    $data = $_POST;
    $mac_provided = $data['mac'];  // Get the MAC from the POST data
    unset($data['mac']);  // Remove the MAC key from the data.

    $ver = explode('.', phpversion());
    $major = (int) $ver[0];
    $minor = (int) $ver[1];
    if($major >= 5 and $minor >= 4){
         ksort($data, SORT_STRING | SORT_FLAG_CASE);
    }
    else{
         uksort($data, 'strcasecmp');
    }

    $mac_calculated = hash_hmac("sha1", implode("|", $data), config('services.instamojo.salt_key'));
                               //Jaikhlang Instamojo P.Salt:

    if($mac_provided == $mac_calculated){
      // Do something here
      if($data['status'] == "Credit"){
         // Payment was successful, mark it as completed in your database
         $user = User::where('email', $data['buyer'])->first();
         $check = Payment::where('paymentId', $data['payment_id'])->exists();
         if($check){
           //Already data is recorded.
         }else{
           //Record not updated due to some error.
           //Record now.
           $payment = Payment::firstOrCreate([
             'paymentId' => $data['payment_id'],
             'amount' => $data['amount'],
             'buyer_name' => $data['buyer_name'],
             'buyer_phone' => $data['buyer_phone'],
             'fees' => $data['fees'],
             'paymentRequestId' => $data['buyer_phone']
           ]);

           $user->regno = 1000 + $payment->id;
           $user->status = 'PAID';
           $user->payment_id = $payment->id;
           $user->save();
         }
      }
      else{
         //Payment was unsuccessful, mark it as failed in your database
         //Do nothing
      }
    }
    else{
        //echo "Invalid MAC passed";
    }
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
