@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2 class="mb-8">Browse</h2>

            @foreach ($items as $item)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <img src="http://www.staples-3p.com/s7/is/image/Staples/m005185536_sc7?$std$" alt="..."/>
                            </div>
                            <div class="col">
                                <h3 class="card-title">{{ $item->name }}</h3>
                                <p class="card-text">{{ $item->description }}</p>
                                <button type="button" class="btn btn-primary">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
