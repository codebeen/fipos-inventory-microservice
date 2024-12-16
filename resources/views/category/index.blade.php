@extends('layouts.inventory-layout')

@section('content')

    <div>
        <div>
            <a href="">All items</a>

            @foreach($categories as $category)

                <a href="">$category->category_name</a>

            @endforeach
        </div>
    </div>

@endsection
