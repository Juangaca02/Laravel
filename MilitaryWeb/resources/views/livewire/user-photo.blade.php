<div class="ml-4">
    @if ($this->profile_photo_path)
        <p class="text-center text-white mb-4 bg-[#05062D] mx-20 rounded-3xl">Foto nueva</p>
        <img class="w-56 max-h-56 max-w-56 min-h-56 min-w-56 mx-auto"
            src="{{ $this->profile_photo_path->temporaryUrl() }}" alt="">
    @else
        <p class="text-center text-white mb-4 bg-[#05062D] mx-20 rounded-3xl">Foto actual</p>
        <img class="w-56 max-h-56 max-w-56 min-h-56 min-w-56 mx-auto"
            src="{{ Storage::url('images/imagesUsers/' . Auth::user()->profile_photo_path) }}" alt="">
    @endif
    <form action="{{ route('profile.updatePhoto') }}" method="POST" class="grid grid-cols-1"
        enctype="multipart/form-data">-
        @csrf
        @method('patch')
        <label for="profile_photo_path" class="buttonLogin mx-20">
            <span class="text text-center">Seleccione una imagen</span>
            <input type="file" wire:model="profile_photo_path" id="profile_photo_path" name="profile_photo_path"
                class="hidden">
        </label>
        <div class="flex justify-center mt-4">
            <button class="buttonLogin w-full">
                <span class="text">{{ __('Guardar') }}</span>
            </button>
            @if (session('status'))
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="ml-3 text-sm text-white">Guardada</p>
            @endif
        </div>
    </form>
</div>
