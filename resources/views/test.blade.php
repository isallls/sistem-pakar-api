{{-- {{ $test }} --}}
@foreach ($test as $item)
<br>
{{-- {{ $item->id }}

{{ $item->indication }} --}}

@endforeach
{{-- @dd($a->relations) --}}
@foreach ($test as $c)
<br>
{{ $c->diseas }} || {{ $c->rules->pluck('indication_id') }}
@endforeach
@foreach ($tet as $s)
{{ $s->rules_id }}

@endforeach
<br>
{{ $asd }}
<br>
{{ $awa }}
