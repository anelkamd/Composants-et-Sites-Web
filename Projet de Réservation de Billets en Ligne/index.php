<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>ETS Silimu</title>
</head>

<body>
  <div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">ETS SILIMU</span>
            <img class="h-20 w-auto" src="./img/logo.jfif" alt="">
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Ouvrir le menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="./Pages Secondaire/Reservationbillets.php" class="text-sm font-semibold leading-6 text-gray-900">Reservation</a>
          <a href="./Pages Secondaire/photos.php" class="text-sm font-semibold leading-6 text-gray-900">Nos Photos</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Nous Contacter</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Historique</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="./admin/login.php" class="text-sm font-semibold leading-6 text-gray-900">Se connecter<span aria-hidden="true">&rarr;</span></a>
        </div>
      </nav>
      <!-- Mobile menu, show/hide based on menu open state. -->
      <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
          <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">ETS SILIMU</span>
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <a href="./Pages Secondaire/Reservationbillets.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Reservation</a>
                <a href="./Pages Secondaire/photos.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Nos Photos</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Nous Contacter</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Historique</a>
              </div>
              <div class="py-6">
                <a href="./admin/login.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Se connecter</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="relative isolate px-6 pt-14 lg:px-8">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
          <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
            Annonce de notre prochain bateau. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>En Savoir plus <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
        <div class="text-center">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Réservez Votre Billet en Toute Simplicité avec Silimu</h1>
          <p class="mt-6 text-lg leading-8 text-gray-600">Avec Silimu, accédez à la réservation de billets en ligne rapidement et sans tracas. Choisissez votre destination, sélectionnez l'horaire qui vous convient, et obtenez votre billet en quelques clics.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="./Pages Secondaire/Reservationbillets.php" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Reservez Maintenant</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Comment faire ? <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    </div>
  </div>

  <!-- Nombre d'utilisateur-->

  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Nos Parteniare Officiel</h2>
      <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
      </div>
    </div>
  </div>

  <!--Rassurer l'utilisateur-->

  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:text-center">
        <h2 class="text-base font-semibold leading-7 text-indigo-600">Sécurité de Vos Données Personnelles</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Tout ce dont vous avez a faire ce de nous faire Confiance</p>
        <p class="mt-6 text-lg leading-8 text-gray-600">Chez Silimu, la protection de vos informations personnelles est notre priorité. Toutes les données que vous fournissez, telles que votre nom, vos coordonnées et vos informations de paiement, sont cryptées et stockées en toute sécurité.</p>
      </div>
      <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
        <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                </svg>
              </div>
              Les Données sont stocker en ligne
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Rassurez-vous aucune chance que vos donnees sois perdue ou supprimer</dd>
          </div>
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
              </div>
              Vos informations
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Les information sont chiffree cad que personne ne peux acceder ou voir vos donnees</dd>
          </div>
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
              </div>
              Fiabiliter du Systeme
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Le Systeme sera disponible 7jours/7 24h/24 juste pour vous</dd>
          </div>
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                </svg>
              </div>
              Personnelles
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Seul les Admin du Site on droit a l'integralite du site. y compris la page de connexion si-haut</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>

  <!-- La reduction des prix-->
  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl sm:text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Une tarification simple</h2>
        <p class="mt-6 text-lg leading-8 text-gray-600">Voyager dans les conford des bateaux de l"etablissement SILIMU en toute securite</p>
      </div>
      <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
        <div class="p-8 sm:p-10 lg:flex-auto">
          <h3 class="text-2xl font-bold tracking-tight text-gray-900">Billets VIP</h3>
          <p class="mt-6 text-base leading-7 text-gray-600">Le Billets VIP vous donne acces a plusieur choses et un confor inestimable</p>
          <div class="mt-10 flex items-center gap-x-4">
            <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">Ce qui est inclus</h4>
            <div class="h-px flex-auto bg-gray-100"></div>
          </div>
          <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
            <li class="flex gap-x-3">
              <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              Chambre Prive
            </li>
            <li class="flex gap-x-3">
              <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              Connexion Wifi
            </li>
            <li class="flex gap-x-3">
              <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              Un petit dejeuner
            </li>
            <li class="flex gap-x-3">
              <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              Voyage gratuite apres avoir totaliser 5 billets
            </li>
          </ul>
        </div>
        <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
          <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
            <div class="mx-auto max-w-xs px-8">
              <p class="text-base font-semibold text-gray-600">Payez une fois, vous en serez propriétaire pour toujours</p>
              <p class="mt-6 flex items-baseline justify-center gap-x-2">
                <span class="text-5xl font-bold tracking-tight text-gray-900">$34</span>
                <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">USD</span>
              </p>
              <a href="./Pages Secondaire/Reservationbillets.php" class="mt-10 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Reservez Maintenant</a>
              <p class="mt-6 text-xs leading-5 text-gray-600">Factures et reçus disponibles pour un remboursement facile de l'entreprise</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="bg-white border-t border-gray-200 py-8">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap justify-center items-center space-x-4 mb-4 sm:mb-0">
        <a href="#" class="text-gray-500 hover:text-gray-900">About</a>
        <a href="#" class="text-gray-500 hover:text-gray-900">Blog</a>
        <a href="#" class="text-gray-500 hover:text-gray-900">Jobs</a>
        <a href="#" class="text-gray-500 hover:text-gray-900">Press</a>
        <a href="#" class="text-gray-500 hover:text-gray-900">Accessibility</a>
        <a href="#" class="text-gray-500 hover:text-gray-900">Partners</a>
      </div>


      <!-- Social Media Links -->
      <div class="flex space-x-4 mb-4 sm:mb-0">
        <a href="#" class="text-gray-500 hover:text-gray-900">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <!-- Icon for Facebook -->
            <path d="M22 12a10 10 0 1 0-11.74 9.95V14.7H8.07v-2.6h2.19V9.93c0-2.17 1.26-3.36 3.2-3.36.93 0 1.91.16 1.91.16v2.1h-1.08c-1.07 0-1.4.66-1.4 1.34v1.63h2.37l-.38 2.6h-2v7.25A10 10 0 0 0 22 12z" />
          </svg>
        </a>
        <a href="#" class="text-gray-500 hover:text-gray-900">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <!-- Icon for Instagram -->
            <path d="M12 2.16c3.3 0 3.7 0 5 0.07 1.33.06 2.1.3 2.61.52a5.25 5.25 0 0 1 1.83 1.2 5.23 5.23 0 0 1 1.2 1.83c.23.51.47 1.28.53 2.61.07 1.3.07 1.7.07 5 0 3.3 0 3.7-.07 5-.06 1.33-.3 2.1-.53 2.61a5.23 5.23 0 0 1-1.2 1.83 5.25 5.25 0 0 1-1.83 1.2c-.51.23-1.28.47-2.61.53-1.3.07-1.7.07-5 .07-3.3 0-3.7 0-5-.07-1.33-.06-2.1-.3-2.61-.53a5.25 5.25 0 0 1-1.83-1.2 5.23 5.23 0 0 1-1.2-1.83c-.23-.51-.47-1.28-.53-2.61C2.16 15.7 2.16 15.3 2.16 12c0-3.3 0-3.7.07-5 .06-1.33.3-2.1.53-2.61a5.25 5.25 0 0 1 1.2-1.83 5.23 5.23 0 0 1 1.83-1.2c.51-.23 1.28-.47 2.61-.53C8.3 2.16 8.7 2.16 12 2.16m0-1.5C8.58.66 8.13.66 7 1.14a7.45 7.45 0 0 0-2.62 1.2 7.43 7.43 0 0 0-1.2 1.83C3.47 5.02 3.24 5.78 3.18 7.1 3.11 8.43 3.11 8.88 3.11 12c0 3.12 0 3.57.07 4.9.06 1.32.3 2.08.53 2.61.23.51.5.95.84 1.36a7.44 7.44 0 0 0 1.83 1.2c.51.23 1.28.47 2.61.53C8.7 21.86 9.12 21.86 12 21.86c3.12 0 3.57 0 4.9-.07 1.32-.06 2.08-.3 2.61-.53a7.44 7.44 0 0 0 1.83-1.2 7.45 7.45 0 0 0 1.2-1.83c.23-.51.47-1.28.53-2.61.07-1.33.07-1.78.07-4.9 0-3.12 0-3.57-.07-4.9-.06-1.32-.3-2.08-.53-2.61a7.45 7.45 0 0 0-1.2-1.83A7.45 7.45 0 0 0 16.9 1.14C15.77.66 15.3.66 12 .66z" />
            <circle cx="12" cy="12" r="3.5" />
          </svg>
        </a>
        <a href="#" class="text-gray-500 hover:text-gray-900">
          <!-- Example placeholder for another social icon -->
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <!-- Example icon -->
            <path d="M12 0C5.373 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.385.599.111.82-.26.82-.577v-2.045c-3.338.728-4.042-1.416-4.042-1.416-.545-1.384-1.33-1.752-1.33-1.752-1.087-.743.084-.728.084-.728 1.203.085 1.835 1.236 1.835 1.236 1.07 1.833 2.809 1.304 3.493.997.108-.775.42-1.305.764-1.605-2.664-.3-5.466-1.336-5.466-5.943 0-1.312.469-2.384 1.235-3.224-.124-.303-.535-1.522.118-3.176 0 0 1.008-.322 3.3 1.231A11.515 11.515 0 0 1 12 6.556c1.02.005 2.046.139 3.004.409 2.292-1.553 3.299-1.231 3.299-1.231.655 1.654.244 2.873.12 3.176.767.84 1.236 1.912 1.236 3.224 0 4.618-2.804 5.64-5.476 5.934.431.372.816 1.103.816 2.222v3.293c0 .32.22.693.826.576C20.565 21.795 24 17.297 24 12 24 5.373 18.627 0 12 0z" />
          </svg>
        </a>
        <a href="#" class="text-gray-500 hover:text-gray-900">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <!-- Icon for YouTube -->
            <path d="M23.499 6.203a2.99 2.99 0 0 0-2.109-2.116C19.734 3.5 12 3.5 12 3.5s-7.735 0-9.39.587a2.99 2.99 0 0 0-2.109 2.116C.5 7.843.5 12 .5 12s0 4.157.587 5.797a2.99 2.99 0 0 0 2.109 2.116C4.265 20.5 12 20.5 12 20.5s7.735 0 9.39-.587a2.99 2.99 0 0 0 2.109-2.116C23.5 16.157 23.5 12 23.5 12s0-4.157-.001-5.797zM9.747 15.435V8.565L15.098 12 9.747 15.435z" />
          </svg>
        </a>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center text-gray-500 mt-4">
      © 2024 Your Company, Inc. All rights reserved.
    </div>
    </div>
  </footer>

</body>

</html>