@extends('layouts.master')
@section('title') @lang('translation.Basic_Tables') @endsection
@section('content')


@section('pagetitle')
{{ __('Continent Details') }}
@endsection

<div class="row">
    <div class="table-responsive">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $continent->present()->name() }} Role</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('continent.index') }}">
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> {{ __('Return to continent list') }}
                            </h5>
                        </a>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Code') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Note') }}</th>
                                        <th>{{ __('Slug') }}</th>
                                        <th>{{ __('Created at') }}</th>
                                        <th>{{ __('Updated at') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $continent->id }}</th>
                                        <td>{{ $continent->present()->code() }}</td>
                                        <td>{{ $continent->present()->name() }}</td>
                                        <td>{!! $continent->present()->status() !!}</td>
                                        <td>{{ $continent->present()->note() }}</td>
                                        <td>{{ $continent->present()->slug() }}</td>
                                        <td>{{ $continent->present()->created_at() }}</td>
                                        <td>{{ $continent->present()->updated_at() }}</td>
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
