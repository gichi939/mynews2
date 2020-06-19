@extends('layouts.profile_front')

@section('content')
    <div class="container">
        <div class="col-md-4">
            <a href="https://protected-oasis-47470.herokuapp.com/register" role="button" class="btn btn-primary">新規登録</a>
            <a href="{{ action('Admin\ProfileController@add') }}" role="button" class="btn btn-primary">新規作成</a>
        </div>
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="caption ">
                                <div class="name p-2">
                                    <h1>{{ str_limit($headline->name, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="body mx-auto">・性別<br>{{ str_limit($headline->gender, 10) }}</p>
                        </div>
                        <div class="col-md-12">
                            <p class="body mx-auto">・趣味<br>{{ str_limit($headline->hobby, 650) }}</p>
                        </div>
                        <div class="col-md-12">
                            <p class="body mx-auto">・自己紹介欄<br>{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ str_limit($post->name, 150) }}
                                </div>
                                <div class="body mt-3">
                                    ・性別<br>{{ str_limit($post->gender, 1500) }}
                                </div>
                                <div class="body mt-3">
                                    ・趣味<br>{{ str_limit($post->hobby, 1500) }}
                                </div>
                                <div class="body mt-3">
                                    ・自己紹介欄<br>{{ str_limit($post->introduction, 1500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection