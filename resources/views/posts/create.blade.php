@extends('layout')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <p>
            <label>Title</label>
            {{-- ใส่ value="{{ Old('title') }}" เพื่อที่จะให้เมื่อใส่ในฟอร์มไม่ครบหรือไม่ถูกต้องก็จะคงค่าที่เคยกรอกไว้ให้ --}}
            <input type="text" name='title' value="{{ old('title') }}"/>
        </p>
        
        <p>
            <label>Content</label>
            {{-- ใส่ value="{{ Old('content') }}" เพื่อที่จะให้เมื่อใส่ในฟอร์มไม่ครบหรือไม่ถูกต้องก็จะคงค่าที่เคยกรอกไว้ให้ --}}
            <input type="text" name='content' value="{{ old('content') }}"/>
        </p>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <button type="submit">Create!</button>
    </form>
@endsection('content')