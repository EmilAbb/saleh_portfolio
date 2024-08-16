@extends('admin.layouts.admin')
@section('content')

    <?php  $routeName='admin.skills' ?>
    <a class="btn btn-primary my-1" href="{{route($routeName.'.create')}}">Add</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Skill name</th>
                    <th>Skill percent</th>
                    <th>Featured</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($models as $model)

                    <tr>
                        <td>{{$model->id}}</td>
                        <td>{{$model->skill_name}}</td>
                        <td>{{$model->skill_percent}}</td>
                        <td>
                            @if($model->featured === 1)
                                <p style="color: #2be62b"> True</p>
                            @else
                                <p style="color: red">False</p>
                            @endif
                        </td>
                        <td>
                            <a class="btn bg-yellow" href="{{route($routeName.'.edit',$model->id)}}"><i class="fa-solid fa-pen text-white"></i></a>
                        </td>

                        <td>
                            <form class="delete-form" action="{{route($routeName.'.destroy',$model->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>

                            </form>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>

        </div>
{{--        <div class="container d-flex justify-content-center">--}}
{{--            {{$models->links('pagination::bootstrap-4')}}--}}
{{--        </div>--}}
    </div>
@endsection
