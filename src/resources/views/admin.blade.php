<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                FashionablyLate
            </div>
            <nav>
                <ul class="header-nav">
                    <p class="header-nav__item">
                        <a class="header-nav__link" href="/logout">logout</a>
                    </p>
                </ul>
            </nav>

        </div>
    </header>

    <main>
        <div class="section-form__content">
            <div class="section-form__heading">
                Admin
            </div>
        </div>

        <form id="search-form" action="find" method="POST">
            <!-- 名前またはメールアドレス検索 -->
            <div class="form-group">

                <input type="text" id="name-email" name="name_email" placeholder="名前またはメールアドレス">

            </div>

            <!-- 性別検索 -->
            <div class="form-group">

                <select id="gender" name="gender" value=""desabled selected>性別
                    <option value="all">全て</option>
                    <option value="male">男性</option>
                    <option value="female">女性</option>
                    <option value="other">その他</option>
                </select>
            </div>

            <!-- お問い合わせ種類検索 -->
            <div class="form-group">

                <select id="inquiry-type" name="inquiry_type" value=""desabled selected>選択してください
                    <option value="type1">商品のお届けについて</option>
                    <option value="type2">商品の交換について</option>
                    <option value="type3">商品トラブル</option>
                    <option value="type4">ショップへのお問い合わせ</option>
                    <option value="type5">その他</option>
                </select>
            </div>

            <!-- 日付検索 -->
            <div class="form-group">

                <input type="date" id="date" name="date">
            </div>

            <!-- 検索・リセットボタン -->
            <div class="form-buttons">
                <button type="submit">検索</button>
                <button type="reset" id="reset-button">リセット</button>
            </div>
        </form>

        <!-- エクスポートボタンとページネーション -->
        <div class="action-container">
        <div class="export-section">
            <button type="button" id="export-button">エクスポート</button>
        </div>

        <div class="pagination">
            <button>◀︎</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>5</button>
            <button>▶︎</button>
        </div>
        </div>


        <div id="results">
            <table>
                <thead>
                    <tr>
                        <th>名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせ種類</th>
                        <th>日付</th>
                        <th></th>
                    </tr>
                </thead>
                @foreach {{ $contacts as ?? '' }}
                <tr>
                    <td>
                        {{$contact->getDetail()}}
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $contacts->links(7) }}
        </div>
        </div>

        
</body>

</html>






