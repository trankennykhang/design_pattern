<?php
namespace Kupman\Pattern\Structural\Facade\Video;

class Mp4Converter implements IConverter {

    public function convert(string $video) {
        output("Converting " . $video. " to MP4");

    }
}
?>