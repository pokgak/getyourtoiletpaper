@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2 class="mb-8">My Cart</h2>

                <div class="card">
                    <div class="card-body">
                        @foreach ($cartItems as $item)
                            <cart-item :item='@json($item)'></cart-item>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
