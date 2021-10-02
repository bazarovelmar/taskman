@extends('layouts.app')

@section('content')

    <h1 class="display-6 mt-5">Editing</h1>
    <form action="/article/edit" method="post" class="mt-5">
        @csrf

        <input type="hidden" name="id" value="{{$article->id}}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$article->email}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" value="{{$article->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Your Task</label>
            <textarea class="form-control" id="exampleInputBody" name="body">{{$article->task_body}}</textarea>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="0" id="flexCheckIndeterminate" name="checkbox_info">
            <label class="form-check-label" for="flexCheckIndeterminate">
                Done
            </label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Edit</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
        $('#flexCheckIndeterminate').on('click', function () {
            if ( $(this).prop('checked') === true ) {
                $('#flexCheckIndeterminate').val('1');
            } else {
                $('#flexCheckIndeterminate').val('0');
            }
        })
    </script>

@endsection
