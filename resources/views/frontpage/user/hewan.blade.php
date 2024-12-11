
  <!-- x-home-layout Content -->
  <x-home-layout class="p-6">
    <div class="h-5/6">
        <h1 class="mb-6 text-2xl font-bold text-center">Hewan</h1>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
    @foreach ($datas as $item)
    <div class="p-4 bg-white rounded-lg shadow-md">
        <h2 class="text-lg font-bold">{{$item->nama_binatang3}}</h2>
        <a href="{{ route('hewan.show', $item->id_binatang3) }}" class="text-blue-500 hover:underline">
            Lihat Detail
        </a>
      </div>
            @endforeach
    </div>
    </div>
  </x-home-layout>
