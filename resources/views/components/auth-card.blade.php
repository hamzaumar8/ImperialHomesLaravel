<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-primary-color">
    <div class="w-full sm:max-w-md mt-6 p-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="flex flex-col justify-center items-center mb-[2rem]">
            <a href="/">
                <x-application-logo class="h-auto max-w-[200px]" />
            </a>
        </div>
        {{ $slot }}
    </div>
</div>