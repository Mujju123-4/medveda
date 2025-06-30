<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


class WebController extends Controller
{
    public function index()
    {
        $category = DB::table('category')->where('is_active', '=', 1)->select('category', 'image', 'id')->get();
        return view('web.index', compact('category'));
    }
    public function product_by_category(Request $request, $id)
    {
        $cat_id = Crypt::decrypt($id);

        $query = DB::table('product')
            ->leftJoin(DB::raw('
            (SELECT * FROM product_variants WHERE id IN (
                SELECT MIN(id) FROM product_variants GROUP BY product_id
            )) as pv
        '), 'product.id', '=', 'pv.product_id')
            ->leftJoin(DB::raw('
            (SELECT * FROM product_images WHERE id IN (
                SELECT MIN(id) FROM product_images GROUP BY product_id
            )) as pi
        '), 'product.id', '=', 'pi.product_id')
            ->leftJoin('category', 'product.category_id', '=', 'category.id')
            ->where('product.category_id', $cat_id)
            ->where('product.is_active', 1)
            ->select(
                'product.id',
                'product.name',
                'product.cut',
                'pv.weight',
                'pv.unit',
                'pv.serve',
                'pv.qty',
                'pv.discount',
                'pv.mrp',
                'pv.price',
                'pi.image',
                'category.category as category_name'
            );

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('product.name', 'like', "%{$request->search}%")
                    ->orWhere('category.category', 'like', "%{$request->search}%");
            });
        }

        if ($request->sort == 'asc') {
            $query->orderBy('pv.price', 'asc');
        } elseif ($request->sort == 'desc') {
            $query->orderBy('pv.price', 'desc');
        }

        $product = $query->get();

        if ($request->ajax()) {
            $html = view('web.partials.product-loop', ['product' => $product])->render();
            return response()->json(['html' => $html]);
        }


        return view('web.product_by_category', compact('product'));
    }
    public function allcategories()
    {
        $category = DB::table('category')->where('is_active', '=', 1)->select('category', 'image', 'id')->get();
        return view('web.allcategories', compact('category'));
    }
    public function product_detail($id)
    {
        $prodict_id = Crypt::decrypt($id);

        $product = DB::table('product')
            ->join('category', 'product.category_id', 'category.id')
            ->where('product.id', $prodict_id)
            ->select(
                'product.id',
                'product.name',
                'product.cut',
                'product.description',
                'category.category',
                'category.id as category_id',
            )
            ->first();


        $product->variants = DB::table('product_variants')
            ->where('product_id', '=', $prodict_id)
            ->select(
                'product_variants.id',
                'product_variants.weight',
                'product_variants.unit',
                'product_variants.serve',
                'product_variants.qty',
                'product_variants.discount',
                'product_variants.mrp',
                'product_variants.price',
            )
            ->get();


        $product->images = DB::table('product_images')
            ->where('product_id', '=', $prodict_id)
            ->select('product_images.image')
            ->get();

        $RelatedProduct = DB::table('product')
            ->leftJoin(DB::raw('
                    (SELECT * FROM product_variants WHERE id IN (
                        SELECT MIN(id) FROM product_variants GROUP BY product_id
                    )) as pv
                '), 'product.id', '=', 'pv.product_id')
            ->leftJoin(DB::raw('
                    (SELECT * FROM product_images WHERE id IN (
                        SELECT MIN(id) FROM product_images GROUP BY product_id
                    )) as pi
                '), 'product.id', '=', 'pi.product_id')
            ->where('product.category_id', '=', $product->category_id)
            ->where('product.is_active', '=', 1)
            ->select(
                'product.id',
                'product.name',
                'product.cut',
                'pv.weight',
                'pv.unit',
                'pv.serve',
                'pv.qty',
                'pv.discount',
                'pv.mrp',
                'pv.price',
                'pi.image'
            )
            ->get();



        return view('web.product_detail', compact('product', 'RelatedProduct'));
    }
    public function order_information()
    {
        return view('web.order_information');
    }
    public function test()
    {
        return view('web.test');
    }
    public function bag()
    {
        return view('web.bag');
    }
    public function order_history()
    {
        return view('web.order_history');
    }
    public function coupons()
    {
        $coupon = DB::table('coupon')->where('is_active', 1)->get();
        return view('web.coupons', compact('coupon'));
    }
    public function about()
    {
        return view('web.about');
    }
    public function faq()
    {
        return view('web.faq');
    }
    public function why()
    {
        return view('web.why');
    }
    public function feedback()
    {
        return view('web.feedback');
    }
    public function contact()
    {
        return view('web.contact');
    }
}
