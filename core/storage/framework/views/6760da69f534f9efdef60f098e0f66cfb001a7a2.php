<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">

        <a href="<?php echo e(route('user.profile')); ?>" class="headerButton">
            <!-- Image Upload -->
            <div> <img src="<?php echo e(@Auth::user()->image ? getFile('user', @Auth::user()->image) : '/imag/logo (2).png'); ?>" style="height:30px;border-radius:50px;"></div>
            <a href="<?php echo e(route('home')); ?>">
                <div class="pageTitle">
                    
                    <img src="/imag/photo1720898608-removebg-preview.png" style="height:25px;">
            </a>

    </div>



</div>
</a>
<div class="right">
    <a href="javascript:void(0)" class="headerButton transactionLogBtn">
        <ion-icon class="icon" name="notifications"></ion-icon>
    </a>

    <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
        <ion-icon name="menu-outline"></ion-icon>
    </a>

</div>
</div>
<!-- * App Header -->
<?php /**PATH /home/crickett20cup/trading.cricket-t20cup.com/core/resources/views/theme3/includes/user/top_nav.blade.php ENDPATH**/ ?>