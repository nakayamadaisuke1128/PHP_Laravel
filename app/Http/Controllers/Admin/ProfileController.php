<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller


//4.【応用】 artisanを使って、Admin/ProfileControllerを作成しましょう。
    //php artisan make:controller Admin/ProfileController

//5.【応用】 Admin/ProfileControllerに、以下のadd, create, edit, update それぞれのActionを追加してみましょう。
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create(Request $request)
    {
        return redirect('admin/profile/create');
        
        $validatedData = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'hobby' => 'required',
            'introduction' => 'required',
        ]);

        $profile = new Profile();
        $profile->name = $validatedData['name'];
        $profile->gender = $validatedData['gender'];
        $profile->hobby = $validatedData['hobby'];
        $profile->introduction = $validatedData['introduction'];
        
        $profile->save();
        return redirect('admin/profile/create');
    }
    public function edit()
    {
        return view('admin.profile.edit');
    }
    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
