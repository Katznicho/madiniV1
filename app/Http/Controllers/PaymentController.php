<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Sponsor;
use App\Models\Payment;
use App\Models\User;
use App\Payments\Pesapal;
use App\Traits\MessageTrait;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PaymentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("payments.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



    public function finishPayment(Request $request)
    {
        try {
            //code...
            $orderTrackingId = $request->input('OrderTrackingId');
            $reference = $request->input('OrderMerchantReference');

            Payment::where("reference", $reference)->update([
                "order_tracking_id" => $orderTrackingId,

            ]);
            //get the actual Payment
            $Payment = Payment::where("reference", $reference)->first();
            $customer = Sponsor::find($Payment->sponsor_id);
            $data = Pesapal::PaymentStatus($orderTrackingId, $orderTrackingId);
            $payment_method = $data->message->payment_method;

            $name =  $customer->first_name . " " . $customer->last_name;

            if ($data->message->payment_status_description == config("status.payment_status.completed")) {
                $message = "Hello {$name} your payment of {$Payment->amount} has been successfully completed.Thank you";
                $this->sendMessage($customer->phone_number, $message);
                //check if the Payment is already completed
                if ($Payment->status == config("status.payment_status.completed")) {
                    Notification::make()
                        ->success()
                        ->title('Payment completed successfully')
                        ->body('The Payment has been completed successfully');
                    return redirect()->route("filament.admin.resources.Payments.index");
                } else {

                    $Payment->update([
                        "status" => config("status.payment_status.completed"),
                        "payment_method" => $payment_method
                    ]);
                    //update customer balance
                    $customer->account_balance += $Payment->amount;
                    $customer->save();
                    Notification::make()
                        ->success()
                        ->title('Payment completed successfully')
                        ->body('The Payment has been completed successfully');
                    return redirect()->route("filament.admin.resources.Payments.index");
                }


                // $this->sendMessage($)

            } else {

                $Payment->update([
                    "status" => config("status.payment_status.failed"),
                    "payment_method" => $payment_method
                ]);
                Notification::make()
                    ->danger()
                    ->title('Payment failed')
                    ->body('The Payment has been failed');

                return redirect()->route("home");
            }
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th->getMessage());
            // return view("payments.finish");
            Notification::make()
                ->danger()
                ->title('Payment failed')
                ->body('The Payment has been failed');

            return redirect()->route("home");
        }
    }

    public function registerIPN(Request $request)
    {
        try {
            //add validation for url is registered
            $request->validate([
                'url' => 'required|string'
            ]);


            return Pesapal::pesapalRegisterIPN($request->url);
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th->getMessage());
            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }

    public function listIPNS(Request $request)
    {
        try {
            $data = Pesapal::listIPNS();
            return response()->json(['success' => true, 'message' => 'Success', 'response' => $data]);
        } catch (\Throwable $th) {

            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }

    public function cancelPayment(Request $request)
    {
        try {
            $payment_reference =  $request->input("payment_reference");
            Payment::where("reference", $payment_reference)->update([
                "status" => config("status.payment_status.canceled")
            ]);
            Notification::make()
                ->danger()
                ->title('You payment was canceled')
                ->body('The Payment has been canceled');
            return view("home");
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return view("home");
        }
    }

    public function completePayment(Request $request)
    {
        try {
            Log::info("===========The call back was called===================================");
            Log::info("Received Response Page");
            Log::info("============The call back was called==================================");
            // Get the parameters from the URL
            $orderTrackingId = $request->input('OrderTrackingId');
            $orderMerchantReference = $request->input('OrderMerchantReference');

            $orderNotificationType = $request->input('OrderNotificationType');
            Payment::where("reference", $orderMerchantReference)->update([
                "order_tracking_id" => $orderTrackingId,
                "orderNotificationType" => $orderNotificationType
            ]);

            $Payment = Payment::where("reference", $orderMerchantReference)->first();
            if (!$Payment) {
                return response()->json([
                    "status" => 500,
                    "message" => "Payment not found"
                ]);
            }
            $customer = Sponsor::find($Payment->sponsor_id);
            $data = Pesapal::PaymentStatus($orderTrackingId, $orderMerchantReference);
            // return $data;
            $payment_method = $data->message->payment_method;
            $name =  $customer->first_name . " " . $customer->last_name;

            Log::info("=========================================call back executed=============================================================================================================");
            Log::info("Received Response Page - Order Tracking ID: $orderTrackingId, Merchant Reference: $orderMerchantReference, Notification Type: $orderNotificationType");
            Log::info("==========================================call back executed============================================================================================================");

            if ($data->message->payment_status_description == config("status.payment_status.completed")) {
                $message = "Hello {$name} your payment of {$Payment->amount} has been successfully completed.Thank you";
                $this->sendMessage($customer->phone_number, $message);

                //check if the Payment is already completed
                if ($Payment->status == config("status.payment_status.completed")) {
                    return response()->json([
                        "status" => 200,
                        "message" => "Payment already completed"
                    ]);
                } else {

                    $Payment->update([
                        "status" => "completed",
                        "payment_method" => $payment_method
                    ]);
                    //update customer balance
                    $customer->account_balance += $Payment->amount;
                    $customer->save();
                    return response()->json([
                        "status" => 200,
                        "message" => "Payment completed"
                    ]);
                }
            } else {

                return response()->json([
                    "status" => 500,
                    "message" => "Payment failed"
                ]);
            }
        } catch (\Throwable $th) {

            Log::info("===========callback url==================================");
            Log::error($th->getMessage());
            Log::info("============call back url=================================");
            return response()->json(['success' => false, 'message' => $th->getMessage(), "status" => 500]);
        }
    }

    public function processOrder(Request $request)
    {
        try {
            //$amount, $phone, $callback
            $request->validate([
                'amount' => 'required|numeric',
                'phone_number' => 'required|string',
                'callback' => 'required|string',
                'payment_phone_number' => 'required|string',
                'cancel_url' => 'required|string'
            ]);
            $getCustomer =  User::where('phone', $request->phone_number)->first();
            if (!$getCustomer) {
                return response()->json(['success' => false, 'message' => 'Customer not found']);
            }
            $amount = $request->input('amount');
            $phone = $request->input('phone_number');
            $callback = $request->input('callback');
            $reference = Str::uuid();
            $description = $request->input('description') ?? "Depositing on my wallet";
            $first_name = $getCustomer->name;
            $last_name = $getCustomer->last_name;
            $email =  $getCustomer->email;
            $customer_id = $getCustomer->id;
            $cancel_url = $request->input('cancel_url');
            //add the payment reference to cancel url
            $cancel_url = $cancel_url . "?payment_reference=" . $reference;
            // return $amount;
            $data = Pesapal::orderProcess($reference, $amount, $phone, $description, $callback, $first_name, $last_name, $email, $customer_id, $cancel_url);
            return response()->json(['success' => true, 'message' => 'Order processed successfully', 'response' => $data]);
        } catch (\Throwable $th) {
            //throw $th;

            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }

    public function checkPaymentStatus(Request $request)
    {

        try {
            //code...
            $request->validate([
                'orderTrackingId' => 'required|string',
                'merchantReference' => 'required|string'
            ]);
            $orderTrackingId = $request->input('orderTrackingId');
            $merchantReference = $request->input('merchantReference');
            $data = Pesapal::PaymentStatus($orderTrackingId, $merchantReference);

            return response()->json(['success' => true, 'message' => 'Success', 'response' => $data->message->payment_status_description]);
        } catch (\Throwable $th) {
            //throw $th;

            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }

    public function testSendingMessages(Request $request)
    {
        try {
            //code...
            $message = "Testing sending messages";
            $phoneNumber = "+256759983853";
            $res = $this->sendMessage($phoneNumber, $message);

            return response()->json(['success' => true, 'message' => 'Success', 'response' => $res]);

            return "success";
        } catch (\Throwable $th) {
            //throw $th;

            return response()->json(['success' => false, 'message' => $th->getMessage()]);
        }
    }
}
