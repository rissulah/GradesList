<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Add Subject</h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h3 class="text-xl font-bold mb-6">New Subject</h3>

                @if($errors->any())
                    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('subjects.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1">Subject Code</label>
                        <input type="text" name="code" value="{{ old('code') }}"
                            class="w-full border p-3 rounded-lg" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1">Subject Name</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="w-full border p-3 rounded-lg" required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium mb-1">Units</label>
                        <input type="number" name="units" value="{{ old('units') }}"
                            class="w-full border p-3 rounded-lg" required>
                    </div>

                    <div class="flex justify-between">
                        <a href="{{ route('subjects.index') }}"
                            class="bg-gray-200 text-gray-700 px-5 py-2 rounded-lg hover:bg-gray-300">
                            Cancel
                        </a>
                        <button type="submit"
                            class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                            Save Subject
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>