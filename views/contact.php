<?php
/** @var $this \gdev\phpmvc\View */
/** @var $model \app\models\ContactForm */

use gdev\phpmvc\form\Form;
use gdev\phpmvc\form\TextareaField;

$this->title = 'Contact';
?>

<h1>Contact Us</h1>

<?php $form = Form::begin('', 'post') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php Form::end() ?>
