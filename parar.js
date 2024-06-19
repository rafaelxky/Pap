
function toggleVideo(videoId) {
    const video = document.getElementById(videoId);
    if (video.paused) {
        video.play();
    } else {
        video.pause();
    }
}
