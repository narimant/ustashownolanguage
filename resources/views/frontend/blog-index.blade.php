@extends('frontend.frontendlayout.frontendmaster')



@section('content')

    <div class="container crumb p-4">

    </div>



    <header class="archive-header pt-9 pb-9">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12 col-12">
                    <div class="text-center mb-5">
                        <h1 class="page-title display-2 fw-bold">{{__('adminPanel.Ustashow Blog')}}</h1>
                        <div class="taxonomy-description lead"></div>
                    </div>
                    <form role="search" method="get" class="search-form row px-md-20" action="https://geeks.madrasthemes.com/">
                        <div class="mb-3 col ps-0  ms-2 ms-md-0">
                            <input type="search" class="search-field form-control" placeholder="{{__('messages.Search In Blog...')}}" value="" name="s" title="Search for:">
                            <input type="hidden" class="form-control" name="post_type" value="post">
                        </div>
                        <div class="mb-3 col-auto ps-0">
                            <button class="btn btn-primary" type="submit">{{__('messages.Search')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

<div class="pb-8">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Flush Nav -->
                <div class="flush-nav">
                    <ul id="menu-blog-categories" class="nav ms-n4 text-nowrap" itemscope="" >
                        <li id="menu-item-2812" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2812 nav-item">
                            <a  class="nav-link {{ Route::is('blog.index')? 'active': '' }}" itemprop="url" href="{{route('blog.index')}}" onclick="return true">
                                <span itemprop="name">{{__('messages.All')}}</span>
                            </a>

                        </li>

                        @foreach($allcategory as $category)
                            <li id="menu-item-2812" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2812 nav-item">
                                <a  class="nav-link " itemprop="url" href="{{$category->path()}}" onclick="return true">
                                    <span itemprop="name">{{$category->name}}</span>
                                </a>

                            </li>
                            @endforeach
                    </ul>




                </div>
            </div>
            @foreach($articles as $article)


                @if($loop->first)

                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4 shadow-lg">
                            <div class="row g-0">
                                <!-- Image -->
                                <a href="{{ $article->path() }}" class="col-lg-8 col-md-12 col-12 bg-cover img-left-rounded" style="background-image: url({{$article->images['images']['600']}});">
                                    <img src="{{$article->images['images']['600']}}" class="img-fluid d-lg-none invisible" alt=""></a>
                                <div class="col-lg-4 col-md-12 col-12">
                                    <!-- Card body -->
                                    <div class="card-body">


                                        <a href="{{$article->BlogCategory->path() }}" class="fs-5 fw-semi-bold d-block mb-3">
                                            <span style="color:{{ $article->BlogCategory->color }}  "> {{$article->BlogCategory->name}}</span>
                                        </a>

                                        <h1 class="mb-2 mb-lg-4"> <a href="{{$article->path()}}" class="text-inherit">
                                               {{$article->title}}
                                            </a>
                                        </h1>
                                        <p>{!! $article->description !!}</p>
                                        <!-- Media content -->
                                        <div class="row align-items-center g-0 mt-lg-7 mt-4">
                                            <div class="col-auto">
                                                <!-- Img  -->
                                                <img src="{{$article->user->userimage()}}" alt="" class="rounded-circle avatar-sm me-2">
                                            </div>
                                            <div class="col lh-1 ">
                                                <h5 class="mb-1">{{$article->user->name}}</h5>
                                                <p class="fs-6 mb-0">{{$article->CreateTimeDiff}}</p>
                                            </div>
                                            <div class="col-auto">
                                                @if($article->ReadTime != null)
                                                {{$article->ReadTime}} {{__('adminPanel.min read')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-none d-lg-block">
                        <!-- Card -->
                        <div class="card mb-4 shadow-lg">
                            <a href="{{ $article->path() }}" class="card-img-top"> <img src="{{$article->images['images']['300']}}" class="card-img-top rounded-top-md" alt=""></a>
                            <!-- Card body -->
                            <div class="card-body">

                                    <a href="{{$article->BlogCategory->path()}}" class="fs-5 fw-semi-bold d-block mb-3">
                                        <span style="color: {{$article->BlogCategory->color}};"> {{$article->BlogCategory->name}}</span>
                                    </a>


                                <h3><a href="{{ $article->path() }}" class="text-inherit">
                                        {{ \Str::limit($article->title, 25, ' ...')}}
                                    </a>
                                </h3>
                                <p>{{ \Str::limit($article->description, 80, ' ...')}}</p>
                                <!-- Media content -->
                                <div class="row align-items-center g-0 mt-4">
                                    <div class="col-auto">
                                        <img src="{{$article->user->userimage()}}" alt="" class="rounded-circle avatar-sm me-2">
                                    </div>
                                    <div class="col lh-1">
                                        <h5 class="mb-1">{{$article->user->name}}</h5>
                                        <p class="fs-6 mb-0">{{$article->CreateTimeDiff}}</p>
                                    </div>
                                    <div class="col-auto">
                                    @if($article->ReadTime != null)
                                    {{$article->ReadTime}} {{__('adminPanel.min read')}} </p>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach



            <!-- Buttom -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center mt-4">
                {{$articles->links()}}
            </div>
        </div>
    </div>
</div>

@endsection
