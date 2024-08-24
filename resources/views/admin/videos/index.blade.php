@extends('admin.layouts.admin')
@section('content')

    <?php  $routeName='admin.videos' ?>
    <a class="btn btn-primary my-1" href="{{route($routeName.'.create')}}">Add</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Video name</th>
                    <th>Video link</th>
                    <th>Category</th>
                    <th>Cover photo</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($models as $model)

                    <tr>
                        <td>{{$model->id}}</td>
                        <td>{{$model->video_name ?? ''}}</td>
                        <td>{{$model->video_link ?? ''}}</td>
                        <td>{{$model->category->name ?? ''}}</td>
                        <td><img width="60" height="60" src="{{asset('storage/'.$model->cover_photo)}}" alt=""></td>
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
