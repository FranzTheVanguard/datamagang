<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Instansi;
use App\Models\Profil;
use App\Models\BagianMagang;
use App\Models\JadwalMagang;
use App\Models\TugasMagang;
class DashboardController extends Controller
{
    public function index()
    {
        $countUser=User::count();
        $countJurusan=Jurusan::count();
        $countInstansi=Instansi::count();
        $countProfil=Profil::count();
        $countBagianMagang=BagianMagang::count();
        $countJadwalMagang=JadwalMagang::count();
        $countTugasMagang=TugasMagang::count();
        $view='admin.dashboard.index';
        if(auth()->user()->role=='user') $view='admin.dashboard.indexuser';
        return view($view,[
            'title'=>'Dashboard',
            'countUser'=>$countUser,
            'countInstansi'=>$countInstansi,
            'countJurusan'=>$countJurusan,
            'countProfil'=>$countProfil,
            'countBagianMagang'=>$countBagianMagang,
            'countJadwalMagang'=>$countJadwalMagang,
            'countTugasMagang'=>$countTugasMagang,
        ]);
    }
}