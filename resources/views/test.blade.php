{{-- {{ $test }} --}}
@foreach ($test as $item)
<br>
{{ $item->id }}

{{ $item->indication }}
    
@endforeach