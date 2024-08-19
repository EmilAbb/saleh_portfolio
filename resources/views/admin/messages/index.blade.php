@extends('admin.layouts.admin')
@section('content')

    <?php  $routeName='admin.messages' ?>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($models as $model)

                    <tr>
                        <td>{{$model->id}}</td>
                        <td>{{$model->name}}</td>
                        <td>{{$model->email}}</td>
                        <td>{{$model->message}}</td>
                        <td>{{$model->created_at}}</td>
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
