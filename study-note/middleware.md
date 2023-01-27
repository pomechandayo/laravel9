# ミドルウェアについて
ミドルウェアには以下の3種類がある
* グローバルミドルウェア
* ルートミドルウェア
* コントローラークラスのコンストラクタで指定するミドルウェア

実行されるタイミングや影響範囲が違う
ミドルウェアは`app/Http/Kernel.php`で定義されている

## 学習方針
---
`Laravel`標準の各種ミドルウェアを確認した後、自作のミドルウェアを実装してみる。  

## グローバルミドルウェア
---
以下のミドルウェアがある
|  ファイル名  |  概要  |
| ---- | ---- |
|  App\Http\Middleware\PrevenRequestsDuringMaintenance  |  メンテナンスの場合の振る舞いを変更することができる。全てのアクセスに対してメンテナンス画面を表示したり、特定のURIはメンテナンスから除外したりできる。$exceptプロパティに追加したURIはメンテナンスがから除外される  |
|  Illuminate\Foundation\Http\Middlware\ValidatePostsize  |  リクエストボディのサイズをチェックして値が不正な場合はIlluminate\Http\Exceptions\PostTooLargeExceptionをスローする  |
|  App\Http\Middleware\TrimStrings  |  リクエストの文字列に対してtrim処理を行なって空白を削除する。exceptプロパティにこの処理を除外したいリクエストパラメータを指定できる。  |
|  Fruitcake\Cors\HandleCors  |  LaravelでAPIを提供する際に異なるドメインからのJavascriptを使用したHTTPリクエストのなどの制限をする。WebサーバーでCORS設定をしている場合は不要  |

※上記の中からいくつかコードを確認してどんな処理が書かれているかチェックする

## ルートミドルウェア
---
## コントローラーのコンストラクタで指定するミドルウェア
---