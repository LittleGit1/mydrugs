<x-layout>
    <x-slot:title>{{ $product->name }}</x-slot:title>
    <section class="grid grid-cols-2 rounded-lg bg-black overflow-hidden">
        <div>
            <img class="w-full h-full" width="800" height="800" src="https://picsum.photos/800" alt="{{$product->name}}">
        </div>
        <div>
            <h3 class="text-white font-semibold text-2xl">{{$product->name}}</h3>
            <span class="text-white">$<span class="text-white">{{ $product->price }}</span></span>
            <form method="POST" action="#"><button class="rounded-xl bg-amber-400 text-black px-4 py-2 font-bold hover:bg-amber-100">Add to Basket</button></form>
        </div>
    </section>
</x-layout>
