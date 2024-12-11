
  <x-home-layout class="p-6">
    <div class="h-full">
        <h1 class="mb-6 text-2xl font-bold text-center">Tumbuhan</h1>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 ">
    @foreach ($data as $item)
    <div class="p-4 bg-white rounded-lg shadow-md">
        <h2 class="text-lg font-bold">{{$item->nama_tumbuhan2}}</h2>
        <a href="{{ route('tumbuhan.show', $item->id_tumbuhan2) }}" class="text-blue-500 hover:underline">
            Lihat Detail
        </a>
      </div>
            @endforeach
    </div>
    </div>

  </x-home-layout>
