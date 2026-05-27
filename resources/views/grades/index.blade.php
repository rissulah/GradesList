<x-app-layout>
    <x-slot name="header">Grades</x-slot>

    <div class="py-8">
        <a href="{{ route('grades.create') }}" class="bg-purple-600 text-white px-5 py-2 rounded-lg mb-6 inline-block">
            + Add Grade
        </a>

        <table class="w-full bg-white shadow-sm rounded-xl">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-6 py-4">Student</th>
                    <th class="px-6 py-4">Subject</th>
                    <th class="px-6 py-4">Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($grades as $grade)
                <tr class="border-t">
                    <td class="px-6 py-4">{{ $grade->student->fullName() }}</td>
                    <td class="px-6 py-4">{{ $grade->subject->name }}</td>
                    <td class="px-6 py-4 font-bold text-lg {{ $grade->grade >= 75 ? 'text-green-600' : 'text-red-600' }}">
                        {{ number_format($grade->grade, 2) }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>