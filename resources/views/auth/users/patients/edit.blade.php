@extends('layouts.master')
@section('title') @lang('translation.Documents') @endsection
@section('content')


@section('pagetitle'){{ __('Documents Form') }} @endsection

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">{{ __('Edit Document') }}</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-4 mt-xl-0">
                            <a href="{{ route('document.index') }}">
                                <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> {{
                                    __('Return to documents list') }}</h5>
                            </a>
                            @if ($session = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all me-2"></i>
                                {{ $session }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <form action="{{ route('document.update', $document) }}" method="POST" id="register-form" rol="form">
                                @method('PUT')
                                @include('auth.documents.documents._form', ['btnText' => __('Update')])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Layout -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
