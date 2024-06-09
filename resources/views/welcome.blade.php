<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Forum</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        /* Tailwind CSS */
        *, ::after, ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
        }
        ::after, ::before {
            --tw-content: '';
        }
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent;
        }
        body {
            margin: 0;
            line-height: inherit;
        }
        h1, h2, h3, h4, h5, h6 {
            font-size: inherit;
            font-weight: inherit;
        }
        a {
            color: inherit;
            text-decoration: inherit;
        }
        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0;
        }
        button, select {
            text-transform: none;
        }
        button {
            background-color: transparent;
            background-image: none;
        }
        :-moz-focusring {
            outline: auto;
        }
        :-moz-ui-invalid {
            box-shadow: none;
        }
        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse;
        }
        textarea {
            resize: vertical;
        }
        .absolute {
            position: absolute;
        }
        .relative {
            position: relative;
        }
        .flex {
            display: flex;
        }
        .grid {
            display: grid;
        }
        .hidden {
            display: none;
        }
        .min-h-screen {
            min-height: 100vh;
        }
        .w-full {
            width: 100%;
        }
        .max-w-7xl {
            max-width: 80rem;
        }
        .flex-col {
            flex-direction: column;
        }
        .items-center {
            align-items: center;
        }
        .justify-between {
            justify-content: space-between;
        }
        .gap-4 {
            gap: 1rem;
        }
        .p-6 {
            padding: 1.5rem;
        }
        .text-center {
            text-align: center;
        }
        .font-semibold {
            font-weight: 600;
        }
        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }
        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
        }
        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }
        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
        }
        .bg-gray-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(31 41 55 / var(--tw-bg-opacity));
        }
        .bg-black {
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity));
        }
        .rounded-md {
            border-radius: 0.375rem;
        }
        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -1px rgb(0 0 0 / 0.06);
            box-shadow: var(--tw-shadow);
        }
        .hover\:bg-gray-700:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(55 65 81 / var(--tw-bg-opacity));
        }
        @media (min-width: 768px) {
            .lg\:flex-row {
                flex-direction: row;
            }
            .lg\:gap-8 {
                gap: 2rem;
            }
            .lg\:p-10 {
                padding: 2.5rem;
            }
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-black text-gray-500 dark:text-white">
    <header class="w-full bg-gray-800 text-white py-4 px-6 shadow-md">
        <div class="flex justify-between items-center">
            <div class="text-xl font-semibold">
                Online Forum
            </div>
            <div class="flex gap-4">
                <a href="{{ route('login') }}" class="py-2 px-4 rounded-md hover:bg-gray-700">Login</a>
                <a href="{{ route('register') }}" class="py-2 px-4 rounded-md hover:bg-gray-700">Register</a>
            </div>
        </div>
    </header>
    <main class="relative min-h-screen flex items-center justify-center">
        <div class="relative w-full max-w-7xl px-6 lg:px-10 py-16 text-center">
            <h1 class="text-4xl font-semibold mb-4">Welcome to the Online Forum</h1>
            <p class="text-lg">Connect with like-minded individuals and engage in meaningful discussions. Our community is here to support you and provide a platform for sharing ideas, asking questions, and finding answers.</p>
        </div>
    </main>
</body>
</html>
