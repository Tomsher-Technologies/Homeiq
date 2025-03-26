@extends('layouts.app')
@section('title', 'Faq - HOME_IQ')
@section('content')
<div class="container mx-auto py-12 px-6 lg:px-12">
   <h1 class="text-3xl mb-8 text-center">My Profile</h1>

   <div class="flex justify-center items-center">
            <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-4xl">
                
                <div class="mt-3 flex justify-end items-center">
                    <div class="flex space-x-2">
                        <a class="flex items-center justify-center px-4 py-2.5 text-sm font-bold text-center text-[#41b6e8] border border-[#41b6e8] transition-all duration-200 hover:text-[#41b6e8]  hover:bg-[#d7f0db] " href="change_password.html">Change Password</a>
                    </div>
                </div>

                    <div class="input-item flex space-x-2.5 mb-5 mt-3">

                        <div class="w-full h-full">
                            <div class="w-full h-full input-com"><label class="input-label capitalize block  mb-2 text-gray text-[13px] font-normal">Name</label>
                                <div class="relative w-full h-full overflow-hidden border input-wrapper !border-gray-300 !dark:border-gray-400">
                                    <input placeholder="Demo Name" class="input-field placeholder:text-sm text-sm px-5 text-dark-gray w-full font-normal bg-white focus:ring-0 focus:outline-none h-[40px]" type="text" value=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="input-item flex space-x-2.5 mb-5 mt-5">
                        <div class="w-full h-full">
                            <div class="w-full h-full input-com"><label class="input-label capitalize block  mb-2 text-qgray text-[13px] font-normal">Email*</label>
                                <div class="relative w-full h-full overflow-hidden border input-wrapper border-gray-border ">
                                    <input disabled="" placeholder="demoemial@gmail.com" class="input-field placeholder:text-sm text-sm px-5 text-dark-gray w-full font-normal bg-white focus:ring-0 focus:outline-none h-[40px]" type="email" value=""></div>
                            </div>
                        </div>
                    </div>


                    <div class="input-item flex space-x-2.5 mb-5 mt-5">

                        <div class="w-full h-full">
                            <div class="w-full h-full input-com"><label class="input-label capitalize block  mb-2 text-qgray text-[13px] font-normal">Phone
                                    Number*</label>
                                <div class="relative w-full h-full overflow-hidden border input-wrapper border-gray-border ">
                                    <input placeholder="012 3  *******" class="input-field placeholder:text-sm text-sm px-5 text-dark-gray w-full font-normal bg-white focus:ring-0 focus:outline-none h-[40px]" type="text" value=""></div>
                            </div>
                        </div>
                    </div>



                <div class="mt-3 flex justify-between items-center">
                    <div class="flex space-x-2">
                        <a class="flex items-center justify-center px-4 py-2.5 text-sm font-bold text-center text-[#41b6e8] border border-[#41b6e8] transition-all duration-200 hover:text-[#41b6e8]  hover:bg-[#d7f0db] " href="re-turn.html">Cancel</a>
                        <a class="flex items-center justify-center px-4 py-2.5 text-sm font-bold text-white transition-all border  border-[#41b6e8] duration-200 bg-[#41b6e8]  hover:text-[#41b6e8]  hover:bg-[#d7f0db]" href="">Update profile</a>
                    </div>
                </div>




                


            </div>
        </div>

</div>
@endsection