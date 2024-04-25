<x-layout>
    <x-slot:title>ABC</x-slot:title>
    {{-- <article>
        <h1 class="font-bold text-3xl pb-4">{{ $product_subcategories->first()->parentCategory->name }}</h1>
        <p>{{ $product_subcategories->first()->parentCategory->description }}</p>
    </article> --}}
    <section class="mt-12">
        <ul class="flex flex-wrap gap-4 justify-center mt-4">
            @foreach ($products as $product)
                <li class="grow">
                    <a class="flex justify-center items-center bg-gray-50 rounded-xl px-4 py-6 hover:bg-white" href="/shop/products/{{$product->id}}">{{$product->name}}</a>
                </li>
            @endforeach
        </ul>
    </section>
</x-layout>
