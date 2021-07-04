<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div x-data="{ open: false }" class="p-6 bg-white border-b border-gray-200">
                  <button @click="open = true" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                  Upload images
                  </button>
                  <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Upload PDF
                  </button>
                  <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Change Content
                  </button>
                  <div>

                      <div class="container mt-2"   x-show="open"
                        @click.away="open = false">
<div class="row">
    <div class="col-md-12">
        <h1 class="mt-2 mb-2">Drag & Drop File Uploading using Laravel 8 Dropzone JS</h1>

        <form action="{{ route('dropzone.store') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
            @csrf
            <div>
                <h3>Upload Multiple Image By Click On Box</h3>
            </div>
        </form>
    </div>
</div>
</div>

                      
                  </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
