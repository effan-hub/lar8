@extends('layouts.main')

@section('container')
<h1 class="mb-5">Kategori</h1>
    @foreach ($categories as $cat)
    <ul>
        <li>
            <a href="/categories/{{ $cat->slug }}">{{ $cat->name }}</a>
        </li>
    </ul>

    @endforeach
@endsection
