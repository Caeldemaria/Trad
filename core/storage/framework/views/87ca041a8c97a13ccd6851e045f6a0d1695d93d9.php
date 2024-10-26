<style>
    .dashboard-main {
        background: linear-gradient(180deg, rgb(30, 34, 45) 0%, rgb(30, 34, 45) 9%, rgb(30, 34, 45) 35%);
        /* background: linear-gradient(180deg, rgb(30, 34, 45) 0%, rgb(30, 34, 45) 9%, rgb(30, 34, 45) 35%); */
        background-attachment: fixed !important;
    }
    .bg-primary {
        background-image: linear-gradient(to bottom, #1E222D 0, #1E222D 100%) !important;
    }	
    .btn-primary, .main-btn {
        background-image: linear-gradient(to bottom, #1E222D 0, #1E222D 100%) !important;
        border: none;
        color: #FFFFFF !important;
    }
    .btn-primary:hover, .btn-primary:focus, .main-btn:hover, .main-btn:focus {
        background-image: linear-gradient(to top, #1E222D 0, #1E222D 100%) !important;
        border: none;
        color: #FFFFFF !important;
    }
    .action-button {
        background: #0d9cfda6 !important;
    }
    .btn-pink-light, .bg-pink-light {
        background-image: linear-gradient(to bottom, #1E222D 0, #1E222D 100%) !important;
    }
    .btn-pink-light-alt, .btn-pink-light:hover {
        background-image: linear-gradient(to top, #1E222D 0, #1E222D 100%) !important;
    }
    .btn-pink-light-alt:hover {
        background-image: linear-gradient(to bottom, #1E222D 0, #1E222D 100%) !important;
    }
    .bg-pink-light-alt {
        background-image: linear-gradient(to top, #1E222D 0, #1E222D 100%) !important;
    }
    .action-button {
        background:#384152 !important;
    }
    body{
        background: #1E222D;
    }
    .appBottomMenu {
        background: #384152;
        border-top: 1px solid#384152;
    }
    .appBottomMenu .item strong {
        color: #ffffff;
    }
    .appBottomMenu .item:hover .icon,
    .appBottomMenu .item:hover ion-icon,
    .appBottomMenu .item:hover strong {
        color:#384152;
    }
    .small-font {
        color: #fff;
    }
    .card {
        background:#384152;
    }
    .card .card-header {
        color: #ffffff;
        border-bottom: 1px solid#384152;
    }
    .card .card-footer {
        border-top: 1px solid#384152;
        color: #ffffff;
    }
    .modal.action-sheet .modal-content {
        border-radius: 25px 25px 0 0;
    }
    .modal-header {
        border-bottom: 1px solid#384152;
    }
    .modal-content {
        background-color:#384152;
        color: #ffffff;
    }
    .modal.action-sheet .modal-content .modal-header .modal-title {
        color: #ffffff;
    }
    .d-card, .account-wrapper, .blog-item, .testimonial-item, .transaction-wrapper, .investor-item, .accordion-item, .work-item, .pagination .page-item .page-link, .accordion-item .accordion-header .accordion-button:not(.collapsed), .site-card .card-header, .site-card, textarea, .select, .form-control {
        background-color:#384152;
    }
    .site-card .card-header {
        border-color: #343449;
    }
    .site-card {
        border: 1px solid #343449;
    }
    .dialogbox .modal-dialog .modal-content .modal-footer {
        border-top: 1px solid #343449;
    }
    .dialogbox .modal-dialog .modal-content .btn-inline {
        background: #343449;
    }
    h1, h2, h3, h4, h5, h6 {
        color: #ffffff;
    }
    .stat-box {
        background:#384152;
    }
    .stat-box .value {
        color: #c3c3c3;
    }
    .listview {
        color: #ffffff;
        background:#384152;
    }
    .image-listview > li a.item {
        color: #ffffff !important;
    }
    .form-group .label {
        color: #ffffff;
    }
    .form-group.boxed .form-control {
        background: #18151f;
    }
    .form-control {
        background: #18151f;
    }
    .form-control {
        color: #ffffff;
        border: 1px solid #343449;
    }
    .form-control:focus {
        color: #ffffff;
        background: #18151f;
        border: 1px solid #ffffff !important;
    }
    .form-group .input-wrapper.active .label {
        color: #108E76 !important;
    }
    .transactions .item {
        background:#384152;
        color: #fff;
    }
    .transactions .item .detail strong {
        color: #ffffff;
    }
    .border-bottom {
        border-bottom: 1px solid #747474!important;
    }
    .listview > li:after {
        background: #232337;
    }
    .select {
        border: 1px solid #343449;
        color: #ffffff;
    }
    .form-control:disabled, .form-control[readonly] {
        background-color: #252f39;
    }
    label {
        color: #ffffff;
        margin-bottom: 2px;
        margin-left: 2px;
        font-size: 14px;
    }
    .input-group .input-group-text {
        color: #ffffff;
    }
    .border {
        border: 1px solid #343449 !important;
    }
    .dialogbox .modal-dialog .modal-content .modal-header .modal-title {
        color: #ffffff;
    }
    .dialogbox .modal-dialog .modal-content .btn-inline .btn {
        background: #181925;
    }
</style>


<style>
    .text-red, a.text-red {
        color: #e50101 !important;
    }
    .glass-bg {
        background: rgba(0, 208, 148, 0%);
        box-shadow: 0px 0px 9px 0 rgb(0 0 0 / 37%);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .bg-gr-orange {
        background: #FF8008;
        background: -webkit-linear-gradient(to left, #FFC837, #FF8008);
        background: linear-gradient(to left, #FFC837, #FF8008);
    }

    .bg-gr-green-light {
        background: #1D976C;
        background: -webkit-linear-gradient(to left, #93F9B9, #1D976C);
        background: linear-gradient(to left, #93F9B9, #1D976C);
    }

    .bg-gr-violet {
        background: #654ea3;
        background: -webkit-linear-gradient(to left, #eaafc8, #654ea3);
        background: linear-gradient(to left, #eaafc8, #654ea3);
    }

    .bg-gr-red {
        background: linear-gradient(309deg, rgb(135, 15, 15) 10.6%, rgb(190, 0, 0) 91.1%) !important;
    }

    .bg-gr-red-light {
        background: linear-gradient(309deg, rgb(212, 44, 15) 10.6%, rgb(255, 119, 63) 91.1%) !important;
    }

    /* buttons */
    .btn-gr-orange {
        color: #fff;
        background: #FF8008;
        background: -webkit-linear-gradient(to left, #FFC837, #FF8008);
        background: linear-gradient(to left, #FFC837, #FF8008);
    }

    .btn-gr-green-light {
        color: #fff;
        background: #1D976C;
        background: -webkit-linear-gradient(to left, #93F9B9, #1D976C);
        background: linear-gradient(to left, #93F9B9, #1D976C);
    }

    .btn-gr-violet {
        color: #fff;
        background: #654ea3;
        background: -webkit-linear-gradient(to left, #eaafc8, #654ea3);
        background: linear-gradient(to left, #eaafc8, #654ea3);
    }

    .btn-gr-red {
        color: #fff;
        background: linear-gradient(309deg, rgb(11, 144, 117) 10.6%, rgb(11, 144, 117) 91.1%) !important;
    }

    /* hover effect */
    .btn-gr-orange:hover,
    .btn-gr-orange:focus {
        color: #fff;
        background: #FF8008;
        background: -webkit-linear-gradient(to right, #FFC837, #FF8008);
        background: linear-gradient(to right, #FFC837, #FF8008);
    }

    .btn-gr-green-light:hover,
    .btn-gr-green-light:focus {
        color: #fff;
        background: #1D976C;
        background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);
        background: linear-gradient(to right, #93F9B9, #1D976C);
    }

    .btn-gr-violet:hover,
    .btn-gr-violet:focus {
        color: #fff;
        background: #654ea3;
        background: -webkit-linear-gradient(to right, #eaafc8, #654ea3);
        background: linear-gradient(to right, #eaafc8, #654ea3);
    }

    .btn-gr-red:hover,
    .btn-gr-red:hover {
        color: #fff;
        background: linear-gradient(150deg, rgb(135 15 15) 10.6%, rgb(190 0 0) 91.1%) !important;
    }


    .bg-black {
        background: #000;
    }
    .btn-group-sm>.btn,
    .btn-sm {
        padding: 1px .5rem;
        font-size: 0.78rem;
    }
    .btn.btn-sm {
        padding: 3px 10px;
    }
    .input-group .input-group-text {
        height: 25px;
    }
    .input-group .input-group-text {
        border-bottom: 1px solid #333333;
    }
    [chrome-autofilled] {
        color: #ffffff !important;
    }
</style>



<style>
    .swal2-popup.swal2-toast {
    background: rgba( 0, 0, 0, 0.5 ) !important;
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ) !important;
    backdrop-filter: blur( 11.5px ) !important;
    -webkit-backdrop-filter: blur( 11.5px ) !important;
    border-radius: 10px !important;
    border: 1px solid rgba( 255, 255, 255, 0.18 ) !important;
    padding: 5px !important;
    width: auto !important;
}
.swal2-popup.swal2-toast .swal2-title {
    margin: 10px 5px !important;
    color: #FFF !important;
}
</style>
<style>
    .icon-color-change{
        filter: saturate(175%) hue-rotate(225deg) brightness(67%) contrast(297%) !important;
    }	
</style>
<?php /**PATH /home/crickett20cup/trading.cricket-t20cup.com/core/resources/views/theme3/layout/custom/red.blade.php ENDPATH**/ ?>