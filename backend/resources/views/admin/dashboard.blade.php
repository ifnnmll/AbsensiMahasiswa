<x-app-layout>

<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">
        Dashboard Admin
    </h1>

    <div class="grid grid-cols-2 gap-4">

        <div class="bg-white p-6 rounded shadow">
            <h2>Total Mahasiswa</h2>
            <p class="text-4xl font-bold">
                {{ $students }}
            </p>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h2>Total Absensi</h2>
            <p class="text-4xl font-bold">
                {{ $attendances }}
            </p>
        </div>

    </div>

</div>

</x-app-layout>