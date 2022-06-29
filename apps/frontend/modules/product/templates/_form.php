<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('product/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>

  <?php echo $form['name']->renderRow() ?>

  <?php echo $form['price']->renderRow() ?>

  <?php foreach ($form['newPhotos'] as $photo): ?>
    <?php echo $photo['caption']->renderRow() ?>
    <?php echo $photo['filename']->renderRow() ?>
  <?php endforeach; ?>

  <?php if (!$form->getObject()->isNew()): ?>
    <?php foreach ($form['Photos'] as $photo): ?>
      <?php echo $photo['caption']->renderRow() ?>
      <?php echo $photo['filename']->renderRow(array('width' => 100)) ?>
    <?php endforeach; ?>
  <?php endif; ?>

  <div>
    <?php echo $form->renderHiddenFields() ?>
  </div>

  <a href="<?php echo url_for('product/index') ?>">Back to list</a>
  <input type="submit" value="Save" />
</form>
