<?php

include_once('db_config.php');

class db
{

    function get_all($sql)
    {
        try {
            $dbh = new PDO(DB_HOST, DB_USER, DB_PASS);
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $dbh = null;
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print('Error:' . $e->getMessage());
            die();
        }
    }

    function get_pclist_all()
    {
        $sql_command = "SELECT * FROM `pc_list`";
        $result = $this->get_all($sql_command);
        foreach ($result as $key => $value) {
            $tp = $value['type'];
            $rows[$tp][] = $value;
        }
        return $rows;
    }

}
