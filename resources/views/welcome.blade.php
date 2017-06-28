@extends('layouts.master')

@section('main')


    <section class="cover cover-features imagebg space--lg" data-overlay="2">
        <div class="background-image-holder"> <img alt="background" src="{{ asset('images/jitz.jpg') }}"> </div>
        <div class="container">

            <div class="row">
                <div class="col-sm-9 col-md-7">
                    <h1> Jax's Blog Bout Jitz </h1>
                </div>
            </div>

            <div class="row">

                @foreach ($techniques as $technique)

                    <div class="col-sm-4">
                        <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Clock-Back color--primary"></i>
                            <div class="feature__body">
                                <p> {{ $technique->title }} - {{ $technique->description }} </p>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>


@endsection