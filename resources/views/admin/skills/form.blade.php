
@extends('admin.layouts.admin')
@section('content')
    <?php  $routeName='admin.skills' ?><br>
    <div class="card">

        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset


{{--                <div class="card card-primary card-tabs">--}}
{{--                    <div class="card-header p-0 pt-1">--}}
{{--                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">--}}
{{--                            @foreach(config('app.languages') as $lang)--}}
{{--                                <li class="nav-item ">--}}
{{--                                    <a--}}
{{--                                        class="nav-link {{$loop->first ? 'active show' : ''}}@error("$lang.title") text-danger @enderror"--}}
{{--                                        id="custom-tabs-one-home-tab" data-toggle="pill" href="#tab-{{$lang}}"--}}
{{--                                        role="tab" aria-controls="custom-tabs-one-home"--}}
{{--                                        aria-selected="true">{{$lang}}</a>--}}
{{--                                </li>--}}

{{--                            @endforeach--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="tab-content" id="custom-tabs-one-tabContent">--}}
{{--                            @foreach(config('app.languages') as $lang)--}}
{{--                                <div class="tab-pane fade {{$loop->first ? 'active show' : ''}}" id="tab-{{$lang}}"--}}
{{--                                     role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>Title</label>--}}
{{--                                        <input type="text" placeholder="Title" name="{{$lang}}[title]"--}}
{{--                                               value="{{old($lang.'title', isset($model) ? $model->translateOrDefault($lang)->title : '' )}}"--}}
{{--                                               class="form-control">--}}
{{--                                        @error("$lang.title")--}}
{{--                                        <span class="text-danger">{{$message}}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>Text</label>--}}
{{--                                        <input type="text" placeholder="Text" name="{{$lang}}[text]"--}}
{{--                                               value="{{old($lang.'text', isset($model) ? $model->translateOrDefault($lang)->text : '' )}}"--}}
{{--                                               class="form-control">--}}
{{--                                        @error("$lang.text")--}}
{{--                                        <span class="text-danger">{{$message}}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}


                <div class="form-group">
                    <label>Skill name</label>
                    <input type="text" placeholder="Skill name" name="skill_name" value="{{old('skill_name',$model->skill_name ?? '')}}" class="form-control">
                    @error('skill_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Skill percent</label>
                    <input type="text" placeholder="Skill percent" name="skill_percent" value="{{old('skill_percent',$model->skill_percent ?? '')}}" class="form-control">
                    @error('skill_percent')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Featured</label>
                    <input type="hidden" name="featured" value="0">
                    <input type="checkbox" name="featured" value="1" {{ old('featured', $model->featured ?? 0) ? 'checked' : '' }} class="form-control">
                    @error('featured')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
