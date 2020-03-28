@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2 class="ml-auto">Items</h2>

            <div class="card-group">
                <div class="row row-cols-5">
                @foreach ($items as $item)
                    <div class="col">
                        <item-component :item='@json($item)'></item-component>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
