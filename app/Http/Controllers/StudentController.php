<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller{

    public function test11(){
        return "controller test11";
    }

    public function session1(Request $request){
        //1.HTTP request session();
//        $request->session()->put('key1', 'value1');
//        $res = $request->session()->get('key1');
//        2.session()辅助函数
//        session()->put('key2' , 'value2');
//        echo session()->get('key3');
        //3.Session类 使用静态方法
//            存储数据到session
//        Session::put('key5','value5');
//            获取Session的值
//        echo Session::get('key5');
//             不存在则取默认值
//        dd(Session::get('key4',"default"));
//             用数组的方式
//            Session::put(['key6'=>'value6']);
//             把数据放到Session的数组中
//            Session::push('student', 'saan');
//            Session::push('student', 'imooc');
//         取出数据并删除
//        Session::pull('student', 'default');
//        var_dump(Session::get('student'));
//        //取出所有的值
//        dd(Session::all());
//
//         取值前判断是否存在  判断session中某个key是否存在
//        if(Session::has('key1')){
//            dd(Session::all());
//        }else{
//            echo '你们老大不在';
//        }
//        暂存数据，访问一次
        Session::flash('key-flash2','value-flash3');
    }

    public function session2(Request $request){
        //删除session中指定的key的值
//        Session::forget('key1');
        //获取session所有的数据
//        dd(Session::all());

        //清空session所有的信息
//        Session::flush();
        //       dd(Session::all());.


//        dd(Session::get('key-flash2'));
//        return "session2";

         return Session::get('message','暂无message数据');
//具体可以看这里：http://www.cnblogs.com/qhorse/p/4763169.html
    }
    public function response(){

        // 响应json
//        $data=[
//            'errCode' => 0,
//            'errMsg' => 'success',
//            'data' => 'sean'
//        ];
//        return response()->json($data);

        // 重定向
        //return redirect('session2');
        // 重定向 带数据
        //return redirect('session2')->with('message','我是快闪数据');
        // action()
//        return redirect()->action('StudentController@session2')
//            ->with('message','我是快闪数据action');
        // Route 跳转别名
       // return redirect()->route('sess');
        // 返回上一个地址
        return redirect()->back();
    }

    //活动的宣传页面
    public function activity0(){
        return "活动快要开始了，请期待";
    }

    public function activity1(){
        return "活动进行中，谢谢您的参与1";
    }

    public function activity2(){
        return "活动进行中，谢谢您的参与2";
    }
}