<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function registerDriver(Request $request)
    { 

        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password'=>['required'],
            'phone' => ['required'],
            'profile' => ['nullable', 'image','mimes:jpeg,png,jpg,gif'],
            'description' => ['required'],
            'Num_immatriculation' => ['required'],
            'vehicle' => ['required'],
        ]);
       
        $data['role'] = 'Driver';
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $imageName = time() . '.' . $file->extension();
            $file->storeAs('public/img', $imageName);
            $data['profile'] = $imageName;
        }
        
        $data['password'] = bcrypt($data['password']);
         $user =  User::create($data);
           auth()->login($user);
          return redirect('/home');
     }



     public function registerPassanger(Request $request)
     { 
         
         $datad = $request->validate([
             'name' => ['required'],
             'email' => ['required'],
             'password'=>['required'],
             'profile' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif'],
         ]);
        
         $datad['role'] = 'Passanger';
         if ($request->hasFile('profile')) {
             $file = $request->file('profile');
             $imageName = time() . '.' . $file->extension();
             $file->storeAs('public/img', $imageName);
             $datad['profile'] = $imageName;
         }
         
         $datad['password'] = bcrypt($datad['password']);
         User::create($datad);
           return redirect('/home');
      }


      public function logout (){
        auth()->logout();
        return redirect('/user') ;
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'logemail' => 'required',
            'logpassword' => 'required'
        ]);
    
        if (auth()->attempt(['email' => $data['logemail'], 'password' => $data['logpassword']])) {
            $request->session()->regenerate();
    
            $user = auth()->user();
    
        
            if ($user->role === 'admin') {
                return redirect('/admin');
            } elseif ($user->role === 'Passanger') {
                return redirect('/passenger');
            } elseif ($user->role === 'Driver') {
                return redirect('/driver');
            }

        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }
    

     
}
