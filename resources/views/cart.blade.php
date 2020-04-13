@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2 class="mb-8 text-center">My Cart</h2>

                <div class="card">
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col">
                                <h5 class="card-title text-left">Name</h5>
                            </div>
                            <div class="col-2">
                                <h5 class="card-title text-center">Quantity</h5>
                            </div>
                            <div class="col-1">
                                {{-- <h5 class="cart-title">test</h5> --}}
                            </div>
                        </div>
                        @foreach ($cartItems as $item)
                            <cart-item :item='@json($item)'></cart-item>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
