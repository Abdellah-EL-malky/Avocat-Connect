<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cabinet Legal - Réservation</title>
  <link href="style.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <script src="https://cdn.tailwindcss.com"></script>
  <nav class="bbg-slate-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <a href="../index.html" class="text-xl font-semibold">Cabinet Legal</a>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="../index.html" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Accueil</a>
            <a href="reservation.php" class="px-3 py-2 rounded-md text-sm font-medium bg-gray-700">Réservation</a>
            <a href="login.php" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Connexion</a>
            <a href="register.php" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Inscription</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
<div class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-12">Réserver une Consultation</h2>
      
      <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mb-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1556157382-97eda2d62296?ixlib=rb-1.2.1&auto=format&fit=crop&w=400" alt="Avocat">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-900">Me. Sophie Martin</h3>
            <p class="text-gray-600">Droit des affaires</p>
            <p class="mt-2 text-gray-500">15 ans d'expérience</p>
            <button onclick="showReservationForm('Sophie Martin')" class="mt-4 w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
              Réserver
            </button>
          </div>
        </div>
