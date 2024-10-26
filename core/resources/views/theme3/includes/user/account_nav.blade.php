
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
