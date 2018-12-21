<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;
use App\Post;

class mailController extends Controller
{
   public function getContact()
   {
       return view('contactform');

   }
public function postContact(Request $request){
    $validator = Validator::make($request->all(), [
     'email'=>'requred|email',
     'subject'=>'required|min:3',
     'message'=>'required|min:10'
    ]);

$data=array(
    'email'=>$request->email,
    'subject'=>$request->subject,
    'bodymessage'=>$request->message
);
Mail::send('email.mail', $data, function ($message) use($data){
    $message->from($data['email']);
    $message->subject($data['subject']);
    $message->to('pradeep11som@gmail.com');

});

}


     public function send(Request $request)
     {
        $data=array(
            'email'=>$request->email,
            'subject'=>$request->subject,
            'bodymessage'=>$request->message1
        );


     Mail::send(['text'=>'email.mail'],$data,function ($message) use($data) {
        $message->to('pradeep89jai@gmail.com', 'Pradeep')->subject('Test Email');
        $message->from('pradeep11som@gmail.com', 'pradeep');

     });
}

}
