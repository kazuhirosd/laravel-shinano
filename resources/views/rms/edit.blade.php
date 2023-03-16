@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">RMS基本情報登録ページ</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">APIで使用している基本情報を入力することができます。</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">{{ __('RMS基本情報登録') }}</div>

                    <div class="card-body">
                        @if (session('flash_message'))
                            <div class="flash_message alert alert-success text-center py-3 my-0">
                                {{ session('flash_message') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('rms.update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="service_secret" class="col-md-4 col-form-label text-md-right">{{ __('サービスシークレット') }}</label>

                                <div class="col-md-12">
                                    <input id="service_secret" type="text" class="form-control @error('service_secret') is-invalid @enderror" name="service_secret" value="@if(old('service_secret')){{ old('service_secret') }}@else{{ $rms_system->service_secret }}@endif" autocomplete="service_secret" autofocus>

                                    @error('service_secret')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="license_key" class="col-md-4 col-form-label text-md-right">{{ __('ライセンスキー') }}</label>

                                <div class="col-md-12">
                                    <input id="license_key" type="text" class="form-control @error('license_key') is-invalid @enderror" name="license_key" value="@if(old('license_key')){{ old('license_key') }}@else{{ $rms_system->license_key }}@endif" autocomplete="license_key" autofocus>

                                    @error('service_secret')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('登録する') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
