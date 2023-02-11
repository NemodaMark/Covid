@extends('layout')
@section('content')
    <div class="jumbotron bg-fej text-center">
        <h1>COVID</h1>
        <h3>Külkereskedelmi folyamatok 2020. január–május</h3>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 align-content-center bg-torzs">
                <h3>Az ön általválasztott régióba található régiók adatai.</h3>
                <h3>Európai</h3>
                <p>Az európai országok exportteljesítményét tekintve az elmúlt hónapok során a termék-külkereskedelem általános visszaesését láthattuk. A járvány terjedésének hatására különböző korlátozó intézkedések léptek hatályba, és közben a keresleti feltételek is jelentős mértékben romlottak, így a járvány negatív gazdasági hatásai – a jelenleg rendelkezésre álló nemzetközi adatok alapján – a márciusi és az áprilisi külkereskedelmi adatokban érhetők tetten. Az európai országok közül a legjelentősebb mértékben a dél-európaiak termékexportja esett vissza. A márciusi, éves alapon mért 13,6%-os mérséklődést áprilisban 40,7%-os visszaesés követte. A visegrádi országok termékexportja is érdemi csökkenést mutatott, áprilisban 35%-kal esett vissza.</p>
                <p><img src="img/europa.png" class="img-thumbnail" alt="grafikon" title="grafikon"/></p>
            </div>

        </div>

        <div class="col-sm-12 align-content-center" >
            <table class="col-sm-6 table table-striped">
                <thead>
                <tr>
                    <th scope="col">Régió neve</th>
                    <th scope="col">Dátum</th>
                    <th scope="col">Százalékpont</th>
                </tr>
                </thead>
                <tbody>
                @foreach($adatok as $item)
                    <tr>
                    <th>{{$item->zonanev}}</th>
                    <th>{{$item->datum}}</th>
                    <th>{{$item->szazalekpont}}</th>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
