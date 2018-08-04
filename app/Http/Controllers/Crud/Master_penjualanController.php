<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\Master_penjualan;
use App\Http\Controllers\Model\Trans_penjualan;

class Master_penjualanController extends Controller
{
    public function list_penjualan()
    {
        $az_trans_penjualan = Trans_penjualan::all();
        return view('pages/cms/Master_penjualan/Master_penjualan', compact('az_trans_penjualan'));
    }

    public function tambah_penjualan()
    {
        $az_detil_penjualan = Master_penjualan::all();
        return  view('pages/cms/Master_penjualan/Master_penjualan_input', compact('az_detil_penjualan'));
    }

    public function edit_penjualan($id)
    {
        $az_detil_penjualan = Master_penjualan::where('kode_penjualan','=',$id)->first();
        return  view('pages/cms/Master_penjualan/Master_penjualan_edit', compact('az_detil_penjualan'));
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

        $az_detil_penjualan = new Master_penjualan;

            $az_detil_penjualan->id_trans = $request->id_trans; 
            $az_detil_penjualan->kode_barang = $request->kode_barang; 
            $az_detil_penjualan->berat_barang = $request->berat_barang; 
            $az_detil_penjualan->karat_barang = $request->karat_barang; 
            $az_detil_penjualan->harga_barang = $request->harga_barang; 
            $az_detil_penjualan->jumlah_barang = $request->jumlah_barang; 
            $az_detil_penjualan->diskon = $request->diskon; 
            // $az_detil_penjualan->nama_pegawai = $request->nama_pegawai; 
            // $az_detil_penjualan->kode_pelanggan = $request->kode_pelanggan; 
            // $az_detil_penjualan->tipe_bayar = $request->tipe_bayar; 
            // $az_detil_penjualan->tgl_transaksi = $request->tgl_transaksi; 

        $az_detil_penjualan->save();

        return  redirect('/penjualan');
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
        
        $az_detil_penjualan = Master_penjualan::where('id','=',$id)->first();

            $az_detil_penjualan->id_trans = $request->id_trans; 
            $az_detil_penjualan->kode_barang = $request->kode_barang; 
            $az_detil_penjualan->berat_barang = $request->berat_barang; 
            $az_detil_penjualan->karat_barang = $request->karat_barang; 
            $az_detil_penjualan->harga_barang = $request->harga_barang; 
            $az_detil_penjualan->jumlah_barang = $request->jumlah_barang; 
            $az_detil_penjualan->diskon = $request->diskon; 
            // $az_detil_penjualan->nama_pegawai = $request->nama_pegawai; 
            // $az_detil_penjualan->kode_pelanggan = $request->kode_pelanggan; 
            // $az_detil_penjualan->tipe_bayar = $request->tipe_bayar; 
            // $az_detil_penjualan->tgl_transaksi = $request->tgl_transaksi; 

        $az_detil_penjualan->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/penjualan');
    }

    public function delete($id){
        // find khusus untuk primary key di database
        $az_detil_penjualan = Master_penjualan::where('id','=',$id)->first();
        $az_detil_penjualan->delete();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/penjualan');
    } 
}