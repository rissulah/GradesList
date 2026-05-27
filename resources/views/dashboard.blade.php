<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium">Total Students</h3>
                    <p class="text-5xl font-bold text-blue-600 mt-4">{{ $totalStudents }}</p>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium">Total Subjects</h3>
                    <p class="text-5xl font-bold text-green-600 mt-4">{{ $totalSubjects }}</p>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium">Total Grades</h3>
                    <p class="text-5xl font-bold text-purple-600 mt-4">{{ $totalGrades }}</p>
                </div>
            </div>

            <div class="mt-8 bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <a href="{{ route('students.index') }}" class="btn btn-blue">Manage Students</a>
                    <a href="{{ route('subjects.index') }}" class="btn btn-green">Manage Subjects</a>
                    <a href="{{ route('grades.index') }}" class="btn btn-purple">Manage Grades</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>