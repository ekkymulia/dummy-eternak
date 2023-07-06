<?php

namespace App\Http\Controllers;

use App\Models\Ternak;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\Response;

class TernakController extends Controller
{
    public function index(){}

    public function store(Request $request)
    {
        
        // Validate the request data
        $validatedData = $request->validate([
            'kategori_ternak' => 'required',
            'asal_ternak' => 'required',
            'nama_indukan_betina' => 'nullable|string',
            'nama_indukan_jantan' => 'nullable|string',
            'keturunan_ke' => 'nullable|integer',
            'berat_lahir' => 'nullable|numeric',
            'id_kandang_melahirkan' => 'nullable|exists:kandang,id',
            'id_ternak_beli' => 'nullable|exists:ternak,id',
            'jenis_ternak' => 'nullable|string',
            'berat_terima' => 'nullable|numeric',
            'no_po' => 'nullable|string',
            'no_vessel' => 'nullable|string',
            'id_kandang' => 'nullable|exists:kandang,id',
            'id_paddock' => 'nullable|exists:paddock,id',
            'data_timbangan_awal' => 'nullable|numeric',
            'kondisi_awal_pertama' => 'nullable|string',
            'treatment_khusus' => 'nullable|boolean',
            'nama_vendor' => 'nullable|string',
            'tanggal_penerimaan_ternak' => 'nullable|date',
        ]);


        // Generate a unique barcode
        $barcode = Str::random(10);

        // Add the barcode to the validated data
        $validatedData['barcode'] = $barcode;

        // Create a new Ternak instance with the validated data
        $ternak = Ternak::create($validatedData);
        // ddd($ternak);
        // Return a JSON response with the created resource
        // return view('addit');
        return redirect()->route('ternak.show', ['barcode' => $barcode]);
    }

    public function create()
    {
        return view('addit');
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return Response
     */
    public function show($barcode)
    {

        // Find the Ternak record by barcode
        $ternak = Ternak::where('barcode', $barcode)->first();

        if (!$ternak) {
            return view('detail', ['data' => null]);
        }

        return view('detail', ['data' => $ternak]);
    }

}
