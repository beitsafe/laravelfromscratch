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

                        @if($errors)
                            <div class="alert alert-danger">
                                <h1>Save failed</h1>
                                @foreach ($errors->all() as $message)
                                    {{ $message }}
                                @endforeach
                            </div>
                        @endif

                        {!! Form::model($techniques = App\Technique::all(), array('url' => $Form['url'], 'method' => $Form['method'], 'class' => 'form-horizontal')) !!}

                        <div class="form-group">
                            {!! Form::label('title', 'Technique Name:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-8">
                                {!! Form::text('title', $Technique->title, array('class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Technique Description:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-8">
                                {!! Form::textarea('description', $Technique->description, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-offset-2">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5"> <img alt="Image" class="border--round box-shadow-shallow" src="{{ asset('img/landing-7.jpg') }}"> </div>
            </div>
        </div>
    </section>


@endsection
