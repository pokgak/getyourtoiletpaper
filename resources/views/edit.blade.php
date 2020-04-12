@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Items</h2>

                <div class="row row-cols-5">
                    <div class="col">
                        <new-item></new-item>
                    </div>

                @foreach ($items as $item)
                    <item-component :item='@json($item)'></item-component>
                @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
