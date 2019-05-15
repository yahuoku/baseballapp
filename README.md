## なんのアプリか？


プロ野球速報アプリになります。独学開始３ヶ月目で、オリジナルの成果物を作りたいと考えていたのと、自分は野球が好きだったのでこのアプリを作りました。




## どうやって作ったのか？


PHPのLaravelを使いました。goutteというものを使って、web上からプロ野球情報を必要な分だけスクレイピングして、表示しています。




## 工夫した点は？


ただ単にスクレイピングするだけだと、延長となった場合に９回までしか情報を取得できないので、構文を活用しながら延長にも対応できるようにしました




## 課題は？


・URLの日付部分をパラメーターで指定できるようにする
・見た目をBootstrapなどで綺麗にする
・その日の試合数情報を取得し、日付毎に対応できるようにする
