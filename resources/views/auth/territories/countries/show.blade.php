@extends('layouts.master')
@section('title') @lang('translation.Basic_Tables') @endsection
@section('content')


@section('pagetitle')
{{ __('Country Details') }}
@endsection

<div class="row">
    <div class="table-responsive">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $country->present()->name() }} Role</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('country.index') }}">
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> {{ __('Return to country list') }}
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
                                        <th>{{ __('Continent') }}</th>
                                        <th>{{ __('Created at') }}</th>
                                        <th>{{ __('Updated at') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $country->id }}</th>
                                        <td>{{ $country->present()->code() }}</td>
                                        <td>{{ $country->present()->name() }}</td>
                                        <td>{!! $country->present()->status() !!}</td>
                                        <td>{{ $country->present()->note() }}</td>
                                        <td>{{ $country->present()->slug() }}</td>
                                        <td>{{ $country->present()->continent() }}</td>
                                        <td>{{ $country->present()->created_at() }}</td>
                                        <td>{{ $country->present()->updated_at() }}</td>
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
