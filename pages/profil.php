<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Avocat Connect - Profil Avocat</title>
  <link href="../style.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-50">
  <nav class="bg-gradient-to-r from-gray-900 to-gray-800 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <a href="admin.html" class="text-xl font-semibold hover:text-blue-400 transition duration-300">
            Avocat Connect - Espace Avocat
          </a>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="admin.php" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Tableau de bord</a>
            <a href="profil.php" class="px-3 py-2 rounded-md text-sm font-medium bg-gray-700">Mon Profil</a>
            <a href="login.php" class="px-4 py-2 rounded-md text-sm font-medium bg-red-600 hover:bg-red-700 transition duration-300">
              Déconnexion
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
      <div class="p-8">
        <div class="flex flex-col md:flex-row gap-8">
          <div class="w-full md:w-1/3">
            <div class="text-center">
              <div class="relative w-48 h-48 mx-auto">
                <img class="rounded-full w-full h-full object-cover" src="https://images.unsplash.com/photo-1556157382-97eda2d62296?ixlib=rb-1.2.1&auto=format&fit=crop" alt="Profile">
                <button class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700">
                  <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <div class="w-full md:w-2/3">
            <form class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label class="block text-sm font-medium text-gray-700">Nom</label>
                  <input type="text" value="Sophie Martin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700">Prénom</label>
                  <input type="text" value="Marie" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700">Email</label>
                  <input type="email" value="sophie.martin@cabinet-legal.fr" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700">Téléphone</label>
                  <input type="tel" value="01 23 45 67 89" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700">Spécialités</label>
                <select multiple class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                  <option selected>Droit des affaires</option>
                  <option selected>Droit commercial</option>
                  <option>Droit immobilier</option>
                  <option>Droit international</option>
                </select>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700">Biographie</label>
                <textarea rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">Spécialisée en droit des affaires avec 15 ans d'expérience. Expertise particulière en fusions-acquisitions et droit commercial international.</textarea>
              </div>

              <div class="space-y-4">
                <label class="block text-sm font-medium text-gray-700">Calendrier des disponibilités</label>
                <div class="bg-white p-4 rounded-lg shadow">
                  <div class="flex items-center justify-between mb-4">
                    <button class="p-2 hover:bg-gray-100 rounded-full">
                      <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                      </svg>
                    </button>
                    <h2 class="text-lg font-semibold text-gray-900">Mars 2024</h2>
                    <button class="p-2 hover:bg-gray-100 rounded-full">
                      <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                      </svg>
                    </button>
                  </div>

                  <div class="grid grid-cols-7 gap-1">
                    <div class="text-center text-gray-500 font-medium">Lun</div>
                    <div class="text-center text-gray-500 font-medium">Mar</div>
                    <div class="text-center text-gray-500 font-medium">Mer</div>
                    <div class="text-center text-gray-500 font-medium">Jeu</div>
                    <div class="text-center text-gray-500 font-medium">Ven</div>
                    <div class="text-center text-gray-500 font-medium">Sam</div>
                    <div class="text-center text-gray-500 font-medium">Dim</div>

                    <div class="p-2 text-center text-gray-400">26</div>
                    <div class="p-2 text-center text-gray-400">27</div>
                    <div class="p-2 text-center text-gray-400">28</div>
                    <div class="p-2 text-center text-gray-400">29</div>

                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">1</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">2</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">3</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">4</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">5</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">6</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">7</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">8</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">9</button>
                    <button class="p-2 text-center bg-red-100 hover:bg-red-200 rounded-lg">10</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">11</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">12</button>
                    <button class="p-2 text-center bg-red-100 hover:bg-red-200 rounded-lg">13</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">14</button>
                    <button class="p-2 text-center bg-blue-100 font-semibold rounded-lg">15</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">16</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">17</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">18</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">19</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">20</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">21</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">22</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">23</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">24</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">25</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">26</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">27</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">28</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">29</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">30</button>
                    <button class="p-2 text-center hover:bg-blue-50 rounded-lg">31</button>
                  </div>

                  <div class="mt-4 flex items-center space-x-4 text-sm">
                    <div class="flex items-center">
                      <div class="w-4 h-4 bg-red-100 rounded mr-2"></div>
                      <span class="text-gray-600">Indisponible</span>
                    </div>
                    <div class="flex items-center">
                      <div class="w-4 h-4 bg-blue-100 rounded mr-2"></div>
                      <span class="text-gray-600">Aujourd'hui</span>
                    </div>
                  </div>
              <div class="flex justify-end space-x-4">
                <button type="button" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                  Annuler
                </button>
                <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                  Enregistrer les modifications
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>