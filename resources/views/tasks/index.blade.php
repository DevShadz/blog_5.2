@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (Session::has('message'))
            <div class="alert alert-success"> {{ Session::get('message') }}</div>

            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Main Page</div>

                <div class="panel-body">
                <table class="table">
                    <tr>
                        <th> Names </th>
                        <th> <div = style="float: right;">Action </div> </th>
                    </tr>

                    @foreach ($tasks as $task)
                    <tr>

                        <td> {{ $task->name}} </td>
                        <td >  
                        <div = style="float: right;">
                          {!! Form::open (array ('route'=>['task.destroy', $task->id], 'method' => 'DELETE')) !!}

                         {{ link_to_route('task.show', 'Show', [$task->id], ['class'=>'btn btn-info']) }}

                        |

                        {{ link_to_route('task.edit', 'Edit', [$task->id], ['class'=>'btn btn-primary']) }}
                        
                         | 

                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}

                         {!! Form::close() !!} </div> 
                        </td>

                    </tr>
                     @endforeach


                </table>


                   <!--  @foreach ($tasks as $task)

                        {{ $task->name}}
                        <div style="float: right;"> 
                        {{ link_to_route('task.edit', 'Edit', [$task->id], ['class'=>'btn btn-primary']) }} 
                        | 
                        Delete 
                        </div> <br>
                    @endforeach -->

                </div>


            </div>
            <div >
                {{ link_to_route('task.create', 'Add New User', null , ['class'=>'btn btn-success']) }}

            </div>
        </div>
    </div>
</div>
@endsection
