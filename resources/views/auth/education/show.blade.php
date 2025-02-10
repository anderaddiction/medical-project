@extends('layouts.master')
@section('title') @lang('translation.Education_Level') @endsection
@section('content')


@section('pagetitle')
{{ __('Education Level Details') }}
@endsection

<div class="row">
    <div class="table-responsive">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $education->present()->name() }} {{ __('Education Level') }}</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('history.index') }}">
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> {{ __('Return to role list') }}
                            </h5>
                        </a>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Code') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Display Name') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Note') }}</th>
                                        <th>{{ __('Slug') }}</th>
                                        <th>{{ __('Created at') }}</th>
                                        <th>{{ __('Updated at') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $education->id }}</th>
                                        <td>{{ $education->present()->code() }}</td>
                                        <td>{{ $education->present()->name() }}</td>
                                        <td>{{ $education->present()->display_name() }}</td>
                                        <td>{!! $education->present()->status() !!}</td>
                                        <td>{{ $education->present()->note() }}</td>
                                        <td>{{ $education->present()->slug() }}</td>
                                        <td>{{ $education->present()->created_at() }}</td>
                                        <td>{{ $education->present()->updated_at() }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>

@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
