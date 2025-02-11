<x-base-layout :$title>
    <div class="bg-gray-50 antialiased dark:bg-gray-900">
        <x-dashboard.nav />

        <!-- Sidebar -->
        <x-dashboard.sidebar/>

        <main class="h-auto p-4 pt-20 md:ml-64">{{ $slot }}</main>
    </div>
</x-base-layout>
