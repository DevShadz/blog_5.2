@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
                <div class="panel-heading">{{$task -> name}}</div>

                <div class="panel-body">
                
                    {{$task -> info}}

                </div>


            </div>
            <div >
                {{ link_to_route('task.index', 'Back', null , ['class'=>'btn btn-success']) }}

            </div>
        </div>
    </div>
</div>
@endsection
