<?php
/**
 * Variables and functions needed for Audio Player
 *
 * Created 19 September 2019
 * Updated 22 October 2019
 *
 * Last update: coding standards; ML
 *
 * @author Maksim Lilchev
 */

//State the folder where audio files are placed starting from root
$folder = 'feature-images/audio';
//Path needed for URLs
$link_folder = $base_url . $folder;
//Path needed for the FilesystemIterator class
$iterator_folder = $server_path . $folder;
//Prepares a list of the files in the folder
$files_list = new FilesystemIterator($iterator_folder);
//Holds number of files discovered by the FilesystemIterator
$files_count = iterator_count($files_list);


//Formats the filenames to look appropriate for a web page
function prepareFileName($string)
{
    $noFileExtension = preg_replace('/\\.[^.\\s]{2,4}$/', '', $string);
    $noUnderscores = str_replace('_', ' ', $noFileExtension);
    if (strlen($noUnderscores) > 40) {
        $shortenedName = substr($noUnderscores, 0, 37) . '...';
        return $shortenedName;
    } else {
        return $noUnderscores;
    }
}
