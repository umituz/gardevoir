@if(Route::has('change.locale') && isset($languages) && !empty($languages))
    <div class="absolute top-5 right-5 flex items-center space-x-2">
        <img src="{{ asset('images/globe.png') }}" alt="Dil Seçeneği" class="h-5">
        <div class="relative">
            <button class="text-sm text-gray-700 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" id="languageButton">
                {{ __('Language') }}
            </button>
            <div class="absolute right-0 mt-2 w-32 bg-white border border-gray-300 rounded shadow-lg hidden" id="languageMenu">
                <form action="{{ route('change.locale') }}" method="POST">
                    @csrf
                    @forelse($languages as $code => $name)
                        <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left" name="locale" value="{{ $code }}">
                            {{ $name }}
                        </button>
                    @empty
                        <p class="block px-4 py-2 text-sm text-gray-700">{{ __('No languages available.') }}</p>
                    @endforelse
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('languageButton').addEventListener('click', function() {
            var menu = document.getElementById('languageMenu');
            menu.classList.toggle('hidden');
        });
        document.addEventListener('click', function(event) {
            var button = document.getElementById('languageButton');
            var menu = document.getElementById('languageMenu');
            if (!button.contains(event.target) && !menu.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>
@endif
