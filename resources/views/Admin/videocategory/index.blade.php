@extends('Admin.master')


@section('content')

    <div class="content">
        <div class="container-fluid">


            <div class="card">
                <div class="card-header d-flex align-content-center">
                    <h3 class="card-title ">{{__('adminPanel.All Category')}}</h3>
                    <a href="{{ route('blogCategories.create') }}" class="btn btn-warning ml-auto p-2">{{__('adminPanel.Create Category')}}</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="col-2">#</th>
                            <th>{{__('adminPanel.Category Name')}}</th>

                            <th>{{__('adminPanel.Category Mode')}}</th>
                            <th class="col-2">{{__('adminPanel.Settings')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $j=1
                        @endphp
                        @foreach($categories as $category)
                            @if($category->parent_id==null)
                            <tr>
                                <td>{{$j++}}</td>
                                <td><A href="{{$category->path()}}"> {{$category->name}}</A></td>


                                <td>{{$category->category_mode}}</td>
                                <td>
                                    <form action="{{ route('blogCategories.destroy' , ['blogCategory'=>$category->id]) }}" method="post">

                                        @method('DELETE')
                                        @csrf
                                        <div class="btn btn-group">
                                            <a   href="{{ route('blogCategories.edit', [ 'blogCategory'=>$category->id]) }}" class="btn btn-primary">{{__('adminPanel.Edit')}}</a>
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')" >{{__('adminPanel.Delete')}}</button>
                                        </div>
                                    </form>
                                </td>

                            </tr>
                            @endif





                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body paginate -->
                {{ $categories->links() }}
            </div>





        </div>
    </div>

@endsection
