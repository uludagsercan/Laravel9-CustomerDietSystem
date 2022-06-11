<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function setting(){
        $data= Setting::first();
        if($data===null){
            $data = new Setting();
            $data->title ='Project Title';
            $data->save();
            $data= Setting::first();
        }
       return view('admin.setting',['data'=>$data]);
    }

    public function settingUpdate(Request $request, $sid){

        $settingResult = Setting::find($sid);
        $settingResult->title = $request->title;
        $settingResult->description = $request->description;
        $settingResult->keywords = $request->keywords;
        $settingResult->company = $request->company;
        $settingResult->address = $request->address;
        $settingResult->phone = $request->phone;
        $settingResult->fax = $request->fax;
        $settingResult->email = $request->email;
        $settingResult->smtpserver = $request->smtpserver;
        $settingResult->smtpemail = $request->smtpemail;
        $settingResult->smptppassword = $request->smptppassword;
        $settingResult->smtpport = $request->smtpport;
        $settingResult->facebook = $request->facebook;
        $settingResult->instagram = $request->instagram;
        $settingResult->twitter = $request->twitter;
        $settingResult->linkedin = $request->linkedin;
        $settingResult->youtube = $request->youtube;
        if ($request->file('icon')){
            $settingResult->icon = $request->file('icon')->store('images');
        }
        $settingResult->about = $request->about;
        $settingResult->contact = $request->contact;
        $settingResult->references = $request->references;
        $settingResult->status = $request->status;
        $settingResult->save();
        return redirect('admin/setting');
        /*

         *   $table->string('title',150)->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('company',150)->nullable();
            $table->string('address',150)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('fax',20)->nullable();
            $table->string('email',75)->nullable();
            $table->string('smtpserver',75)->nullable();
            $table->string('smtpemail',75)->nullable();
            $table->string('smptppassword',15)->nullable();
            $table->integer('smtpport')->nullable();
            $table->string('facebook',100)->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('twitter',100)->nullable();
            $table->string('linkedin',100)->nullable();
            $table->string('youtube',100)->nullable();
            $table->string('icon',100)->nullable();
            $table->text('about')->nullable();
            $table->text('cantact')->nullable();
            $table->text('references')->nullable();
            $table->boolean('status')->default(false);
        */
    }
}
