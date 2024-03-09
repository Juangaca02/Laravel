<div class="ml-4">
    @if ($this->image)
        <p class="text-center text-white mb-4">Foto nueva</p>
        <img class="w-56 max-h-56 max-w-56 min-h-56 min-w-56 mx-auto" src="{{ $this->image->temporaryUrl() }}"
            alt="">
    @else
        <p class="text-center text-white mb-4">Foto actual</p>
        <img class="w-56 max-h-56 max-w-56 min-h-56 min-w-56 mx-auto"
            src="{{ Storage::url('images/' . Auth::user()->image) }}" alt="">
    @endif
    <form action="{{ route('profile.updatePhoto') }}" method="POST" class="grid grid-cols-1"
        enctype="multipart/form-data">-
        @csrf
        @method('patch')
        <label for="image"
            class="cursor-pointer flex items-center justify-center bg-gradient-to-r from-doradoBoton1 botonGeneral text-white font-bold py-2 px-4 mx-20 rounded">
            <span>Select a photo</span>
            <input type="file" wire:model="image" id="image" name="image" class="hidden">
        </label>
        <div class="flex justify-center mt-4">
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-doradoBoton1 to-doradoBoton2 botonGeneral rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                {{ __('Save') }}
            </button>
            @if (session('status'))
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="ml-3 text-sm text-white">Guardada</p>
            @endif
        </div>
    </form>
</div>
