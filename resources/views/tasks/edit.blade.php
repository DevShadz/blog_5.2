@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Form</div>

                <div class="panel-body">
                 
                     {!! Form::model($task,array('route'=>['task.update',$task->id], 'method' => 'PUT' ))!!}

                    {!! csrf_field() !!}

                    <div class='form-group'>
                        {!! Form::label('Name','Enter Name') !!}
                        {!! Form::text('name',null, ['class'=>'form-control']) !!}

                    </div>
                    <div class='form-group'>
                        {!! Form::label('Info','Enter Info') !!}
                        {!! Form::text('info',null, ['class'=>'form-control']) !!}

                    </div>
                    <div class='form-group'>
                        {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!}
                        

                    </div>

                    {!! Form::close()!!}
                </div>

                <div >

               @if (count($errors) > 0)
                    <ul class="aler alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                @endif

               

                </div>
            </div>
        </div>
    </div>
</div>
@endsection