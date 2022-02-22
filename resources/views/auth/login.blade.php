@extends('layouts.home')

@section('title', 'Login')

@section('content')
<!--border-2 border-violet-400-->
<div>
    <div class="grid gap-4 mx-auto text-center border-2 border-violet-400  my-24 px-9 py-3 font-sans place-content-center max-h-fit  rounded-3xl w-1/3">

        <form action="api/v1/generate-code" method="POST" class="mt-4 bg-transparent text-base ">
            @if(session()->has('success'))
            <p class="text-lime-400 text-sm bg-transparent">{{session()->get('success')}}</p>
            @endif
            @if(session()->has('fail'))
            <p class="text-rose-700 text-sm bg-transparent">{{session()->get('fail')}}</p>
            @endif
            @csrf
            <div class=" flex items-center justify-center bg-transparent">
                <img src="https://ciudadtrendy.mx/wp-content/uploads/2021/02/elizabeth-olsen-sonriendo.jpg" class="w-24 h-24 rounded-full text-center" alt="">

            </div>
            <br>
            <input type="email" class="border-b-2 p-2 my-2 bg-transparent border-violet-400 placeholder-violet-500 w-full" id="email" name="email" placeholder="E-mail">
            <span class="text-rose-700 text-sm">@error('email') {{$message}} @enderror</span>
            <input type="password" class="border-b-2 p-2 my-2 bg-transparent border-violet-400 placeholder-violet-500 w-full" id="password" name="password" placeholder="Password">
            <span class="text-rose-700 text-sm">@error('password') {{$message}} @enderror</span>
            <button type="submit" class="border-2 border-purple-800 rounded-full bg-violet-700 hover:bg-violet-900 text-white w-full mt-8 h-10"><b>Send</b></button>
        </form>
    </div>
</div>



@endsection