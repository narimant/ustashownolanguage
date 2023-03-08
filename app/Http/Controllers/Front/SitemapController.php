<?php

namespace App\Http\Controllers\Front;

use App\Article;
use App\Category;
use App\Course;
use App\Episode;
use App\Http\Controllers\Controller;
use App\Page;
use App\Tag;
use Carbon\Carbon;


class SitemapController extends Controller
{
    public function index()
    {


        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap', 60);

        if(! $sitemap->isCached() ) {
            $date = Carbon::createFromFormat('Y-m-d H:i:s',now());

            $sitemap->addSitemap(url()->to('/sitemap-blog'),$date,'0.9','daily');
            $sitemap->addSitemap(url()->to('/sitemap-courses'),$date,'0.9','daily');
            $sitemap->addSitemap(url()->to('/sitemap-tags'),$date,'0.9','daily');
            $sitemap->addSitemap(url()->to('/sitemap-categories'),$date,'0.9','daily');
            $sitemap->addSitemap(url()->to('/sitemap-episodes'),$date,'0.9','daily');
            $sitemap->addSitemap(url()->to('/sitemap-pages'),$date,'0.9','daily');
        }

        return $sitemap->render('sitemapindex');
    }

    public function articles()
    {

        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.articles', 60);

        if(! $sitemap->isCached() ) {
            $articles = Article::latest()->status()->get();
            if(!empty($articles))
            {
                foreach ($articles as $article) {
                    $path='/blog/'.$article->slug;

                    $sitemap->add(url()->to($path),$article->created_at ,'0.9','Weekly');
                }
            }

        }

        return $sitemap->render('xml');
    }



    public function courses()
    {

        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.courses', 60);

        if(! $sitemap->isCached() ) {
            $courses = Course::latest()->status()->get();
            if (!empty($courses))
            {
                foreach ($courses as $course) {
                    $path='/course/'.$course->slug;

                    $sitemap->add(url()->to($path),$course->created_at ,'0.9','Weekly');
                }
            }

        }

        return $sitemap->render('xml');
    }

    public function tags()
    {

        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.tags', 60);

        if(! $sitemap->isCached() ) {
            $tags = Tag::latest()->get();
            if (!empty($tags))
            {
                foreach ($tags as $tag) {
                    $path='/tag/'.$tag->slug;

                    $sitemap->add(url()->to($path),$tag->created_at ,'0.9','Weekly');
                }
            }

        }

        return $sitemap->render('xml');
    }

    public function categories()
    {

        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.categories', 60);

        if(! $sitemap->isCached() ) {
            $categories = Category::latest()->get();
            if (!empty($categories))
            {
                foreach ($categories as $category) {
                    $path='/category/'.$category->slug;

                    $sitemap->add(url()->to($path),$category->created_at ,'0.9','Weekly');
                }
            }

        }

        return $sitemap->render('xml');
    }



    public function episodes()
    {

        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.episodes', 60);

        if(! $sitemap->isCached() ) {
            $episodes = Episode::latest()->get();
            if (!empty($episodes))
            {
                foreach ($episodes as $episode) {
                    $path=$episode->path();

                    $sitemap->add(url()->to($path),$episode->created_at ,'0.9','Weekly');
                }
            }

        }

        return $sitemap->render('xml');
    }

    public function pages()
    {

        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.page', 60);

        if(! $sitemap->isCached() ) {
            $episodes = Page::latest()->get();
            if (!empty($episodes))
            {
                foreach ($episodes as $episode) {
                    $path=$episode->path();

                    $sitemap->add(url()->to($path),$episode->created_at ,'0.9','Weekly');
                }
            }

        }

        return $sitemap->render('xml');
    }
}
