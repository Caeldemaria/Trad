@extends(template().'layout.master2')
<div style="background: #b3f0ff;" class="img_hader">
@section('content2')
    <div class="container"><div style="background: #b3f0ff;" class="img_hader">
        <div class="row my-2"><div style="background: #b3f0ff;" class="img_hader">
            <!--<div class="col-6">-->
            <!--    <a href="{{route('user.onepay.index')}}" class="card customLink">-->
            <!--        <div class="card-body">-->
            <!--            <div class="row align-items-center">-->
            <!--                <div class="col-auto">-->
            <!--                    <img style="width: 45px; padding: 6px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABb0lEQVR4nO3Zv0qVcRjA8V9WRKYtQrU02OgV2NKiBd2AU4sEtdkNuDoEKs2OunUBLaLgP2hrc5AIbQodpEKUA/qJA2/LGfRn+B6f9/T7XMHzPc/zngPnTakoegse4zUWsY1DfMM0+lJU6MdLfKgGP89UigRP8A7LOJZv47oHf4hXWMIP/+5ntwe/gzG8xxecuRqn3TqXN/jY/uTUJNU0/CPM4Htdg9cagmEs4KRbAX9dZcSz6oRGcDc1EW7hduoF6Kt+ebfqfKgz/MY6JnHzshH3sSqeNQzlRtzAJ3Fttk8/J2RCfG9zQlbE9zkn5Jf4jnJCGiGVkGBS2UgwqWwkmFQ20j271f8A9zCOvaZuZKxjnudNDRnomGewqSHjvbKR3Wr4Abxo8jOSpYREk8ppBZPKRoJJ/9NGWuJr5YR8Fd9OTsi8+GZz304diGsfDy4MqWKeBo3Zx2hWRMer5rn2PV7zF0CrmmE2exNFUaROfwDvDa5Ik7OxJAAAAABJRU5ErkJggg==" alt="">-->
            <!--                </div>-->
            <!--                <div class="col">-->
            <!--                    <h4 class="mb-0">Mobile Banking</h4>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->
            <div class="m-auto"><div style="background: #b3f0ff;" class="img_hader">
                <div class="card"><div style="background: #b3f0ff;" class="img_hader">
                    <div class="card-body"><div style="background: #b3f0ff;" class="img_hader">
                        <div class="row align-items-center"><div style="background: #b3f0ff;" class="img_hader">
                            <div class="col-auto"><div style="background: #b3f0ff;" class="img_hader">
                                <img style="width: 45px" src="https://img.icons8.com/color/96/tether--v2.png" alt="">
                            </div>
                            <div class="col text-white">
                                <h4 class="mb-0">USDT</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('user.usdt.confirm') }}" method="POST" enctype="multipart/form-data" class="mb-3">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col">
                            <h3 class="mb-0">
                                Balance: <span class="text-red">{{ showAmount($user->balance) }} {{$general->site_currency}}</span>
                            </h3>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center g-2 mt-3">
                        <div class="col">
                            <h3 class="mb-0 bg-gr-navy rounded-pill text-center py-2 text-red">
                                {{$gatewayMethod->gateway_name}}
                            </h3>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center g-2 mt-1">
                        <div class="col text-center">
                            <img style="width: 170px; height: 170px;" src="{{ asset('asset/theme3/images/gateways/' . @$gatewayMethod->gateway_parameters->qr_code) }}" alt="">
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center g-2 mt-1">
                        <div class="col text-center">
                            <div class="input-group">
                                <input id="usdt-address" type="text" class="form-control small-font-lg text-start" value="{{$gatewayMethod->gateway_number}}" readonly="">
                                <button type="button" class="input-group-text btn-gr-red px-3 copytext">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center g-2 mt-2">
                        {{-- <div class="col">
                            <h4 class="mb-0 bg-gr-orange rounded-pill text-center py-1 text-light">
                                Informations
                            </h4>
                        </div> --}}
                        <div class="col-12 text-center">
                            <h5 for="formFile" class="form-label text-start">Amount:</h5>
                            <div class="input-group">
                                <input type="number" class="form-control small-font-lg text-start" name="amount" placeholder="Amount to Recharge" required="">
                                <span class="input-group-text bg-primary px-3">
                                    {{$general->site_currency}}
                                </span>
                            </div>
                            <small>Min: {{showAmount(@$gatewayMethod->min_limit)}} {{$general->site_currency}} & Max: {{showAmount(@$gatewayMethod->max_limit)}} {{$general->site_currency}}</small>

                            <ul class="listview image-listview inset mt-2 gateway-info">
                                <li>
                                    <span>Rate:</span>
                                    <span>1 {{@$general->site_currency}} = {{@$gatewayMethod->rate}} {{Str::upper(@$gatewayMethod->gateway_parameters->gateway_currency)}}</span>
                                </li>
                                <li id="toPay">
                                    <span>You Need To Pay:</span>
                                    <span class="text-warning">0 USDT</span>
                                </li>
                            </ul>

                            <div class="mt-2">
                                <h5 for="transaction_id" class="form-label text-start">Transaction ID</h5>
                                <input class="form-control" type="text" name="transaction_id" required="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-lg btn-gr-red border-0 w-100 mt-2 confirmBtn" style="font-family: &quot;Josefin Sans&quot;, Bangla781, sans-serif;">Confirm Now</button>
        </form>
    </div>
@endsection
@push('style')
<style>
    .form-control {
        height: 38px;
    }
</style>
@endpush
@push('script')
<script>
    $(document).on('input', '[name=amount]', function () {
        let amount = parseFloat($(this).val());
        let charge = parseFloat('{{ @$gatewayMethod->charge }}')
        let rate = parseFloat('{{ @$gatewayMethod->rate }}')
        let single_currency = "{{Str::upper(@$gatewayMethod->gateway_parameters->gateway_currency)}}";

        $('#toPay').html(`
            <span>You Need To Pay:</span>
            <span class="text-red">${(amount + charge) * rate} ${single_currency}</span>
        `);

        console.log(charge);
    });
</script>
<script>
    $('.copytext').on('click', function() {
        var copyText = document.getElementById("usdt-address");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        notifyMsg("Copied: " + copyText.value,'success')
    });
</script>
@endpush

