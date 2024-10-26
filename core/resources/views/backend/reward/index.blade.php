@extends('backend.layout.master')


@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __($pageTitle) }}</h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-end">
                            <a href="{{ route('admin.reward.create') }}" class="btn btn-primary"> <i class="fa fa-plus"></i>
                                {{ __('Add Reward') }}</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Team Size') }}</th>
                                                                         <th>{{ __('Total Team') }}</th>
                                            <th>{{ __('Bonus') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($rewards as $el)
                                            <tr>
                                                <td>{{ $el->name }}</td>
                                                <td>{{ $el->size }}</td>
                                                                        <td>{{ $el->tteam }}</td>
                                                <td>{{ $el->bonus }}</td>
                                                <td>
                                                    <a href="{{ route('admin.reward.edit', $el->id) }}"
                                                        class="btn btn-md btn-primary"><i class="fa fa-pen mr-2"></i
                                                            class="fa fa-pen mr-2"></i>{{ __('Edit') }}</a>
                                                </td>
                                            </tr>
                                        @empty

                                            <tr>
                                                <td class="text-center" colspan="100%">
                                                    {{ __('No Plan Created Yet') }}</td>
                                            </tr>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection


@push('script')
    <script>
        'use strict'

        $(function() {

            $('.status').on('change', function() {

                let status = $(this).data('status');
                let url = $(this).data('url');

                $.ajax({

                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },

                    url: url,

                    data: {
                        status: status
                    },

                    method: "POST",

                    success: function(response) {
                        iziToast.success({

                            message: response.success,
                            position: 'topRight'
                        });
                    }
                })
            })

        })
    </script>
@endpush
