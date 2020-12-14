<?php


namespace App\Services;


use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadFileManager
{
    //private $directory = 'images/';
    private $directory;

    public function __construct(ParameterBagInterface $bag){
        $this->directory = $bag->get('images_directory');
    }

    public function uploadFile(UploadedFile $file){
        if (null == $this->directory){
            throw new IOException('The directory does not be "null"');
        }
        $name = time().$file->getClientOriginalName();
        return $file->move($this->directory,$name);
    }

}