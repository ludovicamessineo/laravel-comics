@extends('layout.app')

@section('title')
    DC
@endsection

@section('main_content')
<div class="banner">
    <button>Current series</button>
</div>

<div class="comics">
    <div class="container">
        <div class="comic-list">
            @foreach ($comic_array as $item)
                <div class="comic-card">
                    <img src=" {{ $item['thumb']}} " alt="">
                    <h3> {{ $item['series']}} </h3>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection