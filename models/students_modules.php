<?php

namespace app\models;					// указываем пространство имен

use yii\db\ActiveRecord;				// используем встроенный во фреймворк класс ActiveRecord
										// позволяет работать с базами данных через объекты

class Students_modules extends ActiveRecord	// создали класс-наследник класса ActiveRecord
{										// Не нужно писать ни строчки кода внутри! 
										// Yii сам свяжет имя таблицы с именем класса !  
										
	public function afterFind() { 		// метод-событие, вызывается после того, как произошла выборка из базы
										
	}
}


?>