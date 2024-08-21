
@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.socials' ?><br>
    <div class="card">

        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset


                <div class="form-group">
                    <label>Social Label</label>
                    <input type="text" placeholder="Social Label" name="social_label" value="{{old('social_label',$model->social_label ?? '')}}" class="form-control">
                    @error('social_label')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Social</label>
                    <input type="text" placeholder="Social" name="social" value="{{old('social',$model->social ?? '')}}" class="form-control">
                    @error('social')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Social Image</label>
                    @isset($model)
                        <br>
                        <img width="200" src="{{asset('storage/'.$model->social_image)}}">
                    @endisset
                    <input type="file" name="social_image" class="form-control">
                    @error('social_image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Social Image Two</label>
                    @isset($model)
                        <br>
                        <img width="200" src="{{asset('storage/'.$model->social_image_two)}}">
                    @endisset
                    <input type="file" name="social_image_two" class="form-control">
                    @error('social_image_two')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>



                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
