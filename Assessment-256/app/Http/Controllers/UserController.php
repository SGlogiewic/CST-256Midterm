<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    // To obtain an instance of the current http request from a post
    public function index(Request $request)
    {
        //Create a UserModel with user information
        $UserData = new UserModel(request()->get('firstname'),  request()->get('lastname'),
            request()->get('age'), request()->get('email'));
        
        //Testing
        $nextID = 0;
        
        return redirect('newuser')->with('nextID', $nextID)
                                   ->with('firstName', request()->get('firstName'))
                                   ->with('lastName', request()->get('lastName'))
                                   ->with('age', request()->get('age'))
                                   ->with('email', request()->get('email'));
       
    }
    public function validateForm(Request $request)
    {
        //setup data validation rules for form
        $rules = ['firstname' => 'Required | Between: 4, 10 | Alpha',
            'lastname' => 'Required | Between: 4,10',
            'age' => 'Required | Between: 1,3', 
            'email' => 'Required | Between: 6,65'];
        //Run data validation rules
        $this->validate($request, $rules);
    }
    
}