
@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.videos' ?><br>
    <div class="card">

        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset


                <div class="form-group">
                    <label>Video name</label>
                    <input type="text" placeholder="Video name" name="video_name" value="{{old('video_name',$model->video_name ?? '')}}" class="form-control">
                    @error('video_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Video link</label>
                    <input type="text" placeholder="Video link" name="video_link" value="{{old('video_link',$model->video_link ?? '')}}" class="form-control">
                    @error('video_link')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label>Category</label>
                    <select  class="form-control select2 product-category" name="category_id">
                        <option>Select category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                    @error('category_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label>Cover photo</label>
                    @isset($model)
                        <br>
                        <img width="200" src="{{asset('storage/'.$model->cover_photo)}}">
                    @endisset
                    <input type="file" name="cover_photo" class="form-control">
                    @error('cover_photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
