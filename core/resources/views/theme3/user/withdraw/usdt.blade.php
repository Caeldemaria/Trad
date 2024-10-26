
@extends(template().'layout.master2')
@section('content2')

<!-- page content start -->
<main class="flex-shrink-0 main">
<div style="background: #134d00;" 
    <div class="main-container"><div style="background: #134d00;" 
        <div class="container"><div style="background: #134d00;" 
            <div class="card"><div style="background: #134d00;" 
                <div class="card-body"><div style="background: #134d00;" 
                    <div class="row">
                        <div class="col-6 pr-1">
                            <a href="{{ route('user.withdraw.setting.usdt') }}" class="btn btn-sm btn-light w-100">Bank Card</a>
                        </div>
                        <div class="col-6 pl-1"><div style="background: #134d00;" 
                            <a class="btn btn-sm btn-warning w-100">USDT</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @if ($user->usdt_wallet_address)
                <div class="card mt-3">
                    <div class="card-body">
                        <h6 class="mb-0 text-left text-secondary">
                            Name: <b class="text-info">{{ $method->name }}</b>
                        </h6>
                        <h6 class="mb-0 text-left text-secondary">
                            Network: <b class="text-info">TRC 20</b>
                        </h6>
                        <h6 class="mb-0 text-left text-secondary">
                            Address: <b class="text-info">{{ $user->usdt_wallet_address }}</b>
                        </h6>
                    </div>
                </div>
      
            @else --}}
                <div class="card mt-3">     <div style="background: #134d00;"      
                    <div class="card-body">          
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Network</label>
                                <select class="form-control" id="network" @if(@$user->usdt_wallet_address) readonly disabled @endif>
                                    <option value="{{null}}">Select Network</option>
                                    <option @if(@$user->usdt_wallet_address) selected @endif value="{{null}}">TRC 20</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ @$user->usdt_wallet_address }}" placeholder="enter usdt address" @if(@$user->usdt_wallet_address) readonly @endif>
                            </div>
                            @if (!$user->withdraw_pass)
                                <div class="form-group">
                                    <label for="number">Withdraw Password</label>
                                    <input type="text" class="form-control" id="withdraw_pass" name="withdraw_pass" placeholder="enter withdraw password" @if(@$user->withdraw_pass) readonly @endif>
                                </div>
                            @endif
                            <button class="btn btn-primary w-100 mt-2" type="submit">Confirm</button>
                            <br>   <br>  <br> <br>   <br>  <br> <br>   <br>  <br>  <br> <br>   <br>  
                        </form>
                    </div>
                </div>
            {{-- @endif --}}

        </div>
    </div>
</main>

@endsection

@push('script')

@endpush
