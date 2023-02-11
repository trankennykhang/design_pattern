<?php
namespace Kupman\Pattern\Structural\Proxy\Video;

class YoutubeProxy implements IDownload {
    /** @var IDownload $service description */
    protected $service = null;
    
    public function __construct(IDownload $service) {
        $this->service = $service;
    }
    public function download(string $path)
    {
        output("do stuff before downloading");
        $this->service->download($path);
        output("do stuff after downloading");
    }
}
