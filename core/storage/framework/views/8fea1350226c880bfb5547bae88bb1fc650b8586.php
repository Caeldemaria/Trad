<style>
    .item .white {
        filter: brightness(0) saturate(100%) invert(75%) sepia(8%) saturate(259%) hue-rotate(172deg) brightness(95%) contrast(87%);
    }
    .item .active {
        filter: brightness(0) saturate(100%) invert(100%) sepia(30%) saturate(0%) hue-rotate(305deg) brightness(101%) contrast(103%) !important;
    }
    .item .hover{
        filter: brightness(0) saturate(100%) invert(100%) sepia(30%) saturate(0%) hue-rotate(305deg) brightness(101%) contrast(103%) !important;
    }
    
    /* .item .active {
        filter: brightness(0) saturate(100%) invert(9%) sepia(73%) saturate(6836%) hue-rotate(356deg) brightness(96%) contrast(105%);
    } */
</style>

<!-- App Bottom Menu --><div style="background: #525d7a;" 
<div class="appBottomMenu">
    <a href="<?php echo e(route('home')); ?>" class="item customLink">
        <div class="col">
            <img class="white <?php echo e(Route::is('home') ? 'active' : ''); ?>" height="20px" width="20px" src="/imag/home (2).png" alt="">
            <strong>Home</strong>
        </div>
    </a>
   <a href="<?php echo e(route('user.team', 1)); ?>" class="item customLink">
        <div class="col">
            <img class="white <?php echo e(Route::is('user.reword') ? 'active' : ''); ?> <?php echo e(Route::is('user.reword') ? 'active' : ''); ?>" height="20px" width="20px" src="/imag/bar-chart_119401.png" alt="">
            <strong>Refer</strong>
        </div>
    </a>
    <a href="<?php echo e(route('user.mining')); ?>" class="item customLink">
        <div class="col">
            <img class="white <?php echo e(Route::is('user.mining') ? 'active' : ''); ?>" height="20px" width="20px" src="/imag/coins.png" alt="">
            <strong>Trading</strong>
        </div>
    </a>
    
    
    <a href="/transaction/log" class="item customLink">
        <div class="col">
            <img class="white <?php echo e(Route::is('user.withdraw') ? 'active' : ''); ?>" height="20px" width="20px" src="/imag/document-signed.png" alt="">
            <strong>History</strong>
        </div>
    </a>
    <?php if(auth()->guard()->guest()): ?>
    <a href="<?php echo e(route('user.login')); ?>" class="item customLink">
        <div class="col">
            <img class="white" height="20px" width="20px" src="/imag/wallet.png" alt="">
            <strong>Login</strong>
        </div>
    </a>
    <?php endif; ?>
    <?php if(auth()->guard()->check()): ?>
    <a href="<?php echo e(route('user.dashboard')); ?>" class="item customLink">
        <div class="col">
            <img class="white <?php echo e(Route::is('user.dashboard') ? 'active' : ''); ?>" height="20px" width="20px" src="/imag/wallet.png" alt="">
            <strong>Wallet</strong>
        </div>
    </a>
    <?php endif; ?>
</div>
<!-- * App Bottom Menu -->

<?php $__env->startPush('script'); ?>

    <script>

        $(document).on('click', '.customLink', function (e) {
            e.preventDefault();
            let hrefLink = $(this).attr('href');
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            setTimeout(() => {
                GoTo(hrefLink)
            }, 100);
        });



        // Home view
        // $(document).on('click', '.homeViewBtn', function (e) {
        //     e.preventDefault();
        //     $('#preLoadCustom').removeClass('d-none'); // loader-on
        //     $.ajax({
        //         type: "GET",
        //         url: "<?php echo e(route('ajax.home')); ?>",
        //         success: function (res) {
        //             // console.log(res);
        //             $('#appCapsule').html(res);
        //             $('#preLoadCustom').addClass('d-none'); // loader-off
        //             customPush("<?php echo e(route('home')); ?>") // url-change
        //         },
        //         error: function (err) {
        //             $('#preLoadCustom').addClass('d-none'); // loader-off
        //             let error = err.responseJSON;
        //             console.log(error);
        //         }
        //     });
        // });



        // Home view
        // $(document).on('click', '.homeViewBtn', function (e) {
        //     e.preventDefault();
        //     $('#preLoadCustom').removeClass('d-none'); // loader-on
        //     setTimeout(() => {
        //         GoTo("<?php echo e(route('home')); ?>")
        //     }, 100);
        // });

        // user dashboard view
        $(document).on('click', '.userDashboardBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.dashboard')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.dashboard')); ?>") // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });


        // investment plan view
        $(document).on('click', '.investmentPlanBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.investmentplan')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.investmentplan')); ?>") // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });

        // invest all view
        $(document).on('click', '.investAllBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.invest.all')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.invest.all')); ?>") // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });

        // profile setting view
        $(document).on('click', '.profileSettingBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.profile')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.profile')); ?>"); // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });

        // address setting view
        $(document).on('click', '.addressSettingBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.address')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.address')); ?>"); // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });

        // password change view
        $(document).on('click', '.passwordChangeBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.change.password')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.change.password')); ?>"); // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });

        // reffer friend view
        $(document).on('click', '.refferFriendBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.reffer.friend')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.reffer.friend')); ?>"); // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });

        // deposit log view
        $(document).on('click', '.depositLogBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.deposit.log')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.deposit.log')); ?>"); // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });

        // withdraw log view
        $(document).on('click', '.withdrawLogBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.withdraw.all')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.withdraw.all')); ?>"); // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });

        // invest log view
        $(document).on('click', '.investLogBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.invest.log')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.invest.log')); ?>"); // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });

        // interest log view
        $(document).on('click', '.interestLogBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.interest.log')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.interest.log')); ?>"); // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });

        // transaction log view
        $(document).on('click', '.transactionLogBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.transaction.log')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.transaction.log')); ?>"); // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });

        // commision log view
        $(document).on('click', '.commisionLogBtn', function (e) {
            e.preventDefault();
            $('#preLoadCustom').removeClass('d-none'); // loader-on
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('user.ajax.commision')); ?>",
                success: function (res) {
                    // console.log(res);
                    $('#appCapsule').html(res);
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    customPush("<?php echo e(route('user.commision')); ?>"); // url-change
                },
                error: function (err) {
                    $('#preLoadCustom').addClass('d-none'); // loader-off
                    let error = err.responseJSON;
                    console.log(error);
                    if (error.message === "Unauthenticated.") {
                        notifyMsg("You need to Login At first!", 'error');
                        setTimeout(() => {
                            GoTo("<?php echo e(route('user.login')); ?>")
                        }, 100);
                    }else {
                        notifyMsg('Something went wrong!', 'error');
                    }
                }
            });
        });
    </script>

<?php $__env->stopPush(); ?>
<?php /**PATH /home/crickett20cup/trading.cricket-t20cup.com/core/resources/views/theme3/includes/user/bottom_nav.blade.php ENDPATH**/ ?>