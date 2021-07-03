@extends('master')
@section('content')
<div class="container">
    <div class="trending-warpper">
        <h3>Search Result
        </h3>
        @foreach ($products as $item)
        <div class="seached-item">
            <div class="col-sm-6">
            <a href="detail/{{ $item['id'] }}">
            <img class="search-img" src="{{ $item['gallery'] }}">
              <h2>{{ $item['name'] }}</h2>
              <h3>{{ $item['price'] }}</h3>
              <h6>{{ $item['description'] }}</h6>
            </div>
            </a>
    </div>
    @endforeach
    </div>
</div>
@endsection
