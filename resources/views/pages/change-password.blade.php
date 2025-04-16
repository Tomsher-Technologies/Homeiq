@extends('layouts.app')
@section('title', 'Faq - '.env('APP_NAME'))
@section('content')
<div class="container mx-auto py-12 px-6 lg:px-12">
   <h1 class="text-3xl mb-8 text-center">Change Password</h1>

   <div class="flex justify-center items-center">
            <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-4xl">
                
                <form class="contact-page__form" action="{{ route('account.changePassword') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="input-item flex space-x-2.5 mb-5 mt-3">

                        <div class="w-full h-full">
                            <div class="w-full h-full input-com"><label class="input-label capitalize block  mb-2 text-gray text-[13px] font-normal">{{ trans('messages.current_password') }}</label>
                                <div class="relative w-full h-full overflow-hidden border input-wrapper !border-gray-300 !dark:border-gray-400">
                                    <input placeholder="**********" type="password" id="current_password" name="current_password" class="input-field placeholder:text-sm text-sm px-5 text-dark-gray w-full font-normal bg-white focus:ring-0 focus:outline-none h-[40px]" pattern="^\S*$" value="{{old('current_password')}}">
                                    
                                </div>
                                @error('current_password')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="input-item flex space-x-2.5 mb-5 mt-5">
                        <div class="w-full h-full">
                            <div class="w-full h-full input-com"><label class="input-label capitalize block  mb-2 text-qgray text-[13px] font-normal">{{ trans('messages.new_password') }}</label>
                                <div class="relative w-full h-full overflow-hidden border input-wrapper border-gray-border ">
                                    <input type="password" id="new_password" name="new_password" class="input-field placeholder:text-sm text-sm px-5 text-dark-gray w-full font-normal bg-white focus:ring-0 focus:outline-none h-[40px]" placeholder="**********"  pattern="^\S*$" title="{{trans('messages.password_spaces')}}">
                                </div>
                                @error('new_password')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="input-item flex space-x-2.5 mb-5 mt-5">

                        <div class="w-full h-full">
                            <div class="w-full h-full input-com"><label class="input-label capitalize block  mb-2 text-qgray text-[13px] font-normal">{{ trans('messages.confirm_new_password') }}</label>
                                <div class="relative w-full h-full overflow-hidden border input-wrapper border-gray-border ">
                                    <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="input-field placeholder:text-sm text-sm px-5 text-dark-gray w-full font-normal bg-white focus:ring-0 focus:outline-none h-[40px]" placeholder="**********"  pattern="^\S*$" title="{{trans('messages.password_spaces')}}">
                                </div>
                                @error('new_password_confirmation')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 flex justify-between items-center">
                        <div class="flex space-x-2">
                            <a class="flex items-center justify-center px-4 py-2.5 text-sm font-bold text-center text-[#41b6e8] border border-[#41b6e8] transition-all duration-200 hover:text-[#41b6e8]  hover:bg-[#d7f0db] " href="{{ route('update-password') }}">Cancel</a>
                            <button class="flex items-center justify-center px-4 py-2.5 text-sm font-bold text-white transition-all border  border-[#41b6e8] duration-200 bg-[#41b6e8]  hover:text-[#41b6e8]  hover:bg-[#d7f0db]" type="submit">Update Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</div>
@endsection

@section('script')
    @if(session()->has('message'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                toastr.{{ session('alert-type', 'info') }}("{{ session('message') }}");
            });
        </script>
    @endif

@endsection