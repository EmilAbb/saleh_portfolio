@extends('admin.layouts.admin')
@section('content')

    <?php  $routeName='admin.setting' ?>
    <a class="btn btn-primary my-1" href="{{route($routeName.'.create')}}">Add</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Address label</th>
                    <th>Address</th>
                    <th>Address image</th>
                    <th>Phone label</th>
                    <th>Phone</th>
                    <th>Phone image</th>
                    <th>Email label</th>
                    <th>Email</th>
                    <th>Email image</th>
                    <th>Logo</th>
                    <th>Logo second</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($models as $model)

                    <tr>
                        <td>{{$model->id}}</td>
                        <td>{{$model->address_label}}</td>
                        <td>{{$model->address}}</td>
                        <td><img width="40" height="40" src="{{asset('storage/'.$model->address_image)}}" alt=""></td>
                        <td>{{$model->phone}}</td>
                        <td>{{$model->phone_label}}</td>
                        <td><img width="40" height="40" src="{{asset('storage/'.$model->phone_image)}}" alt=""></td>
                        <td>{{$model->email}}</td>
                        <td>{{$model->email_label}}</td>
                        <td><img width="40" height="40" src="{{asset('storage/'.$model->email_image)}}" alt=""></td>
                        <td style="background-color: #000;"><img width="40" height="40" src="{{asset('storage/'.$model->logo)}}" alt=""></td>
                        <td><img width="40" height="40" src="{{asset('storage/'.$model->logo_second)}}" alt=""></td>
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
