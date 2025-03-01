@section('title', __('Forgot Password'))

<div class="d-grid col-lg-5 mx-auto">
    <form class="card" wire:submit.prevent="send">
        <h5 class="card-header">
            @yield('title')
        </h5>
        <div class="card-body d-grid gap-3">
            @if($status)
                <x-bs::alert icon="check-circle" :label="__($status)"/>
            @endif

            <x-bs::input :label="__('Email')" type="email" wire:model.defer="email"/>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <x-bs::button :label="__('Send Password Reset Link')" type="submit"/>
        </div>
    </form>
</div>
