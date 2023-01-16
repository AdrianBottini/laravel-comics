<nav>
    <ul>
        @foreach ($menu as $item)
          <li><a href="{{ $item['route']}}">{{ $item['label'] }}</a></li>
        @endforeach
    </ul>
</nav>
<style>
    li {
        display: flex;
        padding: 10px;
    }
    nav {
        display: flex;
        justify-content: center;
    }
    ul {
        display: flex;
        padding: 10px;
    }
    a {
        text-decoration: none;
        color: grey;
    }
</style>
