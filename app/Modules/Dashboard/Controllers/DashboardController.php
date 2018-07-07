<?php

namespace App\Modules\Dashboard\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\AppStockRawMaterial\Models\AppStockRawMaterial;
use App\Modules\AppRawMaterial\Models\AppRawMaterial;
use App\Modules\AppProduct\Models\AppProduct;
class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {			
        return view("Dashboard::index");
    }
		
		public function get_critical_raw_material_stock(){
			
		}
		
		public function get_total_data_raw_material(){
			  $data=AppRawMaterial::select("app_raw_material.name AS raw_name","app_raw_material.*","app_suplier.*","app_category_raw_material.*","app_stock_raw_material.stock")		
							->leftJoin('app_stock_raw_material', 'app_raw_material.app_raw_material_id', '=', 'app_stock_raw_material.app_raw_material_id')
							->count();
				return $data;
					
		}
		
		public function get_total_data_product(){
			  $data=AppProduct::select("app_products.name AS product_name","app_products.*","app_suplier.*","app_category_raw_material.*","app_stock.stock")		
							->leftJoin('app_stock', 'app_products.app_product_id', '=', 'app_stock.app_product_id')
							->count();
				return $data;
					
		}
		
		public function getCriticalRawMaterial(){
			
			$stock_limit=0;
			 $data=AppRawMaterial::select("app_raw_material.name AS raw_name","app_raw_material.*","app_suplier.*","app_category_raw_material.*","app_stock_raw_material.stock")		
							->leftJoin('app_stock_raw_material', 'app_raw_material.app_raw_material_id', '=', 'app_stock_raw_material.app_raw_material_id')
							->where('app_stock_raw_material.stock', '=','%'.$stock_limit.'%')
							->count();
				return $data;
		}
		
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
