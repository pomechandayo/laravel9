# Fortifyついて
## ログイン処理の流れ
1. /loginにpostでアクセスするとAuthenticatedSessionControllerのstoreメソッドが実行される。
1. storeメソッドではloginPipelineメソッドが使用されている
1. Pipelineクラスがインスタンス化され、thenメソッドが使用される

## AttemptToAuthenticateクラスについて
* Laravel/Fortify/Actions直下にあるクラス
* 使用するguardをコンストラクタの引数に渡せる

