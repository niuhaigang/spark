<?php
namespace App\Model\User;
use PhalApi\Model\DataModel;

class User extends DataModel {

    protected function getTableName($id) {
        return 'user';
    }

    public function getInfo($userId) {
        return $this->getORM()->select('*')->where('id = ?', $userId)->fetch();
    }

    /**
     * 批量获取用户快照，并进行反转，以便外部查找
     */
    public function getSnapshotByUserIds(array $userIds)
    {
        $rs = array();
        if (empty($userIds)) {
            return $rs;
        }

        $rows =self::getORM()
            ->select('id,nickname,avatar')
            ->where('id', $userIds)
            ->fetchAll();

        foreach ($rows as $row) {
            $rs[$row['id']] = $row;
        }

        return $rows;
    }

    public function test() {
        // SELECT id, name FROM tbl_user WHERE (age > 18);
        // SELECT id, name FROM tbl_user WHERE (age > 18);
        $orm = $this->getORM()->select('id, name')->where('age > 18');

        while ($row = $orm->fetch()) {
            return $row;
//            var_dump($row);
        }

    }
}