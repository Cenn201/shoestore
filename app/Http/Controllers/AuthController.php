<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Auth.LoginSignin');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'logemail' => 'required',
            'logpass' => 'required',
        ]);

        if ($validator->fails()) {
            // Xác thực thất bại vì dữ liệu không hợp lệ
            return back()->withErrors($validator)->withInput();
        }

        $credentials = [
            'email' => $request->input('logemail'),
            'password' => $request->input('logpass'),
        ];

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            if (Auth::user()->decentralization == 'customer') {
                // Xử lý cho tài khoản khách hàng
                return redirect()->intended('customer/Home');
            } else {
                // Xử lý cho tài khoản quản trị viên
                return redirect()->intended('/');
            }
            
        }

        // Đăng nhập thất bại
        return back()->withErrors([
            'logpass' => 'Email or password is incorrect!!',
        ])->withInput();
    }
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'signname' => 'required|max:50|min:2',
            'signemail' => 'required|unique:users,email',
            'signpass' => 'required|max:20|min:2',
        ]);

        if ($validator->fails()) {
            session(['checked' => "checked"]);
            return redirect()->back()->withErrors([
                'signpass' => 'Email already exists!!',
            ])->withInput();
        } else {
            // Xử lý đăng ký thành công
            // ...
            $user = User::where('email', '=', $request->input('signemail'))->first();
            $data['username'] = $request->input('signname');
            $data['email'] = $request->input('signemail');
            $data['password'] = $request->input('signpass');
            $data['decentralization'] = 'customer';
            $this->create($data);
            session(['checked' => null]);
            // var_dump($this->create($data));die();
            return redirect('/login')->with('success', "Sign Up Success");
        }
    }
    public function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'decentralization' => $data['decentralization']
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/Login');
    }
}
