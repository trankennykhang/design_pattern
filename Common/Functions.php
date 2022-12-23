<?php
/**
 * Scan the directory to get files
 */
function getFiles(string $path, bool $includeSubDirectory = true, array $extensions = []): array
{
    $return = [];
    if ($dh = opendir($path)) {
        while (($file = readdir($dh)) !== false) {
            if (is_dir($path . '/' . $file) && $file != '.' && $file != '..' && $includeSubDirectory == true) {
                $return = array_merge(
                    $return,
                    getFiles($path . '/' .$file, $includeSubDirectory, $extensions)
                );
            } elseif ($file != '.' && $file != '..' && (empty($extensions) || in_array(filetype($path . '/' . $file), $extensions))) {
                $return[] = $path . '/' . $file;
            }
        }
        closedir($dh);
    }

    return $return;
}
function fileToClass(string $file): string
{
    return str_replace('/', '\\', 'Kupman' . '/' . substr($file, 0, strlen($file) - 4));
    
}
function newline(){
    print "\n";
}
function maskline(){
    print "******************************\n";
}
function output(string $text) : void{
    print $text;
    newline();
}
?>