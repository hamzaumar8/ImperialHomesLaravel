<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(Auth::user()->company)
                    <div class="w-full bg-green-300 py-1 px-2 text-green-700 rounded">
                        Your form has been submitted and
                        it is
                        under
                        proccessing for
                        verification.
                    </div>
                    @else
                    <livewire:user.profile.form-wizard />
                    {{-- <livewire:vendor-form-wizard />--}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>