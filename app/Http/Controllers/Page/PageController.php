<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Yandex\Geocode\Facades\YandexGeocodeFacade as YaGeo;

class PageController extends Controller
{
    /**
     * @return View|Application
     */
    public function main(): View|Application
    {
        return view('pages.main');
    }

    /**
     * @return View|Application
     */
    public function sql(): View|Application
    {
        //SELECT shop.* FROM shop HAVING shop.price = (SELECT max(shopMax.price) FROM shop as shopMax WHERE shopMax.article = s.article) ORDER BY shop.article
        $shops = Shop::query()->select('shop.*')->havingRaw('shop.price = (SELECT max(shopMax.price) FROM shop as shopMax WHERE shopMax.article = shop.article)')->orderBy('shop.article')->get();

        return view('pages.sql', compact('shops'));
    }

    /**
     * @return View|Application
     */
    public function php(Request $request): View|Application
    {
        $results = [];

        $address = $request->get('address', null);

        if ($address) {
            $data = YaGeo::setQuery($address)->load();
            $results[] = $data->getResponse()->getData();
        }

        return view('pages.php', compact('request', 'results'));
    }
}
