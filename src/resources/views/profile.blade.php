@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My <strong>{{ $user->name }}</strong> Profile</div>

                    <div class="card-body">
                        <form action="{{ route('profile') }}" method="POST" novalidate>
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" class="form-control" id="name" placeholder="{{ __('Enter name') }}">
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
