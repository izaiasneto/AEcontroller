<?php

namespace App\Http\Controllers;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function export()
    {
        ob_end_clean();
        ob_start();
        return Excel::download(new ProductsExport, 'produtos.xlsx');
    }
}
