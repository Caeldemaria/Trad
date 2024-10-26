
</div>
<script>
    console.log($('#currentPath').html());

    $('.Nav').removeClass('disabled');

    if( $('#currentPath').html() == 'Account' ){
        $('#NavAccount').addClass("disabled");
    }
    if( $('#currentPath').html() == 'Address' ){
        $('#NavAddress').addClass("disabled");
    }
    if( $('#currentPath').html() == 'Password' ){
        $('#NavPassword').addClass("disabled");
    }

</script>
<?php /**PATH /home/crickett20cup/trading.cricket-t20cup.com/core/resources/views/theme3/includes/user/account_nav.blade.php ENDPATH**/ ?>