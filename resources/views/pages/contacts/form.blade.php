<div class="max-w-4xl mx-auto px-4 py-16">
    <div class="bg-white shadow-xl rounded-2xl p-8">
        <!-- Success Message -->
        @if ($message = Session::get('success'))
            <input type="hidden" value="1" name="success" class="success">
            <div class="bg-emerald-50 border-l-4 border-emerald-500 p-4 mb-6 rounded-r">
                <div class="flex items-center">
                    <svg class="h-6 w-6 text-emerald-500 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                    </svg>
                    <div>
                        <p class="font-medium text-emerald-800">Thank you</p>
                        <p class="text-emerald-700 text-sm">{{ $message }}</p>
                    </div>
                </div>
            </div>
        @endif

        <!-- Error Message -->
        @if ($message = Session::get('error'))
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-r">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <i class="fas fa-bell text-red-500 mr-3 text-lg"></i>
                        <span class="text-red-800">
                            <span class="font-medium">Oops!</span> {{ $message }}
                        </span>
                    </div>
                    <button class="text-red-500 hover:text-red-700 focus:outline-none">
                        <span class="text-2xl">&times;</span>
                    </button>
                </div>
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('send.mail') }}" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="name" id="name" value="{{ old('name') }}" required autocomplete="off" name="name" 
                    placeholder="Eg. Elon Musk"
                    class="w-full px-4 py-3 rounded-lg border-2 @error('name') border-red-500 @else border-gray-200 @enderror
                    focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200
                    placeholder-gray-400 bg-white">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="off"
                    placeholder="Eg. shiptosureja@gmail.com"
                    class="w-full px-4 py-3 rounded-lg border-2 @error('email') border-red-500 @else border-gray-200 @enderror
                    focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200
                    placeholder-gray-400 bg-white">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea id="message_value" name="message_value" required autocomplete="off"
                    placeholder="Eg. Do you accept Card?"
                    class="w-full px-4 py-3 rounded-lg border-2 @error('message_value') border-red-500 @else border-gray-200 @enderror
                    focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200
                    placeholder-gray-400 bg-white min-h-[120px]">{{ old('message_value') }}</textarea>
                @error('message_value')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full sm:w-auto px-6 py-3 bg-transparent text-blue-600 font-medium rounded-lg
                border-2 border-blue-600 hover:bg-blue-50 hover:border-blue-700 hover:text-blue-700
                focus:outline-none focus:ring-4 focus:ring-blue-300
                transition duration-200 ease-in-out transform hover:-translate-y-0.5">
                Send Message
            </button>
        </form>
    </div>
</div>