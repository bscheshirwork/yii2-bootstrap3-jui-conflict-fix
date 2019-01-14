# Asset bundle who fixed conflict between bootstrap plugins and jQuery-UI plugins


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

add

```
"bscheshirwork/yii2-bootstrap3-jui-conflict-fix": "@dev"
```

to the require section of your `composer.json` file.



## Usage

Add 

```php
...
/* @var $form yii\widgets\ActiveForm */
...
bscheshirwork\bjf\BootstrapJuiConflictFixAsset::register($this);
```

to top of `view` who use `bootstrap` and `jui` together (for example `yii\bootstrap\BootstrapAsset` from you 
own `AppAsset` in main template and `yii\jui\JuiAsset` from widget `zxbodya/yii2-gallery-manager`)


note: `BootstrapJuiConflictFixAsset` **must** be register first!

Example: 

view (like `/views/crud/_form.php`):
```php
...
/* @var $form yii\widgets\ActiveForm */
...
bscheshirwork\bjf\BootstrapJuiConflictFixAsset::register($this);
?>
...
    <?= GalleryManager::widget(
        [
            'model' => $model,
            'behaviorName' => 'galleryBehavior',
            'apiRoute' => 'crud/gallery-api'
        ]
    ); ?>
...
```
template (like `/views/layouts/main.php`):
```php
...
/* @var $this \yii\web\View */
/* @var $content string */
backend\assets\AppAsset::register($this);
?>
...
    <?= $content ?>
...
```
