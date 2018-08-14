<?php

namespace App\Http\Controllers\Admin;
use App\Http\Model\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;


require_once '../resources/org/code/Code.class.php';

class LoginController extends CommonController
{
    public function login()
    {
        if($input = Input::all()){
            $code = new \Code;
            $_code = $code->get();
            if(strtoupper($input['code'])!=$_code){
                return back()->with('msg','验证码错误');
            }
            //判断
            $admin = Admin::first();


//            dd(Crypt::decrypt($admin->admin_pass));


//            dd($input['admin_pass']);
            if($admin->admin_name != $input['admin_name'] || Crypt::decrypt($admin->admin_pass)!= $input['admin_pass']){
                return back()->with('msg','用户名或者密码错误！');
            }
            session(['admin'=>$admin]);

            return redirect('/admin');

        }else {


            return view('/admin/login');
        }
    }

    //退出
    public function quit()
    {
        session(['admin'=>null]);
        return redirect('admin/login');
    }


    //验证码
    public function code()
    {
        $code = new \Code;
        $code->make();
    }

    public function crypt()
    {
        $str = '123456';
        $str_p="eyJpdiI6InF6UlRNZGpuZ01SZm9uUG83alNmamc9PSIsInZhbHVlIjoiZUZFWWI1T29kTjFIS0p5YzVHRVwvaXc9PSIsIm1hYyI6IjViYjE4NzY2MGQyZTBmYjNlZTBkM2Q4MmQ0ZTU4MjMyZGQ2NDc1ZWRkOWFkMGVmOTJjNmI5ZmRmYTM4MzE1ZDgifQ==
";


        echo Crypt::encrypt($str);
        echo "<br/>";
        echo Crypt::decrypt($str_p);
    }


}
