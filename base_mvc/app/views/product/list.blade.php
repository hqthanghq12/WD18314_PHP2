@extends('layout.main')
@section('content')
    <table>
        <thead>
            <tr>Tên</tr>
            <tr>Tuoi</tr>
            <tr>Trang thái</tr>
        </thead>
        @for($i = 1; $i <10; $i++)
{{--            @php echo $i; @endphp--}}
            <tr>Trang thái</tr>

        @endfor
    </table>
{{--    @if() @endif--}}
{{--    @if @else @endif--}}
{{--    @for() @endfor--}}
{{--    @foreach() @endforeach--}}
@endsection
