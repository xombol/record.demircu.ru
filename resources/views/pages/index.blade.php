@extends('layouts.main')
@section('title', 'Home')
@push('css')

    <style>
        .item_spec {

            animation: .5s;
            transition: .5s;
            border-radius: 20px;
        }

        .item_spec:hover {
            background: #7c7c7c;
            animation: .5s;
            transition: .5s;
        }

        .item_spec path {
            animation: .5s;
            transition: .5s;
        }

        .item_spec:hover path {
            fill: #ffffff !important;
            animation: .5s;
            transition: .5s;
        }

        .item-title {
            font-size: 20px;
            color: black;
            text-decoration: none;
            text-align: center;
        }

        .item_spec:hover .item-title {
            color: white;
        }
    </style>
@endpush
@section('content')

    <section class="container" id="sec-a998">
        <div class="">
            <h3 class="">Specialization</h3>
            <h5 class="">Сhoose a direction</h5>
            <div class="row">
                @foreach($specialties as $specialty)
                    <a href="{{route('online-record.show', $specialty->id)}}" class="col-lg-3 item_spec p-5">
                        <div class="d-flex flex-column justify-content-center align-items-center"><span
                                class="u-icon u-icon-circle u-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" style="
    width: 150px;
    height: 150px;
" data-name="Layer 1" viewBox="0 0 122.47 122.88"><title>doctor</title><path
                                    d="M84.58,103.47a4.09,4.09,0,1,1-4.08,4.09,4.08,4.08,0,0,1,4.08-4.09Zm3.61-60.62a3.89,3.89,0,0,1,2.2,1.48c1.08,1.39,1.38,3.64,1.08,6a15.16,15.16,0,0,1-2.21,6.2c-1.31,2-3,3.29-5,3.16-.14,6.51-3.33,9.5-7.49,13.41l-1.59,1.51-.54.51.13.09a14.67,14.67,0,0,1-1.58,1.1,17.71,17.71,0,0,1-4.61,2.47,20.48,20.48,0,0,1-6.84,1.12,21.4,21.4,0,0,1-7.11-1.1l-1-.36a16.18,16.18,0,0,1-3.74-1.66l-.5-.31a21.59,21.59,0,0,1-2.26,4.77L62.65,92.05,77.23,79.9A22.93,22.93,0,0,1,75,75.38c6.43,4.57,7.82,14.11,7.61,21.81,0,1-.06,1.26-.08,1.59a8.91,8.91,0,0,0-4.36,15,8.49,8.49,0,0,0,11.77.7,8.9,8.9,0,0,0,3.42-7,7.94,7.94,0,0,0-1.08-4c-1.5-2.6-3.13-3.36-5.62-4.6-.17-.09,0-.47,0-1.53a47.43,47.43,0,0,0-1.46-14.08,21,21,0,0,0,3.4,1.41c8.9,2.1,19.84,3,23.76,5.2a16,16,0,0,1,5,4.26c3.47,4.58,3.76,17.76,5,23.36-.31,3.28-2.16,5.16-5.82,5.44H5.82C2.17,122.6.31,120.71,0,117.44c1.26-5.6,1.56-18.79,5-23.36a15.58,15.58,0,0,1,5.05-4.26c5.57-3.1,19.22-3.94,28.3-6.46a33.06,33.06,0,0,0-1.58,8c-1,.77-3.64,1.67-4.47,2.66a38.55,38.55,0,0,0-3.86,5.53,2,2,0,0,0-.27,1c0,.28.29.57.17.81l-.19.37c-2.6,5-4.29,10.61-3.49,13A3.64,3.64,0,0,0,27.3,117a12.43,12.43,0,0,0,3.15.41c.31,0,.63,0,.94,0a3.07,3.07,0,0,0,.52.39,4.12,4.12,0,0,0,.67.32,2.58,2.58,0,0,0,.91.17A2.51,2.51,0,0,0,36,115.75a2.54,2.54,0,0,0-.23-1,2.58,2.58,0,0,0-2.38-1.61c-.92,0-2.23.46-2.23,1.38v0l0,.06-.64,0a9.17,9.17,0,0,1-2.33-.28c-.45-.12-.71-.29-.77-.48-.58-1.68,1-6.33,3.29-10.83l.29-.55a2,2,0,0,0,1-.88,34,34,0,0,1,3.41-4.92,7.09,7.09,0,0,1,3.38-1.72H39a10.53,10.53,0,0,1,1.72,1.55,30.64,30.64,0,0,1,3.6,5c.23.41.79.5,1,.89,2.65,4.28,4.14,9.19,3.78,11.06-.08.44-.44.7-1,.88a10.49,10.49,0,0,1-2.62.37,1.74,1.74,0,0,0-.1-.19v0c0-.92-1.32-1.35-2.24-1.38a2.58,2.58,0,0,0-2.38,1.61,2.71,2.71,0,0,0-.23,1,2.51,2.51,0,0,0,2.51,2.51,2.63,2.63,0,0,0,.92-.17,4,4,0,0,0,.66-.32,3.27,3.27,0,0,0,.36-.25h.36A12.22,12.22,0,0,0,49,117a3.88,3.88,0,0,0,2.9-3.05c.44-2.44-1.33-7.82-3.94-12.7a2,2,0,0,0,.16-.81,2.13,2.13,0,0,0-.28-1,36,36,0,0,0-4.1-5.7c-.83-.93-2.66-1.2-2.85-2.44-.5-3.23.9-7.23,3-10.71a15.15,15.15,0,0,0,1.46-2.19l.32-.44a8.32,8.32,0,0,1,3.41-2.08q-.73-.55-1.47-1.2L46.07,73.3l-.1-.09c-4-3.48-7.41-6.43-8-13.56-2.78-.24-4.75-2.88-5.72-6a15.2,15.2,0,0,1-.65-5.14,7.82,7.82,0,0,1,1.51-4.56,4.31,4.31,0,0,1,.63-.65l-.14-.09c-.64-8,1.23-21.82-7.43-24.44C42.51-1.55,60.51-5.27,75.6,7.13,91.28,8,98.85,30.64,88.19,42.85Zm-46-5a14,14,0,0,0-.2,7.6,1.67,1.67,0,0,1-2.67,1.77c-2-1.7-3.21-1.86-3.73-1.24a4.7,4.7,0,0,0-.75,2.6,11.77,11.77,0,0,0,.51,4c.68,2.23,2,4.06,3.58,3.6a1.51,1.51,0,0,1,.48-.08,1.67,1.67,0,0,1,1.71,1.63c.17,7,3.24,9.67,7,12.9l.1.08,1.6,1.4a16.87,16.87,0,0,0,5.82,3.46,17.29,17.29,0,0,0,4.44.87,25,25,0,0,0,3.35-.16,23.69,23.69,0,0,0,4.45-.91,15,15,0,0,0,4.91-3.23l1.62-1.54c4-3.74,6.92-6.5,6.36-13.21a1.67,1.67,0,0,1,2.59-1.53c1.13.75,2.25,0,3.08-1.24a11.63,11.63,0,0,0,1.69-4.78,5.27,5.27,0,0,0-.41-3.52c-.4-.52-1.47-.31-3.53,1.26a1.67,1.67,0,0,1-2.73-1.55c1.46-8.54.73-13.82-1.14-17.34-1.63-3-4.23-4.85-7-6.32-6.15,4.7-10.49,5.23-14.81,5.77-3.57.44-7.12.88-11.83,4.13a11.37,11.37,0,0,0-4.47,5.58Z"/></svg></span>
                            <h5 class="item-title">{{$specialty->name}}</h5>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@push('js')

@endpush
