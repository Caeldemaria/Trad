<div style="background: #134d00;">
<div class="container">
    <!-- Image Upload -->
    <div class="card my-3">
        <div style="background: #134d00;">
        <div class="row user-profile text-center align-items-center">
            <div class="col-6 text-start">

                <h3 class="mb-0 title"><br>User id: <?php echo e(__($user->ref_id)); ?> <br>Name :<?php echo e(__($user->fullname)); ?><br>Level:
                    basic </h3>

            </div>
        </div>
    </div>

    <div class="d-none" id="currentPath">Account</div>
    <!-- Account Navigation -->
    <?php echo $__env->make('theme3.includes.user.account_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form id="profileSetting" action="<?php echo e(route('user.profileupdate')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="card mb-4">
            <div style="background: #134d00;">
                <div class="card-header">
                    <h4 class="subtitle mb-0">
                        User Information
                    </h4>
                </div>
                <div style="background: #134d00;">

                    <div class="card-body">

                        <div class="col-6 profile-thumb-wrapper text-center mt-2 mb-1">
                            <div style="width: 7.25rem; height: 7.25rem;" class="profile-thumb">
                                <div class="avatar-preview">
                                    <div
                                        style="width: 7.25rem; height: 7.25rem; background-image: url( '<?php echo e(@Auth::user()->image ? getFile('user', @Auth::user()->image) : dummyImg()); ?>' );"
                                        class="profilePicPreview rounded-circle" style=""></div>
                                </div>

                                <div class="avatar-edit">
                                    <input type='file' class="profilePicUpload" id="image" name="image"
                                           accept=".png, .jpg, .jpeg"/>
                                    <label class="text-white bg-warning imgEdit" for="image">
                                        <span class="material-icons">photo_camera</span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        
                        
                        <div style="background: #134d00;">

                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <label class="label">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname"
                                           value="<?php echo e($user->fname); ?>" <?php if($user->fname): ?> readonly <?php endif; ?>>
                                </div>
                            </div>
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <label class="label">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname"
                                           value="<?php echo e($user->lname); ?>" <?php if($user->lname): ?> readonly <?php endif; ?>>
                                </div>
                            </div>

                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <label class="label">Mobile Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                           value="<?php echo e($user->phone); ?>" <?php if($user->phone): ?> readonly <?php endif; ?> >
                                </div>
                            </div>

                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <label class="label">E-Mail</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           value="<?php echo e($user->email); ?>" readonly>
                                </div>
                            </div>
                            <div style="background: #134d00;">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary rounded-pill w-100 ProfileSubmitBtn">Update
                                    Information
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<script>
    'use strict'
    document.getElementById("imageUpload").onchange = function () {
        show();
    };

    function show() {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-id-preview");
            preview.src = src;
            preview.style.display = "block";
            document.getElementById("file-id-preview").style.visibility = "visible";
        }
    }
</script>

<script>
    //--profile Photo--//
    (function ($) {

        function proPicURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var preview = $(input).parents('.profile-thumb').find('.profilePicPreview');
                    $(preview).css('background-image', 'url(' + e.target.result + ')');
                    $(preview).addClass('has-image');
                    $(preview).hide();
                    $(preview).fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".profilePicUpload").on('change', function (e) {
            e.preventDefault();
            $.ajax({
                method: "POST",
                url: "<?php echo e(route('user.profile.photo')); ?>",
                data: new FormData($("#imgForm")[0]),
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function (res) {
                    console.log(res.msg);
                    notifyMsg(res.msg, res.cls)
                    $('#loadProfilePhoto').attr('style', '');
                    $('#loadProfilePhoto').attr('style', "background-image: url('<?php echo e(route('home')); ?>/" + res.img + "');");
                    $('.profileImgView').attr('src', "<?php echo e(route('home')); ?>/" + res.img); // change-image on top-nav
                }
            });
            proPicURL(this);

        });

        $(".remove-image").on('click', function () {
            $(".profilePicPreview").css('background-image', 'none');
            $(".profilePicPreview").removeClass('has-image');
        })

    })(jQuery);
</script>






















<?php /**PATH /home/crickett20cup/trading.cricket-t20cup.com/core/resources/views/theme3/user/ajax/profile.blade.php ENDPATH**/ ?>