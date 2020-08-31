@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($users as $user)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mr-4">
                                @if ($user->file)
                                    <img src="{{ asset('storage/' . $user->file) }}" alt="{{ $user->name }}" width="100">
                                @endif
                            </div>
                            <div>
                                <p class="text-muted mb-0">{{ $user->id }}</p>
                                <p class="mb-0">{{ $user->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
