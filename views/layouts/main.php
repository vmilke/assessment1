<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

<<<<<<< HEAD
use yii\helpers\Url;	// чтоб определять ссылки

use yii\bootstrap\Carousel;	// подключаю смену картинок

=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
<<<<<<< HEAD

=======
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
    NavBar::begin([
        'brandLabel' => 'Anglia Ruskin University',	// исправил My Company на Anglia Ruskin University
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
<<<<<<< HEAD
		// Убираю из меню кнопку Contact	
//            ['label' => 'Contact', 'url' => ['/site/contact']],
		// Добавляем кнопку с выпадающим меню регистрации
		// для студентов и для лекторов и администраторов
			(Yii::$app->user->isGuest) ?
			( [ 'label' => 'Registration', 
				'items' => [
					[ 	'label' => 'Students',
						'url' => ['/site/studentsregistrationform']
					],
//					'<li class="divider"></li>',
//					'<li class="dropdown-header">Dropdown header</li>',
					[ 	'label' => 'Lecturers & Administrators',
						'url' => ['/site/lecturersadministratorsregistrationform']
					],
				]
			  ] 
			) : 
			('<b></b>'),

/*		// Добавляем кнопку регистрации студентов
			(Yii::$app->user->isGuest) ?
			( ['label' => 'Student\'s Registration', 'url' => ['/site/studentsregistrationform']] 
			) : 
			('<b></b>'),
		// Добавляем кнопку регистрации лекторов и администраторов
			(Yii::$app->user->isGuest) ?
			( ['label' => 'Lecturer\'s & Administrator\'s Registration', 'url' => ['/site/lecturersadministratorsregistrationform']] 
			) : 
			('<b></b>'),
*/		
	
		// Добавляем кнопку Reports для студентов
			((! Yii::$app->user->isGuest) && (Yii::$app->user->identity->accesstoken == 'student') ) ?
			( ['label' => 'Reports', 'url' => ['/site/about']] 	// Потом поменять about на модель страницы для студентов
			) : 
			('<b></b>'),
			
		// Добавляем кнопку Reports для лекторов
			((! Yii::$app->user->isGuest) && (Yii::$app->user->identity->accesstoken == 'lecturer') ) ?
			( ['label' => 'Reports', 'url' => ['/site/about']] 	// Потом поменять about на модель страницы для лекторов
			) : 
			('<b></b>'),
		
		// Добавляем кнопку Reports для администраторов
			((! Yii::$app->user->isGuest) && (Yii::$app->user->identity->accesstoken == 'administrator') ) ?
			( [ 'label' => 'Reports', 
				'items' => [
					[ 	'label' => 'Students',
						'url' => ['/students/index']
					],
					[ 	'label' => 'Lecturers & Administrators',
						'url' => ['/lecturersadmins/index']
					],
					[ 	'label' => 'Modules & Classes',
						'url' => ['/modulesclasses/index']
					],
					[ 	'label' => 'Timetable',
						'url' => ['/timetable/index']
					],
					[ 	'label' => 'Students & Modules',
						'url' => ['/studentsmodules/index']
					],
					[ 	'label' => 'Attendances',
						'url' => ['/attendance/index']
					],
				]
			  ] 
			) : 
			('<b></b>'),	
		
			
            (Yii::$app->user->isGuest) ? (
=======
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
<<<<<<< HEAD
    ]);	
    NavBar::end();

//	echo Url::to('');  // возвращает текущую ссылку

if( Url::to('') == '/index.php?r=site%2Findex')	// выводим карусель ТОЛЬКО на домашнюю страницу!
{
	echo Carousel::widget ( [
	'items' => [
		[
        'content' => '<img style="width:100%;height:600px" src="http://assessment.local/images/ARU_1 _1600.jpg" >',
        'caption' => '<div style="padding-top: 170px; text-align:left;">
						<p style="font-size: 48px; color: #FFFFFF; font-weight:400;">
							<span style="padding-top: 500px; line-height: 68px;letter-spacing: -1px;">Entrepreneurial University of the Year 2014</span>
						</p>
					  </div>
					  <h1></h1><p></p>',
        'options' => []
		],
		[
        'content' => '<img style="width:100%;height:600px" src="http://assessment.local/images/cambridge2_1600.jpg" >',
        'caption' => '<div style="padding-top: 170px; text-align:left;">
						<p style="font-size: 48px; color: #FFFFFF; font-weight:400;">
							<span style="padding-top: 500px; line-height: 68px;letter-spacing: -1px;">Cambridge, Chelmsford and Peterborough</span>
						</p>
					  </div>
					<h1></h1><p></p>',
        'options' => []
		],
		[
        'content' => '<img style="width:100%;height:600px" src="http://assessment.local/images/Cambridge_punting_3_1600.jpg"/>',
        'caption' => '<div style="padding-top: 170px; text-align:left;">
						<p style="font-size: 48px; color: #FFFFFF; font-weight:400;">
							<span style="padding-top: 500px; line-height: 68px;letter-spacing: -1px;">39,400 students from 177 countries</span>
						</p>
					  </div>
					  <h1></h1><p></p>',
        'options' => []
		],
		[
        'content' => '<img style="width:100%;height:600px" src="http://assessment.local/images/business_2_1600.png"/>',
        'caption' => '<div style="padding-top: 170px; text-align:left;">
						<p style="font-size: 48px; color: #FFFFFF; font-weight:400;">
							<span style="padding-top: 500px; line-height: 68px;letter-spacing: -1px;">Each year, we also help some 2,000 businesses to grow quicker</span>
						</p>
					  </div>
					  <h1></h1><p></p>',
        'options' => []
		]
		],
       'options' => [
       'style' => 'width:100%;height:400px' // Задаем ширину и высоту контейнера
		]
	]);
}


?>


	
=======
    ]);
    NavBar::end();
    ?>

>>>>>>> 8d9576abfbc745a7a0cf316c00a58a00f96e223e
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Anglia Ruskin University <?= date('Y') // исправил My Company на Anglia Ruskin University ?></p>	

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
