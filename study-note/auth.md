# 認証機能について
以下のクラスについて調べる
* Illuminate\Contracts\Auth\Factory
* Illuminate\Auth\AuthManager
* Illuminate\Contracts\Auth\Guard
* Illuminate\Auth\RequestGuard
* Illuminate\Auth\SessionGuard
* Illuminate\Auth\TokenGuard
* Illuminate\Contracts\Auth\UserProvider
* Illuminate\Auth\DatabaseUserProvider
* Illuminate\Auth\EloquentUserProvider


## Illuminate\Contracts\Auth\Factoryについて
認証処理を決定づけるためのインターフェース
画面を利用する場合と利用しない場合で処理方法が異なる

`guard`メソッドと`shouladUse`メソッドが定義されている

### 画面を利用する場合
Eloquentを用いたデータベースでのユーザー認証とセッションを用いて認証情報を保持する仕組みが用意されている。

### 画面を利用しない場合
Eloquentを用いたデータベースでのユーザー認証とトークンを用いて認証情報を保持する仕組みが用意されている。

APIではトークンで認証を保持、非APIではセッションで保持する？

### guardメソッドについて
`guard`インスタンスを取得するための定義
`\Illuminate\Contracts\Auth\Guard`か、もしくは`\Illuminate\Contracts\Auth\StatefulGuard`を返す。


## Illuminate\Auth\AuthManager
Illuminate\Contracts\Auth\Factoryの具象クラス。
認証と認証保持の仕組みが書かれている。

### メソッド
#### guard
引数にguard名が入っていればそのガード、入っていなければ`config/auth`の`defaults`で設定されているガードを返す。

#### shouldUse

#### getConfig
`config/auth`の`guards`を全て取得する