<x-layout>
    <x-slot:title>Shop</x-slot:title>
    <h1></h1>
    <section>
        <h2 class="text-xl font-bold">Browse by categories</h2>
        <ul class="flex flex-wrap gap-4 justify-center mt-4">
            @foreach($product_categories as $category)
            <li class="grow">
                <a class="flex justify-center items-center bg-gray-50 rounded-xl px-4 py-6 hover:bg-white" href="/shop/products?category={{$category->slug}}">{{$category->name}}</a>
            </li>
            @endforeach
        </ul>
    </section>
</x-layout>
