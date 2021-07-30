@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="/p/{{ $post->id }}"><img class="img-thumbnail" src="/storage/{{ $post->image }}" /></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div>
                    <div class="d-flex align-items-center mb-5 mt-2">
                        <div class="pr-3">
                            <img class="rounded-circle" src="{{ $post->user->profile->profileImage() }}" style="max-width: 40px;"/>
                        </div>
                        <div>
                            <span class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                            </span>
                            {{ $post->caption }}
                        </div>
                    </div>
                    <hr />
                </div>
            </div>
        </div>
    @endforeach


    {{ $posts->links("pagination::bootstrap-4") }}

</div>
@endsection
