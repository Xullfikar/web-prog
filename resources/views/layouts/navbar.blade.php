<div class="navbar bg-info">
    <div class="form-check form-switch">
        <span>ID - </span>
        <input type="checkbox" class="form-check-input"  {{ app()->getLocale() == 'en' ? 'checked' : '' }} role="switch" onchange="window.location.href='{{ app()->getLocale() == 'en' ? route('language.switch', 'id') : route('language.switch', 'en')}}'">
        <span>EN</span>
    </div>
    <div class="container justify-content-end">
        <a href="" class="btn btn-primary col-2">{{ __('main.login') }}</a>
        <a href="" class="btn btn-secondary col-2">{{ __('main.register') }}</a>
    </div>
</div>
