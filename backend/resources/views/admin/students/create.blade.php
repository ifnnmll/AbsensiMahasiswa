<x-app-layout>

<div class="max-w-3xl mx-auto p-6">

    <div class="bg-slate-800 rounded-xl p-6 shadow-lg">

        <h1 class="text-2xl font-bold text-white mb-6">
            Tambah Mahasiswa
        </h1>

        <form action="{{ url('/admin/students') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label class="block text-white mb-2">
                    NIM
                </label>

                <input
                    type="text"
                    name="nim"
                    class="w-full rounded-lg bg-slate-700 border border-slate-600 text-white"
                >
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">
                    Nama
                </label>

                <input
                    type="text"
                    name="name"
                    class="w-full rounded-lg bg-slate-700 border border-slate-600 text-white"
                >
            </div>

            <div class="mb-4">
                <label class="block text-white mb-2">
                    Kelas
                </label>

                <input
                    type="text"
                    name="class"
                    class="w-full rounded-lg bg-slate-700 border border-slate-600 text-white"
                >
            </div>

            <div class="mb-6">
                <label class="block text-white mb-2">
                    Jurusan
                </label>

                <input
                    type="text"
                    name="major"
                    class="w-full rounded-lg bg-slate-700 border border-slate-600 text-white"
                >
            </div>

            <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">
                Simpan
            </button>

        </form>

    </div>

</div>

</x-app-layout>
