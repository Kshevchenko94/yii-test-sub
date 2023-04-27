<?php

namespace app\modules\subscription\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "subscriptions".
 *
 * @property int $id
 * @property int $event
 * @property string $receiver
 * @property int $is_blocked
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Subscriptions extends ActiveRecord
{
    /**
     * @var array|string[]
     */
    public static array $events = [
        'Регистрация',
        'Верификация',
        'Вход',
        'Отправка сообщения',
        'Выход',
    ];

    /**
     * @var array|string[]
     */
    public static array $selectBlocked = [
        'Нет',
        'Да'
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'subscriptions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['event', 'receiver'], 'required'],
            [['event', 'is_blocked'], 'integer'],
            [['receiver'], 'email'],
            [['created_at', 'updated_at'], 'safe'],
            [['receiver'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'event' => 'Событие',
            'receiver' => 'Получатель',
            'is_blocked' => 'Заблокирован',
            'created_at' => 'Дата добавления',
            'updated_at' => 'Дата редактирования',
        ];
    }
}
