<article class="bg-black border border-pink-600 rounded-xl p-6 flex gap-x-6">
    <div class="flex-none">
        <a href="#">
            <img class="rounded-xl" width="96" height="96" src="https://picsum.photos/96" alt="profile_photo">
            <span class="text-white text-sm block pt-2 italic">{{ $review->user->screen_name }}</span>
        </a>
    </div>
    <div>
        <div class="flex gap-x-1">
            @for ($i = 0; $i < $stars; $i++)
                <x-review-star></x-review-star>
            @endfor
        </div>

        <p class="text-white text-md mt-2">{{ $review->body }}</p>
        <span class="text-white block italic text-sm pt-1">
            {{ \App\Helpers\Strings::toSimpleTimeAgo($review->updated_at) }}
        </span>

        <form action="/reviews/{{ $review->id }}" method="POST" class="mt-4">
            <button type="submit"
                class="bg-pink-600 hover:bg-pink-400 transition-all flex items-center gap-x-2 px-3 py-2 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FFF" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#FFF" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
                <span class="text-white text-sm">{{ $review->likes }}</span>
            </button>
        </form>
    </div>
</article>
