@extends('layouts.app')

@section('content')

    @include('components.article')

    <h1 class="display-6 mt-5 mb-5">Form for the task</h1>
    <form action="/add" method="post" class="mt-3" style="width: 400px">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Your Task</label>
            <textarea class="form-control" id="exampleInputBody" name="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>

@endsection
