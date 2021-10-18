<x-layout>
    <x-navbar />
    <main class="materijali-main">
        <section id="sekcija1m">
            <div class="container sekcija1m-container">
                <div class="sekcija1m-wrapper">
                    <p class="text">
                        <span> Kamenorezačka radnja "Granit Nikolić" na svom lageru ima veliki broj vrsta prirodnog materijala od granita i mermera.</span>
                    </p>
    
                    <p class="text">
                        Većinu materijala Vam prezentujemo putem sajta, ali svakako Vam preporučujemo da dođete u našu radionicu i na licu mesta vidite i opipate izložene materijale. <span>Time ćete steći potpuni doživljaj određenog materijala</span>.
                    </p>
    
                    <p class="text">
                        Svi prikazani primerci materijala su deo našeg ponude, ali je zbog većeg prometa robe potrebno proveriti putem telefona ili mail-om da li određeni materijal imamo trenutno na lageru, kao i da li je dostupan u traženim dimenzijama, obliku ili obradi. 
                    </p>
    
                    <p class="text">
                        <span> U nastavku stranice nalazi se deo fotografija materijala koje imamo u ponudi. </span>
                    </p>
                </div>
            </div>
        </section>

        <div class="container">
            <hr>
        </div>

        <section id="sekcija2m">
            <h2 class="sekcija2m-naslov">Materijali</h2>

            <div class="container sekcija2m-container">
                <div class="sekcija2m-wrapper grid-container">

                    @foreach ($materials as $material)
                        <div class="card grid-item">
                            <img class="materijali-slika card-img-top" src="{{ $material->slika }}" alt="">

                            <div class="card-body">
                                <h5 class="card-title">{{$material->ime}}</h5>
                                {!! $material->opis !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</x-layout>