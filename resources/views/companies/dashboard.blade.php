<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Company Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        // Updated toggleDropdown function to accept ID and toggle correct menu
        function toggleDropdown(id) {
            // Hide all dropdowns first (optional, but nice UX)
            document.querySelectorAll('ul[id$="-dropdown"]').forEach(el => el.classList.add('hidden'));

            // Toggle the selected dropdown
            const dropdown = document.getElementById(id);
            if (dropdown) {
                dropdown.classList.toggle('hidden');
            }
        }
    </script>
</head>
<body class="flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-gray-800 text-white p-4 shadow flex justify-between items-center">
        <h1 class="text-xl font-bold">Company Dashboard</h1>
    
    </header>

    <!-- Main Layout -->
    <div class="flex flex-1 bg-gray-100">


        <!-- Sidebar -->
        <nav class="w-80 bg-[#1e293b] text-white p-4 flex flex-col justify-content min-h-[calc(100vh-64px)]">
            <div>
                <ul>
                    <li class="mb-2">
                        <button onclick="toggleDropdown('job-dropdown')" class="w-full text-left p-2 hover:bg-blue-800 rounded">
                            🧾 Jobs
                        </button>
                        <ul id="job-dropdown" class="hidden ml-4 mt-1 space-y-1">
                            <li><a href="{{ route('jobs.create') }}" class="block p-1 hover:bg-blue-800 rounded">Create Job</a></li>
                            <li><a href="{{ route('jobs.index') }}" class="block p-1 hover:bg-blue-800 rounded">View Jobs</a></li>
                        </ul>
                    </li>

                    <li class="mb-2">
                        <button onclick="toggleDropdown('application-dropdown')" class="w-full text-left p-2 hover:bg-blue-800 rounded">
                            📄 Applications
                        </button>
                        <ul id="application-dropdown" class="hidden ml-4 mt-1 space-y-1">
                            <li>
                                <a href="{{ route('applications.index') }}" class="block p-1 hover:bg-blue-800 rounded">
                                    Review Latest Applications
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('messages.index') }}" class="block p-2 hover:bg-blue-800 rounded">💬 Messages</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('feedbacks.index') }}" class="block p-2 hover:bg-blue-800 rounded">⭐ Feedback</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block p-2 hover:bg-blue-800 rounded">⚙️ Settings</a>
                    </li>
                </ul>
            </div>

        </nav>

        <!-- Main -->
        <main class="flex-1 p-6 overflow-auto bg-white">
           <main class="flex-1 p-6 overflow-auto bg-white">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Dashboard Overview</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-blue-900 text-white p-4 rounded-xl shadow">
            <div class="text-2xl font-bold">{{ $totalJobs ?? 0 }}</div>
            <div class="text-sm mt-1">Total Jobs</div>
        </div>
        <div class="bg-blue-700 text-white p-4 rounded-xl shadow">
            <div class="text-2xl font-bold">{{ $totalApplications ?? 0 }}</div>
            <div class="text-sm mt-1">Total Applications</div>
        </div>
        <div class="bg-orange-500 text-white p-4 rounded-xl shadow">
            <div class="text-2xl font-bold">{{ $totalMessages ?? 0 }}</div>
            <div class="text-sm mt-1">Messages</div>
        </div>
    </div>
</main>

        </main>

        <!-- Aside -->
        <aside class="w-64 bg-[#1e293b] text-white p-4 hidden lg:block">
            <h2 class="text-lg font-semibold mb-4">Quick Tips</h2>
            <p class="text-sm leading-relaxed">
                Remember to review applications regularly and update job posts as needed.
            </p>
        </aside>

    </div>

    <!-- Footer -->
    <footer class="bg-[#f97316] text-white p-4 text-center">
        &copy; 2025 Nchito. All rights reserved.
    </footer>

</body>
</html>
