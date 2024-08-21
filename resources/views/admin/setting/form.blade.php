
@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.setting' ?><br>
    <div class="card">

        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset


                <div class="form-group">
                    <label>Address label</label>
                    <input type="text" placeholder="Address label" name="address_label" value="{{old('address_label',$model->address_label ?? '')}}" class="form-control">
                    @error('address_label')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" placeholder="Address" name="address" value="{{old('address',$model->address ?? '')}}" class="form-control">
                    @error('address')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Address image</label>
                    @isset($model)
                        <br>
                        <img width="200" src="{{asset('storage/'.$model->address_image)}}">
                    @endisset
                    <input type="file" name="address_image" class="form-control">
                    @error('address_image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Phone label</label>
                    <input type="text" placeholder="Phone label" name="phone_label" value="{{old('phone_label',$model->phone_label ?? '')}}" class="form-control">
                    @error('phone_label')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" placeholder="Phone" name="phone" value="{{old('phone',$model->phone ?? '')}}" class="form-control">
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Phone image</label>
                    @isset($model)
                        <br>
                        <img width="200" src="{{asset('storage/'.$model->phone_image)}}">
                    @endisset
                    <input type="file" name="phone_image" class="form-control">
                    @error('phone_image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label>Email label</label>
                    <input type="text" placeholder="Email label" name="email_label" value="{{old('email_label',$model->email_label ?? '')}}" class="form-control">
                    @error('email_label')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" placeholder="Email" name="email" value="{{old('email',$model->email ?? '')}}" class="form-control">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email image</label>
                    @isset($model)
                        <br>
                        <img width="200" src="{{asset('storage/'.$model->email_image)}}">
                    @endisset
                    <input type="file" name="email_image" class="form-control">
                    @error('email_image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Logo</label>
                    @isset($model)
                        <br>
                        <img width="200" src="{{asset('storage/'.$model->logo)}}">
                    @endisset
                    <input type="file" name="logo" class="form-control">
                    @error('logo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Logo second</label>
                    @isset($model)
                        <br>
                        <img width="200" src="{{asset('storage/'.$model->logo_second)}}">
                    @endisset
                    <input type="file" name="logo_second" class="form-control">
                    @error('logo_second')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>CV</label>
                    @isset($model)
                        <br>
                        <img width="200" src="{{asset('storage/'.$model->cv)}}">
                    @endisset
                    <input type="file" name="cv" class="form-control">
                    @error('cv')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
