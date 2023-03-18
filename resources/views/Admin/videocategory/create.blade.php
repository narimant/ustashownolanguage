@extends('Admin.master')




@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="card card-outline card-info">



                <div class="card-header">
                    <h3 class="card-title">
                        {{__('adminPanel.Create Category')}}
                    </h3>
                </div>
                <div class="card-body">

                    @include('Admin.section.errors')
                    <form action="{{route('blogCategories.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf

                        <div class="form-group">
                            <label  for="name">{{__('adminPanel.Category Name')}}</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="insert name " >
                        </div>
                        <div class="form-group">
                            <label  for="color">{{__('adminPanel.Category Color')}}</label>
                            <input type="color" id="color" name="color" value="#ff0000">

                        </div>





                        <div class="form-group">
                            <label  for="description">{{__('adminPanel.description')}}</label>
                            <textarea name="description"  id="description" class="form-control">
                </textarea>

                        </div>


                        {{--      SEO          --}}
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-12 form-group">
                                <label class="form-label" for="seoTitle">{{__('adminPanel.Seo Title')}}</label>
                                <input type="text" class="form-control" name="seoTitle" value="{{old('seoTitle')}}">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="form-label" for="seoDescription">{{__('adminPanel.Seo Description')}}</label>
                                <input type="text" class="form-control" name="seoDescription" value="{{old('seoDescription')}}">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="form-label" for="seoKeyword">{{__('adminPanel.Seo Keyword')}}</label>
                                <input type="text" class="form-control" name="seoKeyword" value="{{old('seoKeyword')}}">
                            </div>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
