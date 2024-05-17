<?php
namespace Codx\Comic\Controller;

use Codx\Ralph\Engine as View;
use \Codx\Comic\Request;
use Codx\Comic\Api;
use Codx\Comic\Auth;
use \Codx\Comic\Response;
use \Codx\Comic\Model\User;
use \Codx\Comic\Model\Tenant;
use Codx\Comic\Model\Contract;
use Codx\Comic\Model\Contact;
use Codx\Comic\Model\House;


class AuthController extends Controller{

    public function index()
    {
        // $credentials = Auth::user();
        // var_dump($credentials);
        $message = '';

        View::view('auth.login', compact('message'));
    }

    public function register(Request $request)
    {
        $step = array_key_exists('step', $request->all())?$request->step:1;
        return View::view('auth.register', compact('step', 'request'));
    }

    public function attempt(Request $request)
    {
        $data = $request;
        
        if(empty($request->username) && empty($request->password))
        {
            $message = "All fields are required";
           View::view('auth.login', compact('message'));
           return;
            
        }
        $user = User::where(

            'u_name', $data->username)
        ->where("pword", md5($data->password))
        ->get();

        if(count($user) < 1)
        {
            $user = Tenant::where(
                'u_name', $data->username)
            ->where("p_word", md5($data->password))
            ->get();
            if(count($user) > 0){
                $user[0]->role = 'tenant';
                $user = $user[0];
                $user->name = $user->fname . ' ' . $user->lname;
            }
            else
                $user = [];
            
        }else{
            $user = $user[0];
            $user->role = $user->role == 'Administrator'?'admin':'manager';
            $user->name = $user->u_name;
        }
        
        
        if(!$user == []){
            if(Auth::login($user))
                header('location: /home');
            else{
                $message = "Can't login at the moment, and unknown error occured";
                View::view('auth.login', compact('message'));
            }
        }else{
            $message = 'Invalid username or pssword';
            View::view('auth.login', compact('message'));
        }

        return;
    }

    public function password(){
        $this->needAuth();
        View::view('admin.password');
    }

    public function logout()
    {
        if(Auth::logout())
        {
            header('location: /');
        }else{
            header('location: /home');
        }
    }

    public function create(Request $request)
    {
        $step = $request->step;
        if($step == 1)
        {
            $tenant = Tenant::create([
                'fname'     => $request->FirstName,
                'lname'     =>$request->LastName,
                'programme' =>'not set',
                'reg_no'    =>'not set',
                'occupation'=>'not set',
                'p_no'      =>$request->pno1,
                'pno'       =>$request->pno2,
                'e_address' =>$request->email,
                'p_address' =>$request->postal,
                'city'      =>$request->city,
                'region'    =>$request->region,
                'u_name'    =>$request->uname,
                'p_word'    =>md5($request->password)
            ]);
            if($tenant){
                $request->step = 2;
                $_SESSION['tID'] = $tenant->tenant_id;
                header('location: /register/2/');
            }
        }
        if($step == 2)
        {
            // var_dump($request->all());
            $year  = date('Y')+1;
            $year  = $year.'-'.date('m-d');
           
            $contract = Contract::create(
                [
                    'tenant_id'     => $request->tID,
                    'house_id'     => $request->house,
                    'duration_month'=> $request->duration,
                    'total_rent'    => $request->price,
                    'terms'         => $request->term,
                    'rent_per_term' => $request->price,
                    'start_day'     => date('Y-m-m'),
                    'end_day'       => $year,
                    'date_contract_sign'=>date('Y-m-d H:i:s'),
                    'status'        => "Active"
                ]
            );
            if($contract)
            {
                $house = House::findOrFail($request->house);
                $house->status = 'Occupied';
                $house->save();
                $request->step = 3;
                $_SESSION['tID'] = $request->tID;
                header('location: /register/3/');
            }
        }
        if($step == 3)
        {
           

            $contact = Contact::create([
                'tenant_id'     => $request->tID,	
                'fname1'        => $request->fname1,	
                'lname1'        => $request->lname2,	
                'occupation1'   => $request->occu1,	
                'nature1'       => $request->nature1,	
                'pno1'          => $request->cpno1,	
                'pno2'          => $request->cpno2,	
                'e_address1'    => $request->email1,	
                'p_address1'    => $request->p_address1,	
                'city1'         => $request->city1,	
                'region1'       => $request->region1,	
                'fname2'        => $request->fname2,	
                'lname2'        => $request->lname2,	
                'occupation2'   => $request->occu2,	
                'nature2'       => $request->nature2,	
                'pno3'          => $request->cpno3,	
                'pno4'          => $request->cpno4,	
                'e_address2'    => $request->email2,	
                'p_address2'    => $request->p_address2,	
                'city2'         => $request->city2,	
                'region2'       => $request->region2
            ]);

            if($contact)
            {
                
                if(Auth::login($tenant))
                    header('location: /login');

            }
        }
        // return View::view('auth.register', compact('step', 'request'));
        
    }
}