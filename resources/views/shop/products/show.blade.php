<x-layout>
    <x-slot:title>{{ $product->name }}</x-slot:title>
    <section class="grid grid-cols-2 rounded-lg bg-black overflow-hidden">
        <div>
            <img class="w-full h-full" width="800" height="800" src="https://picsum.photos/800"
                alt="{{ $product->name }}">
        </div>
        <div>
            <h3 class="text-white font-semibold text-2xl">{{ $product->name }}</h3>
            <span class="text-white">$<span class="text-white">{{ $product->price }}</span></span>

            <button class="rounded-xl bg-amber-400 text-black px-4 py-2 font-bold hover:bg-amber-100">Add to
                Basket
            </button>
        </div>
    </section>
    <section class="flex flex-col gap-y-2 mt-4">
        @foreach ($products = $product->reviews()->paginate() as $review)
            <x-product-rating :review="$review" :stars="(int) round($review->rating, 0, PHP_ROUND_HALF_UP)"></x-product-rating>
        @endforeach
        {{ $products->links() }}
    </section>
</x-layout>
