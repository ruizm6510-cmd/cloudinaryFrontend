<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Cloudinary\Cloudinary;

class ComputerController extends Controller
{
    public function consultaAprendiz()
    {
        $compu = Computer::find(3);

        return $compu->aprendices;
    }

    public function create()
    {
        return view('computer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|integer',
            'brand' => 'required|string|max:100',
            'urlFoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        $file = $request->file('urlFoto');

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
            'url' => ['secure' => true],
        ]);

        $resultado = $cloudinary->uploadApi()->upload(
            $file->getRealPath(),
            [
                'folder' => 'computers',
                'resource_type' => 'image',
            ]
        );

        $compu = Computer::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'urlFoto' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        return response()->json($compu, 201);
    }

    public function index()
    {
        $computers = Computer::all();

        return response()->json($computers, 200); 
    }

    public function show($id)
    {
        $computer = Computer::findOrFail($id);

        return response()->json($computer, 200);
    }

    public function edit(Computer $computer)
    {
        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, $id)
    {
        $computer = Computer::findOrFail($id);
        
        $request->validate([
            'name' => 'required|integer',
            'brand' => 'required|string|max:100',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        $data = [
            'name' => $request->name,
            'brand' => $request->brand,
        ];

        if ($request->hasFile('urlFoto')) {
            $file = $request->file('urlFoto');

            $cloudinary = new Cloudinary([
                'cloud' => [
                    'cloud_name' => config('services.cloudinary.cloud_name'),
                    'api_key' => config('services.cloudinary.api_key'),
                    'api_secret' => config('services.cloudinary.api_secret'),
                ],
                'url' => ['secure' => true],
            ]);

            $resultado = $cloudinary->uploadApi()->upload(
                $file->getRealPath(),
                [
                    'folder' => 'computers',
                    'resource_type' => 'image',
                ]
            );

            $data['urlFoto'] = $resultado['secure_url'];
            $data['imagen_public_id'] = $resultado['public_id'];
        }

        $computer->update($data);

        return response()->json($computer, 200);
    }

    public function destroy($id)
    {
        $computer = Computer::findOrFail($id);
        $computer->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}