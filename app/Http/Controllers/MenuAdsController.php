<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuAds;

class MenuAdsController extends Controller
{

    /**
     * Create a new auth instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get all data from menu_ads
     */
    public function index(Request $request)
    {
      $menu_ads = MenuAds::where('published', true)->get();
      if (count($menu_ads) !== 0) {
          $res['success'] = true;
          $res['result'] = $menu_ads;

          return response($res);
      }else{
          $res['success'] = true;
          $res['result'] = 'No menu have been published!';

          return response($res);
      }

    }

    /**
     * Insert database for MenuAds
     * Url : /menu_ads
     */
    public function create(Request $request)
    {
      $menu_ads = new MenuAds;
      $menu_ads->fill([
        'user_id' => $request->input('user_id'),
        'category_id' => $request->input('category_id'),
        'title' => $request->input('title'),
        'price' => $request->input('price'),
        'description' => $request->input('description'),
        'picture' => $request->input('picture'),
        'no_meja' => $request->input('no_hp'),
        'sold' => false,
        'published'=> true
      ]);
      if($menu_ads->save()){
        $res['success'] = true;
        $res['result'] = 'Success add new menu_ads!';

        return response($res);
      }
    }

    /**
     * Get one data MenuAds by id
     * Url : /menu_ads/{id}
     */
    public function read(Request $request, $id)
    {
      $menu_ads = MenuAds::where('id',$id)->first();
      if ($menu_ads !== null) {
        $res['success'] = true;
        $res['result'] = $menu_ads;

        return response($res);
      }else{
        $res['success'] = false;
        $res['result'] = 'Category not found!';

        return response($res);
      }
    }

    /**
     * Update data MenuAds by ud
     * Url : /menu_ads/udpate/{id}
     */
    public function update(Request $request, $id)
    {
      if ($request->has('name')) {
          $menu_ads = MenuAds::find($id);
          $menu_ads->name = $request->input('name');
          if ($menu_ads->save()) {
              $res['success'] = true;
              $res['result'] = 'Success update '.$request->input('name');

              return response($res);
          }
      }else{
        $res['success'] = false;
        $res['result'] = 'Please fill name menu_ads!';

        return response($res);
      }
    }

    /**
     * Delete data MenuAds by id
     */
    public function delete(Request $request, $id)
    {
      $menu_ads = MenuAds::find($id);
      if ($menu_ads->delete($id)) {
          $res['success'] = true;
          $res['result'] = 'Success delete menu_ads!';

          return response($res);
      }
    }

}
