//Function that changes src for the audio player element and the class for styling of the playlist elements
function audioPlayer() {
    var audioElement = $('#audioPlayer')[0];

    audioElement.src = $('#playlist li a')[0];
    $('#playlist li a').click(function (e) {
        e.preventDefault();
        audioElement.src = this;
        audioElement.play();
        $('#playlist li').removeClass('current-song');
        $(this).parent().addClass('current-song');
    });
}