<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Neem contact op met Inasja.com voor vragen of meer informatie over onze diensten.">
    <title>Inasja.com-Contact</title>
    <link href="{{ asset('build/assets/app-CKW-exbu.css') }}" rel="stylesheet">
</head>
<body>
    <x-navigation />
    <div class="max-w-[580px] mx-auto p-2 mt-20">
    <img src="{{ asset('assets/images/contactimg.webp') }}" alt="contactimg" class="object-obtain h-60 w-96 mx-auto border-2 border-accent-color rounded-xl ">
    <h1 class="text-2xl font-bold mb-4 text-center">Contact</h1>
</div>

<div class="max-w-[580px] mx-auto p-2 mb-4">
    <p class="text-left">Heeft u een vraag of wilt u meer informatie over de diensten van Inasja.com? Neem dan gerust contact met ons op. Wij staan u graag te woord.</p>
    <br><br>


    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Er is een fout opgetreden!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Email is goed verzonden!</strong>
    <div class="mt-4">
        <a href="/" class="inline-flex items-center px-4 py-2 bg-primary-color border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  hover:bg-secondary-color active:bg-blue-900 focus:outline-none focus:border-primery focus:ring focus:ring-blue-300 disabled:opacity-25 transition">
            Verder gaan in website
        </a>
        <a href="https://www.google.com/" class="ml-4 inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition">
            Afsluiten
        </a>
    </div>
</div>

@endif

    <form action="/send-mail" method="POST">
        @csrf
        <!-- Voornaam en Achternaam -->
        <div class="mb-4">
            <label class="block text-sm font-bold mb-2" for="name">Voornaam en Achternaam</label>
            <input type="text" name="name" id="name" aria-label="Jouw naam" class="shadow appearance-none border rounded w-full py-2 px-3" required>
        </div>

        <!-- E-mail -->
        <div class="mb-4">
            <label class="block text-sm font-bold mb-2" for="email">E-mailadres</label>
            <input type="email" name="email" id="email" aria-label="E-mailadres" class="shadow appearance-none border rounded w-full py-2 px-3" required>
        </div>

        <!-- Vraag / Bericht -->
        <div class="mb-4">
            <label class="block text-sm font-bold mb-2" for="message">Uw Vraag of Bericht</label>
            <textarea name="message" id="message" aria-label="Uw Vraag of Bericht" class="shadow appearance-none border rounded w-full py-2 px-3 h-32" required></textarea>
        </div>

        <!-- Verzendknop -->
        <div class="mb-4">
            <button type="submit" class="bg-primary-color hover:bg-secondary-color font-bold py-2 px-4 rounded">
                Verstuur
            </button>
        </div>
    </form>
</div>
<div class="max-w-[580px] mx-auto p-2">
        <p class="text-left">Bedankt voor uw bericht.<br><br> Inasja.com streeft ernaar om binnen twee weken contact met u op te nemen. Wij waarderen uw geduld en interesse.<br><br> Met vriendelijke groet,<br><br></p>
          <a href="/" class="team-inasja">Inasja Marroussia Wijdekop</a>




    </div>
<br><br><br>
<p class="text-center text-xs
mb-2 ">KVK 86962752</p>
<br><br>


    <x-footer />



    <script src="{{ asset('build/assets/app-CifqVuM1.js') }}" defer></script>
</body>
</html>


