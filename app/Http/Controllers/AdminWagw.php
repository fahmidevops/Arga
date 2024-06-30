<?php

namespace App\Http\Controllers;

use App\Models\Iuran;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class AdminWagw extends Controller
{
    public function index()
    {

        $date = date('Y-m-d', strtotime(now()));
        // $agendas = Agenda::with(['type', 'staff'])->where('date', '>=', $date)->orderBy('date', 'desc')->get();
        $iuran = Iuran::with('penduduk')->where('status', '=', 0)->orderBy('bayar_bulan', 'asc')->get();
        // $total_iuran = $iuran->count();
      
        // // ddd($agendas);
        // $agendasCount = $agendas->count();

        $warga = Penduduk::orderBy('nama', 'asc')->get();


        return view('dashboard.iuran.wagw', [
            'iuran' => $iuran,
            'warga' => $warga
        ]);
    }

    // public function send(Request $request) : RedirectResponse
    // public function send(Request $request)
    // {
    //     // $coba = request('pesan');
    //     // $pesan = $request->pesan;
    //     // dd($pesan);
        
    //     // $pesan = request('pesan');
    //     $nowa = request('nowa');
    //     // $bulan = request('bulan');
    //     $token = 'mMhiGtP!-Zdm7wtWEFJF';
    //     // $delay = '5-10'; //satuan detik
    //     $pesan = 'Assalamualaikum Wr.Wb. Salam Sejahtera bagi kita semua, Salam hormat kepada Bapak/Ibu, izin kami ingatkan untuk melakukan pembayaran iuran pada bulan '.$bulan.'. Abaikan pesan ini jika anda sudah melakukan pembayaran. Terima kasih dan salam guyub rukun semuanya.';

    //     // dd($nowa . $bulan . $pesan);

    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //     CURLOPT_URL => 'https://api.fonnte.com/send',
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => '',
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 0,
    //     CURLOPT_FOLLOWLOCATION => true,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => 'POST',
    //     CURLOPT_POSTFIELDS => array('target' => $nowa,'message' => $pesan),
    //     // CURLOPT_POSTFIELDS => array('target' => $nowa,'message' => $pesan, 'delay' => $delay), kirim broadcast, no hp tinggal dipisahkan dengan , pada targetnya 628551244124, 6281362636263
    //     CURLOPT_HTTPHEADER => array(
    //         'Authorization: ' . $token
    //     ),
    //     ));

    //     $response = curl_exec($curl);

    //     curl_close($curl);

    //     // return redirect::back()->with('success', 'Pesan Terkirim');

    //     return redirect('/dashboard/wagw')->with('success', 'Pesan Terkirim');


    // }







    public function sendwarga(Request $request)
    {
        // $coba = request('pesan');
        // $pesan = $request->pesan;
        // dd($pesan);
        $id = request('id');
        $iuran = Iuran::where('penduduk_id', '=', $id)->where('status', '=', 0)->orderBy('bayar_bulan', 'asc')->get();
        $tunggakan = $iuran->count();
        $total_tunggakan = $iuran->sum('nominal');
        $nowa = Penduduk::where('id', '=', $id)->get('telp');

        $token = 'mMhiGtP!-Zdm7wtWEFJF';
        // $delay = '5-10'; //satuan detik
        $pesan = 
        'Assalamualaikum Wr.Wb. Salam Sejahtera bagi kita semua, Salam hormat kepada Bapak/Ibu, mengingatkan kembali untuk melakukan pembayaran iuran sampah selama '.$tunggakan.' bulan dengan jumlah Rp. '.$total_tunggakan.' melalui rekening Bank Mandiri Nomor: 167-88-45-23, Atas Nama: DERMAWAN (Bendahara Desa mangunjaya). ”Jika sudah membayar silahkan kirim bukti pembayaran via email desamangunjaya@gmail.com". 
    Terima Kasih
    *Hormat Kami Admin Desa Mangunjaya*';


        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.fonnte.com/send',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('target' => $nowa,'message' => $pesan),
        // CURLOPT_POSTFIELDS => array('target' => $nowa,'message' => $pesan, 'delay' => $delay), kirim broadcast, no hp tinggal dipisahkan dengan , pada targetnya 628551244124, 6281362636263
        CURLOPT_HTTPHEADER => array(
            'Authorization: ' . $token
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        // return redirect::back()->with('success', 'Pesan Terkirim');

        return redirect('/dashboard/wagw')->with('success', 'Pesan Terkirim');


    }
}
