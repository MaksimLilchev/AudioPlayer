<?php
/**
 * Control file for displaying active videos on page
 *
 * Created 19 September 2019
 *
 * @author Maksim Lilchev
 */
?>

<audio controls id="audioPlayer">
    Sorry, you do not support this feature
</audio>
<ul id="playlist">
    <div class="column">
    <?php
        $i = 0;
        foreach ($files_list as $files_entry) {
            $song_link = "<a href='" . $link_folder . '/' . ($files_entry->getFilename()) . "'>" . prepareFileName($files_entry->getFilename()) . '</a></li>';
            if ($i == 0) {
                echo "<li class='current-song'>" . $song_link;
            } else {
                echo '<li>' . $song_link;
            }

        $i++;
        }
    ?>
    </div>
</ul>