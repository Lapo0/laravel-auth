@extends('layouts.app')
@section('content')

<div class="container py-3">
        <div class="row">
            <a class="btn btn-primary w-25 m-auto" href="{{ route('cookies.create') }}">
                Nuovo Cookie
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Thumb</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">URL</th>
                    <th scope="col">Slug</th>
                    </tr>
                </thead>

                @foreach ($cookies as $cookie)
                    <tbody>
                            <tr>
                                <td>
                                    <a href="{{ route('cookies.show',$cookie->id) }}">
                                        <img class="w-25" src="{{ $cookie->thumb }}" alt="">
                                    </a>
                                </td>
                                <td>{{ $cookie->name }}</td>
                                <td>{{ $cookie->client }}</td>
                                <td>
                                    <a href="{{ route('cookies.show',$cookie) }}">{{ $cookie->url }}</a>
                                </td>
                                <td>{{ $cookie->slug }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('cookies.edit', $cookie) }}">
                                        Edit
                                    </a>
                                </td>
                                
                            </tr>
                        
                    </tbody>
                @endforeach
            </table>

        </div>
    </div>

@endsection