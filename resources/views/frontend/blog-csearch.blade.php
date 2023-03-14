@extends('frontend.frontendlayout.frontendmaster')



@section('content')




    <header class="archive-header pt-9 pb-9">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12 col-12">
                    <div class="text-center mb-5">
                        <h1 class="page-title display-2 fw-bold">{{$category->name}}</h1>
                        <div class="taxonomy-description lead">
                            <p>
                                {{$category->description}}
                            </p>
                        </div>
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

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Flush Nav -->
                <div class="flush-nav">
                    <ul id="menu-blog-categories" class="nav ms-n4 text-nowrap" itemscope="" >
                        <li id="menu-item-2812" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2812 nav-item">
                            <a  class="nav-link " itemprop="url" href="{{route('blog.index')}}" onclick="return true">
                                <span itemprop="name">{{__('messages.All')}}</span>
                            </a>

                        </li>

                        @foreach($allcategory as $categoryIteam)
                            <li id="menu-item-2812" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2812 nav-item">
                                <a  class="nav-link {{ $categoryIteam->id==$category->id? 'active': '' }}"  href="{{$categoryIteam->path()}}" onclick="return true">
                                    <span itemprop="name">{{$categoryIteam->name}}</span>
                                </a>

                            </li>
                        @endforeach
                    </ul>




                </div>
            </div>

        </div>
    </div>


    <div class="loop-content pb-12">
        <div class="container">
            <div class="row" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 476.812px;">

                @foreach($articles as $article)

                    <article id="post-64" class="grid-item col-xl-4 col-lg-4 col-md-6 col-12 post-64 post type-post status-publish format-standard has-post-thumbnail hentry category-tutorial category-workshop tag-business tag-course tag-dashboard tag-e-commerce tag-landings tag-marketing" >
                    <div class="card mb-4 shadow-lg">
                        <a href="{{$article->path()}}" class="card-img-top">
                            <img  src="{{$article->images['images']['600']}}"
                                  class="card-img-top rounded-top img-fluid wp-post-image"
                                  alt="" decoding="async"
                                   > </a>
                        <div class="card-body">
                            <div class="text-primary mb-3 z-index-2 position-relative post__categories--loop">
                                <a href="{{$article->BlogCategory->path() }}" class="fs-5 fw-semi-bold d-block mb-3">
                                    <span style="color:{{ $article->BlogCategory->color }}  "> {{$article->BlogCategory->name}}</span>
                                </a>

                            </div>
                            <h3 class="entry-title">
                                <a href="{{$article->path()}}" class="text-inherit" rel="bookmark"> {{$article->title}}</a></h3> <p>{!! $article->description !!}</p>
                            <div class="row align-items-center g-0 mt-4">
                                <div class="col-auto">
                                    <img width="32" height="32" src="{{$article->user->userimage()}}" class="avatar avatar-32 photo rounded-circle avatar-sm me-2" alt="" decoding="async" loading="lazy" srcset="https://geeks.madrasthemes.com/wp-content/uploads/2021/09/avatar-9-100x100.jpg 100w, https://geeks.madrasthemes.com/wp-content/uploads/2021/09/avatar-9-150x150.jpg 150w, https://geeks.madrasthemes.com/wp-content/uploads/2021/09/avatar-9.jpg 256w" sizes="(max-width: 32px) 100vw, 32px"> </div>
                                <div class="col lh-1">
                                    <h5 class="mb-1">{{ auth()->user()->name}}</h5>
                                    <p class="fs-6 mb-0"><a href="{{$article->path()}}" class="text-body stretched-link" rel="bookmark">

                                            <time class="updated" >{{$article->CreateTimeDiff}}</time>
                                        </a>
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <p class="font-size-xs mb-0">
                                       @if($article->ReadTime != null)
                                        {{$article->ReadTime}} {{__('adminPanel.min read')}} </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div> </article>

                @endforeach

            </div>
        </div>
    </div>

@endsection
