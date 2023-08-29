@extends('admin.dashboard')
@section('admin')
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <h4 class="card-title mb-0">Adicionar Amenities</h4>
                </div>
                <div>
                    <a href="{{ route('all.amenities') }}" class="btn btn-outline-primary">All Amenities</a>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <form method="post" action="{{ route('store.amenities') }}" class="mt-6 space-y-6">
                @csrf
                <div class="mb-2 w-full">
                    <div>
                        <x-input-label for="amenities_name" :value="__('Nome')" />
                    </div>
                    <x-text-input id="amenities_name" name="amenities_name" type="text" class="mt-1 block w-full" :value="old('amenities_name')" />
                    <x-input-error class="mt-2" :messages="$errors->get('amenities_name')" />
                </div>
                <div class="flex items-center gap-4 mt-4">
                    <x-primary-button class="bg-zinc-500">{{ __('Save') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400 bg-zinc-500"
                        >{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>
    </div>
            <!-- /.card.mb-4-->
@endsection
