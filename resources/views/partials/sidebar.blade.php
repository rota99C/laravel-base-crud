<aside>
    <div class="admin_control text-center p-2 text-white"><strong>ADMIN CONTROL</strong> </div>
    <div class="container_admin text-white mt-3">
        <i class="fas fa-user-shield"></i> Admin
    </div>
    <ul>
        <li class="{{ Route::currentRouteName() === '' ? 'active' : 'inactive' }}"><i class="fas fa-home me-2"></i><a href="{{route('comics')}}">Homepage</a></li>
        <li><a href="">Characters</a></li>
        <li class="{{ Route::currentRouteName() === 'admin.comics.index' ? 'active' : 'inactive' }}"><i class="fas fa-book-open me-2"></i><a href="{{route('admin.comics.index')}}">Comics</a></li>
        <li class="{{ Route::currentRouteName() === 'admin.movies.index' ? 'active' : 'inactive' }}"><i class="fas fa-film me-2"></i><a href="{{route('admin.movies.index')}}">Movies</a></li>
        <li><a href="">Tv</a></li>
        <li><a href="">Games</a></li>
        <li><a href="">Collectibles</a></li>
        <li><a href="">Videos</a></li>
        <li><a href="">Fans</a></li>
        <li><a href="">News</a></li>
        <li><a href="">Shop</a></li>
    </ul>
</aside>