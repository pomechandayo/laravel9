<?php

namespace App\Study\ServiceContainerStudy;

use App\Study\ServiceContainerStudy\Bar;

class Foo
{
  private $bar;
  public function __construct(Bar $bar)
  {
    $this->bar = $bar;
    
  }
  // コンストラクタインジェクションで生成したインスタンスを使用
  public function log1() {
    $this->bar->log('Test Construct');
    $serveice = app(Foo::class);
    app()->call([$serveice, 'log2']);
  }
  // メソッドインジェクションで生成したインスタンスを使用
  public function log2(Bar $bar) {
    $bar->log('Test Method');
  }
}