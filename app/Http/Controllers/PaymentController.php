<?php

 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentType;
use App\Models\Payment;
use Paystack;
use Redirect;

class PaymentController extends Controller
{
    /**
     * Redirect to Paystack Gateway.
     */
    public function redirectToGateway(Request $request)
    {
    //  dd($request);
        try {
            $request->validate([
                'email' => 'required|email',
                'amount' => 'required|numeric|min:100',
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                // 'phone' => 'min:10|max:11',
                'description' => 'required_without:payment_type_id',
                'payment_type_id' => 'nullable|exists:payment_types,id',
            ], [
                'description.required_without' => 'Please provide a description if no payment type is selected.',
                'payment_type_id.exists' => 'Invalid payment type selected.',
            ]);

            // Get the payment type if provided
            $paymentType = null;
            if ($request->payment_type_id) {
                $paymentType = PaymentType::findOrFail($request->payment_type_id);
            }
            // dd($data);


            $data = [
                'email' => $request->email,
                'amount' => $request->amount * 100,
                'reference' => Paystack::genTranxRef(),
                'metadata' => json_encode([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'description' => $paymentType ? $paymentType->title : $request->description,
                    'payment_type_id' => $paymentType?->id,
                ]),
            ];

            if ($request->has('phone') && !empty($request->phone)) {
    $data['phone'] = $request->phone;
} else {
    $data['phone'] = null;
}

            return Paystack::getAuthorizationUrl($data)->redirectNow();

        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['msg' => 'The Paystack token has expired. Please refresh the page and try again.']);
        }
    }


  public function handleGatewayCallback()
{
    $paymentDetails = Paystack::getPaymentData();

    if ($paymentDetails['status'] && $paymentDetails['data']['status'] === 'success') {
        $metadata = $paymentDetails['data']['metadata'];


        $payment = new Payment();
        $payment->first_name = $metadata['firstname'] ?? null;
        $payment->last_name = $metadata['lastname'] ?? null;
        $payment->currency = $paymentDetails['data']['currency'];
        $payment->email = $paymentDetails['data']['customer']['email'];
        $payment->phone = $metadata['phone'] ?? null;
        $payment->amount = $paymentDetails['data']['amount'] / 100;
        $payment->trans_reference = $paymentDetails['data']['reference'];
        $payment->metadata = json_encode($metadata);
        $payment->trans_status = $paymentDetails['data']['status'];

        // Check if payment was made through a PaymentType
        if (!empty($metadata['payment_type_id'])) {
            $paymentType = PaymentType::find($metadata['payment_type_id']);

            if ($paymentType) {
                $payment->payment_type_id = $paymentType->id;
                $payment->description = $paymentType->title;
            }
        } else {
            $payment->description = $metadata['description'] ?? 'No description provided';
        }

        if ($payment->save()) {
            if (!empty($payment->payment_type_id)) {
                $paymentType = PaymentType::find($payment->payment_type_id);

                if ($paymentType) {
                    $paymentType->updateAmountPaid($payment->amount);
                    return $this->success();
                }
            }
        }
    }

    return $this->failed(); // Call the failed method to display the failed view
}

/**
 * Display payment success view.
 */
public function success()
{
    return view('payments.successful-payment');
}

/**
 * Display payment failed view.
 */
public function failed()
{
    return view('payments.failed-payment');
}


    public function paymentform()
    {
        $paymentTypes = PaymentType::all();
        return view('payment_form', compact('paymentTypes'));
    }
}
