
<x-home-layout class="p-6">
  <div class="p-6 mt-20 h-4/6 justify-items-center">
    <div class="flex flex-col gap-10">
        <a href="{{route('tumbuhan')}}" class="block text-center bg-white rounded-lg shadow-md p-9 hover:shadow-lg h-50 w-96">
            <h2 class="text-xl font-bold text-green-600">Tumbuhan</h2>
            <p>Jelajahi berbagai jenis tumbuhan</p>
        </a>
        <a href="{{route('hewan')}}" class="block text-center bg-white rounded-lg shadow-md p-9 hover:shadow-lg h-50 w-96">
            <h2 class="text-xl font-bold text-green-600">Hewan</h2>
            <p>Jelajahi berbagai jenis hewan</p>
        </a>
    </div>
  </div>
</x-home-layout>
