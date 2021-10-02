<form method="GET" action="{{route('main')}}">



                <button class="nav-link dropdown-toggle btn btn-secondary" data-toggle="dropdown" style="color: white; margin-top: 20px;">
                    Sorting
                </button>
        <div class="d-flex flex-row-reverse">
            <button class="btn btn-info" style="margin-top: -38px;">
                <a href="{{route('main')}}" style="text-decoration:none; color: white">Reset filters</a>
            </button>
        </div>



    <ul class="dropdown-menu" style="padding-left: 5px">

        <li><label for="name"><input type="checkbox" name="name" id="name"> Name: A-Z</label></li>
        <li><label for="email"><input type="checkbox" name="email" id="email"> Email:A-Z</label></li>
        <li><label for="done"><input type="checkbox" name="done" id="done"> Done</label></li>
        <li><label for="no"><input type="checkbox" name="no" id="no"> Note</label></li>
        <li><button type="submit" class ="btn btn-primary" style="width: 90px; height: 25px; font-size: 10px; text-align: center">Отфильтровать</button></li>
    </ul>
</form>

<h1 class="display-4 mt-5" style="text-align: center">Tasks</h1>
@foreach($articles as $article)

    <ol class="list-group mt-5">
        <li class="list-group-item d-flex justify-content-between align-items-start mt-1">
            <div class="ms-2 me-auto">
                <div class="fw-bold">{{$article->name}}</div>
                <h3 style="font-size: 10px;">{{$article->email}}</h3>
                {{$article->task_body}}
            </div>
            @if($article->done == null)
                <span class="badge bg-danger rounded-pill">not completed</span>
            @else
                <span class="badge bg-success rounded-pill">Edited by the administrator</span>
                @endif
        </li>

        @auth
            <div class="d-flex justify-content-center"><a href="/article/{{$article->id}}/edit" type="button" class="btn btn-info" style="width: 100px; margin-top: 10px">Edit</a></div>

        @endauth
    </ol>


@endforeach
<div class="d-flex justify-content-center mt-5">
    {{$articles->links()}}
</div>


