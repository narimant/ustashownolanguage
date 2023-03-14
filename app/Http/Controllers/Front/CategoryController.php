<?php

namespace App\Http\Controllers\Front;


use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;


class CategoryController extends Controller
{

        static $categoryids=[];
    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {



    }

//this method for fech child category id of parent id and return array result
    private function categoryTree($parent_id , $sub_mark = ''){
        global $categoryids;

        //$query = $db->query("SELECT * FROM categories WHERE parent_id = $parent_id ORDER BY name ASC");
          $query=Category::where('parent_id',$parent_id)->get();

        //return $query;
        if (!$query->isEmpty() )
        {
            foreach ($query as $value){

                if($value->parent_id!=null){
                    $categoryids[]=$value->id;
                    $this->categoryTree($value->id);
                }
            }

        }else
        {
            $categoryids=[$parent_id];
        }

        return $categoryids;
    }

}
