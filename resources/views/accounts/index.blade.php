<html lang="ja">
<head>
    <title>userList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<body>
<div class="container">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index" class="nav-link px-2 link-secondary">ユーザー一覧</a></li>
            <li><a href="showPlayer" class="nav-link px-2">プレイヤー一覧</a></li>
            <li><a href="index.php?action=items" class="nav-link px-2">アイテム一覧</a></li>
            <li><a href="index.php?action=personalItems" class="nav-link px-2">所持アイテム一覧</a></li>
        </ul>
    </header>
</div>
<h1>■{{$title}}</h1>
<ul>
    @foreach($accounts as $account)
        <li>名前：{{$account['name']}} パス：{{$account['pass']}}</li>
    @endforeach
</ul>
</body>
</html>