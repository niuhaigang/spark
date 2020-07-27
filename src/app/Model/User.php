<?php
namespace App\Model;

use PhalApi\Model\NotORMModel as NotORM;

class User extends NotORM {
    public function test() {
        // SELECT id, name FROM tbl_user WHERE (age > 18);
        $orm = $this->getORM()->select('id, name')->where('age > 18');

        while ($row = $orm->fetch()) {
            var_dump($row);
        }
    }
}