<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">Profile Photo:</h3>
                        @if(Auth::user()->profile_photo)
                            <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Profile Photo" class="mt-2 img-fluid rounded-circle" style="max-width: 150px;">
                        @else
                       
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>Liste des rendez-vous :</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Heure</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Numéro de téléphone</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>07/17/2024</td>
                    <td>15:30</td>
                    <td>Mohammed</td>
                    <td>Hammouga</td>
                    <td>mohammed@gmail</td>
                    <td>0770428292</td>
                </tr>
                <tr>
                    <td>07/17/2024</td>
                    <td>16:00</td>
                    <td>imane</td>
                    <td>naji</td>
                    <td>imane@gmail</td>
                    <td>0763549274</td>
                </tr>
                <tr>
                    <td>07/17/2024</td>
                    <td>16:30</td>
                    <td>ayoub</td>
                    <td>ramidi</td>
                    <td>ayoub@gmail</td>
                    <td>0770473839</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</x-app-layout>

<style>
    /* CSS for app layout */
.bg-white {
    background-color: #78fac2; /* White background */
}

.bg-white .text-gray-900 {
    color: #4b5563; /* Text color */
}

.bg-white .text-gray-900.dark {
    color: #ffffff; /* Dark mode text color */
}
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table th,
.table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.table th {
    background-color: #f2f2f2;
    color: #333;
}

.table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.table tbody tr {
    background-color: #f0f0f0;
}

/* You can add more CSS styles to further enhance the appearance */

</style>