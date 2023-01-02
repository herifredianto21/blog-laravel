<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthorLoginForm extends Component
{
    public $login_id, $password;
    public $returnUrl;

    public function mount(){
        $this->returnUrl = request()->returnUrl;
    }

    public function LoginHandler(){

        $fieldType = filter_var($this->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if($fieldType == 'email'){
            $this->validate([
                'login_id'=>'required|email|exists:users,email',
                'password'=>'required|min:5'
            ],[
                'login_id.required'=>'Enter your email address',
                'login_id.email'=>'Invalid email address',
                'login_id.exists'=>'Email is not registered',
                'password.required'=>'Password is required'
            ]);
        }else{
            $this->validate([
                    'login_id'=>'required|exists:users,username',
                    'password'=>'required|min:5'
                ],[
                    'login_id.required'=>'Enter emain or username is required',
                    'login_id.exists'=>'Username is not registered',
                    'password.required'=>'Password is required'
                ]);
        }

        $creds = array($fieldType=>$this->login_id,'password'=>$this->password);

        if( Auth::guard('web')->attempt($creds) ){
            $checkUser = DB::table('users')->where($fieldType, $this->login_id)->first();
            if($checkUser->blocked == 1){
                Auth::guard('web')->logout();
                return redirect()->route('author.login')->with('fail','Your account has been blocked');
            }else{
                if( $this->returnUrl != null){
                    return redirect()->to($this->returnUrl);
                }else{
                    return redirect()->route('author.home');
                }
            }
        }else{
            session()->flash('fail', 'Incorrect email or password');
        }
        
        // $this->validate([
        //     'email'=>'required|email|exists:users,email',
        //     'password'=>'required|min:5'
        // ],[
        //     'email.required'=>'Enter your email address',
        //     'email.email'=>'Invalid email address',
        //     'email.exists'=>'This email is not registered in database',
        //     'password.required'=>'Password is required'
        // ]);

        // $screds = array('email'=>$this->email, 'password'=>$this->password);

        // if( Auth::guard('web')->attempt($screds) ){
        //     $checkUser = DB::table('users')->where('email', $this->email)->first();
        //     if($checkUser->blocked == 1){
        //         Auth::guard('web')->logout();
        //         return redirect()->route('author.login')->with('fail','Your account had been blocked.');
        //     }else{
        //         return redirect()->route('author.home');
        //     }

        // }else{
        //     session()->flash('fail', 'Incorrect email or password');
        // }
    }

    // public function LoginHandler()
    // {
    //     $this->validate([
    //             'email'=>'required|email|exists:users,email',
    //             'password'=>'required|min:5'
    //         ],[
    //             'email.required'=>'Entrez votre adresse mail',
    //             'email.email'=>'Adresse mail invalide',
    //             'email.exists'=>'Cette adresse mail existe déjà dans le système',
    //             'password.required'=>'Mot de passe Obligatoire'
    //             /* 'password.min'=>"Le minimum requis pour le Mot de passe n'est pas atteint !", */
    //         ]
    //     );

    //     $creds = ['email'=>$this->email, 'password'=>$this->password];
    //     if (Auth::guard('web')->attempt($creds)) {
    //         $checkUser = User::where('email', $this->email)->first();
    //         //User::where('email', $this->email)->first();
    //         if ($checkUser->blocked==1) {
    //             Auth::guard('web')->logout();
    //             return redirect()->route('author.login')->with('fail', 'Votre Compte a étè bloqué');
    //         } 
    //         else {
    //             return redirect()->route('author.home');
    //         }
    //     }
    //     else {
    //         session()->flash('fail', 'Email ou Mot de passe incorrect');
    //     }
    // }

    public function render()
    {
        return view('livewire.author-login-form');
    }
}
