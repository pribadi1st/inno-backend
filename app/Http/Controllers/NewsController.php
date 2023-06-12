<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //
    public function index(Request $request)
    {
        $searchKeyword = $request->query('keyword', '');
        $categoryIds = $request->input('category_ids', []);
        $sourceIds = $request->input('source_ids', []);
        $page = $request->has('page') && $request->query('page') > 0? $request->query('page') : 1;
        $perPage = $request->has('per_page') && $request->query('per_page') > 0 ? $request->query('per_page') : 10;
        $totalPage = ceil(News::count() / $perPage);
        $news = News::where(function ($query) use ($searchKeyword) {
                        $query->where('title', 'like', "%$searchKeyword%")
                            ->orWhere('body', 'like', "%$searchKeyword%")
                            ->orWhere('content', 'like', "%$searchKeyword%");
                        });
        if (!empty($categoryIds)) {
            $categoryIds = array_map('intval', $categoryIds);
            $news->whereIn('category_id', $categoryIds);
        }
        if (!empty($sourceIds)) {
            $sourceIds = array_map('intval', $sourceIds);
            $news->whereIn('news_source_id', $sourceIds);
        }
        $news = $news->paginate($perPage, ['*'], 'page',$page);
        return responseJson($news);
    }
}
