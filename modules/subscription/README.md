<h1>Module subscription</h1>

1. Добавить в config/web.php 
~~~
 'modules' => [
   'Subscription' => ['class' => 'app\modules\subscription\Module'],
   ],
~~~
2. Запуск миграции
~~~
yii migrate up --migrationPath=@app/modules/subscription/migrations
~~~