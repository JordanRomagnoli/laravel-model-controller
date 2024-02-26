@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<div class="container">
    <ul class="row g-0">
        @foreach ($movies as $singleMovie)
            <li class="movie-card">
                <a href="{{ route('movie.show', ['id' => $singleMovie->id]) }}">
                    <h4>
                        {{ $singleMovie->title }}
                    </h4>

                    <div class="info">
                        <div>
                            <span>
                                {{ '( '.$singleMovie->original_title.' )' }}
                            </span>
                        </div>
                        <div>
                            <span>
                                {{ $singleMovie->nationality }}
                            </span>
                        </div>
                        <div>
                            <span>
                                {{ $singleMovie->date }}
                            </span>
                        </div>
                        <div>
                            <span>
                                Vote : {{ $singleMovie->vote }}
                            </span>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
