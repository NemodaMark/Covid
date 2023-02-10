@extends('layout')
@section('content')
    <div class="container">
        <div class="bg-fej">
            <h1>COVID</h1>
            <h3>Külkereskedelmi folyamatok 2020. január–május</h3>
        </div>

        <div class="row">
            <div class="col">
                <p></p>
                <p>2020 áprilisában és májusában nagymértékben visszaesett a külkereskedelmi
                    teljesítmény, mely az árucsoportok és szolgáltatások széles körét érintették.
                    <a href="https://koronavirus.gov.hu/" target="_blank">Tájékoztató oldal a
                        koronavírusról</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-4 bg-torzs">
                <h3>Európai</h3>
                <p>
                    Az európai országok exportteljesítményét tekintve az elmúlt hónapok során a termék-külkereskedelem általános visszaesését láthattuk. A járvány terjedésének hatására különböző korlátozó intézkedések léptek hatályba, és közben a keresleti feltételek is jelentős mértékben romlottak, így a járvány negatív gazdasági hatásai – a jelenleg rendelkezésre álló nemzetközi adatok alapján – a márciusi és az áprilisi külkereskedelmi adatokban érhetők tetten. Az európai országok közül a legjelentősebb mértékben a dél-európaiak termékexportja esett vissza. A márciusi, éves alapon mért 13,6%-os mérséklődést áprilisban 40,7%-os visszaesés követte. A visegrádi országok termékexportja is érdemi csökkenést mutatott, áprilisban 35%-kal esett vissza.
                </p>
                <p>
                    <img src="img/europa.png" alt="Europai Statisztika" class="img-fluid">
                </p>
            </div>
            <div class="col-4">
                <h3>Világkereskedelem</h3>
                <p>
                    A világkereskedelem jelentős mértékben visszaesett
                    „…2020 I. negyedévében a globális gazdasági folyamatok középpontjában a koronavírus okozta járvánnyal kapcsolatos intézkedések álltak. A járvány kiindulópontjának számító Kínában megtört a több évtizede tartó konjunktúra, és 2020 I. negyedévében 6,8%-kal csökkent a gazdaság teljesítménye. A világgazdaság legjelentősebb szereplőjének számító Egyesült Államokban 0,3%-ra lassult a növekedés üteme. A szűkebb környezetünket jelentő Európai Unióban (EU27) 2,6 %-kal csökkent a gazdaság teljesítménye.”
                </p>
                <p>
                    <img src="img/vilag.png" alt="vilag Statisztika" class="img-fluid">
                </p>
            </div>
            <div class="col-4 bg-torzs">
                <h3>Magyar külkereskedelmi teljesítmény</h3>
                <h6>A Covid–19-járvány negatív gazdasági hatásai</h6>
                <p>
                    „…A magyar külkereskedelmi teljesítményt vizsgálva azt láthatjuk, hogy a járvány világméretű terjedése a hazai külkereskedelmet is rendkívüli mértékben visszavetette. A járvány világméretű terjedésének kezdetén (2020. február) még kiugró exportszintet és jelentős többletet eredményezett, azonban ezt követően a külkereskedelmi forgalom jelentős mértékben kezdett csökkeni. 2020. január–áprilisban a teljes magyar külkereskedelmi forgalom 6 milliárd euróval mérséklődött az előző év azonos időszakához mérten. A termékexport 3,4 milliárd euróval, a termékimport 2,6 milliárd euróval csökkent, a külkereskedelmi egyenleg pedig 738 millió euróval romlott az egy évvel korábbihoz viszonyítva.
                </p>
                <p>
                    <img src="img/magyar_egyenleg.png" alt="Magyar Statisztika" class="img-fluid">
                </p>


            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <h3>Europa</h3>
                <p>
                <form>
                    <h6>A kiválasztott európai térségek adatai jelennek meg, havi bontásban.</h6>
                    <select>
                        <option selected value="0">Válasszon régiót</option>
                        <option value="1">1.régió</option>
                        <option value="2">2.régió</option>
                        <option value="3">3.régió</option>
                    </select>
                    <br><br>
                    <a button type="button" class="btn btn-secondary btn-sm" href="#">adatok</button></a>
                </form>
                </p>
            </div>
            <div class="col-4 bg-torzs">
                <h3>Világkereskedelem</h3>
                <select>
                    <option selected value="0">Válasszon régiót</option>
                    <option value="1">1.régió</option>
                    <option value="2">2.régió</option>
                    <option value="3">3.régió</option>
                </select>
                <br><br>
                <a button type="button" class="btn btn-secondary btn-sm" href="#">küldés</button></a>
            </div class="">
            <div class="col-md-4">
                <h3>Magyarországi adatok</h3>
                <p>
                <ul class="list-group">
                    <li class="list-group-item">Export összesen:354 millió</li>
                    <li class="list-group-item">Import összesen: 334 millió</li>
                    <li class="list-group-item">Export és Import egyenleg: 19 millió</li>
                    <li class="list-group-item acive" aria-current="true">Részletes adatok</li>
                </ul>
                </p>

            </div>
        </div>
    </div>
@endsection
