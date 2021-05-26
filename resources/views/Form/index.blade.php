@extends('layouts.app')

@section('content')

    <div class="mt-8 md:mx-auto md:w-6/12 md:max-w-6/12">
        <div class="bg-white py-8 px-6 shadow rounded-lg lg:px-10 text-gray-700">
            <h1 class="text-2xl text-center text-gray-700">Aptarnavimo vertinimo anketa</h1>
            <form action="{{ route('forma') }}" method="post" class="mb-0 space-y-6">
                @csrf
                <div class="mt-1">
                    <p class="pb-1">Jus aptarnavęs darbuotojas:</p>
                    <div class="mt-1">
                        <select name="darbuotojas" id="darbuotojas"
                        class="w-6/12 border-gray-300 rounded-lg shadow-sm text-gray-700 @error('darbuotojas') border-red-500 @enderror">
                            <option class="" value="">Pasirinkite</option>
                            @foreach($darbuotojai as $darbuotojas)
                                <option value="{{ $darbuotojas->id }}">{{ $darbuotojas->name }} {{ $darbuotojas->surname }}</option>
                            @endforeach
                        </select>
                        @error('darbuotojas')
                            <div class="text-red-500 mt-2 text-sm">
                                Pasirinkimas privalomas
                            </div>
                        @enderror
                    </div>
                </div>
                <div>
                    <p class="pb-1">
                        Kaip vertinate aptarnavimo greitį? (1 - labai blogai, 10 - labai gerai)
                    </p>
                    <div class="mt-1">
                        <label for="greitis-1" class="pr-2 pl-2">1</label>
                        <input type="radio" id="greitis-1" name="greitis" value="1" class="focus:ring-0">
                        <label for="greitis-2" class="pr-2 pl-2">2</label>
                        <input type="radio" id="greitis-2" name="greitis" value="2" class="focus:ring-0">
                        <label for="greitis-3" class="pr-2 pl-2">3</label>
                        <input type="radio" id="greitis-3" name="greitis" value="3" class="focus:ring-0">
                        <label for="greitis-4" class="pr-2 pl-2">4</label>
                        <input type="radio" id="greitis-4" name="greitis" value="4" class="focus:ring-0">
                        <label for="greitis-5" class="pr-2 pl-2">5</label>
                        <input type="radio" id="greitis-5" name="greitis" value="5" class="focus:ring-0">
                        <label for="greitis-6" class="pr-2 pl-2">6</label>
                        <input type="radio" id="greitis-6" name="greitis" value="6" class="focus:ring-0">
                        <label for="greitis-7" class="pr-2 pl-2">7</label>
                        <input type="radio" id="greitis-7" name="greitis" value="7" class="focus:ring-0">
                        <label for="greitis-8" class="pr-2 pl-2">8</label>
                        <input type="radio" id="greitis-8" name="greitis" value="8" class="focus:ring-0">
                        <label for="greitis-9" class="pr-2 pl-2">9</label>
                        <input type="radio" id="greitis-9" name="greitis" value="9" class="focus:ring-0">
                        <label for="greitis-10" class="pr-2 pl-2">10</label>
                        <input type="radio" id="greitis-10" name="greitis" value="10" class="focus:ring-0">
                        @error('greitis')
                                <div class="text-red-500 mt-2 text-sm">
                                    Pasirinkimas privalomas
                                </div>
                        @enderror
                    </div>
                </div>
                <div>
                    <p class="pb-1">
                        Kaip vertinate aptarnavimo kokybę? (1 - labai blogai, 10 - labai gerai)
                    </p>
                    <div class="mt-1">
                        <label for="kokybe-1" class="pr-2 pl-2">1</label>
                        <input type="radio" id="kokybe-1" name="kokybe" value="1" class="focus:ring-0">
                        <label for="kokybe-2" class="pr-2 pl-2">2</label>
                        <input type="radio" id="kokybe-2" name="kokybe" value="2" class="focus:ring-0">
                        <label for="kokybe-3" class="pr-2 pl-2">3</label>
                        <input type="radio" id="kokybe-3" name="kokybe" value="3" class="focus:ring-0">
                        <label for="kokybe-4" class="pr-2 pl-2">4</label>
                        <input type="radio" id="kokybe-4" name="kokybe" value="4" class="focus:ring-0">
                        <label for="kokybe-5" class="pr-2 pl-2">5</label>
                        <input type="radio" id="kokybe-5" name="kokybe" value="5" class="focus:ring-0">
                        <label for="kokybe-6" class="pr-2 pl-2">6</label>
                        <input type="radio" id="kokybe-6" name="kokybe" value="6" class="focus:ring-0">
                        <label for="kokybe-7" class="pr-2 pl-2">7</label>
                        <input type="radio" id="kokybe-7" name="kokybe" value="7" class="focus:ring-0">
                        <label for="kokybe-8" class="pr-2 pl-2">8</label>
                        <input type="radio" id="kokybe-8" name="kokybe" value="8" class="focus:ring-0">
                        <label for="kokybe-9" class="pr-2 pl-2">9</label>
                        <input type="radio" id="kokybe-9" name="kokybe" value="9" class="focus:ring-0">
                        <label for="kokybe-10" class="pr-2 pl-2">10</label>
                        <input type="radio" id="kokybe-10" name="kokybe" value="10" class="focus:ring-0">
                        @error('kokybe')
                                <div class="text-red-500 mt-2 text-sm">
                                    Pasirinkimas privalomas
                                </div>
                        @enderror
                    </div>
                </div>
                <div>
                    <p class="pb-1">
                        Kokia tikimybė, kad rekomenduosite mus savo draugams? (1 - labai maža, 10 - labai didelė)
                    </p>
                    <div class="mt-1">
                        <label for="tikimybe-1" class="pr-2 pl-2">1</label>
                        <input type="radio" id="tikimybe-1" name="tikimybe" value="1" class="focus:ring-0">
                        <label for="tikimybe-2" class="pr-2 pl-2">2</label>
                        <input type="radio" id="tikimybe-2" name="tikimybe" value="2" class="focus:ring-0">
                        <label for="tikimybe-3" class="pr-2 pl-2">3</label>
                        <input type="radio" id="tikimybe-3" name="tikimybe" value="3" class="focus:ring-0">
                        <label for="tikimybe-4" class="pr-2 pl-2">4</label>
                        <input type="radio" id="tikimybe-4" name="tikimybe" value="4" class="focus:ring-0">
                        <label for="tikimybe-5" class="pr-2 pl-2">5</label>
                        <input type="radio" id="tikimybe-5" name="tikimybe" value="5" class="focus:ring-0">
                        <label for="tikimybe-6" class="pr-2 pl-2">6</label>
                        <input type="radio" id="tikimybe-6" name="tikimybe" value="6" class="focus:ring-0">
                        <label for="tikimybe-7" class="pr-2 pl-2">7</label>
                        <input type="radio" id="tikimybe-7" name="tikimybe" value="7" class="focus:ring-0">
                        <label for="tikimybe-8" class="pr-2 pl-2">8</label>
                        <input type="radio" id="tikimybe-8" name="tikimybe" value="8" class="focus:ring-0">
                        <label for="tikimybe-9" class="pr-2 pl-2">9</label>
                        <input type="radio" id="tikimybe-9" name="tikimybe" value="9" class="focus:ring-0">
                        <label for="tikimybe-10" class="pr-2 pl-2">10</label>
                        <input type="radio" id="tikimybe-10" name="tikimybe" value="10" class="focus:ring-0">
                        @error('tikimybe')
                                <div class="text-red-500 mt-2 text-sm">
                                    Pasirinkimas privalomas
                                </div>
                        @enderror
                    </div>
                </div>
                <div>
                    <p class="pb-3">
                        Gal galite pakomentuoti kodėl pateikėte tokius vertinimus?
                    </p>
                    <div class="mt-1">
                        <textarea name="komentaras" rows="5" class="w-full border-gray-300 rounded-lg shadow-sm @error('komentaras') border-red-500 @enderror"></textarea>
                        @error('komentaras')
                                <div class="text-red-500 mt-2 text-sm">
                                    Ne daugiau nei 2000 simbolių
                                </div>
                        @enderror
                    </div>
                </div>
                <div>
                    <p class="pb-1">
                        Ar galėsime šį Jūsų vertinimą panaudoti savo svetainėje ar socialiniuose puslapiuose?
                    </p>
                    <div class="mt-1">
                        <label for="taip" class="pr-2 pl-2">Taip</label>
                        <input type="radio" id="taip" name="leidimas" value="1" class="focus:ring-0">
                        <label for="ne" class="pr-2 pl-2">Ne</label>
                        <input type="radio" id="ne" name="leidimas" value="0" class="focus:ring-0">
                        @error('leidimas')
                                <div class="text-red-500 mt-2 text-sm">
                                    Pasirinkimas privalomas
                                </div>
                        @enderror
                    </div>
                </div>
                <div>
                    <button 
                        type="submit" 
                        class="w-2/12 py-2 px-4 border 
                        border-transparent rounded-md 
                        shadow-sm text-md font-medium 
                        text-white bg-blue-700"
                    >
                        Siųsti
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection