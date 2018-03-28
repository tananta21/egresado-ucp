<?php
/**
 * Created by PhpStorm.
 * User: Lenovo-PC
 * Date: 07/01/2018
 * Time: 03:32 AM
 */

namespace App\Helper;
use File;


class UtilHelper
{
    public function saveImageAtractivo($image){

        if($image != null){
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('dist/egresados');
            $image->move($destinationPath, $input['imagename']);
            $url_imagen = 'dist/egresados/'.time().'.'.$image->getClientOriginalExtension();
        }
        else{
            $url_imagen = "img/utils/default_image.png";
        }
        return $url_imagen;
    }

    public function deleteImgAtractivo($referencia){
        $destinationPath = public_path($referencia['url_imagen']);
        File::delete($destinationPath);
    }

    public function createSlug($name){
        $slug = str_slug(substr($name,0, 20).'-'.time());
        return $slug;
    }



}