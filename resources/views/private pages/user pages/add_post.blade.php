@extends('layouts.private_pages_user')

@section('content')

<section class="feature_part">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('user/add_post') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Text" class="col-md-4 col-form-label text-md-right">{{ __('Text') }}</label>

                            <div class="col-md-6">
                                <input id="Text" type="text" class="form-control @error('Text') is-invalid @enderror" name="text" value="{{ old('Text') }}" required autocomplete="Text" autofocus>

                                @error('Text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
