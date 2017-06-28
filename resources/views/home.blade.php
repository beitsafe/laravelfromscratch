@extends('layouts.master')

@section('main')


    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <div class="cta">
                        <h2>AND YOUR IN!!!!!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="switchable">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5">
                    <div class="switchable__text">
                        <h2>Create a post</h2>
                        <hr class="short">
                        <form>

                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-xs-12"> <input type="text" name="Techinque" placeholder="Technique Name"> </div>
                                <div class="col-xs-12"> <input type="text" name="Description" placeholder="Technique Description"> </div>
                                <div class="col-xs-12"> <button type="submit" class="btn btn--primary">Create Post</button> </div>
                                <hr> </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5"> <img alt="Image" class="border--round box-shadow-shallow" src="{{ asset('img/landing-7.jpg') }}"> </div>
            </div>
        </div>
    </section>


@endsection
