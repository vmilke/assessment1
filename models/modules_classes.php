<?php

namespace app\models;							// указываем пространство имен

use yii\db\ActiveRecord;						// используем встроенный во фреймворк класс ActiveRecord
												// позволяет работать с базами данных через объекты

class Modules_classes extends ActiveRecord		// создали класс-наследник класса ActiveRecord
{												// Не нужно писать ни строчки кода внутри! 
												// Yii сам свяжет имя таблицы с именем класса !
	
	
}


?>