<?php

namespace App\Tour\Eloquent;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Tour\Repositories\ImageRepository;
use App\Tour\Entities\Image;
use App\Validators\ImageValidator;

/**
 * Class ImageRepositoryEloquent
 * @package namespace App\Tour\Eloquent;
 */
class ImageRepositoryEloquent extends BaseRepository implements ImageRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Image::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ImageValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * Set S3 as the storage disk
     * @return mixed
     */
    public function storageDisk()
    {
        $s3 = Storage::disk('public');
        return $s3;
    }

    /**
     * Upload photo
     * @param $formdata
     * @return mixed
     */
    public function upload($formdata)
    {
        //dd($formdata);
        $file = $formdata['file'];
        $imageExt = $file->getClientOriginalExtension();
        $nameWithExt = uniqid() .time(). '.' . $imageExt;
        $iconSize = $this->iconSize($file, $nameWithExt);
        $cardSize = $this->cardSize($file, $nameWithExt);
        $fullSize = $this->fullSize($file, $nameWithExt);

        //todo  add Delete Method
        $artwork = Image::create([
            'icon_size_path' =>$iconSize,
            'card_size_path' =>$cardSize,
            'full_size_path' =>$fullSize,
            'owner_id' => $formdata['hotel_id']
        ]);
        return $artwork;
    }



    /**
     * Save Icon size of original Image
     * @param $file
     * @param $nameWithExt
     * @return string
     */
    public function iconSize($file, $nameWithExt)
    {
        $manager = new ImageManager();
        $image = $manager->make($file)->resize(300, 200);
        $icon = $image->stream();
        $stored = $this->storageDisk()->put(config('tourism.iconSize') . $nameWithExt, $icon->__toString(),'public');
        $path =config('tourism.iconSize').$nameWithExt;
        return $path;

    }

    /**
     * Save medium or card size of original Image
     * @param $file
     * @param $nameWithExt
     * @return string
     */
    public function cardSize($file, $nameWithExt)
    {
        $manager = new ImageManager();
        $image = $manager->make($file)->resize(640, 540);
        $card = $image->stream();
       $stored = $this->storageDisk()->put(config('tourism.cardSize') . $nameWithExt, $card->__toString(),'public');
        $path = config('tourism.cardSize').$nameWithExt;
        return $path;

    }

    /**
     * Save medium or card size of original Image
     * @param $file
     * @param $nameWithExt
     * @return string
     */
    public function fullSize($file, $nameWithExt)
    {
        $manager = new ImageManager();
        $image = $manager->make($file)->resize(1000, 800);
        $card = $image->stream();
        $stored =$this->storageDisk()->put(config('tourism.fullSize') . $nameWithExt, $card->__toString(),'public');
        $path = config('tourism.fullSize').$nameWithExt;
        return $path;

    }
}
