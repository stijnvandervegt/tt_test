<?php namespace TamTam\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\App;
use Instagram;
use Response;
use TamTam\Http\Controllers\Contracts\ApiControllerInterface;
use TamTam\Jobs\GetInstagramFeeds;

class InstagramController extends Controller implements ApiControllerInterface {

    public function fetchData()
    {

        try {
            $this->dispatch(App::make(GetInstagramFeeds::class));
            return Response::json(['success' => true]);
        } catch(Exception $e) {
            return $e->getMessage();
        }

    }

}