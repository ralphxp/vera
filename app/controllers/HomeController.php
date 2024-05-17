<?php
namespace Codx\Comic\Controller;

use Codx\Ralph\Engine as View;
use Codx\Comic\Model\User;
use Codx\Comic\Model\House;
use Codx\Comic\Model\Tenant;
use Codx\Comic\Model\Contract;
use Codx\Comic\Model\Payment;
use Codx\Comic\Auth;

class HomeController extends Controller{

    public function index()
    {
        return View::view('index');
    }

    public function dashboard()
    {
        $this->needAuth();
        $user = Auth::user();
        if($user->role == 'admin' || $user->role == 'manager'){
            $income = 0;
            $no_houses = House::count();
            $no_tenants = Tenant::count();
            $contracts = Contract::where("status", "active")->count();
            $payments = Payment::get();
        

            foreach($payments as $payment)
            {
                $income += floatval($payment->amount);
            }
            if($user->role == 'manager')
            {
                $tenants = Tenant::with('contract')->get();
                return View::view('manager.dashboard', compact('tenants'));
            }
            return View::view('admin.dashboard', compact(
                'no_houses', 
                'no_tenants', 
                'contracts',
                'income'
            ));
        }else if($user->role == 'tenant')
        {
            $user = Tenant::findOrFail($user->tenant_id);
            if(!$user->payment)
            {
                return View::view('tenant.pay');
            }
            return View::view('tenant.dashboard', compact('user'));
        }
    }


}