# 認証機能について
以下のインターフェースについて調べる
* Illuminate\Contracts\Auth\Factory
* Illuminate\Contracts\Auth\Guard
* Illuminate\Contracts\Auth\UserProvider

以下の具象クラスについて調べる
* Illuminate\Auth\AuthManager
* Illuminate\Auth\RequestGuard
* Illuminate\Auth\SessionGuard
* Illuminate\Auth\TokenGuard
* Illuminate\Auth\DatabaseUserProvider
* Illuminate\Auth\EloquentUserProvider

## インターフェース
### Illuminate\Contracts\Auth\Factoryについて
---
認証処理を決定づけるためのインターフェースで、画面を利用する場合と利用しない場合で処理方法が異なる。  
画面を利用する場合はEloquentを用いたデータベースでのユーザー認証とセッションを用いて認証情報を保持する仕組みが用意されている。  
画面を利用しない場合はEloquentを用いたデータベースでのユーザー認証とトークンを用いて認証情報を保持する仕組みが用意されている。  

メソッドは`guard`、`shouladUse`が定義されていて、具象クラスは`Illuminate\Auth\AuthManager`。


#### guard
`guard`インスタンスを取得するための定義
`\Illuminate\Contracts\Auth\Guard`か、もしくは`\Illuminate\Contracts\Auth\StatefulGuard`を返す。

#### shouladUse
デフォルトのガードを設定する

### Illuminate\Contracts\Auth\Guard
認証情報の操作を提供するインターフェース。  
`config/auth.php`の`guards`キー配列にある`driver`で指定するものはこのインタフェースを実装したクラスでないといけない。

#### 具象クラス  
* Illuminate\Auth\RequestGuard 
* Illuminate\Auth\SessionGuard
* Illuminate\Auth\TokenGuard

### user
現在認証されているユーザーを取得する。  
ログアウト済みの場合は何も取得しない。

## 具象クラス
## Illuminate\Auth\AuthManager
---
Illuminate\Contracts\Auth\Factoryの具象クラス。
認証と認証保持の仕組みが書かれている。

### メソッド
以下のメソットがある
* guard
* resolve
* callCustomCreator
* shouldUse

#### guard
引数にguard名が入っていればそのガード、入っていなければ`config/auth`の`defaults`で設定されているガードを返す。

#### shouldUse

#### getConfig
`config/auth`の`guards`を全て取得する