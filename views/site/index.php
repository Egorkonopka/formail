<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Disinfection';
?>
<div class="site-index">

    <div class="jumbotron mm image">
        <h1>ОСТАНОВИМ КОРОНАВИРУС!</h1>
        <!--<img src="12.jpg" class="img mm">-->
        <p class="lead">ТЕБЕ СРОЧНО НЕОБХОДИМО ОБЕЗЗАРАЖИВАНИЕ ВОЗБУДИТЕЛЕЙ ИНФЕКЦИОННЫХ ЗАБОЛЕВАНИЙ - ВИРУСОВ И БАКТЕРИЙ ? </br> МЫ СМОЖЕМ ТЕБЕ ПОМОЧЬ !!! </p>
        <!--<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>
  
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>ПОЧЕМУ УЖЕ СЕГОДНЯ СТОИТ ЗАКАЗАТЬ НАШИ УСЛУГИ?</h2>

                                    <p>✅Согласовываем время и
                    мастер приедет в удобное время.
                    ✅Профессионально
                    Выполняем работы любой сложности потому, что абсолютно уверены в квалификации наших специалистов.
                    ✅Качественно
                    Используем современные технологии и методы обработки, а также самые лучшие препараты высокого качества.
                    ✅Без посредников
                    Вы будете работать напрямую с нами, по честным ценам.</p>

                <p><?php echo Html::a('Остались вопросы?', ['site/contact'], ['class'=>'btn btn-default castombuttn1']); ?></p>
            </div>
            <div class="col-lg-4">
                <h2>ЧТО ТАКОЕ ДЕЗИНФЕКЦИЯ?</h2>

                <p>Это комплекс мероприятий, направленных на уничтожение бактерий, грибков, вирусов и микроорганизмов,
                    которые несут в себе потенциальную угрозу для здоровья людей. Дезинфекция осуществляется как в воздушной среде, 
                    так и на различных поверхностях, препятствуя распространению серьезных заболеваний. Кроме того,
                    дезинфекция помещений помогает справиться не только непосредственно с самими микроорганизмами,
                    но и продуктами их жизнедеятельности - токсинами, которые вызывают у людей различные заболевания.</p>

            </div>
            <div class="col-lg-4">
                <h2>Дезинфекция помещений и отдельных зон, таких как:</h2>

                <p>&#9656; Жилая недвижимость(квартиры, дома и тд.);
                        ⠀
                </br>&#9656; Коммерческая недвижимость(офисы, ТРЦ); 
                        ⠀
                </br>&#9656; Финансовые учреждения; Промышленные и производственные объекты;
                        ⠀
                </br>&#9656; Автосалоны;
                        ⠀
                </br>&#9656; Общепит.</p>
                
                <p><?php echo Html::a('Узнать стоимость?', ['site/about'], ['class'=>'btn btn-default castombuttn1']); ?></p>
            </div> 
        </div> 

    </div>
</div>
