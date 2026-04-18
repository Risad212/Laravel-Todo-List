<div class="header-ui-actions">
    @auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="header-ui-logout">Logout</button>
    </form>
    @endauth
</div>