<?php


namespace App\Tour\Composers;


use App\Tour\Repositories\AttractionRepository;
use Illuminate\Contracts\View\View;

class DestinationPageComposer
{
    protected $attractions;

    /**
     * DestinationPageComposer constructor.
     * @param AttractionRepository $attractions
     */
    public function __construct(AttractionRepository $attractions)
    {
        $this->attractions = $attractions;
    }


    public function compose(View $view)
    {
       $view->with('destinations',$this->attractions->paginate());
    }

}