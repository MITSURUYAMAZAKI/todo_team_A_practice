<?php

require_once('dbconnect.php');

class Model
{
    // プロパティ
    protected $table;
    protected $db_manager;

    // インスタンス化した時に呼ばれるメソッド
    public function __construct()
    {
        // db_managerプロパティは、
        // DbManagerクラスのインスタンス
        $this->db_manager = new DbManager();
        $this->db_manager->connect();
    }

    // DBからデータを全て取得するメソッド
    public function getAll()
    {
        // 実行するSQLを準備する
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' ORDER BY created DESC');
        // 準備したSQLを実行する
        $stmt->execute();
        $tasks = $stmt->fetchAll();
        return $tasks;
    }

    // idを指定してデータを1件取得するメソッド
    public function findById($id)
    {
        // 実行するSQL
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE id = ?');
        $stmt->execute([$id]);
        $task = $stmt->fetch();
        return $task;

    }


    public function delete($id)
    {
        // 実行するSQL
        $stmt = $this->db_manager->dbh->prepare('DELETE FROM ' . $this->table . ' WHERE id = ?');
        $stmt->execute($id);
    }
}
