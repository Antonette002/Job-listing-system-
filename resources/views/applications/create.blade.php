<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Apply for {{ $job->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Apply for: {{ $job->title }}
        </h2>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 font-medium text-sm text-red-600">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('applications.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Hidden Job ID -->
            <input type="hidden" name="job_id" value="{{ $job->id }}" />

            <!-- Cover Letter -->
            <div class="mb-4">
                <label for="cover_letter" class="block text-sm font-medium text-gray-700">Upload Cover Letter (PDF/DOCX)</label>
                <input
                    id="cover_letter"
                    type="file"
                    name="cover_letter"
                    accept=".pdf,.doc,.docx"
                    required
                    class="mt-1 block w-full text-sm text-gray-700
                        file:mr-4 file:py-2 file:px-4 file:rounded-md
                        file:border-0 file:bg-blue-900 file:text-white
                        hover:file:bg-blue-800"
                />
                @error('cover_letter')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- CV -->
            <div class="mb-4">
                <label for="cv_path" class="block text-sm font-medium text-gray-700">Upload CV (PDF/DOCX)</label>
                <input
                    id="cv_path"
                    type="file"
                    name="cv_path"
                    accept=".pdf,.doc,.docx"
                    required
                    class="mt-1 block w-full text-sm text-gray-700
                        file:mr-4 file:py-2 file:px-4 file:rounded-md
                        file:border-0 file:bg-blue-900 file:text-white
                        hover:file:bg-blue-800"
                />
                @error('cv_path')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <!-- Portfolio (optional) -->
            <div class="mb-4">
                <label for="portfolio_path" class="block text-sm font-medium text-gray-700">Upload Portfolio (optional)</label>
                <input
                    id="portfolio_path"
                    type="file"
                    name="portfolio_path"
                    accept=".pdf,.doc,.docx,.zip,.rar"
                    class="mt-1 block w-full text-sm text-gray-700
                        file:mr-4 file:py-2 file:px-4 file:rounded-md
                        file:border-0 file:bg-blue-900 file:text-white
                        hover:file:bg-blue-800"
                />
                @error('portfolio_path')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
     <!-- Qualifications Upload -->
<div class="mb-4">
    <label for="qualifications" class="block text-sm font-medium text-gray-700">
        Upload Qualifications (PDF/DOCX)
    </label>
    <input
        id="qualifications"
        type="file"
        name="qualifications"
        accept=".pdf,.doc,.docx"
        required
        class="mt-1 block w-full text-sm text-gray-700
            file:mr-4 file:py-2 file:px-4 file:rounded-md
            file:border-0 file:bg-blue-900 file:text-white
            hover:file:bg-blue-800"
    />
    @error('qualifications')
        <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
    @enderror
</div>



            <div class="flex justify-end">
                <button
                    type="submit"
                    class="px-4 py-2 bg-blue-900 text-white text-sm font-medium rounded-md
                        hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600" >
                    Submit Application
                </button>
            </div>
        </form>
    </div>

</body>
</html>
