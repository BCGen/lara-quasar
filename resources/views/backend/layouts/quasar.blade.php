@app
    @push('js_cdn')
        asdf
    @endpush

    @section('js')
        {{-- <script src="{{ mix('js/frontend/app.js') }}"></script> --}}
        <script src="{{ mix('js/app.js') }}"></script>
    @show
@endapp


