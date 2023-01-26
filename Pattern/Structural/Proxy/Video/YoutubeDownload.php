<?php
namespace Kupman\Pattern\Structural\Proxy\Video;

class YoutubeDownload implements IDownload {

    public function download(string $path)
    {
        output("Download Youtube: {$path}");
    }
}
?>