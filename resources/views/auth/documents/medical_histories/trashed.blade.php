@extends('layouts.master')
@section('title') @lang('translation.Basic_Tables') @endsection
@section('content')


@section('pagetitle')
{{ __('Trashed Medical Histories List') }}
@endsection

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('Trashed Medical Histories List') }}</h4>
            </div>
            <div class="card-body">
                <p class="card-title-desc">
                    @if ($session = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="mdi mdi-check-all me-2"></i>
                        {{ $session }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </p>

                <div class="table-responsive">
                    {{ $dataTable->table() }}
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection
