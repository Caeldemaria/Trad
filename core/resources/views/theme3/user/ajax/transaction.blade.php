<div class="d-none" id="currentPath">Transaction_Log</div>

<!-- Logs Navigation -->
@include('theme3.includes.user.logs_nav')

<!-- Transaction History --><div style="background: #b3f0ff;" class="img_hader">
<br>
<div class="section my-3"><br>
    <h2><span class="text-black">Total Running trading: {{ @$general->currency_sym }} {{ showAmount(auth()->user()->trading_balance) }}</h2>
    <br>
    
    <div class="transactions">
        @foreach ($transactions as $k => $data)
        <!-- item -->
        <a href="#" class="item pt-1 pb-1 px-3">
            <div class="detail">
                <img src="/imag/1_IwB0DyIrdbyZouVQV1fSgA.png" class="image-block imaged w48" alt="">

                <div>
                    <strong>
                        {{ __(@$data->details)  }}
                    </strong>
                    <p class="small text-secondary">
                        Trx: <b class="text-info">{{ $data->trx }}</b>
                        <br>
                        {{showDateTime($data->created_at, 'd-m-Y')}} | {{ diffForHumans($data->created_at) }}
                    </p>
                </div>
            </div>
            <div align="right" class="col-auto">
                <h5 class="{{ $data->type == '-' ? 'text-danger' : 'text-success' }} mb-1">
                    {{$data->type}} {{ showAmount($data->amount) }}{{__($general->currency_sym)}}
                </h5>
                {{-- @if($data->payment_status == 1)
                    <span class="badge badge-success style--light">@lang('Complete')</span>
                @elseif($data->payment_status == 2)
                    <span class="badge badge-warning style--light">@lang('Pending')</span>
                @elseif($data->payment_status == 0)
                    <span class="badge badge-danger style--light">@lang('Rejected')</span>
                @endif --}}
            </div>
        </a>
        <!-- * item -->
        @endforeach
    </div>
</div>
<!-- * Transaction History -->
 <br>   <br>  <br> <br>   <br>  <br> <br>   <br>  <br><br> <br>   <br>  <br> <br>   <br>  <br><br>   <br>  <br><br>   <br>  <br>