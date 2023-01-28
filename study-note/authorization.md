# 認可機能について
認可処理は'Gate'と'Policy'の2種類がある。
認証機能は`Illuminate\Contracts\Auth\Access\Gate`を介して利用する。
`Gate`ファザードの具象クラスは`Illuminate\Auth\Access\Gate`クラス。
`Illuminate\Contracts\Auth\Authenticatable`を実装したクラスを組み合わせて、認証済みのログインユーザーに対して認可処理を実行する。

## Gate
1つの認可処理に名前をつけて利用の可否を決定づける。
認可処理の登録はGateファザード(`Illuminate\Support\Facades\Gate`)を通じて利用するか、`App\Providers\AuthServiceProvider`の`boot`メソッドにメソッドインジェクションで`Illuminate\Contracts\Auth\Access\Gate`インターフェース型を指定することで利用できる。

### defineメソッドについて
第一引数に認可処理の名前をつけて、第二引数に紐づく処理をクロージャーで記述する。

### Gateを使用する際の流れ
1. `App\Providers\AuthServiceProvider`で認可処理を定義
    1.  `boot`メソッドの引数にメソッドインジェクションで`Illuminate\Contracts\Auth\Access\Gate`を指定する
    1. `define`メソッドで認可処理の名前と紐づく処理を定義
1. 使用したいクラスで`Illuminate\Contracts\Auth\Access\Gate`を`use`する
    1. `allows`で認可処理名を指定して分岐処理を書く 

### 実装と動作確認方法
認証されたユーザーから特定のIDしか認可しない処理を定義する。
その認可処理を実装したクラスでリクエストが通るか通らないかをテストする。
フロントエンドではリクエストの処理、バックエンドでは認可処理の定義と反映処理を書く。

## Policy
複数の認可処理を記述する.

