<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class Basecontroller extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function service(){
        return view('service');
    }

  
    public function spark_business_technology_service(){
        return view('spark_business');

    }

    public function graphic_design(){
        return view('graphic_design_service');
    }

    public function digital_marketing(){
      return view('digital_marketing_services');  
    }

    public function Mobile_app(){
        return view('Mobile_app_development');
    }

    public function ux_excellence(){
        return view('ui_and_ux_excellence');
    }

    public function digital_transformation(){
        return view('digital_transformation');
    }

    public function contact(){
        return view('contact_us');
    }
    
    public function term(){
        
        return view('terms_and_condition');
    }

    public function privacy(){
        return view('privacy_and_policy');
    }
    
    public function support_mainten(){
        return view('support_maintenance_services');
    }
    
   

    public function contactmail(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'required',
            'number' => 'required',
            'captcha'=> 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect('contact_us')
                ->withErrors($validator)
                ->withInput();
        }

        // mail::to('noreply@sparkbusinesstechnology.com.au')->send(new sendmail($request));
    //     $mail = $request->email;
    // $reply = $request->reply;
    // $user = User::where('id', $id)->first();
    // $to_name = $user->name;
    $to_email = '';
    $company = $request->company;
    $data = array('company' => $request->company, 'email' => $request->email, 'name' => $request->name, 'number'=>$request->number);
      try {
    Mail::send('emails.contact', $data, function ($company) use ($to_email) {
        $company->to($to_email)->from('')
            ->subject('');
    });

        return redirect('contact_us')->with('success', 'Email sent successfully!');
    } catch (\Exception $e) {
        Log::error('Mail sending failed: ' . $e->getMessage());
        return redirect('contact_us')->with('error', 'Failed to send email. Please try again later.');
    }

        ;
    }

    // public function reloadCaptcha(){
    //     return response()->json(['captcha' => captcha_img()]);
    // }
    
    public function newsletter_subscribe(Request $request){
        if($request->email){
            $to_email = '';
            
            $data = array('email' => $request->email);
//              try {
//             Mail::send('emails.newsletter', $data, function ($data) use ($to_email) {
//                 $data->to($to_email)->from('steele@sparkbusinesstechnology.com.au')
//                     ->subject('For come to iwebwiser site');
//             });
//         }
//             return redirect('spark_business')->with('success', 'You have successfully subscribed to the newsletter!');
//         } catch (\Exception $e) {
//             Log::error('Newsletter subscription mail sending failed: ' . $e->getMessage());
//             return redirect('spark_business')->with('error', 'Failed to subscribe. Please try again later.');
//         }
//     }

//     return redirect('spark_business');
// }
// }

 try {
            Mail::send('emails.newsletter', $data, function ($message) use ($to_email) {
                $message->to($to_email)
                    ->from('')
                    ->subject('');
            });

            return redirect('spark_business')->with('success', 'You have successfully subscribed to the newsletter!');
        } catch (\Exception $e) {
            Log::error('Newsletter subscription mail sending failed: ' . $e->getMessage());
            return redirect('spark_business')->with('error', 'Failed to subscribe. Please try again later.');
        }
    }

    return redirect('spark_business');
}
}
