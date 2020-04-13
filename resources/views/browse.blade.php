@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2 class="mb-8 text-center">Browse</h2>

            @foreach ($items as $item)
                <browse-item :item='@json($item)' :user='@json(Auth::user())'></browse-item>
            @endforeach
        </div>
    </div>
</div>
@endsection
