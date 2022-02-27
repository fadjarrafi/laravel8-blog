@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want become a developer?
                </h1>

                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py2 px-4 font-bold text-xl uppercase">Read More</a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>
            
            <p class="py-8 text-gray-500 text-xl">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, itaque doloribus delectus, ullam cum cumque sunt maxime voluptas inventore.
            </p>

            <p class="font-extrabold text-gray-600 text-xl pb-9">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore consequuntur, perferendis illo aliquam tenetur accusamus odit corrupti explicabo voluptas velit vitae alias.
            </p>

            <a href="/blog" class=" uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find Out More</a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pg-5 text-l">
            Im an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">Ux Design</span>
        <span class="font-extrabold block text-4xl py-1">Project Management</span>
        <span class="font-extrabold block text-4xl py-1">Digital Strategy</span>
        <span class="font-extrabold block text-4xl py-1">Backend Developer</span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Post
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro mollitia aspernatur vitae corporis ducimus earum, nemo accusamus soluta dolore quidem distinctio facere omnis est voluptatem cupiditate ullam blanditiis ad sapiente.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, possimus ullam quae voluptates rerum optio. Delectus molestias, aspernatur architecto ipsum consequuntur sint cupiditate! Atque nam, laborum inventore enim eius nulla!
                </h3>

                <a href="http://" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Find Out More</a>
            </div>
        </div>
        
        <div>
            <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nzl8fHRlY2h8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" width="700" alt="">
        </div>
    </div>
@endsection