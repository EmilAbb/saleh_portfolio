
@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.categories' ?><br>
    <div class="card">

        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset



                <div class="form-group">
                    <label>Name</label>
                    <input type="text" placeholder="Name" name="name" value="{{old('name',$model->name ?? '')}}" class="form-control">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>




                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
