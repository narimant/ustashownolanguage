<?php

namespace App\Http\Controllers\Front;


use App\Article;
use App\BlogCategory;
use App\Category;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;


class BlogCategoryController extends Controller
{



    public function BlogIndex()
    {




        /*
       * seo strat
       */
        /*SEOMeta::setTitle($category->seoData('seoTitle'));
        SEOMeta::setDescription($category->seoData('seoDescription'));
        SEOMeta::addKeyword($category->seoData('seoKeyword'));

        OpenGraph::setTitle($category->seoData('seoTitle'));
        OpenGraph::setDescription($category->seoData('seoDescription'));
        OpenGraph::setUrl($_SERVER['HTTP_HOST'].$category->path());
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::setSiteName(\env('APP_NAME'));
        OpenGraph::addProperty('locale', $local);

        $categoryslug=$category->slug;
        SEOTools::setCanonical($_SERVER['HTTP_HOST'].$category->path());*/



        $allcategory=BlogCategory::latest()->get();
        $articles=Article::latest()->paginate(20);

        return view('frontend.blog-index',compact('articles','allcategory'));






    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $category)
    {

        $allcategory=BlogCategory::latest()->get();
        $articles=Article::where(['category_id'=>$category->id])->latest()->paginate(20);
        return view('frontend.blog-category', compact('articles','allcategory','category'));

    }







}
