<x-app-layout>
    <div class="py-12">
        <div class="container mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('company.edit', ['company'=>$company->id])}}">Edit</a>
                    <livewire:admin.vendor.view :company="$company" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>