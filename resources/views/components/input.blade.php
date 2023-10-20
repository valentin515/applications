<input {{$attributes->class([
    'form-control',
    'border',
    'border-secondary',
    'mt-1',
    'form-input',
])->merge([
    'type' => 'text',
    'value' => old($attributes->get('name')),
])}}>
