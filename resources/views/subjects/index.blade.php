<x-app-layout>
    <x-slot name="header">Subjects</x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('subjects.create') }}" class="bg-green-600 text-white px-5 py-2 rounded-lg mb-6 inline-block">
                + Add New Subject
            </a>

            <table class="w-full bg-white shadow-sm rounded-xl">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-4">Code</th>
                        <th class="px-6 py-4 text-left">Subject Name</th>
                        <th class="px-6 py-4">Units</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $subject)
                    <tr class="border-t">
                        <td class="px-6 py-4 font-bold">{{ $subject->code }}</td>
                        <td class="px-6 py-4">{{ $subject->name }}</td>
                        <td class="px-6 py-4">{{ $subject->units }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>