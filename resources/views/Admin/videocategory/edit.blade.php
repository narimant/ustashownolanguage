@extends('Admin.master')

@section('script')
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body',{
            filebrowserUploadUrl:'/admin/panel/upload-image',
            filebrowserImageUploadUrl:'/admin/panel/upload-image'
        })
    </script>
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="card card-outline card-info">



                <div class="card-header">
                    <h3 class="card-title">
                       {{__('adminPanel.Edit Blog Category')}}
                    </h3>
                </div>
                <div class="card-body">

        @include('Admin.section.errors')
        <form action="{{route('blogCategories.update',['blogCategory'=>$blogCategory->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('put')

            <div class="form-group">
                <label  for="name">{{__('adminPanel.Category Name')}}</label>
                <input type="text" name="name" value="{{ $blogCategory->name }}" class="form-control" id="name" placeholder="insert category name " >
            </div>

            <div class="form-group">
                <label  for="color">{{__('adminPanel.Category Color')}}</label>
                <input type="color" id="color" name="color" value="{{$blogCategory->color}}">

            </div>


            <div class="form-group">
                <label  for="language">{{__('adminPanel.Language')}}</label>
                <select name="lang" id="language" class="form-control">

                    <option value="fa" {{$blogCategory->lang=='fa' ? 'selected' : ''}}>persian</option>


                </select>
            </div>
            <div class="form-group">
                <label  for="description">{{__('adminPanel.description')}}</label>
                <textarea name="description"  id="description" class="form-control">
{{$blogCategory->description}}
                </textarea>

            </div>
            {{--      SEO          --}}

            <div class="row mb-3">
                <div class="col-sm-12 form-group">
                    <label class="form-label" for="seoTitle">{{__('adminPanel.Seo Title')}}</label>
                    <input type="text" class="form-control" name="seoTitle" value="{{$blogCategory->seoTitle}}">
                </div>
                <div class="col-sm-12 form-group">
                    <label class="form-label" for="seoDescription">{{__('adminPanel.Seo Description')}}</label>
                    <input type="text" class="form-control" name="seoDescription" value="{{$blogCategory->seoDescription}}">
                </div>
                <div class="col-sm-12 form-group">
                    <label class="form-label" for="seoKeyword">{{__('adminPanel.Seo Keyword')}}</label>
                    <input type="text" class="form-control" name="seoKeyword" value="{{$blogCategory->seoKeyword}}">
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">{{__('adminPanel.Update')}}</button>
            </div>
        </form>

                </div>

            </div>
        </div>
    </div>

@endsection
