<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Students</h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between mb-6">
                <h3 class="text-2xl font-bold">All Students</h3>
                <a href="{{ route('students.create') }}" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                    + Add New Student
                </a>
            </div>

            <table class="w-full bg-white shadow-sm rounded-xl overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-4 text-left">Student ID</th>
                        <th class="px-6 py-4 text-left">Name</th>
                        <th class="px-6 py-4 text-left">Email</th>
                        <th class="px-6 py-4 text-left">Course</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $student->student_id }}</td>
                        <td class="px-6 py-4 font-medium">{{ $student->fullName() }}</td>
                        <td class="px-6 py-4">{{ $student->email }}</td>
                        <td class="px-6 py-4">{{ $student->course }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('grades.report', $student) }}" class="text-green-600 hover:underline">Report Card</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $students->links() }}
        </div>
    </div>
</x-app-layout>