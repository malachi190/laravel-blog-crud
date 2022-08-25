@extends('layouts.app')


@section('content') 
   <div class="bg-image grid grid-cols-1 m-auto">
       <div class="flex text-gray-100 pt-10">
           <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
               <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md">
                   Want to become a laravel Developer?
               </h1>
             <a href="/blog" class="bg-gray-50 text-gray-700 py-2 px-4 mt-10 font-bold text-xl capitalize">
                    Read More
                </a>
           </div>
       </div>
   </div>

   <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
       <div>
           <img src="{{asset('images/image-2.jpg')}}" alt="" width="400">
       </div>

       <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                    Struggling to be a web developer?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, esse laborum? Iure repellat temporibus fugit numquam odio amet optio obcaecati nostrum labore et possimus cupiditate perspiciatis eveniet explicabo, eligendi veritatis!
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum ad repudiandae accusamus expedita quae? Exercitationem accusantium quibusdam numquam incidunt.
            </p>

            <a href=""
            class="uppercase bg-blue-600 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More...
            </a>
       </div>
  
   </div>

   <div class="text-center p-15 bg-black text-white">
       <h2 class="text-2xl pb-5 text-l">
           Im an expert in...
       </h2>

       <span class="font-extrabold block text-4xl py-1">
           Web Design
       </span>
       <span class="font-extrabold block text-4xl py-1">
           Project Management
       </span>
       <span class="font-extrabold block text-4xl py-1">
           Digital Marketing
       </span>
       <span class="font-extrabold block text-4xl py-1">
           UI Design
       </span>
   </div>

   <div class="text-center py-15">
       <span class="uppercase text-s text-gray-400">
           Blog
       </span>

       <h2 class="text-4xl font-bold py-5">
           Recent Posts
       </h2>

       <p class="m-auto w-4/5 text-gray-500">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repellendus, quaerat minima eaque eius voluptatum.
       </p>
   </div>

   <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quaerat quod alias aspernatur autem, minus facere necessitatibus praesentium accusamus tempore consectetur repudiandae, suscipit fugiat magni maxime repellendus, quibusdam distinctio natus.
                </h3>

                <a href=""
                class="uppercase bg-transparent border-2 border-graay-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find out More
                </a>
            </div>
        </div>

        <div>
           <img src="{{asset('images/image-2.jpg')}}" alt="" width="500" height="500">
        </div>
   </div>


   @endsection