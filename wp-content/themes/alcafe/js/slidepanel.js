(function($) {
$('#toggle').toggle( 
    function() {
        $('#popout').animate({ left: 0 }, 'slow', function() {
            $('#toggle').html('<img src="http://localhost/AlCafe/wp-content/themes/AlCafe/img/menu.svg" alt="close" />');
        });
    }, 
    function() {
        $('#popout').animate({ left: -250 }, 'slow', function() {
            $('#toggle').html('<img src="http://localhost/AlCafe/wp-content/themes/AlCafe/img/menu.svg" alt="close" />');
        });
    }
);
})(jQuery);