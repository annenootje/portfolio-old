@extends('layout')

@section('title', 'Home')

@section('content')

    <section class="line small">
        <div class="container">
            <div class="part-5">
                <p class="blue">{{$about[0]->title}}</p>
                <h2>{{$about[0]->title}}</h2>
                <p>
                    {{$about[0]->content}}
                </p>
            </div>
            <div class="part-5">
                <img src="{{$about[0]->image}}" alt="Anne Noteboom"/>
            </div>
        </div>
    </section>

    <section class="line">
        <div class="container">
            <div class="part-12">
                <h2 class="center">
                    Curriculum vitae
                </h2>
            </div>
        </div>
    </section>

    <section class="line">
        <div class="container">
            <div class="part-12">
                <img src="/img/paperplane.svg" class="center" alt="">
                <br>
                <h5 class="blue center">Contact opnemen</h5>
                <br>
                <h1 class="center">
                    Ge&#239;nteresseerd?
                </h1>
                <br><br><br>
                <a href="mailto:info@annenoteboom.nl" class="button center">info@annenoteboom.nl</a>
            </div>
        </div>
    </section>

@endsection