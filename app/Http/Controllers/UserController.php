<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UsuarioVod;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index() {
    }

    public function table(Request $request)
    {

        $model = UsuarioVod::with(['user', 'dispositive'])->select('usuario_vod.*');

        return Datatables::of(DB::table($model))
        //return Datatables::of($model)
        ->addIndexColumn()
        ->addColumn('acciones', function ($row) {
            $button = '<div class="btn-group"><button class="btn green btn-sm btn-outline dropdown-toggle" type="button"  data-toggle="dropdown">' . __('user.actions') . '</button><ul class="dropdown-menu pull-right">';
				$actions = '<li><a class="dropdown-item" href="' . route('fadmin.user.edit', $row->cve) . '">' . __('user.button_edit') . '</a></li>';
				$actions .= '<li><a class="dropdown-item btn-credit" href="#" data-route="' . route('fadmin.user.credit', $row->cve) . '">' . __('user.add_credits') . '</a></li>';
				$actions .= '<li><a class="dropdown-item btn-credit" href="#" data-route="' . route('fadmin.user.device', $row->cve) . '">' . __('user.add_device') . '</a></li>';
				$actions .= '<li><a class="dropdown-item btn-delete" href="#" data-route="' . route('fadmin.user.delete', $row->cve) . '" data-mensaje="' . __('user.button_edit') . '">' . __('user.button_delete') . '</a></li>';
				return $button . $actions . '</ul></div>';
        })
        ->addColumn('Estado', function ($row) {
            $now = date("Y-m-d");
				if (!is_null($row->uconexion)):
					$status = "Online";
					$status_label = "primary";
				elseif (date("Y-m-d", strtotime($row->fecha_vencimiento)) < $now):
					$status = "Expiration";
					$status_label = "warning";
				elseif ((date("Y-m-d", strtotime($row->fecha_vencimiento)) >= $now) && ((int)$row->status === 0 or (int)$row->status === 1)):
					$status = "Active";
					$status_label = "success";
				endif;
				return '<span class="label label-' . $status_label . '">' . $status . '</span>';
        })
        ->addColumn('Fecha', function ($row) {
            return Carbon::parse($row->fecha_vencimiento)->format('d-m-Y');
        })
        ->rawColumns(['acciones', 'Fecha', 'Estado'])
        ->make(true);
    }
}
