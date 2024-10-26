<div style="background: #b3f0ff;" class="img_hader">

<div style="background: #b3f0ff;" class="img_hader">
<?php $__env->startSection('content2'); ?>
<div style="background: #b3f0ff;" class="img_hader">
    <div style="background: #ffffff;">
        <div class="card">
            <div style="background: #000000;" class="img_hader">
                <!-- Stats -->
                <div class="section">
                    <br>
                    <div class="text_canter_man">
                        <h3 style="text-align: center;font-weight: bold;font-size: 25px;color: #c9d6d7;">Rank &amp;Reward</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .r_box {
            display: flex;
            background: #1663c5;
            margin-bottom: 5px;
            padding: 5px;
            border-radius: 7px;
            align-items: center;
            justify-content: space-between;
        }
        .r_box p {
            margin: 0;
            font-size: 11px;
            color: #fff;
            line-height: 1.5;
        }
        a.clm {
    background: #fff;
    color: #000;
    height: 40px;
    width: 55px;
    line-height: 40px;
    text-align: center;
    border-radius: 5px;
    font-weight: bolder;
    font-size: 13px;
}
    </style>


    <div class="section" style="margin-top:15px;">
        <div class="row">

            <?php $__currentLoopData = \App\Models\Reward::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6" style="padding-left: 2px;padding-right: 2px;">
                <div class="r_box"  style="<?php if($key % 2 == 0): ?> background: #003cff <?php else: ?> blue <?php endif; ?>">
                    <div>
                        
                        <img src="/imag/4Qxgn49y7nzh.gif" style="height:145px;">
                        <span style="margin-left: 30%;"><a href="<?php echo e(route('user.clm', $element->id)); ?>" class="clm">Spain</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
 
   
<?php $__env->stopSection(); ?>




<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crickett20cup/trading.cricket-t20cup.com/core/resources/views/theme3/user/reword.blade.php ENDPATH**/ ?>