
<div style="background: #b3f0ff;" 
<?php
    $sliding_banner = element('sliding_banner.element');
    $notice = content('notice.content');
    $yourLinks = content('links.content');
?>


<div class="section wallet-card-section pt-1">
    <div id="sliderCarosel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner rounded-20px shadow-sm">

            <?php $i=0; ?>
            <?php $__empty_1 = true; $__currentLoopData = $sliding_banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php
                    $actives = '';
                ?>

                <?php if($i == 0): ?>
                    <?php $actives = 'active';?>
                <?php endif; ?>
                <?php $i=$i+1; ?>

                <div class="carousel-item <?php echo e($actives); ?>">
                    <img class="d-block w-100" src="<?php echo e(asset('asset/theme3/images/sliding_banner/'. $item->data->image)); ?>" alt="banner">
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
<div style="background: #b3f0ff;" 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#sliderCarosel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sliderCarosel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </a>
    </div>
</div>
<div style="background: #b3f0ff;" 
<div class="container">
    <!-- Scroling Notice -->
    
                    </div>  
                    <br>
  <marquee style="background: #66a3ff;
    width: 98%;
    color: red;
    margin-left: 5px;" behavior="scroll" direction="left">
   <?php echo e(@$notice->data->title); ?>

</marquee>
            <div style="background: #b3f0ff;"  
                    </div>
                </div>
               
           
      

    <!-- Icon Card --><div style="background: #b3f0ff;" 

    <div class="row">
        <a href="<?php echo e(route('user.usdt.index')); ?>" class="col-3 text-center">
            <div class="card-body p-0" style="height: 60px; width: 90px; margin:auto;">
                <div class="card-body p-0">
                   <span style="margin-left: -25%;"> <img class="p-1" src="/imag/photo1720886982-removebg-preview.png" alt="">
                </div>
            </div>
            <span class="small-font"><span class="text-black">  <br>Deposit</span>
        </a>
        <a href="<?php echo e(route('user.withdraw')); ?>" class="col-3 text-center">
            <div class="card-body p-0" style="height: 60px; width: 95px; margin:auto;">
                <div class="card-body p-0">
                   <span style="margin-left: -25%;"> <img class="p-1" src="/imag/photo1720886982-removebg-preview.png" alt="">
                </div>
            </div>
            <span class="small-font"><span class="text-black"><br>Withdraw</span>
        </a>
        <a href="<?php echo e(@$yourLinks->data->telegram); ?>" class="col-3 text-center">
            <div class="card-body p-0" style="height: 60px; width: 95px; margin:auto;">
                <div class="card-body p-0">
                   <span style="margin-left: -25%;"> <img class="p-1" src="/imag/photo1720886982-removebg-preview.png" alt="">
                </div>
            </div>
            <span class="small-font"><span class="text-black"><br>Help/Suport</span>
        </a>
        <a href="<?php echo e(route('pages', 'about')); ?>" class="col-3 text-center">
            <div class="card-body p-0" style="height: 60px; width: 95px; margin:auto;">
                <div class="card-body p-0">
                   <span style="margin-left: -25%;"> <img class="p-1" src="/imag/photo1720886982-removebg-preview.png" alt="">
                </div>
            </div>
            <span class="small-font"><span class="text-black"><br>About us</span><br>
        </a>
         <div class="new_invite " style="padding: 300px 35px;border-radius: 10px;background-size: 100% 100% !important; background:url('/imag/photo1720888825.jpeg')">
        </div>
          </div></div>
   </div>
                
                   
                        
    </div> </div>

                



<!-- mt-2 gaph -->



<?php /**PATH /home/crickett20cup/trading.cricket-t20cup.com/core/resources/views/theme3/ajax/home.blade.php ENDPATH**/ ?>