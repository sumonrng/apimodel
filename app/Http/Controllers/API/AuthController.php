<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{
    public function index(){
        return view('index');
    }
    public function signup(Request $request)
    {
        $countryData = (array)json_decode(file_get_contents(resource_path('views/partials/country.json')));
        $countryCodes = implode(',', array_keys($countryData));
        $mobileCodes = implode(',',array_column($countryData,'dial_code'));
        $countries = implode(',',array_column($countryData,'country'));
        //dd($countries);
        $validate  = Validator::make(
            $request->all(),
            [
                'user'=>'required|unique:users,user',
                'sponsor_id'=>'required',
                'fullName'=>'required',
                'email'=>'required|email|unique:users,email',
                'password'=>'required',
                'confirm-password'=>'required|same:password'
            ]
        );
        if($validate->fails()){
            return $this->sendError('Validation Error',$validate->errors());
        }
        $user = User::create([
            'user'=>$request->user,
            'sponsor_id'=>$request->sponsor_id,
            'name'=>$request->fullName,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        $success['token'] = $user->createToken('RestApi')->plainTextToken;
        return $this->sendResponse($success,'Registration Successfully');
        // return response()->json([
        //     'status'=>true,
        //     'message'=>'Signup Successfully',
        //     'user'=>$user
        // ],200);
    }
    public function login(Request $request)
    {
        $validate  = Validator::make(
            $request->all(),
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
        );
        if($validate->fails()){
            return response()->json([
                'status'=>false,
                'message'=>'Authentication Fails',
                'errors'=>$validate->errors()->all()
            ],401);
        }
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('RestApi')->plainTextToken;
            $success['name'] = $user->name;
            $success['token_type'] = "bearer";
            // return response()->json($success,'Login Successfully');
            return $this->sendResponse($success,'Login Successfully');

            // return response()->json([
            //     'status'=>true,
            //     'message'=>'Login Successfully',
            //     'token'=>Auth::user()->createToken('Api Token')->plainTextToken,
            //     'token_type'=>'bearer'
            // ],200);
        }else{
            return $this->sendError("Unauthorized",['error'=>"Yor are unauthorized"]);
        }
    }
    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();
        // auth()->user()->tokens()->delete();
        return $this->sendResponse([],'Logout');
        // $user = $request->user();
        // $user->tokens()->delete();
        // return response()->json([
        //     'status'=>true,
        //     'user'=>$user,
        //     'message'=>'Logged out Successfully.'
        // ],200);
    }
}
