@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<div class="container">
    
    <div class="single-card">
        <h1>
            {{ $movie->title }}
        </h1>
        <div class="info">
            <div>
                <span>
                    {{ '( '.$movie->original_title.' )' }}
                </span>
            </div>
            <div>
                <span>
                    {{ $movie->nationality }}
                </span>
            </div>
            <div>
                <span>
                    {{ $movie->date }}
                </span>
            </div>
            <div>
                <span>
                    Vote : {{ $movie->vote }}
                </span>
            </div>
        </div>
    </div>

</div>
@endsection
