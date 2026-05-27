<x-app-layout>
    <x-slot name="header">Add New Student</x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow">
            <form method="POST" action="{{ route('students.store') }}">
                @csrf
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label>Student ID</label>
                        <input type="text" name="student_id" class="w-full border rounded-lg p-3" required>
                    </div>
                    <div>
                        <label>First Name</label>
                        <input type="text" name="first_name" class="w-full border rounded-lg p-3" required>
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="w-full border rounded-lg p-3" required>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="w-full border rounded-lg p-3" required>
                    </div>
                    <div>
                        <label>Course</label>
                        <input type="text" name="course" class="w-full border rounded-lg p-3">
                    </div>
                    <div>
                        <label>Year Level</label>
                        <input type="number" name="year_level" class="w-full border rounded-lg p-3">
                    </div>
                </div>
                <button type="submit" class="mt-8 bg-blue-600 text-white px-6 py-3 rounded-lg">Save Student</button>
            </form>
        </div>
    </div>
</x-app-layout>