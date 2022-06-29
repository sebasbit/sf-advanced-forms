<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('product/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>

  <fieldset >
    <legend>Product information</legend>

    <?php echo $form['name']->renderRow() ?>
    <?php echo $form['price']->renderRow() ?>
  </fieldset>

  <fieldset>
    <legend>Upload More Photos</legend>

    <?php foreach ($form['newPhotos'] as $photo): ?>
    <?php echo $photo['caption']->renderRow() ?>
    <?php echo $photo['filename']->renderRow() ?>
    <?php endforeach; ?>
  </fieldset>

  <?php if (!$form->getObject()->isNew()): ?>
  <fieldset>
    <legend>Current Photos</legend>

    <?php foreach ($form['Photos'] as $photo): ?>
    <?php echo $photo['caption']->renderRow() ?>
    <?php echo $photo['filename']->renderRow() ?>
    <?php endforeach; ?>
  </fieldset>
  <?php endif; ?>

  <div>
    <?php echo $form->renderHiddenFields() ?>
  </div>

  <input type="submit" class="form-submit" value="Save" />
  <a href="<?php echo url_for('product/index') ?>">Back to list</a>
</form>
