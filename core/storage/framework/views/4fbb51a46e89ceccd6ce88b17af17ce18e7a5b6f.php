<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1><?php echo e(__($pageTitle)); ?></h1>
            </div>

            <div class="row">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body p-2">

                            <table class="table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('Sl')); ?></th>
                                        <th><?php echo e(__('User')); ?></th>
                                        <th><?php echo e(__('Amount')); ?></th>
                                        <th><?php echo e(__('Charge')); ?></th>
                                        <th><?php echo e(__('status')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $manuals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $manual): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($manual->user->username); ?></td>
                                            <td><?php echo e(number_format($manual->amount, 2) . ' ' . @$general->site_currency); ?>

                                            </td>
                                            <td>
                                                <?php echo e(number_format($manual->charge, 2) . ' ' . @$general->site_currency); ?>

                                            </td>
                                            <td>
                                                <?php if($manual->payment_status == 2): ?>
                                                    <span class="badge badge-warning"><?php echo e(__('Pending')); ?></span>
                                                <?php elseif($manual->payment_status == 1): ?>
                                                    <span class="badge badge-success"><?php echo e(__('Approved')); ?></span>
                                                <?php elseif($manual->payment_status == 3): ?>
                                                    <span class="badge badge-danger"><?php echo e(__('Rejected')); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-md btn-info details detail"
                                                    data-id="<?php echo e($manual->id); ?>"
                                                    data-username="<?php echo e($manual->user->username); ?>"
                                                    data-gateway="<?php echo e($manual->gateway->gateway_name); ?>"
                                                    data-gateway_cur="<?php echo e($manual->gateway->gateway_parameters->gateway_currency); ?>"
                                                    data-amount="<?php echo e(showAmount($manual->amount)); ?>"
                                                    data-charge="<?php echo e(showAmount($manual->charge)); ?>"
                                                    data-rate="<?php echo e(showAmount($manual->rate)); ?>"
                                                    data-final_amount="<?php echo e(showAmount($manual->final_amount)); ?>"
                                                    data-trx="<?php echo e($manual->transaction_id); ?>"
                                                    data-status="<?php echo e($manual->payment_status); ?>"
                                                    data-date="<?php echo e(date_format($manual->created_at, 'd M Y')); ?>"
                                                    data-resource="<?php echo e($manual); ?>"
                                                    href="<?php echo e(route('admin.deposit.trx', $manual->transaction_id)); ?>"><?php echo e(__('Details')); ?></a>

                                                <?php if($manual->payment_status == 2): ?>
                                                    <a class="btn text-white btn-md btn-primary accept"
                                                        data-url="<?php echo e(route('admin.deposit.accept', $manual->transaction_id)); ?>"><?php echo e(__('Accept')); ?></a>
                                                    <a class="btn text-white btn-md btn-danger reject"
                                                        data-url="<?php echo e(route('admin.deposit.reject', $manual->transaction_id)); ?>"><?php echo e(__('Reject')); ?></a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td class="text-center" colspan="100%"><?php echo e(__('No Data Found')); ?>

                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                        </div>

                        <?php if($manuals->hasPages()): ?>
                            <div class="card-footer">
                                <?php echo e($manuals->links('backend.partial.paginate')); ?>

                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>

        </section>
    </div>


    <!-- detail Modal -->
    <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form action="" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('Deposit Details')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <ul class="list-group detail-body-1">
                                <li class="list-group-item"><h6 class="text-center">Deposit With Nagad</h6></li>
                                <li class="list-group-item">Tracking No : CFDH32Y&323DG1DU</li>
                                <li class="list-group-item">Amount : 200$</li>
                                <li class="list-group-item">Charge: 00$</li>
                                <li class="list-group-item">Rate : 1USDT = 100 Taka</li>
                                <li class="list-group-item">In Taka : 2000 Taka</li>
                                <li class="list-group-item">Deposit Date: 05 May 2000</li>
                                <li class="list-group-item">
                                    Status :
                                    <span class="badge badge-warning">Pending</span>
                                </li>
                            </ul>

                            <h6 class="mt-3 mb-2 text-center">Deposit Proof</h6>
                            <div class="TrxSection">
                                <div class="border rounded p-2 mb-2">
                                    <b>Transaction ID: </b>
                                    <br>
                                    <span class="txID"></span>
                                </div>
                            </div>
                            <div class="proofDetails">
                                <div class="border rounded p-2 mb-2">
                                    <b>Transaction ID: </b>
                                    <br>
                                    JHGHJHJGHJHG767HJHJG6766
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- accept Modal -->
    <div class="modal fade" id="accept" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form action="" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('Payment Accept')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <p><?php echo e(__('Are you sure to Accept this Payment request')); ?>?</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Accept')); ?></button>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- reject Modal -->
    <div class="modal fade" id="reject" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form action="" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('Payment Reject')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <p><?php echo e(__('Are you sure to reject this payment')); ?>?</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="btn btn-danger"><?php echo e(__('Reject')); ?></button>

                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('style-plugin'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/css/datatables.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/css/bs4-datatable.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script-plugin'); ?>
    <script src="<?php echo e(asset('asset/admin/js/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/admin/js/bs4-datatable.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style'); ?>
    <style>
        .pagination .page-item.active .page-link {
            background-color: rgb(95, 116, 235);
            border: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button:focus {
            background: transparent;
            border-color: transparent;
        }



        .pagination .page-item.active .page-link:hover {
            background-color: rgb(95, 116, 235);
        }

        th,
        td {
            text-align: center !important;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(function() {
            'use strict'
            $('#myTable').DataTable();

            $('.accept').on('click', function() {
                const modal = $('#accept');

                modal.find('form').attr('action', $(this).data('url'));
                modal.modal('show');
            })

            $('.reject').on('click', function() {
                const modal = $('#reject');

                modal.find('form').attr('action', $(this).data('url'));
                modal.modal('show');
            })

            $('.detail').on('click', function(e) {
                e.preventDefault();
                const modal = $('#detail');

                let id = $(this).data('id');
                let username = $(this).data('username');
                let gateway = $(this).data('gateway');
                let gateway_cur = $(this).data('gateway_cur');
                let amount = $(this).data('amount');
                let charge = $(this).data('charge');
                let status = $(this).data('status');
                let rate = $(this).data('rate');
                let trx = $(this).data('trx');
                let final_amount = $(this).data('final_amount');
                let date = $(this).data('date');
                let resource = $(this).data('resource');
                let status_badge = '';
                let status_cls = '';
                if (status === 1) {
                    status_badge = 'Approved'
                    status_cls = 'badge-success'
                } else if(status === 2) {
                    status_badge = 'Pending'
                    status_cls = 'badge-warning'
                } else if(status === 3) {
                    status_badge = 'Rejected'
                    status_cls = 'badge-danger'
                }

                if (resource.number) {
                    $('.TrxSection').removeClass('d-none');
                } else {
                    $('.TrxSection').addClass('d-none');
                }

                let txID = resource.number ? resource.number : 'N/A';
                $('.txID').html(txID);

                let proofs = resource.payment_proof;

                $('.detail-body-1').html(`
                    <li class="list-group-item">
                        <h6 class="text-center">Deposit With ${gateway}</h6>
                    </li>
                    <li class="list-group-item">Tracking No : ${trx}</li>
                    <li class="list-group-item">Amount : ${amount} <?php echo e($general->site_currency); ?></li>
                    <li class="list-group-item">Charge: ${charge} <?php echo e($general->site_currency); ?></li>
                    <li class="list-group-item">Rate : 1<?php echo e($general->site_currency); ?> = ${rate} ${gateway_cur}</li>
                    <li class="list-group-item">In ${gateway_cur} with Charge : ${final_amount} ${gateway_cur}</li>
                    <li class="list-group-item">Deposit Date: ${date}</li>
                    <li class="list-group-item">
                        Status :
                        <span class="badge ${status_cls}">${status_badge}</span>
                    </li>
                `);

                // console.log(proofs);

                let proof = '';

                $.each(proofs, function (key, value) {
                    console.log(key+': '+value);

                    if ( (typeof value ) === 'object') {
                        value = `<img src="<?php echo e(asset('asset/theme3/images/manual_payment/${value.file}')); ?>" alt="" class="w-50 ">`
                    }

                    proof += `
                        <div class="border rounded p-2 mb-2">
                            <b>${cap1stLeter(key).replace('_', " ")}: </b>
                            <br>
                            ${value}
                        </div>
                    `;
                });

                console.log(proof);

                $('.proofDetails').html(proof);

                let screenshot = '';
                if (resource.screenshot) {
                    screenshot = `<img src="<?php echo e(asset('asset/theme3/images/deposit/screenshots/${resource.screenshot}')); ?>" alt="" class="w-50 ">`;

                    $('.proofDetails').html(`
                        <div class="border rounded p-2 mb-2">
                            <b>Screenshot: </b>
                            <br>
                            ${screenshot}
                        </div>
                    `);
                }








                modal.modal('show');
            })

            //cap 1st leter
            const cap1stLeter = (string) => {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }



        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crickett20cup/trading.cricket-t20cup.com/core/resources/views/backend/deposit_log.blade.php ENDPATH**/ ?>