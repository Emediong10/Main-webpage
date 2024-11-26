<?php

namespace App\Http\Controllers;

use Paystack;

use App\Http\Requests;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    // public function redirectToGateway()
    // {
    //     try{
    //         return Paystack::getAuthorizationUrl()->redirectNow();
    //     }catch(\Exception $e) {
    //         return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
    //     }
    


    public function redirectToGateway(Request $request)
    {
        try {
           
            $request->validate([
                'email' => 'required|email',
                'amount' => 'required|integer',
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'phone' => 'required|min:10|max:11',
                'description' => 'required',
            ],
        
            [
                'firstname.required' => 'Please enter your first name',
            ]);

            $data = [
                'email' => $request->email,
                'amount' => $request->amount * 100, 
                'reference' => Paystack::genTranxRef(),
                'metadata' => json_encode([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'phone' => $request->phone,
                    'description' => $request->description,
                ]),
            ];

            return Paystack::getAuthorizationUrl($data)->redirectNow();

            // return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    public function handleGatewayCallback()
    {
        
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);

        if ($paymentDetails['status'] && $paymentDetails['data']['status'] === 'success') {
            
            $payment = new Payment();
            $payment->first_name = $paymentDetails['data']['metadata']['firstname'] ?? null;
            $payment->last_name = $paymentDetails['data']['metadata']['lastname'] ?? null;
            $payment->description = $paymentDetails['data']['metadata']['description'] ?? null;
            $payment->email = $paymentDetails['data']['customer']['email'];
            $payment->phone = $paymentDetails['data']['metadata']['phone'] ?? null;
            $payment->amount = $paymentDetails['data']['amount'] / 100; 
            $payment->trans_reference = $paymentDetails['data']['reference'];
            $payment->metadata = json_encode($paymentDetails['data']['metadata']);
            $payment->trans_status = $paymentDetails['data']['status'];

            if ($payment->save()) {
                return redirect('/payment-success/3f9d7b2c8')->with('message', 'Transaction Successful');
            }
        }

        return redirect('/failed-payment/3f9d7b2c8')->with('error', 'Transaction failed or data could not be saved');
    }
    

         public function failed()
         {
            return view('payments.failed-payment');
         }

         public function success()
         {
            return view('payments.successful-payment');
         }



    public function payment(Payment $payment)
    {
        return view('payment_form');
    }
}
