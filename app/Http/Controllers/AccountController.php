<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 3;
        $list_obj = Account::orderBy('created_at', 'DESC')->paginate($limit);
        return view('admin.account.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.account.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account = new Account();
        $account->username = $request->get('username');
        $account->password = $request->get('password');
        $account->images = $request->get('images');
        $account->save();
        return redirect('/admin/account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $obj =Account::find($id);
        if ($obj == null){
//            return view('error.404');
            alert("k tim thay");
        }
        return view('admin.account.show')->with('obj',$obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        //
        $obj = Account::find($id);
        if ($obj == null || $obj->status != 1) {
            return view('error.404');
        }
        return view('admin.account.edit')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $obj = Account::find($id);
//        $validate_unique = '';
//        if($obj->username != $request->get('username')){
//            $validate_unique = '|unique:account';
//        }
//        $request->validate([
//            'username' => 'required|max:50|min:10' . $validate_unique,
//            'images' => 'required',
//            'password' => 'required'
//        ], [
//            'username.required' => 'Vui lòng nhập tê n danh mục.',
//            'username.min' => 'Tên quá ngắn, vui lòng nhập ít nhất 10 ký tự.',
//            'username.max' => 'Tên quá dài, vui lòng nhập nhiều nhất 50 ký tự.',
////            'name.unique' => 'Tên đã được sử dụng, vui lòng chọn tên khác.',
////            'description.required' => 'Vui lòng nhập mô tả cho danh mục',
////            'thumbnail.required' => 'Vui lòng nhập ảnh đại diện cho danh mục',
//        ]);

        if ($obj == null || $obj->status != 1) {
            return view('error.404');
        }
        $obj->username = $request->get('username');
        $obj->images = $request->get('images');
        $obj->password = $request->get('password');
        $obj->save();
//        Session::flash('message', 'Sửa thành công');
//        Session::flash('message-class', 'alert-success');
        return redirect('/admin/account');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $obj = Account::find($id)->delete();
        if ($obj == null) {
            return response()->json(['message' => 'Acc không tồn tại hoặc đã bị xoá!'], 404);
        }else{

        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Đã xoá thông tin danh mục'], 200);
//        redirect("/admin/account");
    }
}
