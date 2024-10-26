@extends('backend.layout.master')


@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __($pageTitle) }}</h1>
            </div>
            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.reward') }}" class="btn btn-primary"><i
                                    class="fa fa-arrow-left mr-2"></i>{{ __('Back') }}</a>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.reward.store') }}">
                                @csrf
                                <div class="form-row">

                                    <div class="form-group col-md-3">
                                        <label class="font-weight-bold">{{ __('Name') }}
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name') }}" placeholder="name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                <span />
                                            @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="font-weight-bold">{{ __('Only direct refer size [Active Member]') }}
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="size"
                                               value="{{ old('size') }}" placeholder="size">
                                        @error('size')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                <span />
                                        @enderror
                                    </div>
                                    
                                       <div class="form-group col-md-3">
                                        <label class="font-weight-bold">{{ __('Total Team') }}
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="tteam"
                                               value="{{ old('tteam') }}" placeholder="Total Team">
                                        @error('tteam')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                <span />
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="font-weight-bold">{{ __('bonus') }}
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="bonus"
                                               value="{{ old('bonus') }}" placeholder="bonus">
                                        @error('bonus')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                <span />
                                        @enderror
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Reward Create') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
