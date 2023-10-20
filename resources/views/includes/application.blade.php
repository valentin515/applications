<span class="text-success success-message"></span>
<x-form id="application-form">
    <x-form-item>
        <x-label>Имя</x-label>
        <x-input-error class="error-name"></x-input-error>
        <x-input type="text" name="name" placeholder="Имя"/>
    </x-form-item>
    <x-form-item>
        <x-label>Номер телефона</x-label>
        <x-input-error class="error-phone_number"></x-input-error>
        <div class="phone-number">
            <x-input type="tel"  name="phone_number"/>    
        </div>
    </x-form-item>
    <x-form-item>
        <x-label>Email</x-label>
        <x-input-error class="error-email"></x-input-error>
        <x-input type="email" name="email" placeholder="Email"/>
    </x-form-item>
    <x-button class="mt-2">Отправить</x-button>
</x-form>
