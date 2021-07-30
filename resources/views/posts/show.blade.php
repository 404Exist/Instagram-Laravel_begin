@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img class="img-thumbnail" src="/storage/{{ $post->image }}" />
        </div>
        <div class="col-md-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img class="rounded-circle" src="{{ $post->user->profile->profileImage() }}" style="max-width: 80px;"/>
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                            <a href="#" class="pl-3"> Follow </a>
                        </div>
                    </div>
                </div>

                <hr />

                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                    </span>
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
