<?php

namespace Angela\Services;

use GuzzleHttp;

class GoogleImageOCR
{
    private $key = 'AIzaSyCdIguvc3iy00h3PdLefDHXK2kMnZARLAI';
    private $client;

    public function __construct(GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function getText()
    {
        $uri = 'https://vision.googleapis.com/v1/images:annotate?key=' . $this->key;
        $data = [
            GuzzleHttp\RequestOptions::HEADERS => [
                'Authorization' => 'Bearer ya29.c.El96BecDtkqCU_7g5ynpF46W-rQjSPZOpkNY9ZRMEVZExNRIT9fnzcslf8Zavpgkps1qfppOenLFl2liY2phAjVBIIub5ZvglBdiIQ9pExLfXjQjkEgRqCr7oi9kSv7LFw'
            ],
            GuzzleHttp\RequestOptions::JSON => $this->getTextBody('./tag.jpg')
        ];
        //        return $data;
        $response = $this->client->post($uri, $data);

        return $response->getBody()->getContents();
    }

    private function base64Image($imageUrl)
    {
        $im = file_get_contents($imageUrl);
        $imdata = base64_encode($im);

        return $imdata;
    }

    private function getTextBody(string $image)
    {
        return [
            "requests" => [
                [
                    "image" => ["content" => $this->base64Image($image)],
                    "features" => [
                        ["type" => "TEXT_DETECTION"]
                    ]
                ]
            ]
        ];
    }
}
