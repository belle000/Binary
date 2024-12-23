<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Update Profile Information Form -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold">Update Profile Information</h3>
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" name="phone" type="text" value="{{ old('phone', $user->phone) }}" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <!-- Major -->
                        <div class="mt-4">
                            <x-input-label for="major" :value="__('Major')" />
                            <x-text-input id="major" name="major" type="text" value="{{ old('major', $user->major) }}" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('major')" class="mt-2" />
                        </div>

                        <!-- Class -->
                        <div class="mt-4">
                            <x-input-label for="class" :value="__('Class')" />
                            <x-text-input id="class" name="class" type="text" value="{{ old('class', $user->class) }}" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('class')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-primary-button>{{ __('Save Changes') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Change Password Form -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold">Change Password</h3>
                    <form method="POST" action="{{ route('profile.password.update') }}">
                        @csrf
                        @method('PUT')

                        <!-- Current Password -->
                        <div class="mt-4">
                            <x-input-label for="current_password" :value="__('Current Password')" />
                            <x-text-input id="current_password" name="current_password" type="password" required class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
                        </div>

                        <!-- New Password -->
                        <div class="mt-4">
                            <x-input-label for="new_password" :value="__('New Password')" />
                            <x-text-input id="new_password" name="new_password" type="password" required class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('new_password')" class="mt-2" />
                        </div>

                        <!-- Confirm New Password -->
                        <div class="mt-4">
                            <x-input-label for="new_password_confirmation" :value="__('Confirm New Password')" />
                            <x-text-input id="new_password_confirmation" name="new_password_confirmation" type="password" required class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('new_password_confirmation')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-primary-button>{{ __('Change Password') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Delete Account Form -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold">Delete Account</h3>
                    <form method="POST" action="{{ route('profile.delete') }}">
                        @csrf
                        @method('DELETE')

                        <!-- Password Confirmation -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Confirm Password')" />
                            <x-text-input id="password" name="password" type="password" required class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-danger-button>{{ __('Delete Account') }}</x-danger-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
