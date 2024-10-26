<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Gateway;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function __construct()
    {
        $general = GeneralSetting::first();
        $this->template = $general->theme == 1 ? 'frontend.' : "theme{$general->theme}.";
    }

    public function deposit()
    {
        $gateways = Gateway::where('status', 1)->latest()->get();

        $pageTitle = "Payment Methods";

        $type = 'deposit';

        return view($this->template."user.gateway.gateways", compact('gateways', 'pageTitle', 'type'));
    }

    //ajax-deposit-render
    public function ajaxDeposit(){
        $gateways = Gateway::where('status', 1)->latest()->get();

        $pageTitle = "Payment Methods";

        $type = 'deposit';

        return view($this->template."user.gateway.ajax.gateways", compact('gateways', 'pageTitle', 'type'))->render();
    }

    public function depositLog(Request $request)
    {
        $pageTitle = "Transactions";

        $transactions = Deposit::when($request->trx , function($item)use($request){ 
            $item->where('transaction_id', $request->trx);
        })->when($request->date, function($item) use($request) {
                $item->whereDate('created_at', $request->date);
            })->where('user_id', auth()->id())
            ->latest()->with('user')
            ->where('payment_status', '!=', 0)->get();
        return view($this->template.'user.deposit_log', compact('pageTitle', 'transactions'));
    }

    public function ajaxDepositLog(Request $request)
    {
        $pageTitle = "Transactions";

        $transactions = Deposit::when($request->trx , function($item)use($request){ 
            $item->where('transaction_id', $request->trx);
        })->when($request->date, function($item) use($request) {
                $item->whereDate('created_at', $request->date);
            })->where('user_id', auth()->id())
            ->latest()->with('user')
            ->where('payment_status', '!=', 0)->get();
        return view($this->template.'user.ajax.deposit_log', compact('pageTitle', 'transactions'))->render();
    }
    public function confirmDeposit(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'amount' => 'required|numeric',
        'transaction_id' => 'required|string',
    ]);

    // Process the form data
    $amount = $request->input('amount');
    $transactionId = $request->input('transaction_id');

    // Assuming you have a User model and $user variable available
    // Update user balance if needed
    $user = auth()->user();
    $user->balance += $amount;
    $user->save();

    // Create a new deposit record in the database
    Deposit::create([
        'user_id' => $user->id,
        'amount' => $amount,
        'transaction_id' => $transactionId,
        // Add other relevant fields if needed
    ]);

    // Redirect back or to a success page
    return redirect()->back()->with('success', 'Deposit confirmed successfully!');
}

}
