<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;//追記　課題15

class ProfileController extends Controller
{

    public function add()
{
    return view('admin.profile.create');
}

public function create()
{
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
public function create(Request $request)//課題１５

{
  $this->validate($request, Profile::$rules);

  $profile = new Profile;
  $form = $request->all();

unset($form['_token']);

 $profile->fill($form);
 $profile->save();

  return redirect('admin/profile/create');
}
