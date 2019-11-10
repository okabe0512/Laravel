<?php

/*
課題：プロフィールの更新履歴を保存する仕組みを作るにはどのようにしたらよいでしょうか。手順をまとめてみましょう。
①artisan makeでProfileテーブルのMigrationファイルを作成する。
②Migrationを実行する。
③Modelの雛形を作成する。
④Profile Modelとの関連を定義する。
⑤Profile Controllerのupdate Actionに日付操作ライブラリを追加する。
⑥Profile ControllerでHistoryモデルの使用を宣言する。
⑦記録した変更履歴を編集画面で参照できるようにする。
　→edit.blade.php を編集し、編集履歴のhtml要素を追加する。

*/