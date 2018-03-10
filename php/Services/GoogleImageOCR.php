<?php

namespace Angela\Services;

use GuzzleHttp;
use Google\Cloud\Vision\VisionClient;

class GoogleImageOCR
{
    /**
     * @var string $projectId
     */
    private $projectId = 'main-analog-197615';

    /**
     * @var VisionClient $vision
     */
    private $vision;

    /**
     * VisionClient constructor.
     * @Inject
     * @param VisionClient $vision
     */
    public function __construct(VisionClient $vision)
    {
        $this->vision = $vision;
    }

    public function getText($imageUri)
    {
        $image = $this->vision->image(fopen($imageUri, 'r'), [
            'TEXT_DETECTION'
        ]);
        $text = $this->vision->annotate($image)->info();

        return $text;

    }
}
