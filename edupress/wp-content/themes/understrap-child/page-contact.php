<?php
/*
Template Name: お問い合わせフォーム
*/
?>

<head>
  <link rel="stylesheet" href="/wp-content/themes/understrap-child/asset/css/contact/style.css">
</head>

<?php get_header(); ?>

<div id="contents">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>

<!-- //メールアドレス入力と確認入力が一致しているかどうかのバリデーション -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var emailField = document.querySelector('input[name="your-email"]');
    var confirmEmailField = document.querySelector('input[name="your-email-confirm"]');
    var submitButton = document.querySelector('input[type="submit"]');
    var form = document.querySelector('.base_form'); // フォーム要素を選択

    function checkEmailMatch() {
        var isMatch = emailField.value === confirmEmailField.value;
        submitButton.disabled = !isMatch;
        return isMatch;
    }

    confirmEmailField.addEventListener('blur', function() {
        if(!checkEmailMatch()) {
            alert('メールアドレス入力欄と確認欄が一致しません。');
        }
    });

    emailField.addEventListener('input', checkEmailMatch);
    confirmEmailField.addEventListener('input', checkEmailMatch);

    // フォームの送信イベントをリッスン
    form.addEventListener('submit', function(event) {
        if(submitButton.disabled) {
            alert('必要事項を正しく入力してください。');
            event.preventDefault(); // フォームの送信を防止
        }
    });

    checkEmailMatch(); // 初期状態のチェック
});
</script>



