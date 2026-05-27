<x-app-layout>
    <div class="py-8">
        <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-2xl p-10">
            <table class="w-full border-collapse">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border p-4 text-left">Subject Code</th>
                        <th class="border p-4 text-left">Subject Name</th>
                        <th class="border p-4 text-center">Grade</th>
                        <th class="border p-4 text-center">Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grades as $grade)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="border p-4">{{ $grade->subject->code }}</td>
                        <td class="border p-4">{{ $grade->subject->name }}</td>
                        <td class="border p-4 text-center font-bold text-xl {{ $grade->grade >= 75 ? 'text-green-600' : 'text-red-600' }}">
                            {{ number_format($grade->grade, 2) }}
                        </td>
                        <td class="border p-4 text-center font-medium">
                            {{ $grade->grade >= 75 ? 'Passed' : 'Failed' }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>