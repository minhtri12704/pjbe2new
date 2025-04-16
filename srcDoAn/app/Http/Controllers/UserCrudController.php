<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserCrudController extends Controller
{
    public function showUsers()
    {
        $users = User::paginate(5); // Mỗi trang 5 người dùng
        return view('crud_user.UserAdmin', compact('users'));
    }
    public function create()
    {
        return view('crud_user.UserAdminCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'account_type' => 'required',
            'user_id' => 'required|unique:users,user_id',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'address' => 'nullable',
            'phone' => 'nullable',
            'role' => 'required',
            'password' => 'required|min:6',
        ]);

        User::create($request->all());

        return redirect()->route('users.showUsers')->with('success', 'Người dùng đã được thêm thành công!');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('crud_user.UserAdminEdit', compact('user'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.showUsers')->with('success', 'Xoá người dùng thành công!');
    }
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('users.showUsers')->with('success', 'Cập nhật người dùng thành công!');
    }






    
}
