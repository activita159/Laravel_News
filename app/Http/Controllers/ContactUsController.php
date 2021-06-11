<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [           
            'g-recaptcha-response' => 'recaptcha',
        ]);

        if($validator->fails()) {
    
            // $errors = $validator->errors();
            return redirect('/#contact_us')
            ->withErrors($validator)
            ->withInput();
        }
    
        
            // ContactUs::create($request->all());

            $contectUs = ContactUs::create($request->all());
            $mailData =[
                'subject' => '收到信件了',
                'main' => '請前往官網後台查看信件',
            ];
            Mail::to('activita159@gmail.com')
            ->send(new OrderShipped($mailData));
            
            return 'success';
            // return redirect('/');
        
    }

    
    // check if validator fails
}
