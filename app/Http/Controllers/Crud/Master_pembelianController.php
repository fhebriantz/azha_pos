<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\Master_pembelian;
use App\Http\Controllers\Model\Master_barang;
use App\Http\Controllers\Model\Master_pegawai;
use App\Http\Controllers\Model\Master_pelanggan;
use App\Http\Controllers\Model\Trans_pembelian;
use Webpatser\Uuid\Uuid;
use Webpatser\Uuid\UuidServiceProvider;

class Master_pembelianController extends Controller
{
    public function list_pembelian()
    {
        $az_trans_pembelian = Trans_pembelian::trans_beli();
        return view('pages/cms/Master_pembelian/Master_pembelian', compact('az_trans_pembelian'));
    }

     public function list_pembelian_test()
    {
        $az_trans_pembelian = Trans_pembelian::trans_beli();
        return view('pages/cms/Master_pembelian/tes', compact('az_trans_pembelian'));
    } 

    public function tambah_pembelian()
    {   
        $id_transaksi = Uuid::generate()->string;
        $az_detil_pembelian = Master_pembelian::all();
        $az_mast_pelanggan = Master_pelanggan::all();
        $az_mast_pegawai = Master_pegawai::all();
        return  view('pages/cms/Master_pembelian/Master_pembelian_input', compact('id_transaksi','az_detil_pembelian','az_mast_pelanggan','az_mast_pegawai'));
    }

    public function edit_pembelian($id)
    {
        $az_detil_pembelian = Master_pembelian::where('kode_pembelian','=',$id)->first();
        return  view('pages/cms/Master_pembelian/Master_pembelian_edit', compact('az_detil_pembelian'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'id_trans' => 'required',
                'kode_pegawai' => 'required',
                'kode_pelanggan' => 'required',
                'tipe_bayar' => 'required',
                'tgl_transaksi' => 'required',
            ]);

        $az_trans_pembelian = new Trans_pembelian;

            $az_trans_pembelian->id_trans = ($request->id_trans); 
            $az_trans_pembelian->kode_pegawai = $request->kode_pegawai; 
            $az_trans_pembelian->kode_pelanggan = $request->kode_pelanggan; 
            $az_trans_pembelian->tipe_bayar = $request->tipe_bayar; 
            $az_trans_pembelian->tgl_transaksi = $request->tgl_transaksi; 

        $az_trans_pembelian->save();

        return  redirect('/pembelian');
    } 


    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'id_trans' => 'required',
                'kode_barang' => 'required',
                'berat_barang' => 'required',
                'karat_barang' => 'required',
                'harga_barang' => 'required',
                'jumlah_barang' => 'required',
                'diskon' => 'required',
                // 'nama_pegawai' => 'required',
                // 'kode_pelanggan' => 'required',
                // 'tipe_bayar' => 'required',
                // 'tgl_transaksi' => 'required',
            ]);
        
        $az_detil_pembelian = Master_pembelian::where('id','=',$id)->first();

            $az_detil_pembelian->id_trans = $request->id_trans; 
            $az_detil_pembelian->kode_barang = $request->kode_barang; 
            $az_detil_pembelian->berat_barang = $request->berat_barang; 
            $az_detil_pembelian->karat_barang = $request->karat_barang; 
            $az_detil_pembelian->harga_barang = $request->harga_barang; 
            $az_detil_pembelian->jumlah_barang = $request->jumlah_barang; 
            $az_detil_pembelian->diskon = $request->diskon; 
            // $az_detil_pembelian->nama_pegawai = $request->nama_pegawai; 
            // $az_detil_pembelian->kode_pelanggan = $request->kode_pelanggan; 
            // $az_detil_pembelian->tipe_bayar = $request->tipe_bayar; 
            // $az_detil_pembelian->tgl_transaksi = $request->tgl_transaksi; 

        $az_detil_pembelian->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/pembelian');
    }

    public function delete($id){
        // find khusus untuk primary key di database
        $az_detil_pembelian = Master_pembelian::where('id','=',$id)->first();
        $az_detil_pembelian->delete();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/pembelian');
    } 

     public function nama_barang(Request $request){
         $term = $request->term;
         $item = Master_barang::where('nama_barang','LIKE','%'.$term.'%')->get();
         if (count($item) == 0) {
             $searchResult[] = 'Nama Barang Tersedia';
         }
         else{
            foreach ($item as $key => $value) {
                $searchResult[] = $value->nama_barang;
            }
         }
         return $searchResult;
     } 

     public function kode_barang(Request $request){
         $term = $request->term;
         $item = Master_barang::where('kode_barang','LIKE','%'.$term.'%')->get();
         if (count($item) == 0) {
             $searchResult[] = 'Kode Barang Tersedia';
         }
         else{
            foreach ($item as $key => $value) {
                $searchResult[] = $value->kode_barang;
            }
         }
         return $searchResult;
     } 
}