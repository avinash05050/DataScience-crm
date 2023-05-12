<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;

use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

use Carbon\Carbon;


class DashboardController extends Controller
{

  public function fileExport(Request $request)
  {
    $from_date = Carbon::createFromFormat('Y-m-d', $request->from_date);
    $to_date = Carbon::createFromFormat('Y-m-d', $request->to_date);
    return Excel::download(new UsersExport($from_date, $to_date), 'excelname.xlsx');
  }
}