<?php

namespace TamTam\Jobs;


use Response;
use TamTam\Events\FeedWasFetched;
use TamTam\Exceptions\EmptyResponse;
use TamTam\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use Vinkla\Instagram\InstagramManager;

class GetInstagramFeeds extends Job implements SelfHandling
{
    /**
     * @var InstagramManager
     */
    private $instagram;
    private $user = 'self';
    private $limit = 6;

    /**
     * Create a new job instance.
     * @param InstagramManager $instagram
     */
    public function __construct(InstagramManager $instagram)
    {

        $this->instagram = $instagram;
        $this->instagram->setAccessToken(config('instagram.connections.main.access_token'));

    }

    /**
     * Execute the job.
     *
     * @throws EmptyResponse
     */
    public function handle()
    {

        $response = $this->instagram->getUserMedia($this->user, $this->limit);

        if(empty($response))
            throw new EmptyResponse;

        if($response->meta->code !== 200)
            throw new \Exception($response->meta->error_message);

        event(new FeedWasFetched($response, 'instagram'));

        return $response;
    }
}
