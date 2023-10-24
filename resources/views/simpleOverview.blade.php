@extends('templates.main')

@section('title', 'Simpele weergage')

@section('content')
    <h1>Lidnummers aanvullen met voorloop nullen</h1>
    <div>
        Met deze functie kunt u eenvoudig lidnummers aanvullen met voorloop nullen tot een bepaalde lengte. 
        Zo zal lidnummer 1 eruit zien als 0001 bij gewenste lengte van 4.
    </div>
    <br>
    <div>
        <!-- Form template made as component -->
        <x-form action="/update">
            <div class="form-group">
                <label for="memberNumberLength">Gewenste lengte van het lidnummer:</label>
                <input type="number" class="form-control" name="memberNumberLength" class="form-control" min="2" max="9">
            </div>
            <div class="form-group">
                <label for="removeAdditionalZeros">
                    Wilt u van langere lidnummers de voorloopnullen 
                    weghalen om zo de gewenste lengte te krijgen?
                </label>
                <select name="removeAdditionalZeros" class="form-control form-select">
                    <option value="true">Ja</option>
                    <option value="false">Nee</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Doorgaan</button>
        </x-form>
    </div>
@endsection