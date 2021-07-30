@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 p-5">
            <img class="rounded-circle img-thumbnail" src="{{ $user->profile->profileImage() }}" />
        </div>
        <div class="col-md-9 pt-5">
            <div class="d-flex justify-content-between align-items-basline mb-3">
                <div class="d-flex align-items-center">
                    <h1 class="m-0">{{ ucwords( $user->username) }}</h1>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4">
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                <div class="font-weight-bold">{{$user->profile->title ?? 'N/A'}}</div>
                <div>{{$user->profile->description ?? 'N/A' }}</div>
                <div><a href="/" target="_blank">{{$user->profile->url ?? 'N/A'}}</a></div>
            </div>

        </div>
    </div>
    <div class="row">
        @foreach ($user->posts as $post)
            <div class="col-md-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img class="img-thumbnail" src="/storage/{{ $post->image }}" />
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
