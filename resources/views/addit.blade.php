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
                    <div class="card-header">Add Ternak</div>

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
                                    <option value="Fattening">Fattening</option>
                                    <option value="Inhouse">Inhouse</option>
                                    <option value="Import">Import</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="asal_ternak">Asal Ternak</label>
                                <select name="asal_ternak" id="asal_ternak" class="form-control" required>
                                    <option value="0">Fattening</option>
                                    <option value="1">Inhouse</option>
                                    <option value="2">Import</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_kandang">ID Kandang</label>
                                <input type="number" name="id_kandang" id="id_kandang" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="id_paddock">ID Paddock</label>
                                <input type="number" name="id_paddock" id="id_paddock" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="data_timbangan_awal">Data Timbangan Awal</label>
                                <input type="number" name="data_timbangan_awal" id="data_timbangan_awal" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="kondisi_awal_pertama">Kondisi Awal Pertama</label>
                                <input type="text" name="kondisi_awal_pertama" id="kondisi_awal_pertama" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="treatment_khusus">Treatment Khusus</label>
                                <input type="number" name="treatment_khusus" id="treatment_khusus" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="nama_vendor">Nama Vendor</label>
                                <input type="text" name="nama_vendor" id="nama_vendor" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_penerimaan_ternak">Tanggal Penerimaan Ternak</label>
                                <input type="date" name="tanggal_penerimaan_ternak" id="tanggal_penerimaan_ternak" class="form-control">
                            </div>

                            <div class="form-group">
                                <h1>Data Inhouse</h1>
                            </div>

                            <div class="form-group">
                                <label for="nama_indukan_betina">Nama Indukan Betina</label>
                                <input type="text" name="nama_indukan_betina" id="nama_indukan_betina" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="nama_indukan_jantan">Nama Indukan Jantan</label>
                                <input type="text" name="nama_indukan_jantan" id="nama_indukan_jantan" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="keturunan_ke">Keturunan Ke</label>
                                <input type="number" name="keturunan_ke" id="keturunan_ke" class="form-control">
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
