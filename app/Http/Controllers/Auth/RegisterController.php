<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::REGISTER; //Se redirije a la página de registro luego de registrarse.

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [ //Aquí se realizan las validaciones del formulario de registro.

        ]);
    }
	
    public function register(Request $request) //Evita que se realice el Auto-Login después de registrarse.
    {
    	$this->validator($request->all())->validate();
    	
    	event(new Registered($user = $this->create($request->all())));
    	
    	return $this->registered($request, $user)
    	?: redirect($this->redirectPath());
    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Usuario
     */
    protected function create(array $data) //Crea el usuario.
    {
    	try {
    		session(['mensaje' => 'Exitoso']);
    		return Usuario::create([
    				'rut' => $data['rut'],
    				'nombre' => $data['nombre'],
    				'apellido' => $data['apellido'],
    				'email' => $data['email'],
    				'clave' => Hash::make($data['clave']),
    				'tipo' => $data['tipo'],
    		]);   
    	} catch (\Exception $ex) {
    		session(['mensaje' => 'Fallido']);
    		return view("auth.register");
    	}

    }
}
