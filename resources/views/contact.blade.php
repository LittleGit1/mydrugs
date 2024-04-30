<x-layout>
    <x-slot:title>Contact</x-slot:title>
    <form action="/contact" method="POST">
        @csrf
        <label for="name"></label>
        <input id="name" name="name" type="text" placeholder="John Doe" value="{{ old('name') ?? '' }}">
        <label for="email"></label>
        <input type="email" name="email" id="email" placeholder="john@example.com"
            value="{{ old('email') ?? '' }}">
        <textarea name="message" id="message" cols="30" rows="10">{{ old('message') ?? '' }}</textarea>
        <button type="submit">Submit</button>
    </form>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    @if (session('success'))
        <div class="">
            {{ session('success') }}
        </div>
    @endif

</x-layout>
