<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Search;
use Artisan;
use Cache;

class AdminController extends Controller
{
    public function admin_dashboard(Request $request)
    {
        // //CoreComponentRepository::initializeCache();
        $root_categories = Category::where('parent_id', 0)->get();

        $searches = Search::latest()->with(['user'])->limit(10)->get();

        $cached_graph_data = Cache::remember('cached_graph_data', 86400, function () use ($root_categories) {
            $num_of_sale_data = null;
            $qty_data = null;
            foreach ($root_categories as $key => $category) {
                $category_ids = \App\Utility\CategoryUtility::children_ids($category->id);
                $category_ids[] = $category->id;

                $products = Product::with('stocks')->whereIn('category_id', $category_ids)->get();
                $qty = 0;
                $sale = 0;
                foreach ($products as $key => $product) {
                    $sale += $product->num_of_sale;
                    foreach ($product->stocks as $key => $stock) {
                        $qty += $stock->qty;
                    }
                }
                $qty_data .= $qty . ',';
                $num_of_sale_data .= $sale . ',';
            }
            $item['num_of_sale_data'] = $num_of_sale_data;
            $item['qty_data'] = $qty_data;

            return $item;
        });

        return view('backend.dashboard', compact('root_categories', 'cached_graph_data', 'searches'));
    }

    function clearCache(Request $request)
    {
        Artisan::call('cache:clear');
        flash(trans('messages.cache_cleared_successfully'))->success();
        return back();
    }
}
