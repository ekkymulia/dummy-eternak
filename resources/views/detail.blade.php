<!-- resources/views/ternak/create.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Ternak</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Detail Ternak</div>
                    <h1>QRCODE</h1>
                    {{ QrCode::size(300)->generate('https://127.0.0.1:8000/' . $data->barcode) }}
                    <h1>Data Ternak</h1>

                    <div class="card-body">
                        <form action="{{ route('ternak.store') }}" method="POST">
                            @csrf

                            <!-- <div class="form-group">
                                <label for="barcode">Barcode</label>
                                <input type="text" name="barcode" id="barcode" class="form-control" required>
                            </div> -->

                            <div class="form-group">
                                <label for="kategori_ternak">Kategori Ternak</label>
                                <select name="kategori_ternak" id="kategori_ternak" class="form-control" required>
                                    <option value="Fattening" @if ($data->kategori_ternak === 'Fattening') selected @endif>Fattening</option>
                                    <option value="Inhouse" @if ($data->kategori_ternak === 'Inhouse') selected @endif>Inhouse</option>
                                    <option value="Import"  @if ($data->kategori_ternak === 'Import') selected @endif>Import</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="asal_ternak">Asal Ternak</label>
                                <select name="asal_ternak" id="asal_ternak" class="form-control" required>
                                    <option value="0"@if ($data->asal_ternak === '0') selected @endif>Fattening</option>
                                    <option value="1"@if ($data->asal_ternak === '1') selected @endif>Inhouse</option>
                                    <option value="2"@if ($data->asal_ternak === '2') selected @endif>Import</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="barcode">Barcode</label>
                                <input type="number" name="barcode" id="barcode" class="form-control" @if ($data->barcode != '') value="{{ $data->barcode }}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="id_kandang">ID Kandang</label>
                                <input type="number" name="id_kandang" id="id_kandang" class="form-control" @if ($data->id_kandang != '') value="{{ $data->id_kandang }}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="id_paddock">ID Paddock</label>
                                <input type="number" name="id_paddock" id="id_paddock" class="form-control" @if ($data->id_paddock != '') value="{{ $data->id_paddock }}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="data_timbangan_awal">Data Timbangan Awal</label>
                                <input type="number" name="data_timbangan_awal" id="data_timbangan_awal" class="form-control" @if ($data->data_timbangan_awal != '') value="{{ $data->data_timbangan_awal }}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="kondisi_awal_pertama">Kondisi Awal Pertama</label>
                                <input type="text" name="kondisi_awal_pertama" id="kondisi_awal_pertama" class="form-control" @if ($data->kondisi_awal_pertama != '') value="{{ $data->kondisi_awal_pertama }}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="treatment_khusus">Treatment Khusus</label>
                                <input type="number" name="treatment_khusus" id="treatment_khusus" class="form-control" @if ($data->treatment_khusus != '') value="{{ $data->treatment_khusus }}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="nama_vendor">Nama Vendor</label>
                                <input type="text" name="nama_vendor" id="nama_vendor" class="form-control" @if ($data->nama_vendor != '') value="{{ $data->nama_vendor }}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_penerimaan_ternak">Tanggal Penerimaan Ternak</label>
                                <input type="date" name="tanggal_penerimaan_ternak" id="tanggal_penerimaan_ternak" class="form-control" value="{{ $data->tanggal_penerimaan_ternak ?? '' }}">
                            </div>

                            <div class="form-group">
                                <h1>Data Inhouse</h1>
                            </div>

                            <div class="form-group">
                                <label for="nama_indukan_betina">Nama Indukan Betina</label>
                                <input type="text" name="nama_indukan_betina" id="nama_indukan_betina" class="form-control" @if ($data->nama_indukan_betina != '') value="{{ $data->nama_indukan_betina }}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="nama_indukan_jantan">Nama Indukan Jantan</label>
                                <input type="text" name="nama_indukan_jantan" id="nama_indukan_jantan" class="form-control" @if ($data->nama_indukan_jantan != '') value="{{ $data->nama_indukan_jantan }}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="keturunan_ke">Keturunan Ke</label>
                                <input type="number" name="keturunan_ke" id="keturunan_ke" class="form-control" @if ($data->keturunan_ke != '') value="{{ $data->keturunan_ke }} @endif>
                            </div>

                            <div class="form-group">
                                <label for="berat_lahir">Berat Lahir</label>
                                <input type="number" name="berat_lahir" id="berat_lahir" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="id_kandang_melahirkan">ID Kandang Melahirkan</label>
                                <input type="number" name="id_kandang_melahirkan" id="id_kandang_melahirkan" class="form-control">
                            </div>

                            <div class="form-group">
                                <h1>Data Import/Beli</h1>
                            </div>


                            <div class="form-group">
                                <label for="id_ternak_beli">ID Ternak Beli</label>
                                <input type="number" name="id_ternak_beli" id="id_ternak_beli" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="jenis_ternak">Jenis Ternak</label>
                                <input type="text" name="jenis_ternak" id="jenis_ternak" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="berat_diterima">Berat Diterima</label>
                                <input type="number" name="berat_diterima" id="berat_diterima" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="no_po">No PO</label>
                                <input type="text" name="no_po" id="no_po" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="no_vessel">No Vessel</label>
                                <input type="text" name="no_vessel" id="no_vessel" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="berat_lahir">Berat Lahir</label>
                                <input type="number" name="berat_lahir" id="berat_lahir" class="form-control" value="{{ $data->berat_lahir ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label for="id_kandang_melahirkan">ID Kandang Melahirkan</label>
                                <input type="number" name="id_kandang_melahirkan" id="id_kandang_melahirkan" class="form-control" value="{{ $data->id_kandang_melahirkan ?? '' }}">
                            </div>

                            <div class="form-group">
                                <h1>Data Import/Beli</h1>
                            </div>

                            <div class="form-group">
                                <label for="id_ternak_beli">ID Ternak Beli</label>
                                <input type="number" name="id_ternak_beli" id="id_ternak_beli" class="form-control" value="{{ $data->id_ternak_beli ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label for="jenis_ternak">Jenis Ternak</label>
                                <input type="text" name="jenis_ternak" id="jenis_ternak" class="form-control" value="{{ $data->jenis_ternak ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label for="berat_diterima">Berat Diterima</label>
                                <input type="number" name="berat_diterima" id="berat_diterima" class="form-control" value="{{ $data->berat_diterima ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label for="no_po">No PO</label>
                                <input type="text" name="no_po" id="no_po" class="form-control" value="{{ $data->no_po ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label for="no_vessel">No Vessel</label>
                                <input type="text" name="no_vessel" id="no_vessel" class="form-control" value="{{ $data->no_vessel ?? '' }}">
                            </div>



                            <button type="submit" class="btn btn-primary">Add Ternak</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
