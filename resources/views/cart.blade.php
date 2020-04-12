@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2 class="mb-8">My Cart</h2>

                <div class="card">
                    <div class="card-body">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="row">
                                <div class="col">
                                    <p>{{ $i }} - name</p>
                                </div>
                                <div class="col-2">
                                    <input class="form-control" type="number" id="quantity" name="quantity" min="1">
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn btn-danger">
                                        <i class="fa fa-trash-o fa-md" title="Delete Item"></i>
                                    </button>
                                </div>
                            </div>
                            {{-- divider --}}
                            @if ($i < 5 -1)
                                <div class="mb-3"></div>
                            @endif
                        @endfor
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
