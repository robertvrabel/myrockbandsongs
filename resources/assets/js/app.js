$(document).ready(function() {
    $(document).foundation();

    $('.add-artist').click(function() {
        $('.add-artist-select').html('<input type="text" name="new-artist" value="">');
    });

    $('.add-album').click(function() {
        $('.add-album-select').html('<input type="text" name="new-album" value="">');
    });

    $('.add-pack').click(function() {
        $('.add-pack-select').html('<input type="text" name="new-pack" value="">');
    });
});