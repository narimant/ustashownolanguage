@extends('frontend.frontendlayout.frontendmaster')

@section('style')
    <link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />
    <link href="https://unpkg.com/@silvermine/videojs-quality-selector/dist/css/quality-selector.css" rel="stylesheet">
    @endsection
@section('content')



    <div class="p-lg-5 py-5">
        <div class="container">

            <!-- Content -->
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-12 mb-4 mb-xl-0">
                    <!-- Card -->
                    <div class="card mb-4">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h1 class="fw-semi-bold mb-2">
                                    {{ $episode->title }}
                                </h1>
                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                   data-bs-original-title="Add to Bookmarks">
                                    <i class="fe fe-bookmark fs-3 text-inherit"></i>
                                </a>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{$episode->course->user->userimage()}}" class="rounded-circle avatar-md"
                                         alt="">
                                    <div class="ms-2 lh-1">
                                        <h4 class="mb-1">{{$episode->course->user->name}}</h4>

                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-outline-white btn-sm">{{__('messages.Follow')}}</a>
                                </div>
                            </div>


                            <div class="mt-4 pt-4 border-top">
                                <h3 class="mb-2">{{__('messages.Episode Description')}}</h3>
                                {!! $episode->body !!}
                            </div>

                        </div>

                    </div>


                    <div class="card rounded-3 mb-5">
                        <!-- Card body -->
                        <div class="card-body">


                            <div class="mb-3">
                                <!-- Review -->
                                <div class="d-lg-flex align-items-center justify-content-between mb-5">
                                    <div class="mb-3 mb-lg-0">
                                        <h3 class="mb-0">{{__('messages.Reviews')}}</h3>
                                    </div>
                                    <div>
                                        <!-- Search -->
                                        <form class="form-inline">
                                            <div class="d-flex align-items-center me-2">
                            <span class="position-absolute ps-3">
                              <i class="fe fe-search"></i>
                            </span>
                                                <input type="search" class="form-control ps-6"
                                                       placeholder="{{__('messages.Search Review')}}">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @include('frontend.frontendlayout.comments',['comments'=>$comment,'subject'=>$episode])
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <a href="{{$downloadLink}}" class="btn btn-success btn-block" style="display: block!important;">
                                <span class="fe fe-download"></span>
                                {{__('messages.Download')}}
                            </a>
                        </div>

                    </div>
                    <div class="card" id="courseAccordion">
                        <div>
                            <!-- List group -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item p-0 bg-transparent">
                                    <!-- Toggle -->
                                    <a class="h4 mb-0 d-flex align-items-center text-inherit text-decoration-none py-3 px-4">
                                        <div class="me-auto">
                                            {{__('messages.Course Overview')}}
                                            <p class="mb-0 text-muted fs-6 mt-1 fw-normal">{{$course->episodes->count()}} {{__('messages.videos')}}
                                                ({{ $course->time }})
                                            </p>
                                        </div>
                                        <!-- Chevron -->
                                        <span class="chevron-arrow ms-4">
                                          <i class="fe fe-chevron-down fs-4"></i>
                                        </span>
                                    </a>
                                    <!-- Row -->
                                    <!-- Collapse -->

                                    <!-- List group item -->
                                    <ul class="list-group list-group-flush">

                                        <!-- List group item -->
                                    @foreach( $course->episodes()->latest()->get() as $episodes)

                                        @if($episodes->type=='cash' )
                                            <!-- if episode is cash or vip -->
                                                <li class="list-group-item disabled" aria-disabled="true">
                                                    <a href="#"
                                                       class="d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                                                        <div class="text-truncate">
                                                            <span
                                                                class="icon-shape bg-light text-muted icon-sm rounded-circle me-2"><i
                                                                    class="fe fe-lock fs-4"></i></span>
                                                            <span>{{ $episodes->title }}</span>
                                                        </div>
                                                        <div class="text-truncate">
                                                            <span>{{ $episodes->time }}</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            @else


                                                <li class="list-group-item
                                            @if('/'.request()->path()== $episodes->path()) active @endif
                                                    list-group-item-action ">
                                                    <a href="{{ $episodes->path() }}" class="d-flex justify-content-between align-items-center
                                               @if('/'.request()->path()== $episodes->path()) text-white  @else  text-inherit  @endif

                                                        text-decoration-none">
                                                        <div class="text-truncate">
                                                        <span class="icon-shape
                                                        @if('/'.request()->path()== $episodes->path()) bg-light  text-primary @else  bg-success  text-white @endif

                                                            icon-sm rounded-circle me-2">
                                                            <i class="fe fe-unlock fs-4"></i>

                                                        </span>
                                                            <span>{{ $episodes->title }}</span>


                                                        </div>
                                                        <div class="text-truncate">
                                                            <span>{{ $episodes->time }}</span>
                                                        </div>
                                                    </a>
                                                </li>


                                            @endif

                                        @endforeach

                                    </ul>

                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


