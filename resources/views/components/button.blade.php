<button {{$attributes->class([
    'btn',
    'btn-primary',
])->merge([
    'type' => 'submit',
])}}>
    {{$slot}}
</button>