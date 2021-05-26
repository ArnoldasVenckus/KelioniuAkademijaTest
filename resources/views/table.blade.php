@extends('layouts.app')

@section('content')
    <div class="mt-8 md:mx-auto md:w-6/12 md:max-w-6/12 mb-96">
        <div class="bg-white py-8 px-6 shadow rounded-lg lg:px-10 text-gray-700">
            <h1 class="text-2xl text-center text-gray-700 mb-10">Vertinimo santrauka</h1>
            <table class="table-auto">
                <thead>
                    <tr class="p-4">
                        <th class="p-4">Aptarnavęs darbuotojas</th>
                        <th class="p-4">Aptarnavimo greitis</th>
                        <th class="p-4">Aptarnavimo kokybė</th>
                        <th class="p-4">Rekomendacijos tikimybė</th>
                        <th>Informacijos naudojimo sutikimas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center p-4">                    
                            @foreach($darbuotojai as $darbuotojas) 
                                @if ($darbuotojas->id == $pardavimas->darbuotojai_id)
                                    <span class="text-right">{{ $darbuotojas->name }} {{ $darbuotojas->surname }}</span>
                                @endif
                            @endforeach
                        </td>
                        <td class="text-center p-4">
                            {{ $pardavimas->greitis }}/10
                        </td>
                        <td class="text-center p-4">
                            {{ $pardavimas->aptarnavimas }}/10
                        </td>
                        <td class="text-center p-4">
                            {{ $pardavimas->rekomendacija }}/10
                        </td>
                        <td class="text-center p-4">
                            @if($pardavimas->sutikimas == 1)
                                Sutinku
                            @else
                                Nesutinku
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-5">
                <textarea readonly name="pastabos" id="pastabos" rows="5" 
                    class="w-full mt-8 border-gray-300 rounded-lg shadow-sm"
                >{{ $pardavimas->pastabos }}
                </textarea>
            </div>
            <div class="flex flex-row-reverse">
                <a href="{{ route('forma') }}">
                    <button 
                        type="submit" 
                        class="mt-16 py-2 px-4 border 
                        border-transparent rounded-md 
                        shadow-sm text-md font-medium 
                        text-white bg-blue-800"
                    >
                        Naujas Atsiliepimas
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection