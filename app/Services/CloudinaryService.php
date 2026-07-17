<?php

namespace App\Services;

use Cloudinary\Cloudinary;

class CloudinaryService
{
    protected $cloudinary; //creating cloudinary variable which we will use to access 
    // cloudinary features by connecting it to the main cloudinary sdk

    public function __construct() //- this funciton prepares all the services we need inside the cloudinary service
    {
        $this->cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('cloudinary.cloud_name'),
                'api_key' =>  config('cloudinary.api_key'),
                'api_secret' =>  config('cloudinary.api_secret'),
            ],
            
        ]);
    }

    public function upload($image){

        $result = $this->cloudinary
            ->uploadApi()
            ->upload($image->getRealPath());
        
        return $result['secure_url'];
    }

}