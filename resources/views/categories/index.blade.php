<x-guest-layout>
    <section class="mt-8 bg-white">
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="mt-4 text-center">
               <!-- <h3 class="text-2xl font-bold">Our Category</h3> -->
                <h2 class="text-3xl font-serif text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-500">
                    OUR CATEGORY</h2>
            </div>
            <div class="grid lg:grid-cols-4 gap-y-6 mt-3">
                @foreach ($categories as $category)
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                        <img class="w-full h-48" src="{{ Storage::url($category->image) }}" alt="Image" />
                        <div class="px-6 py-4">
                            <a href="{{ route('categories.show', $category->id) }}">
                                <h4
                                    class="mb-3 text-xl font-semibold tracking-tight text-orange-600 hover:text-yellow-400 uppercase">
                                    {{ $category->name }}</h4>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
