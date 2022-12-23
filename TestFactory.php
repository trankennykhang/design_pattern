<?php
class TestFactory {
    public static function run(){
        $dir = 'Pattern';
        $files = getFiles($dir);
        foreach ($files as $file) {
            if (strpos($file, 'Test.php') > 0) {
                $class = fileToClass($file);
                $test = new $class();
                $test->run();
            }
        }
        
    }    
}
?>