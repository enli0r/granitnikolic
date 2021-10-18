<x-layout>
    <x-navbar />

    <main id="kontakt-main">
        <section id="sekcija1k">
            <div class="container sekcija1k-container">
                <div class="sekcija1k-wrapper">
                    <div class="kontakt-info grid-item">
                        <h2 class="kontakt-podnaslov">Kontakt</h2>
    
                        <p class="text">
                            Za sve deteljnije informacije u vezi sa <span>izradom i montažom nadgrobnih spomenika, izborom materijala i drugih proizvoda i usluga</span> koje Vam nudimo, budite slobodni da nas kontaktirate putem email forme ili putem dole navedenih brojeva telefona.
                        </p>
    
                        <div class="kontakt-tekst-slika">
                            <img src="https://i.ibb.co/XzFJH6C/phone.jpg" alt="" class="kontakt-slika">
                            
                            <p class="kontakt-text">
                                Kontakt: 063/81-81-736 - Bojan Nikolić
                            </p>
                        </div>

                        <div class="kontakt-tekst-slika">
                            <img src="https://i.ibb.co/rZkTWfQ/mail.jpg" alt="" class="kontakt-slika">

                            <p class="kontakt-text">
                                Email: granitnikolic@gmail.com
                            </p>
                            
                        </div>

                        <div class="kontakt-tekst-slika">
                            <img src="https://i.ibb.co/K5dDcDk/location.jpg" alt="" class="kontakt-slika">

                            <p class="kontakt-text">
                                Lokacija: Kolubarska 6, Ribare (35220)
                            </p>
                        </div>
                    </div>

                    <div class="kontakt-forma grid-item">
                        <h2 class="kontakt-podnaslov">Pošaljite nam mail</h2>
                        <form action="{{ route('kontakt.store') }}" method="POST">
                            @csrf

                            <input type="text" name="ime" id="ime" value="{{ old('ime') }}" placeholder="Ime" required>

                            <input type="mail" name="email" id="email" value="{{ old('email') }}" placeholder="E-mail" required>

                            <textarea type="text" rows="10" name="description" id="description" value="{{ old('description') }}" placeholder="Unesite tekst" required></textarea>

                            <button type="submit" class="send-btn">Pošalji</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>