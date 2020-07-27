<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staffer;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmEmail;

class StafferController extends Controller
{
  public function registration(Request $req){
   $user = new Staffer;
   $em = $req->input('email');
   $today = date("Y-m-d");
   $pass = $req->input('password');
   $res=$user->where('email', '=', $em)->value('id');
   if ($res>0){
      $msg = "Пользователь с таким email уже зарегистрирован!";
      return response()->json(array('msg'=> $msg), 200);
  }else{
      $token = $em.$today;
      $hash = password_hash($token, PASSWORD_DEFAULT);
      $user->reg_hash = $hash;
      $user->email = $em;
      $user->password = password_hash($pass, PASSWORD_DEFAULT);
      $user->fname = $req->input('fname');
      $user->sname = $req->input('sname');
      $user->confirmed = 0;
      $user->reg_date = $today;
      $user->save();
      return response()->json(array('rdrct'=> 1), 200);
  }
}

  public function sendmail(Request $req) {
    $user = new Staffer;
    $toEmail = $req->input('toemail');
    $fname = $user->where('email', '=', $toEmail)->value('fname');
    $hash = $user->where('email', '=', $toEmail)->value('reg_hash');
    Mail::to($toEmail)->send(new ConfirmEmail($fname, $hash, $toEmail));
    return 'Сообщение отправлено на адрес '. $toEmail;
  }

  public function confmail(Request $req) {
    $user = new Staffer;
    $email = $req->input('email');
    $hash = $req->input('hash');
    $cmphash = $user->where('email', '=', $email)->value('reg_hash');
    if (strcmp($hash, $cmphash) == 0){
      $user->where('email', '=', $email)->update(['confirmed' => 1]);
      $user->where('email', '=', $email)->update(['reg_hash' => null]);
    }else{
      abort('404');
    }
  }
}
