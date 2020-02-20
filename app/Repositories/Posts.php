<?php


namespace App\Repositories;
use GuzzleHttp\Client;

//use Facade\FlareClient\Http\Client;

class Posts {
    
    //protected $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function all()
    {    
        return $this->getUrl("posts");
    }

    public function find($id)
    {
        return $this->getUrl("posts/{$id}");
    }

    protected function getUrl($url){
        $response = $this->client->request('GET', $url);
        return json_decode( $response->getBody()->getContents());


    }
}


