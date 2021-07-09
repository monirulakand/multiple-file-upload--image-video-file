<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideoModel;

class UploadController extends Controller
{
    function onUpload(Request $request){
      $VideoPath=$request->file('FileKey')->store('MyFile');

        $VideoName=(explode('/',$VideoPath))[1];

        $host=$_SERVER['HTTP_HOST'];

        $location="http://".$host."/storage/".$VideoName;

        $result=VideoModel::insert(['location'=>$location]);

      return $result;
    }
}
