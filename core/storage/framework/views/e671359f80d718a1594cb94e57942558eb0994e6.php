<?php
    $yourLinks = content('links.content');
?>

<!-- Wallet Card --><div style="background: #ffffff;"
     <div class="card"><div style="background: #b3f0ff;" class="img_hader">
        <div class="card-body"><div style="background: #b3f0ff;" class="img_hader">
            <div class="row">
                <div class="col-6">
                    <h6 class="mb-1 small-font text-start"><span class="text-black">Main Wallet</h6>
                    <h3 class="mb-1"><span class="text-black"><?php echo e(@$general->currency_sym); ?> <?php echo e(showAmount(@$user->balance)); ?></h3>
                </div>
                <div class="col-6 text-end">
                    <h6 class="mb-1 small-font text-end"><span class="text-black">Bot Running Wallet</h6>
                    <h3 class="mb-1"><span class="text-black"><?php echo e(@$general->currency_sym); ?> <?php echo e(showAmount(@$user->trading_balance)); ?></h3>
                </div>
            </div>
</h3>
         
       </div>   
<div class="row pt-2">
                <div class="col-md-12">
                    <div class="new_invite " style="padding: 30px 15px;border-radius: 10px;background-size: 100% 100% !important; background:url('/imag/photo1720891827.jpeg')">
                     <br><br>
                        <span style="color: white;
                        font-size: 24px;
                        width: 70%;
                        display: inline-block;
                        font-weight: 700;">Main Balance</span>
                       <a href="/user/ptc" style="color: white;
                            background: #00134d;
                            padding: 7px 5px;
                            border-radius: 15px;
                            font-weight: 500;
                            border: 1px solid white;float: right;"><?php echo e(@$general->currency_sym); ?> <?php echo e(showAmount(@$user->balance)); ?></a>                            
                       
                            
                    </div>
                </div>
 </div>
      </div>              
               <div class="col-md-12">
                    <div class="new_service_outter_box d-flex justify-content-between">
                        <div class="new_service_item text-center">
                            <a href="<?php echo e(route('user.usdt.index')); ?>">
                                 <img src="/imag/photo1720897410-removebg-preview.png" alt="logo" style="width: 100px;
                                        margin-bottom: 5px;"><br>Deposit
                            
                            
                            </a>
                        </div>
                         <div class="new_service_item text-center">
                            <a href="<?php echo e(route('user.withdraw')); ?>">
                                 <img src="/imag/photo1720897428-removebg-preview.png" alt="logo" style="width: 110px;
                                        margin-bottom: 5px;"><br>Withdraw
                            </a>
                        </div>
                         <div class="new_service_item text-center">
                            <a href="<?php echo e(route('user.withdraw.setting.bank.card')); ?>">
                                <img src="/imag/photo1720886982-removebg-preview.png" alt="logo" style="width: 90px;
                                        margin-bottom: 5px;"><br>Bank add
                            </a>
                        </div>
                    </div>
<br></div>
                   
   </div>
         <div class="new_invite " style="padding: 300px 35px;border-radius: 10px;background-size: 100% 100% !important; background:url('/imag/photo1720891051.jpeg')">
        </div>
          </div></div>
   </div>
                
                   
                        
    </div> </div>

</div>
</div>



<?php $__env->startPush('script'); ?>
<script>
    $('.copytext').on('click', function() {
        var copyText = document.getElementById("referralURL");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        notifyMsg("Copied: " + copyText.value,'success');
        notifyMsg("Copy Success!",'success')
    });
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/crickett20cup/trading.cricket-t20cup.com/core/resources/views/theme3/user/ajax/dashboard.blade.php ENDPATH**/ ?>