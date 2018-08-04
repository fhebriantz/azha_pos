@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Edit Pembelian</title>
@endsection

@section('head')

@endsection

@section('content') 
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Tambah Pembelian</strong></h1>
        <div class="col-sm-12">
          <form method="POST" action="">
              <table class="table table-striped fontinput">
                  <tr>
                    <td>ID DMS Form</td>
                    <td><input class="form-control" type="text" name="id_dms_form" placeholder="ID Dms Form" value="" style="width: 100%" readonly=""></td>
                  </tr>

                  
                  <tr>
                    <td>Nomor Mobil <span style="color: #d71635">*</span></td>
                    <td><input class="form-control" type="text" name="plat_no" id="plat_no" value="" placeholder="Nomor Mobil" style="width: 100%; text-transform: uppercase;" maxlength="9"></td>
                  </tr>
                  
                  <tr>
                    <td>Nama Pengemudi <span style="color: #d71635">*</span></td>
                    <td><input class="form-control" type="text" name="driver_name" id="driver_name" placeholder="Nama Pengemudi" value=""  style="width: 100%"></td>
                  </tr>

                  
                  <tr>
                    <td>No. HP Pengemudi <span style="color: #d71635">*</span></td>
                    <td><input class="form-control" type="number" name="driver_phone" id="driver_phone" placeholder="08xxxxxxxxxx" value="" style="width: 100%"  maxlength="13"></td>
                  </tr>

                  <tr>
                    <td>Tipe Kendaraan <span style="color: #d71635">*</span></td>
                    <td>
                      <select class="form-control" name="type_of_vehicle" style="width: 100%">
                        <option value="">-- Pilih Kategori --</option>
                      </select>
                    </td>
                  </tr>

                   <tr>
                    <td>Vendor <span style="color: #d71635">*</span></td>
                    <td><input class="form-control" type="text" name="transporter_company" id="transporter_company" value="" placeholder="Perusahaan Transportasi" style="width: 100%"></td>
                  </tr>

                  <tr>
                    <td>No PO/SO/DO/DN</td>
                    <td><input class="form-control" type="text" name="shipment" value="" id="shipment" placeholder="No PO/SO/DO/DN" style="width: 100%;  text-transform: uppercase;"></td>
                  </tr>

                  <tr>
                       <td>Inbound/Outbound <span style="color: #d71635">*</span></td>
                       <td> <!-- select class form control untuk membuat combo box -->
                          <select class="form-control" name="id_purpose" id="id_purpose" style="width: 100%">
                            <option value="">-- Pilih Kategori --</option>
                          </select>
                        </td>
                  </tr> 

                  <tr id="row_asal">
                    <td>Asal (Inbound)</td>
                    <td><input class="form-control" type="text" name="asal" id="asal" placeholder="Asal (Inbound)" value="" style="width: 100%"></td>
                  </tr>
                  <tr id="row_tujuan">
                    <td>Tujuan (Outbound)</td>
                    <td><input class="form-control" type="text" name="tujuan" id="tujuan" placeholder="Tujuan (Outbound)" value="" style="width: 100%"></td>
                  </tr>

                  <tr>
                      <td>Nama Customer <span style="color: #d71635">*</span></td>
                         <td> <!-- select class form control untuk membuat combo box -->
                          <select class="form-control" name="cust_proj_name" style="width: 100%">
                             <option value="">-- Pilih Kategori --</option>
                          </select>
                    </td>
                  </tr>

                  <tr>
                    <td>Nomor Gate</td>
                    <td><input class="form-control" type="number" id="gate_number" name="gate_number" placeholder="Gate Number" value="" style="width: 100%"></td>
                  </tr>
                
                  <tr>
                    <td></td>
                    <td><input class="btn btn-info" name="submit" value="submit" type="submit"></td>
                  </tr>
              </table>
              <input type="hidden" name="_method" value="PUT">
           </form>
        </div>
    </div>
@endsection
@section('script')

@endsection