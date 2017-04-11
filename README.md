phpNT - metisMenu
================================
[![Latest Stable Version](https://poser.pugx.org/phpnt/yii2-metismenu/v/stable)](https://packagist.org/packages/phpnt/yii2-metismenu) [![Total Downloads](https://poser.pugx.org/phpnt/yii2-metismenu/downloads)](https://packagist.org/packages/phpnt/yii2-metismenu) [![Latest Unstable Version](https://poser.pugx.org/phpnt/yii2-metismenu/v/unstable)](https://packagist.org/packages/phpnt/yii2-metismenu) [![License](https://poser.pugx.org/phpnt/yii2-metismenu/license)](https://packagist.org/packages/phpnt/yii2-metismenu)
### Описание:
### Плагин поможет сделать меню в боковой колонке сайта, настраиваются выпадающие списки подпунктов и их направление, подходит для Bootstrap вёрстки.
### [DEMO](http://phpnt.com/widget/metismenu)

------------
### - [Поддержать phpNT](http://phpnt.com/donate/index)
------------

### Социальные сети:
 - [Канал YouTube](https://www.youtube.com/c/phpnt)
 - [Группа VK](https://vk.com/phpnt)
 - [Группа facebook](https://www.facebook.com/Phpnt-595851240515413/)

------------

Установка:

------------

```
php composer.phar require "phpnt/yii2-metismenu" "*"
```
или

```
composer require phpnt/yii2-metismenu
```

или добавить в composer.json файл

```
"phpnt/yii2-metismenu": "*"
```

### Представление:
------------
```php
<?php
use yii\widgets\Menu;
use phpnt\metismenu\MetisMenuAsset;
MetisMenuAsset::register($this);
?>
```
```html
<div class="col-md-4">
    <div class="sidebar-nav">
        <?= Menu::widget([
            'items' => [
                ['label' => 'Элемент 1',
                    'url' => ['services/index'],
                    'options'=>['class'=>'dropdown active'],
                    'template' => '<a href="{url}" class="has-arrow">{label}</a>',
                    'items' => [
                        ['label' => 'Ссылка 1', 'url' => ['#']],
                        ['label' => 'Ссылка 2', 'url' => ['#']],
                    ]
                ],
                ['label' => 'Элемент 2',
                    'url' => ['services/index'],
                    'options'=>['class'=>'dropdown'],
                    'template' => '<a href="{url}" class="has-arrow">{label}</a>',
                    'items' => [
                        ['label' => 'Ссылка 1', 'url' => ['#']],
                        ['label' => 'Ссылка 2', 'url' => ['#']],
                    ]
                ],
                ['label' => 'Элемент 3',
                    'url' => ['services/index'],
                    'options'=>['class'=>'dropdown'],
                    'template' => '<a href="{url}" class="has-arrow">{label}</a>',
                    'items' => [
                        ['label' => 'Ссылка 1', 'url' => ['#']],
                        ['label' => 'Ссылка 2', 'url' => ['#']],
                    ]
                ],
            ],
            'options' => [
                'id'=>'side-menu',
                'class' => 'metismenu',
            ],
            'activeCssClass'=>'active',
            'firstItemCssClass'=>'fist',
            'lastItemCssClass' =>'last',
        ]); ?>
    </div>
</div>
------------
# Документация (примеры):
## [metisMenu](https://github.com/onokumus/metisMenu)
------------
### Версия:
### 0.0.1
------------
### Лицензия:
### [MIT](https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT)
------------
