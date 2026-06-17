<x-app-layout>

<div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-950 p-6">

    <div class="max-w-7xl mx-auto">

        <!-- Header -->
       <div class="bg-slate-800 rounded-2xl p-6 shadow-xl mb-6">
    <h1 class="text-3xl font-bold text-white">
        Data Mahasiswa
    </h1>

    <p class="text-slate-300 mt-2">
        Kelola data mahasiswa kampus
    </p>

    <a href="#"
       class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
        + Tambah Mahasiswa
    </a>
</div>

        <!-- Search -->
        <div class="bg-slate-800 rounded-xl shadow-lg border border-slate-700 p-4 mb-6">

            <input
                type="text"
                placeholder="Cari mahasiswa..."
                class="w-full bg-slate-900 border border-slate-700 text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >

        </div>

        <!-- Table -->
        <div class="bg-slate-800 rounded-2xl shadow-xl border border-slate-700 overflow-hidden">

            <table class="w-full">

                <thead class="bg-slate-800 text-white"></thead>

                    <tr>
                        <th class="p-4 text-left">No</th>
                        <th class="p-4 text-left">NIM</th>
                        <th class="p-4 text-left">Nama</th>
                        <th class="p-4 text-left">Kelas</th>
                        <th class="p-4 text-left">Jurusan</th>
                        <th class="p-4 text-center">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($students as $student)

                    <tr class="border-t border-slate-700 hover:bg-slate-700/50 transition">

                        <td class="p-4 text-slate-200">
                            {{ $loop->iteration }}
                        </td>

                        <td class="p-4 text-slate-200">
                            {{ $student->nim }}
                        </td>

                        <td class="p-4 text-slate-200 font-medium">
                            {{ $student->name }}
                        </td>

                        <td class="p-4 text-slate-200">
                            {{ $student->class }}
                        </td>

                        <td class="p-4 text-slate-200">
                            {{ $student->major }}
                        </td>

                        <td class="p-4 text-center">

                            <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-lg mr-2">
                                Edit
                            </button>

                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded-lg">
                                Hapus
                            </button>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="6" class="text-center py-12 text-slate-300">

                            <div class="flex flex-col items-center">

                                <span class="text-5xl mb-2">
                                    🎓
                                </span>

                                <p class="text-lg">
                                    Belum ada data mahasiswa
                                </p>

                            </div>

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>