<?php

namespace app\core;

abstract class DbModel extends Model {
    
    abstract public function tableName(): string;

    abstract public function attributes(): array;

    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = [array_map(fn($attr) => ":$attr", $attributes)];

        $statement = self::prepeare("INSERT INTO $tableName (".implode(',', $attributes).")  
                                            VALUES(".implode(',', $params).")");

        echo '<pre>';
        var_dump($statement, $params, $attributes);
        echo '</pre>';
        exit;
    }

    public function prepeare($sql)
    {
        return Application::$app->db->pdo->prepare($sql);
    }
}