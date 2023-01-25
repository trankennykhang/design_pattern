<?php
namespace Kupman\Pattern\Structural\Facade\Video;

class VideoConverter {

    public function convert(string $video, string $format): bool {
        $converter = null;
        if ($format == "mp4") {
            $converter = new Mp4Converter();
        }
        $converter->convert($video);
        return true;
    }
}
?>