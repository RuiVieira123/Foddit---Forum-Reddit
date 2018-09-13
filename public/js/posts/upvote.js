$(document).ready(function () {
    var btn_upvote = $('');
    var btn_downvote = $('');
    var upvotes_count = $('');


    btn_upvote.click(function () {
        upvotes_count.val(upvotes_count.val + 1);
    });
    btn_downvote.click(function () {
        upvotes_count.val(upvotes_count.val - 1);
    });

});