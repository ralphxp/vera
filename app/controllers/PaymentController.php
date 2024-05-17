<?php
namespace Codx\Comic\Controller;

use Codx\Ralph\Engine as View;
use Codx\Comic\Model\Payment;
use Codx\Comic\Model\Tenant;
use Codx\Comic\Request;
use Codx\Comic\Auth;


class PaymentController extends Controller{
    public function __construct()
    {
        $this->needAuth();
    }

    public function index()
    {
        $user = Auth::user();
        $payments = Payment::get();
        if($user->role == 'admin')
            View::view('admin.payment.index', compact('payments'));
        else
            View::view('manager.payments', compact('payments'));
    }

    public function edit(Request $request)
    {
        $payment = Payment::findOrFail($request->id);
        $message = '';
        View::view('admin.payment.edit', compact('payment', 'message'));
    }

    public function update(Request $request)
    {
        $payment = Payment::findOrFail($request->id);
        $payment->pay_from = $request->from;
        $payment->pay_to = $request->to;
        $payment->save();
        $message = 'Payment terms updated successfully';
        View::view('admin.payment.edit', compact('payment', 'message'));
    }

    public function tenantPay()
    {
        // $message = '';
        return View::view('tenant.pay');
    }

    public function tenantPayStore(Request $request)
    {
        $user = Tenant::findOrFail(Auth::user()->tenant_id);
        if(empty($request->getQueryParams()['amount']))
        
        {
            $message = "Invalid Amount";
            return View::view('tenant.pay', compact('message'));
        }
        if($user->payment)
        {
            $user->payment->amount = $user->payment->amount + intval($request->amount);
            $user->payment->save();
        }else{
            Payment::create([
                'tenant_id' => $user->tenant_id,
                'ref_no'    => rand(100000000, 10000000000),
                'amount'    => $request->amount,
                'pay_from'  => $request->from,
                'pay_to'    => $request->to
            ]);
            // echo json_encode($user->payment);
        }
        $message = "You have succesfully paid <b>NGN".number_format($request->amount)."</b>, Your out-standing debt remain:<b> NGN".number_format($user->contract->total_rent - $user->payment->amount)."</b>";
        return View::view('tenant.pay', compact('message'));
    }
}