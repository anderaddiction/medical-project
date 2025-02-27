@extends('layouts.master')
@section('title') @lang('translation.Documents') @endsection
@section('content')


@section('pagetitle')
{{ __('Medical History Details') }}
@endsection

<div class="row">
    <div class="table-responsive">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $document->present()->name() }} Document</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('document.index') }}">
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> {{ __('Return to documents list') }}
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
                                        <th scope="row">{{ $document->id }}</th>
                                        <td>{{ $document->present()->code() }}</td>
                                        <td>{{ $document->present()->name() }}</td>
                                        <td>{{ $document->present()->display_name() }}</td>
                                        <td>{!! $document->present()->status() !!}</td>
                                        <td>{{ $document->present()->note() }}</td>
                                        <td>{{ $document->present()->slug() }}</td>
                                        <td>{{ $document->present()->created_at() }}</td>
                                        <td>{{ $document->present()->updated_at() }}</td>
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
