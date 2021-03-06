<?php $this->setLayoutVar('title', 'ログイン'); ?>

<h2>ログイン</h2>

<p>
  <a href="<?php echo $base_url; ?>/account/signup">新規ユーザー登録</a>
</p>

<form action="<?php echo $base_url; ?>/account/authenticate" method="post">
  <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>">

  <?php if (isset($errors) && count($errors)): ?>
    <?php echo $this->render('errors', ['errors' => $errors]); ?>
  <?php endif; ?>

  <?php echo $this->render(
    'account/inputs', [
      'user_name' => $user_name,
      'password' => $password,
      '_token' => $_token
  ]); ?>

  <p>
    <input type="submit" value="ログイン" />
  </p>
</form>
