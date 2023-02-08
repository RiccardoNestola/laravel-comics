@extends('layouts.app')

@section('main-content')


    <div class="container">
        <div class="row">
            @foreach ($db as $item)
            <div class="col-12 col-md-3 col-lg-2 py-4">
                <div class="card">
                    <div class="wrapper text-center">
                        <img src="{{ $item['thumb'] }}" alt="cover {{ $item['title'] }}" class="image-fluid">
                    </div>
                        <div class="py-2">
                            <h6 class="text-center"> {{ $item['title'] }}</h6>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
        
    </div>
    







@endsection

