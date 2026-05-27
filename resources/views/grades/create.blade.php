<x-app-layout>
    <x-slot name="header">Add New Grade</x-slot>

    <div class="py-8 max-w-2xl mx-auto">
        <form method="POST" action="{{ route('grades.store') }}" class="bg-white p-8 rounded-xl shadow">
            @csrf

            <div class="mb-6">
                <label>Student</label>
                <select name="student_id" class="w-full border p-3 rounded-lg" required>
                    <option value="">Select Student</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->fullName() }} ({{ $student->student_id }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label>Subject</label>
                <select name="subject_id" class="w-full border p-3 rounded-lg" required>
                    <option value="">Select Subject</option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->code }} - {{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label>Grade</label>
                <input type="number" step="0.01" name="grade" value="{{ old('grade') }}"
                    class="w-full border p-3 rounded-lg" required>
            </div>

            <div class="mb-6">
                <label>Semester</label>
                <select name="semester" class="w-full border p-3 rounded-lg">
                    <option value="2025-2026-1st">2025-2026 1st Semester</option>
                    <option value="2025-2026-2nd">2025-2026 2nd Semester</option>
                </select>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('grades.index') }}"
                    class="bg-gray-200 text-gray-700 px-5 py-2 rounded-lg hover:bg-gray-300">
                    Cancel
                </a>
                <div class="mb-6">
                    <label>Academic Year</label>
                    <input type="text" name="academic_year" value="{{ old('academic_year', '2025-2026') }}"
                        class="w-full border p-3 rounded-lg" required>
                </div>
                <button type="submit"
                    class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                    Save Grade
                </button>
            </div>
        </form>
    </div>
</x-app-layout>