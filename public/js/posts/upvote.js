$(document).ready(function () {
    var upvote_button = $('.upvote');

    upvote_button.on('click', function(e) {
        var form = $(this).closest('form');
        form.attr("action", "/posts/upvoted/");
        form.submit();
    });
});