<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\Master_pemesanan;
use App\Http\Controllers\Model\Trans_pemesanan;

class Master_pemesananController extends Controller
{
    public function list_pemesanan()
    {
        $az_trans_pemesanan = Trans_pemesanan::all();
        return view('pages/cms/Master_pemesanan/Master_pemesanan', compact('az_trans_pemesanan'));
    }

    public function tambah_pemesanan()
    {
        $az_detil_pemesanan = Master_pemesanan::all();
        return  view('pages/cms/Master_pemesanan/Master_pemesanan_input', compact('az_detil_pemesanan'));
    }

    public function edit_pemesanan($id)
    {
        $az_detil_pemesanan = Master_pemesanan::where('kode_pemesanan','=',$id)->first();
        return  view('pages/cms/Master_pemesanan/Master_pemesanan_edit', compact('az_detil_pemesanan'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
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

        $az_detil_pemesanan = new Master_pemesanan;

            $az_detil_pemesanan->id_trans = $request->id_trans; 
            $az_detil_pemesanan->kode_barang = $request->kode_barang; 
            $az_detil_pemesanan->berat_barang = $request->berat_barang; 
            $az_detil_pemesanan->karat_barang = $request->karat_barang; 
            $az_detil_pemesanan->harga_barang = $request->harga_barang; 
            $az_detil_pemesanan->jumlah_barang = $request->jumlah_barang; 
            $az_detil_pemesanan->diskon = $request->diskon; 
            // $az_detil_pemesanan->nama_pegawai = $request->nama_pegawai; 
            // $az_detil_pemesanan->kode_pelanggan = $request->kode_pelanggan; 
            // $az_detil_pemesanan->tipe_bayar = $request->tipe_bayar; 
            // $az_detil_pemesanan->tgl_transaksi = $request->tgl_transaksi; 

        $az_detil_pemesanan->save();

        return  redirect('/pemesanan');
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
        
        $az_detil_pemesanan = Master_pemesanan::where('id','=',$id)->first();

            $az_detil_pemesanan->id_trans = $request->id_trans; 
            $az_detil_pemesanan->kode_barang = $request->kode_barang; 
            $az_detil_pemesanan->berat_barang = $request->berat_barang; 
            $az_detil_pemesanan->karat_barang = $request->karat_barang; 
            $az_detil_pemesanan->harga_barang = $request->harga_barang; 
            $az_detil_pemesanan->jumlah_barang = $request->jumlah_barang; 
            $az_detil_pemesanan->diskon = $request->diskon; 
            // $az_detil_pemesanan->nama_pegawai = $request->nama_pegawai; 
            // $az_detil_pemesanan->kode_pelanggan = $request->kode_pelanggan; 
            // $az_detil_pemesanan->tipe_bayar = $request->tipe_bayar; 
            // $az_detil_pemesanan->tgl_transaksi = $request->tgl_transaksi; 

        $az_detil_pemesanan->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/pemesanan');
    }

    public function delete($id){
        // find khusus untuk primary key di database
        $az_detil_pemesanan = Master_pemesanan::where('id','=',$id)->first();
        $az_detil_pemesanan->delete();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/pemesanan');
    } 
}