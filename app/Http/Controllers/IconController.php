<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Icon;
use App\VariationType;
use App\Version;

class IconController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function search(Request $request, Icon $icons)
    {
        $icons = $icons->newQuery();

        $paid = $request->get('paid', null);
        $categories = $request->get('categories', []);
        $variations = $request->get('variations', VariationType::getPublicVariations());
        $latest = $request->get('latest', null);
        $search = $request->get('search', '');
        $page = $request->get('page', 0);
        $version = Version::getLatestVersion();


        $icons->with('variation:id,slug,classes');
        $icons->whereHas('variation', function ($q) use ($variations) {
            $q->whereIn('id', $variations);
        });

        if ($latest !== null) {
            $icons->whereHas('version', function ($q) use ($version) {
                $q->where('id', $version);
            });
        }


        if (count($categories) > 0) {
            $icons->whereHas('categories', function ($q) use ($categories) {
                $q->whereIn('category_id', $categories);
            });
        }

        if ($paid !== null) {
            $icons->where('paid', $paid);
        }

        if ($search) {
            $icons->where('name', 'like', '%' . $search . '%');
        }

        return $icons->get();
    }
}
